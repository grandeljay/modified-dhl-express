<?php

namespace Grandeljay\DhlExpress;

class Quote
{
    private array $calculations = [];

    private function getShippingCosts(Zone $zone): float
    {
        global $total_weight;

        $configuration_key   = sprintf(Constants::MODULE_SHIPPING_NAME . '_SHIPPING_ZONE%s', $zone->value);
        $configuration_value = constant($configuration_key);
        $costs_list          = json_decode($configuration_value, true);

        usort(
            $costs_list,
            function ($costs_a, $costs_b) {
                return $costs_a['weight-costs'] <=> $costs_b['weight-costs'];
            }
        );

        $costs = 0;

        foreach ($costs_list as $cost) {
            if ($total_weight <= $cost['weight-max']) {
                $costs = $cost['weight-costs'];

                $this->calculations[] = [
                    'item'  => sprintf(
                        'Shipping weight is <code>%01.2f</code> kg (tarif is <code>%01.2f</code> kg).',
                        $total_weight,
                        $cost['weight-max']
                    ),
                    'costs' => $costs,
                ];

                break;
            }
        }

        /**
         * Total weight exceeds highest defined tarif
         */
        if (count($costs_list) >= 1) {
            $cots_list_last = end($costs_list);

            /**
             * Total weight exceeds highest defined tarif
             */
            if (0 === $costs) {
                $costs = $cots_list_last['weight-costs'];

                $this->calculations[] = [
                    'item'  => sprintf(
                        'No tarif defined for <code>%01.2f</code> kg. Falling back to highest defined tarif (<code>%01.2f</code> kg) for this zone.',
                        $total_weight,
                        $cots_list_last['weight-max']
                    ),
                    'costs' => $costs,
                ];
            }

            /**
             * Total weight exceeds highest defined tarif
             */
            if ($total_weight > $cots_list_last['weight-max']) {
                $shippingZonePerKg        = \constant(Constants::MODULE_SHIPPING_NAME . '_SHIPPING_ZONE_PER_KG');
                $shippingZonePerKgEntries = \json_decode($shippingZonePerKg, true);

                foreach ($shippingZonePerKgEntries as $zoneSet) {
                    if ($total_weight >= $zoneSet['from'] && $total_weight <= $zoneSet['to']) {
                        $costs_per_kg        = $zoneSet['zones'][$zone->value];
                        $costs_tarif         = end($costs_list);
                        $costs_per_kg_weight = $total_weight - $costs_tarif['weight-max'];
                        $costs_to_add        = ceil($costs_per_kg_weight) * $costs_per_kg;
                        $costs              += $costs_to_add;

                        $this->calculations[] = [
                            'item'  => sprintf(
                                'Total weight of <code>%01.2f</code> exceeds highest tarif (<code>%01.2f</code> Kg). Applying costs (<code>%01.2f</code> €) per kg (<code>%01.2f</code> kg).',
                                $total_weight,
                                $costs_tarif['weight-max'] ?? 0,
                                $costs_per_kg,
                                $costs_per_kg_weight
                            ),
                            'costs' => $costs_to_add,
                        ];

                        break;
                    }
                }
            }
        }

        return $costs;
    }

    private function getSurcharges(float $method_costs): float
    {
        global $order;

        $surcharges = 0;

        $configuration_value = constant(Constants::MODULE_SHIPPING_NAME . '_SURCHARGES');
        $decoded             = json_decode($configuration_value, true);

        foreach ($decoded as $surcharge) {
            if (!empty($surcharge['date-from']) && !empty($surcharge['date-to'])) {
                $date_now  = time();
                $date_from = strtotime($surcharge['date-from']);
                $date_to   = strtotime($surcharge['date-to']);

                /** Skip iteration if date critera doesn't match */
                if ($date_now < $date_from || $date_now > $date_to) {
                    $this->calculations[] = [
                        'item'  => sprintf(
                            'Surcharge %s has date set: %s - %s. Skipping surcharge...',
                            '<i>' . $surcharge['name'] . '</i>',
                            $surcharge['date-from'],
                            $surcharge['date-to']
                        ),
                        'costs' => 0,
                    ];

                    continue;
                } else {
                    $this->calculations[] = [
                        'item'  => sprintf(
                            'Surcharge %s has date set: %s - %s. Applying surcharge:',
                            '<i>' . $surcharge['name'] . '</i>',
                            $surcharge['date-from'],
                            $surcharge['date-to']
                        ),
                        'costs' => 0,
                    ];
                }
            }

            $amount = match ($surcharge['type']) {
                'fixed'   => $surcharge['costs'],
                'percent' => $method_costs * ($surcharge['costs'] / 100),
            };
            $symbol = match ($surcharge['type']) {
                'fixed'   => '€',
                'percent' => '%',
            };

            if (!empty($surcharge['weight'])) {
                foreach ($order->products as $product_data) {
                    if ($product_data['weight'] >= $surcharge['weight']) {
                        /** Apply the surcharge */
                        $this->calculations[] = [
                            'item'  => sprintf(
                                'Surcharge %s (<code>%01.2f</code> kg) is <code>%01.2f</code> %s for %s.',
                                '<i>' . $surcharge['name'] . '</i>',
                                $surcharge['weight'],
                                $surcharge['costs'],
                                $symbol,
                                $product_data['model']
                            ),
                            'costs' => $amount,
                        ];

                        $surcharges += $amount;
                    }
                }
            } else {
                $this->calculations[] = [
                    'item'  => sprintf(
                        'Surcharge %s is <code>%01.2f</code> %s.',
                        '<i>' . $surcharge['name'] . '</i>',
                        $surcharge['costs'],
                        $symbol
                    ),
                    'costs' => $amount,
                ];

                $surcharges += $amount;
            }
        }

        /**
         * Pick & Pack
         */
        global $total_weight;

        $pick_pack_key   = Constants::MODULE_SHIPPING_NAME . '_PICK_PACK';
        $pick_pack_value = constant($pick_pack_key);
        $pick_pack       = json_decode($pick_pack_value, true);

        usort(
            $pick_pack,
            function ($costs_a, $costs_b) {
                return $costs_a['weight-costs'] <=> $costs_b['weight-costs'];
            }
        );

        $pick_pack_costs = 0;

        foreach ($pick_pack as $cost) {
            if ($total_weight <= $cost['weight-max']) {
                $pick_pack_costs = $cost['weight-costs'];

                $this->calculations[] = [
                    'item'  => sprintf(
                        'Pick & Pack for <code>%01.2f</code> kg (tarif is <code>%01.2f</code> kg).',
                        $total_weight,
                        $cost['weight-max']
                    ),
                    'costs' => $pick_pack_costs,
                ];

                break;
            }
        }

        $surcharges += $pick_pack_costs;


        return $surcharges;
    }

