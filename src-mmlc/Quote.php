<?php

namespace Grandeljay\DhlExpress;

class Quote
{
    private array $calculations = array();

    private function getShippingCosts(Zone $zone): float
    {
        global $shipping_weight;

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
            if ($shipping_weight <= $cost['weight-max']) {
                $costs = $cost['weight-costs'];

                $this->calculations[] = array(
                    'item'  => sprintf(
                        'Shipping weight is %s kg (tarif is %s kg).',
                        $shipping_weight,
                        $cost['weight-max']
                    ),
                    'costs' => $costs,
                );

                break;
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
                    $this->calculations[] = array(
                        'item'  => sprintf(
                            'Surcharge %s has date set: %s - %s. Skipping surcharge...',
                            '<i>' . $surcharge['name'] . '</i>',
                            $surcharge['date-from'],
                            $surcharge['date-to']
                        ),
                        'costs' => 0,
                    );

                    continue;
                } else {
                    $this->calculations[] = array(
                        'item'  => sprintf(
                            'Surcharge %s has date set: %s - %s. Applying surcharge:',
                            '<i>' . $surcharge['name'] . '</i>',
                            $surcharge['date-from'],
                            $surcharge['date-to']
                        ),
                        'costs' => 0,
                    );
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
                        $this->calculations[] = array(
                            'item'  => sprintf(
                                'Surcharge %s (%s kg) is %s %s for %s.',
                                '<i>' . $surcharge['name'] . '</i>',
                                $surcharge['weight'],
                                $surcharge['costs'],
                                $symbol,
                                $product_data['model']
                            ),
                            'costs' => $amount,
                        );

                        $surcharges += $amount;
                    }
                }
            } else {
                $this->calculations[] = array(
                    'item'  => sprintf(
                        'Surcharge %s is %s %s.',
                        '<i>' . $surcharge['name'] . '</i>',
                        $surcharge['costs'],
                        $symbol
                    ),
                    'costs' => $amount,
                );

                $surcharges += $amount;
            }
        }

        /**
         * Pick & Pack
         */
        global $shipping_weight;

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
            if ($shipping_weight <= $cost['weight-max']) {
                $pick_pack_costs = $cost['weight-costs'];

                $this->calculations[] = array(
                    'item'  => sprintf(
                        'Pick & Pack for %s kg (tarif is %s kg).',
                        $shipping_weight,
                        $cost['weight-max']
                    ),
                    'costs' => $pick_pack_costs,
                );

                break;
            }
        }

        $surcharges += $pick_pack_costs;


        return $surcharges;
    }

    public function getQuote(): ?array
    {
        global $order, $shipping_weight;

        $country_code = $order->delivery['country']['iso_code_2'] ?? null;

        if (null === $country_code) {
            return null;
        }

        $country_zone = Zone::fromCountry($country_code);

        if (null === $country_zone) {
            return null;
        }

        $methods = array();

        $method_express = array(
            'id'    => 'express',
            'title' => sprintf(
                'DHL Express (%s kg)<!-- BREAK -->Zone %s',
                round($shipping_weight, 2),
                $country_zone->value
            ),
            'cost'  => $this->getShippingCosts($country_zone),
            'type'  => 'express',
        );
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

                $this->calculations[] = array(
                    'item'  => sprintf(
                        'Rounding up',
                    ),
                    'costs' => $costs_rounded_up - $method['cost'],
                );

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
                <table>
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Costs</th>
                            <th>Total</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($this->calculations as $calculation) { ?>
                            <?php $total += $calculation['costs']; ?>

                            <tr>
                                <td><?= $calculation['item'] ?></td>
                                <td><?= $calculation['costs'] ?></td>
                                <td><?= $total ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php
                $method['title'] .= ob_get_clean();
            }
        }

        /** Quote */
        $quote = array(
            'id'      => self::class,
            'module'  => sprintf(
                constant(Constants::MODULE_SHIPPING_NAME . '_TEXT_TITLE_WEIGHT'),
                round($shipping_weight, 2)
            ),
            'methods' => $methods,
        );

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
