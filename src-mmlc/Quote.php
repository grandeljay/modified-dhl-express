<?php

namespace Grandeljay\DhlExpress;

class Quote
{
    private function getShippingCosts(string $zone_name): float
    {
        global $shipping_weight;

        $shipping = constant(Constants::MODULE_SHIPPING_NAME . '_SHIPPING');
        $shipping = json_decode(base64_decode($shipping), true);

        $costs_list = $shipping['international'][$zone_name] ?? null;

        if (null === $costs_list) {
            return 0;
        }

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

                break;
            }
        }

        return $costs;
    }

    private function getSurcharges(float $method_costs): float
    {
        $surcharges = 0;

        $option  = constant(Constants::MODULE_SHIPPING_NAME . '_SURCHARGES');
        $decoded = json_decode(base64_decode($option), true);

        foreach ($decoded as $surcharge) {
            $amount = match ($surcharge['type']) {
                'fixed'   => $surcharge['costs'],
                'percent' => $method_costs * ($surcharge['costs'] / 100),
            };

            $surcharges += $amount;
        }

        return $surcharges;
    }

    public function getQuote(): array
    {
        global $order, $shipping_weight;

        $country_code = $order->delivery['country']['iso_code_2'] ?? null;

        if (null === $country_code) {
            return array();
        }

        $country_zone = Zone::fromCountry($country_code);

        if (null === $country_zone) {
            return array();
        }

        $country_zone_name = 'zone_' . $country_zone->value;

        $methods = array();

        $method_express = array(
            'id'    => 'express',
            'title' => sprintf(
                'DHL Express (%s kg)<!-- BREAK -->Zone %s',
                round($shipping_weight, 2),
                $country_zone->value
            ),
            'cost'  => $this->getShippingCosts($country_zone_name),
            'type'  => 'express',
        );
        if ($method_express['cost'] > 0) {
            $methods[] = $method_express;
        }

        /** Surcharges */
        foreach ($methods as &$method) {
            $method['cost'] += $this->getSurcharges($method['cost']);
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
}