    private function getShippingWeight(): float
    {
        global $order;

        $shipping_weight = 0;

        foreach ($order->products as $product) {
            $length = $product['length'] ?? 0;
            $width  = $product['width']  ?? 0;
            $height = $product['height'] ?? 0;
            $weight = ($product['weight'] ?? 0) * $product['quantity'];

            if ($length > 0 && $width > 0 && $height > 0) {
                $volumetric_weight = (($length * $width * $height) / 5000) * $product['quantity'];

                if ($volumetric_weight > $weight) {
                    $weight = $volumetric_weight;
                }
            }

            $shipping_weight += $weight;
        }

        return $shipping_weight;
    }

    public function getQuote(): ?array
    {
        global $order;

        $shipping_weight = $this->getShippingWeight();

        $country_code = $order->delivery['country']['iso_code_2'] ?? null;

        if (null === $country_code) {
            return null;
        }

        $country_zone = Zone::fromCountry($country_code);

        if (null === $country_zone) {
            return null;
        }

        $methods = [];

        $method_express = [
            'id'    => 'express',
            'title' => sprintf(
                'DHL Express (%s kg)<!-- BREAK -->Zone %s',
                round($shipping_weight, 2),
                $country_zone->value
            ),
            'cost'  => $this->getShippingCosts($country_zone),
            'type'  => 'express',
        ];
        if ($method_express['cost'] > 0) {
            $methods[] = $method_express;
        }

        /** Surcharges */
        foreach ($methods as &$method) {
            $method['cost'] += $this->getSurcharges($method['cost']);
        }

        /** Round up */
        foreach ($methods as &$method) {
            $costs_without_decimals = floor($method['cost']);
            $costs_decimals         = $method['cost'] - $costs_without_decimals;

            if (0.9 !== $costs_decimals) {
                $costs_rounded_up = $costs_without_decimals + 0.9;

                $this->calculations[] = [
                    'item'  => sprintf(
                        'Rounding up',
                    ),
                    'costs' => $costs_rounded_up - $method['cost'],
                ];

                $method['cost'] = $costs_rounded_up;
            }
        }

        /** Debug information */
        $user_is_admin = isset($_SESSION['customers_status']['customers_status_id']) && 0 === (int) $_SESSION['customers_status']['customers_status_id'];

        if ($user_is_admin) {
            foreach ($methods as &$method) {
                $total = 0;

                ob_start();
                ?>
                <br><br>

                <h3>Debug mode</h3>
                <style type="text/css">
                    table.calculations :is(th, td).number {
                        text-align: right;
                    }
                </style>
                <table class="calculations">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th class="number">Costs</th>
                            <th class="number">Total</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($this->calculations as $calculation) { ?>
                            <?php $total += $calculation['costs']; ?>

                            <tr>
                                <td><?= $calculation['item'] ?></td>
                                <td class="number"><code><?= sprintf('%01.2f', $calculation['costs']) ?></code></td>
                                <td class="number"><code><?= sprintf('%01.2f', $total) ?></code></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php
                $method['title'] .= ob_get_clean();
            }
        }

        /** Quote */
        $quote = [
            'id'      => \grandeljaydhlexpress::class,
            'module'  => sprintf(
                constant(Constants::MODULE_SHIPPING_NAME . '_TEXT_TITLE_WEIGHT'),
                round($shipping_weight, 2)
            ),
            'methods' => $methods,
        ];

        return $quote;
    }

    public function exceedsMaximumWeight(): bool
    {
        global $order;

        if (null === $order) {
            return false;
        }

        $configuration_key_weight_max   = Constants::MODULE_SHIPPING_NAME . '_WEIGHT_MAXIMUM';
        $configuration_value_weight_max = constant($configuration_key_weight_max);

        foreach ($order->products as $product) {
            if ($product['weight'] >= $configuration_value_weight_max) {
                return true;
            }
        }

        return false;
    }
}
