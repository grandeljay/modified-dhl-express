<?php

namespace Grandeljay\DhlExpress\Class;

class Defaults
{
    public static function getShippingZone1(): string
    {
        $data = [
            [
                'weight-max'   => '0.5',
                'weight-costs' => '12.20',
            ],
            [
                'weight-max'   => '1.0',
                'weight-costs' => '12.49',
            ],
            [
                'weight-max'   => '1.5',
                'weight-costs' => '12.84',
            ],
            [
                'weight-max'   => '2.0',
                'weight-costs' => '13.19',
            ],
            [
                'weight-max'   => '2.5',
                'weight-costs' => '13.60',
            ],
            [
                'weight-max'   => '3.0',
                'weight-costs' => '14.03',
            ],
            [
                'weight-max'   => '3.5',
                'weight-costs' => '14.46',
            ],
            [
                'weight-max'   => '4.0',
                'weight-costs' => '14.89',
            ],
            [
                'weight-max'   => '4.5',
                'weight-costs' => '15.32',
            ],
            [
                'weight-max'   => '5.0',
                'weight-costs' => '15.75',
            ],
            [
                'weight-max'   => '5.5',
                'weight-costs' => '16.26',
            ],
            [
                'weight-max'   => '6.0',
                'weight-costs' => '16.77',
            ],
            [
                'weight-max'   => '6.5',
                'weight-costs' => '17.28',
            ],
            [
                'weight-max'   => '7.0',
                'weight-costs' => '17.79',
            ],
            [
                'weight-max'   => '7.5',
                'weight-costs' => '18.30',
            ],
            [
                'weight-max'   => '8.0',
                'weight-costs' => '18.81',
            ],
            [
                'weight-max'   => '8.5',
                'weight-costs' => '19.32',
            ],
            [
                'weight-max'   => '9.0',
                'weight-costs' => '19.83',
            ],
            [
                'weight-max'   => '9.5',
                'weight-costs' => '20.34',
            ],
            [
                'weight-max'   => '10.0',
                'weight-costs' => '20.85',
            ],
            [
                'weight-max'   => '10.5',
                'weight-costs' => '21.43',
            ],
            [
                'weight-max'   => '11.0',
                'weight-costs' => '22.01',
            ],
            [
                'weight-max'   => '11.5',
                'weight-costs' => '22.59',
            ],
            [
                'weight-max'   => '12.0',
                'weight-costs' => '23.17',
            ],
            [
                'weight-max'   => '12.5',
                'weight-costs' => '23.75',
            ],
            [
                'weight-max'   => '13.0',
                'weight-costs' => '24.33',
            ],
            [
                'weight-max'   => '13.5',
                'weight-costs' => '24.91',
            ],
            [
                'weight-max'   => '14.0',
                'weight-costs' => '25.49',
            ],
            [
                'weight-max'   => '14.5',
                'weight-costs' => '26.07',
            ],
            [
                'weight-max'   => '15.0',
                'weight-costs' => '26.65',
            ],
            [
                'weight-max'   => '15.5',
                'weight-costs' => '27.23',
            ],
            [
                'weight-max'   => '16.0',
                'weight-costs' => '27.81',
            ],
            [
                'weight-max'   => '16.5',
                'weight-costs' => '28.39',
            ],
            [
                'weight-max'   => '17.0',
                'weight-costs' => '28.97',
            ],
            [
                'weight-max'   => '17.5',
                'weight-costs' => '29.55',
            ],
            [
                'weight-max'   => '18.0',
                'weight-costs' => '30.13',
            ],
            [
                'weight-max'   => '18.5',
                'weight-costs' => '30.71',
            ],
            [
                'weight-max'   => '19.0',
                'weight-costs' => '31.29',
            ],
            [
                'weight-max'   => '19.5',
                'weight-costs' => '31.87',
            ],
            [
                'weight-max'   => '20.0',
                'weight-costs' => '32.45',
            ],
            [
                'weight-max'   => '20.5',
                'weight-costs' => '33.12',
            ],
            [
                'weight-max'   => '21.0',
                'weight-costs' => '33.79',
            ],
            [
                'weight-max'   => '21.5',
                'weight-costs' => '34.46',
            ],
            [
                'weight-max'   => '22.0',
                'weight-costs' => '35.13',
            ],
            [
                'weight-max'   => '22.5',
                'weight-costs' => '35.80',
            ],
            [
                'weight-max'   => '23.0',
                'weight-costs' => '36.47',
            ],
            [
                'weight-max'   => '23.5',
                'weight-costs' => '37.14',
            ],
            [
                'weight-max'   => '24.0',
                'weight-costs' => '37.81',
            ],
            [
                'weight-max'   => '24.5',
                'weight-costs' => '38.48',
            ],
            [
                'weight-max'   => '25.0',
                'weight-costs' => '39.15',
            ],
            [
                'weight-max'   => '25.5',
                'weight-costs' => '39.82',
            ],
            [
                'weight-max'   => '26.0',
                'weight-costs' => '40.49',
            ],
            [
                'weight-max'   => '26.5',
                'weight-costs' => '41.16',
            ],
            [
                'weight-max'   => '27.0',
                'weight-costs' => '41.83',
            ],
            [
                'weight-max'   => '27.5',
                'weight-costs' => '42.50',
            ],
            [
                'weight-max'   => '28.0',
                'weight-costs' => '43.17',
            ],
            [
                'weight-max'   => '28.5',
                'weight-costs' => '43.84',
            ],
            [
                'weight-max'   => '29.0',
                'weight-costs' => '44.51',
            ],
            [
                'weight-max'   => '29.5',
                'weight-costs' => '45.18',
            ],
            [
                'weight-max'   => '30.0',
                'weight-costs' => '45.85',
            ],
            [
                'weight-max'   => '31.0',
                'weight-costs' => '47.35',
            ],
            [
                'weight-max'   => '32.0',
                'weight-costs' => '48.85',
            ],
            [
                'weight-max'   => '33.0',
                'weight-costs' => '50.35',
            ],
            [
                'weight-max'   => '34.0',
                'weight-costs' => '51.85',
            ],
            [
                'weight-max'   => '35.0',
                'weight-costs' => '53.35',
            ],
            [
                'weight-max'   => '36.0',
                'weight-costs' => '54.85',
            ],
            [
                'weight-max'   => '37.0',
                'weight-costs' => '56.35',
            ],
            [
                'weight-max'   => '38.0',
                'weight-costs' => '57.85',
            ],
            [
                'weight-max'   => '39.0',
                'weight-costs' => '59.35',
            ],
            [
                'weight-max'   => '40.0',
                'weight-costs' => '60.85',
            ],
            [
                'weight-max'   => '41.0',
                'weight-costs' => '62.35',
            ],
            [
                'weight-max'   => '42.0',
                'weight-costs' => '63.85',
            ],
            [
                'weight-max'   => '43.0',
                'weight-costs' => '65.35',
            ],
            [
                'weight-max'   => '44.0',
                'weight-costs' => '66.85',
            ],
            [
                'weight-max'   => '45.0',
                'weight-costs' => '68.35',
            ],
            [
                'weight-max'   => '46.0',
                'weight-costs' => '69.85',
            ],
            [
                'weight-max'   => '47.0',
                'weight-costs' => '71.35',
            ],
            [
                'weight-max'   => '48.0',
                'weight-costs' => '72.85',
            ],
            [
                'weight-max'   => '49.0',
                'weight-costs' => '74.35',
            ],
            [
                'weight-max'   => '50.0',
                'weight-costs' => '75.85',
            ],
            [
                'weight-max'   => '51.0',
                'weight-costs' => '77.35',
            ],
            [
                'weight-max'   => '52.0',
                'weight-costs' => '78.85',
            ],
            [
                'weight-max'   => '53.0',
                'weight-costs' => '80.35',
            ],
            [
                'weight-max'   => '54.0',
                'weight-costs' => '81.85',
            ],
            [
                'weight-max'   => '55.0',
                'weight-costs' => '83.35',
            ],
            [
                'weight-max'   => '56.0',
                'weight-costs' => '84.85',
            ],
            [
                'weight-max'   => '57.0',
                'weight-costs' => '86.35',
            ],
            [
                'weight-max'   => '58.0',
                'weight-costs' => '87.85',
            ],
            [
                'weight-max'   => '59.0',
                'weight-costs' => '89.35',
            ],
            [
                'weight-max'   => '60.0',
                'weight-costs' => '90.85',
            ],
            [
                'weight-max'   => '61.0',
                'weight-costs' => '92.35',
            ],
            [
                'weight-max'   => '62.0',
                'weight-costs' => '93.85',
            ],
            [
                'weight-max'   => '63.0',
                'weight-costs' => '95.35',
            ],
            [
                'weight-max'   => '64.0',
                'weight-costs' => '96.85',
            ],
            [
                'weight-max'   => '65.0',
                'weight-costs' => '98.35',
            ],
            [
                'weight-max'   => '66.0',
                'weight-costs' => '99.85',
            ],
            [
                'weight-max'   => '67.0',
                'weight-costs' => '101.35',
            ],
            [
                'weight-max'   => '68.0',
                'weight-costs' => '102.85',
            ],
            [
                'weight-max'   => '69.0',
                'weight-costs' => '104.35',
            ],
            [
                'weight-max'   => '70.0',
                'weight-costs' => '105.85',
            ],
        ];
        $json = json_encode($data);

        return $json;
    }

    public static function getShippingZone2(): string
    {
        $data = [
            [
                'weight-max'   => '0.5',
                'weight-costs' => '12.20',
            ],
            [
                'weight-max'   => '1.0',
                'weight-costs' => '13.75',
            ],
            [
                'weight-max'   => '1.5',
                'weight-costs' => '14.13',
            ],
            [
                'weight-max'   => '2.0',
                'weight-costs' => '14.51',
            ],
            [
                'weight-max'   => '2.5',
                'weight-costs' => '14.96',
            ],
            [
                'weight-max'   => '3.0',
                'weight-costs' => '15.43',
            ],
            [
                'weight-max'   => '3.5',
                'weight-costs' => '15.90',
            ],
            [
                'weight-max'   => '4.0',
                'weight-costs' => '16.37',
            ],
            [
                'weight-max'   => '4.5',
                'weight-costs' => '16.84',
            ],
            [
                'weight-max'   => '5.0',
                'weight-costs' => '17.31',
            ],
            [
                'weight-max'   => '5.5',
                'weight-costs' => '17.87',
            ],
            [
                'weight-max'   => '6.0',
                'weight-costs' => '18.43',
            ],
            [
                'weight-max'   => '6.5',
                'weight-costs' => '18.99',
            ],
            [
                'weight-max'   => '7.0',
                'weight-costs' => '19.55',
            ],
            [
                'weight-max'   => '7.5',
                'weight-costs' => '20.11',
            ],
            [
                'weight-max'   => '8.0',
                'weight-costs' => '20.67',
            ],
            [
                'weight-max'   => '8.5',
                'weight-costs' => '21.23',
            ],
            [
                'weight-max'   => '9.0',
                'weight-costs' => '21.79',
            ],
            [
                'weight-max'   => '9.5',
                'weight-costs' => '22.35',
            ],
            [
                'weight-max'   => 10.,
                'weight-costs' => '22.91',
            ],
            [
                'weight-max'   => 10.,
                'weight-costs' => '23.58',
            ],
            [
                'weight-max'   => 11.,
                'weight-costs' => '24.25',
            ],
            [
                'weight-max'   => 11.,
                'weight-costs' => '24.92',
            ],
            [
                'weight-max'   => 12.,
                'weight-costs' => '25.59',
            ],
            [
                'weight-max'   => 12.,
                'weight-costs' => '26.26',
            ],
            [
                'weight-max'   => 13.,
                'weight-costs' => '26.93',
            ],
            [
                'weight-max'   => 13.,
                'weight-costs' => '27.60',
            ],
            [
                'weight-max'   => 14.,
                'weight-costs' => '28.27',
            ],
            [
                'weight-max'   => 14.,
                'weight-costs' => '28.94',
            ],
            [
                'weight-max'   => 15.,
                'weight-costs' => '29.61',
            ],
            [
                'weight-max'   => 15.,
                'weight-costs' => '30.28',
            ],
            [
                'weight-max'   => 16.,
                'weight-costs' => '30.95',
            ],
            [
                'weight-max'   => 16.,
                'weight-costs' => '31.62',
            ],
            [
                'weight-max'   => 17.,
                'weight-costs' => '32.29',
            ],
            [
                'weight-max'   => 17.,
                'weight-costs' => '32.96',
            ],
            [
                'weight-max'   => 18.,
                'weight-costs' => '33.63',
            ],
            [
                'weight-max'   => 18.,
                'weight-costs' => '34.30',
            ],
            [
                'weight-max'   => 19.,
                'weight-costs' => '34.97',
            ],
            [
                'weight-max'   => 19.,
                'weight-costs' => '35.64',
            ],
            [
                'weight-max'   => 20.,
                'weight-costs' => '36.31',
            ],
            [
                'weight-max'   => 20.,
                'weight-costs' => '37.08',
            ],
            [
                'weight-max'   => 21.,
                'weight-costs' => '37.85',
            ],
            [
                'weight-max'   => 21.,
                'weight-costs' => '38.62',
            ],
            [
                'weight-max'   => 22.,
                'weight-costs' => '39.39',
            ],
            [
                'weight-max'   => 22.,
                'weight-costs' => '40.16',
            ],
            [
                'weight-max'   => 23.,
                'weight-costs' => '40.93',
            ],
            [
                'weight-max'   => 23.,
                'weight-costs' => '41.70',
            ],
            [
                'weight-max'   => 24.,
                'weight-costs' => '42.47',
            ],
            [
                'weight-max'   => 24.,
                'weight-costs' => '43.24',
            ],
            [
                'weight-max'   => 25.,
                'weight-costs' => '44.01',
            ],
            [
                'weight-max'   => 25.,
                'weight-costs' => '44.78',
            ],
            [
                'weight-max'   => 26.,
                'weight-costs' => '45.55',
            ],
            [
                'weight-max'   => 26.,
                'weight-costs' => '46.32',
            ],
            [
                'weight-max'   => 27.,
                'weight-costs' => '47.09',
            ],
            [
                'weight-max'   => 27.,
                'weight-costs' => '47.86',
            ],
            [
                'weight-max'   => 28.,
                'weight-costs' => '48.63',
            ],
            [
                'weight-max'   => 28.,
                'weight-costs' => '49.40',
            ],
            [
                'weight-max'   => 29.,
                'weight-costs' => '50.17',
            ],
            [
                'weight-max'   => 29.,
                'weight-costs' => '50.94',
            ],
            [
                'weight-max'   => 30.,
                'weight-costs' => '51.71',
            ],
            [
                'weight-max'   => 31.,
                'weight-costs' => '53.48',
            ],
            [
                'weight-max'   => 32.,
                'weight-costs' => '55.25',
            ],
            [
                'weight-max'   => 33.,
                'weight-costs' => '57.02',
            ],
            [
                'weight-max'   => 34.,
                'weight-costs' => '58.79',
            ],
            [
                'weight-max'   => 35.,
                'weight-costs' => '60.56',
            ],
            [
                'weight-max'   => 36.,
                'weight-costs' => '62.33',
            ],
            [
                'weight-max'   => 37.,
                'weight-costs' => '64.10',
            ],
            [
                'weight-max'   => 38.,
                'weight-costs' => '65.87',
            ],
            [
                'weight-max'   => 39.,
                'weight-costs' => '67.64',
            ],
            [
                'weight-max'   => 40.,
                'weight-costs' => '69.41',
            ],
            [
                'weight-max'   => 41.,
                'weight-costs' => '71.18',
            ],
            [
                'weight-max'   => 42.,
                'weight-costs' => '72.95',
            ],
            [
                'weight-max'   => 43.,
                'weight-costs' => '74.72',
            ],
            [
                'weight-max'   => 44.,
                'weight-costs' => '76.49',
            ],
            [
                'weight-max'   => 45.,
                'weight-costs' => '78.26',
            ],
            [
                'weight-max'   => 46.,
                'weight-costs' => '80.03',
            ],
            [
                'weight-max'   => 47.,
                'weight-costs' => '81.80',
            ],
            [
                'weight-max'   => 48.,
                'weight-costs' => '83.57',
            ],
            [
                'weight-max'   => 49.,
                'weight-costs' => '85.34',
            ],
            [
                'weight-max'   => 50.,
                'weight-costs' => '87.11',
            ],
            [
                'weight-max'   => 51.,
                'weight-costs' => '88.88',
            ],
            [
                'weight-max'   => 52.,
                'weight-costs' => '90.65',
            ],
            [
                'weight-max'   => 53.,
                'weight-costs' => '92.42',
            ],
            [
                'weight-max'   => 54.,
                'weight-costs' => '94.19',
            ],
            [
                'weight-max'   => 55.,
                'weight-costs' => '95.96',
            ],
            [
                'weight-max'   => 56.,
                'weight-costs' => '97.73',
            ],
            [
                'weight-max'   => 57.,
                'weight-costs' => '99.50',
            ],
            [
                'weight-max'   => 58.,
                'weight-costs' => '101.27',
            ],
            [
                'weight-max'   => 59.,
                'weight-costs' => '103.04',
            ],
            [
                'weight-max'   => 60.,
                'weight-costs' => '104.81',
            ],
            [
                'weight-max'   => 61.,
                'weight-costs' => '106.58',
            ],
            [
                'weight-max'   => 62.,
                'weight-costs' => '108.35',
            ],
            [
                'weight-max'   => 63.,
                'weight-costs' => '110.12',
            ],
            [
                'weight-max'   => 64.,
                'weight-costs' => '111.89',
            ],
            [
                'weight-max'   => 65.,
                'weight-costs' => '113.66',
            ],
            [
                'weight-max'   => 66.,
                'weight-costs' => '115.43',
            ],
            [
                'weight-max'   => 67.,
                'weight-costs' => '117.20',
            ],
            [
                'weight-max'   => 68.,
                'weight-costs' => '118.97',
            ],
            [
                'weight-max'   => 69.,
                'weight-costs' => '120.74',
            ],
            [
                'weight-max'   => 70.,
                'weight-costs' => '122.51',
            ],
        ];
        $json = json_encode($data);

        return $json;
    }

    public static function getShippingZone3(): string
    {
        $data = [
            [
                'weight-max'   => '0.5',
                'weight-costs' => '12.20',
            ],
            [
                'weight-max'   => '1.0',
                'weight-costs' => '14.45',
            ],
            [
                'weight-max'   => '1.5',
                'weight-costs' => '14.87',
            ],
            [
                'weight-max'   => '2.0',
                'weight-costs' => '15.29',
            ],
            [
                'weight-max'   => '2.5',
                'weight-costs' => '15.78',
            ],
            [
                'weight-max'   => '3.0',
                'weight-costs' => '16.30',
            ],
            [
                'weight-max'   => '3.5',
                'weight-costs' => '16.82',
            ],
            [
                'weight-max'   => '4.0',
                'weight-costs' => '17.34',
            ],
            [
                'weight-max'   => '4.5',
                'weight-costs' => '17.86',
            ],
            [
                'weight-max'   => '5.0',
                'weight-costs' => '18.38',
            ],
            [
                'weight-max'   => '5.5',
                'weight-costs' => '19.00',
            ],
            [
                'weight-max'   => '6.0',
                'weight-costs' => '19.62',
            ],
            [
                'weight-max'   => '6.5',
                'weight-costs' => '20.24',
            ],
            [
                'weight-max'   => '7.0',
                'weight-costs' => '20.86',
            ],
            [
                'weight-max'   => '7.5',
                'weight-costs' => '21.48',
            ],
            [
                'weight-max'   => '8.0',
                'weight-costs' => '22.10',
            ],
            [
                'weight-max'   => '8.5',
                'weight-costs' => '22.72',
            ],
            [
                'weight-max'   => '9.0',
                'weight-costs' => '23.34',
            ],
            [
                'weight-max'   => '9.5',
                'weight-costs' => '23.96',
            ],
            [
                'weight-max'   => '10.0',
                'weight-costs' => '24.58',
            ],
            [
                'weight-max'   => '10.5',
                'weight-costs' => '25.33',
            ],
            [
                'weight-max'   => '11.0',
                'weight-costs' => '26.08',
            ],
            [
                'weight-max'   => '11.5',
                'weight-costs' => '26.83',
            ],
            [
                'weight-max'   => '12.0',
                'weight-costs' => '27.58',
            ],
            [
                'weight-max'   => '12.5',
                'weight-costs' => '28.33',
            ],
            [
                'weight-max'   => '13.0',
                'weight-costs' => '29.08',
            ],
            [
                'weight-max'   => '13.5',
                'weight-costs' => '29.83',
            ],
            [
                'weight-max'   => '14.0',
                'weight-costs' => '30.58',
            ],
            [
                'weight-max'   => '14.5',
                'weight-costs' => '31.33',
            ],
            [
                'weight-max'   => '15.0',
                'weight-costs' => '32.08',
            ],
            [
                'weight-max'   => '15.5',
                'weight-costs' => '32.83',
            ],
            [
                'weight-max'   => '16.0',
                'weight-costs' => '33.58',
            ],
            [
                'weight-max'   => '16.5',
                'weight-costs' => '34.33',
            ],
            [
                'weight-max'   => '17.0',
                'weight-costs' => '35.08',
            ],
            [
                'weight-max'   => '17.5',
                'weight-costs' => '35.83',
            ],
            [
                'weight-max'   => '18.0',
                'weight-costs' => '36.58',
            ],
            [
                'weight-max'   => '18.5',
                'weight-costs' => '37.33',
            ],
            [
                'weight-max'   => '19.0',
                'weight-costs' => '38.08',
            ],
            [
                'weight-max'   => '19.5',
                'weight-costs' => '38.83',
            ],
            [
                'weight-max'   => '20.0',
                'weight-costs' => '39.58',
            ],
            [
                'weight-max'   => '20.5',
                'weight-costs' => '40.42',
            ],
            [
                'weight-max'   => '21.0',
                'weight-costs' => '41.26',
            ],
            [
                'weight-max'   => '21.5',
                'weight-costs' => '42.10',
            ],
            [
                'weight-max'   => '22.0',
                'weight-costs' => '42.94',
            ],
            [
                'weight-max'   => '22.5',
                'weight-costs' => '43.78',
            ],
            [
                'weight-max'   => '23.0',
                'weight-costs' => '44.62',
            ],
            [
                'weight-max'   => '23.5',
                'weight-costs' => '45.46',
            ],
            [
                'weight-max'   => '24.0',
                'weight-costs' => '46.30',
            ],
            [
                'weight-max'   => '24.5',
                'weight-costs' => '47.14',
            ],
            [
                'weight-max'   => '25.0',
                'weight-costs' => '47.98',
            ],
            [
                'weight-max'   => '25.5',
                'weight-costs' => '48.82',
            ],
            [
                'weight-max'   => '26.0',
                'weight-costs' => '49.66',
            ],
            [
                'weight-max'   => '26.5',
                'weight-costs' => '50.50',
            ],
            [
                'weight-max'   => '27.0',
                'weight-costs' => '51.34',
            ],
            [
                'weight-max'   => '27.5',
                'weight-costs' => '52.18',
            ],
            [
                'weight-max'   => '28.0',
                'weight-costs' => '53.02',
            ],
            [
                'weight-max'   => '28.5',
                'weight-costs' => '53.86',
            ],
            [
                'weight-max'   => '29.0',
                'weight-costs' => '54.70',
            ],
            [
                'weight-max'   => '29.5',
                'weight-costs' => '55.54',
            ],
            [
                'weight-max'   => '30.0',
                'weight-costs' => '56.38',
            ],
            [
                'weight-max'   => '31.0',
                'weight-costs' => '58.26',
            ],
            [
                'weight-max'   => '32.0',
                'weight-costs' => '60.14',
            ],
            [
                'weight-max'   => '33.0',
                'weight-costs' => '62.02',
            ],
            [
                'weight-max'   => '34.0',
                'weight-costs' => '63.90',
            ],
            [
                'weight-max'   => '35.0',
                'weight-costs' => '65.78',
            ],
            [
                'weight-max'   => '36.0',
                'weight-costs' => '67.66',
            ],
            [
                'weight-max'   => '37.0',
                'weight-costs' => '69.54',
            ],
            [
                'weight-max'   => '38.0',
                'weight-costs' => '71.42',
            ],
            [
                'weight-max'   => '39.0',
                'weight-costs' => '73.30',
            ],
            [
                'weight-max'   => '40.0',
                'weight-costs' => '75.18',
            ],
            [
                'weight-max'   => '41.0',
                'weight-costs' => '77.06',
            ],
            [
                'weight-max'   => '42.0',
                'weight-costs' => '78.94',
            ],
            [
                'weight-max'   => '43.0',
                'weight-costs' => '80.82',
            ],
            [
                'weight-max'   => '44.0',
                'weight-costs' => '82.70',
            ],
            [
                'weight-max'   => '45.0',
                'weight-costs' => '84.58',
            ],
            [
                'weight-max'   => '46.0',
                'weight-costs' => '86.46',
            ],
            [
                'weight-max'   => '47.0',
                'weight-costs' => '88.34',
            ],
            [
                'weight-max'   => '48.0',
                'weight-costs' => '90.22',
            ],
            [
                'weight-max'   => '49.0',
                'weight-costs' => '92.10',
            ],
            [
                'weight-max'   => '50.0',
                'weight-costs' => '93.98',
            ],
            [
                'weight-max'   => '51.0',
                'weight-costs' => '95.86',
            ],
            [
                'weight-max'   => '52.0',
                'weight-costs' => '97.74',
            ],
            [
                'weight-max'   => '53.0',
                'weight-costs' => '99.62',
            ],
            [
                'weight-max'   => '54.0',
                'weight-costs' => '101.50',
            ],
            [
                'weight-max'   => '55.0',
                'weight-costs' => '103.38',
            ],
            [
                'weight-max'   => '56.0',
                'weight-costs' => '105.26',
            ],
            [
                'weight-max'   => '57.0',
                'weight-costs' => '107.14',
            ],
            [
                'weight-max'   => '58.0',
                'weight-costs' => '109.02',
            ],
            [
                'weight-max'   => '59.0',
                'weight-costs' => '110.90',
            ],
            [
                'weight-max'   => '60.0',
                'weight-costs' => '112.78',
            ],
            [
                'weight-max'   => '61.0',
                'weight-costs' => '114.66',
            ],
            [
                'weight-max'   => '62.0',
                'weight-costs' => '116.54',
            ],
            [
                'weight-max'   => '63.0',
                'weight-costs' => '118.42',
            ],
            [
                'weight-max'   => '64.0',
                'weight-costs' => '120.30',
            ],
            [
                'weight-max'   => '65.0',
                'weight-costs' => '122.18',
            ],
            [
                'weight-max'   => '66.0',
                'weight-costs' => '124.06',
            ],
            [
                'weight-max'   => '67.0',
                'weight-costs' => '125.94',
            ],
            [
                'weight-max'   => '68.0',
                'weight-costs' => '127.82',
            ],
            [
                'weight-max'   => '69.0',
                'weight-costs' => '129.70',
            ],
            [
                'weight-max'   => '70.0',
                'weight-costs' => '131.58',
            ],
        ];
        $json = json_encode($data);

        return $json;
    }

    public static function getShippingZone4(): string
    {
        $data = [
            [
                'weight-max'   => '0.5',
                'weight-costs' => '12.20',
            ],
            [
                'weight-max'   => '1.0',
                'weight-costs' => '15.19',
            ],
            [
                'weight-max'   => '1.5',
                'weight-costs' => '15.66',
            ],
            [
                'weight-max'   => '2.0',
                'weight-costs' => '16.13',
            ],
            [
                'weight-max'   => '2.5',
                'weight-costs' => '16.67',
            ],
            [
                'weight-max'   => '3.0',
                'weight-costs' => '17.24',
            ],
            [
                'weight-max'   => '3.5',
                'weight-costs' => '17.81',
            ],
            [
                'weight-max'   => '4.0',
                'weight-costs' => '18.38',
            ],
            [
                'weight-max'   => '4.5',
                'weight-costs' => '18.95',
            ],
            [
                'weight-max'   => '5.0',
                'weight-costs' => '19.52',
            ],
            [
                'weight-max'   => '5.5',
                'weight-costs' => '20.20',
            ],
            [
                'weight-max'   => '6.0',
                'weight-costs' => '20.88',
            ],
            [
                'weight-max'   => '6.5',
                'weight-costs' => '21.56',
            ],
            [
                'weight-max'   => '7.0',
                'weight-costs' => '22.24',
            ],
            [
                'weight-max'   => '7.5',
                'weight-costs' => '22.92',
            ],
            [
                'weight-max'   => '8.0',
                'weight-costs' => '23.60',
            ],
            [
                'weight-max'   => '8.5',
                'weight-costs' => '24.28',
            ],
            [
                'weight-max'   => '9.0',
                'weight-costs' => '24.96',
            ],
            [
                'weight-max'   => '9.5',
                'weight-costs' => '25.64',
            ],
            [
                'weight-max'   => '10.0',
                'weight-costs' => '26.32',
            ],
            [
                'weight-max'   => '10.5',
                'weight-costs' => '27.13',
            ],
            [
                'weight-max'   => '11.0',
                'weight-costs' => '27.94',
            ],
            [
                'weight-max'   => '11.5',
                'weight-costs' => '28.75',
            ],
            [
                'weight-max'   => '12.0',
                'weight-costs' => '29.56',
            ],
            [
                'weight-max'   => '12.5',
                'weight-costs' => '30.37',
            ],
            [
                'weight-max'   => '13.0',
                'weight-costs' => '31.18',
            ],
            [
                'weight-max'   => '13.5',
                'weight-costs' => '31.99',
            ],
            [
                'weight-max'   => '14.0',
                'weight-costs' => '32.80',
            ],
            [
                'weight-max'   => '14.5',
                'weight-costs' => '33.61',
            ],
            [
                'weight-max'   => '15.0',
                'weight-costs' => '34.42',
            ],
            [
                'weight-max'   => '15.5',
                'weight-costs' => '35.23',
            ],
            [
                'weight-max'   => '16.0',
                'weight-costs' => '36.04',
            ],
            [
                'weight-max'   => '16.5',
                'weight-costs' => '36.85',
            ],
            [
                'weight-max'   => '17.0',
                'weight-costs' => '37.66',
            ],
            [
                'weight-max'   => '17.5',
                'weight-costs' => '38.47',
            ],
            [
                'weight-max'   => '18.0',
                'weight-costs' => '39.28',
            ],
            [
                'weight-max'   => '18.5',
                'weight-costs' => '40.09',
            ],
            [
                'weight-max'   => '19.0',
                'weight-costs' => '40.90',
            ],
            [
                'weight-max'   => '19.5',
                'weight-costs' => '41.71',
            ],
            [
                'weight-max'   => '20.0',
                'weight-costs' => '42.52',
            ],
            [
                'weight-max'   => '20.5',
                'weight-costs' => '43.45',
            ],
            [
                'weight-max'   => '21.0',
                'weight-costs' => '44.38',
            ],
            [
                'weight-max'   => '21.5',
                'weight-costs' => '45.31',
            ],
            [
                'weight-max'   => '22.0',
                'weight-costs' => '46.24',
            ],
            [
                'weight-max'   => '22.5',
                'weight-costs' => '47.17',
            ],
            [
                'weight-max'   => '23.0',
                'weight-costs' => '48.10',
            ],
            [
                'weight-max'   => '23.5',
                'weight-costs' => '49.03',
            ],
            [
                'weight-max'   => '24.0',
                'weight-costs' => '49.96',
            ],
            [
                'weight-max'   => '24.5',
                'weight-costs' => '50.89',
            ],
            [
                'weight-max'   => '25.0',
                'weight-costs' => '51.82',
            ],
            [
                'weight-max'   => '25.5',
                'weight-costs' => '52.75',
            ],
            [
                'weight-max'   => '26.0',
                'weight-costs' => '53.68',
            ],
            [
                'weight-max'   => '26.5',
                'weight-costs' => '54.61',
            ],
            [
                'weight-max'   => '27.0',
                'weight-costs' => '55.54',
            ],
            [
                'weight-max'   => '27.5',
                'weight-costs' => '56.47',
            ],
            [
                'weight-max'   => '28.0',
                'weight-costs' => '57.40',
            ],
            [
                'weight-max'   => '28.5',
                'weight-costs' => '58.33',
            ],
            [
                'weight-max'   => '29.0',
                'weight-costs' => '59.26',
            ],
            [
                'weight-max'   => '29.5',
                'weight-costs' => '60.19',
            ],
            [
                'weight-max'   => '30.0',
                'weight-costs' => '61.12',
            ],
            [
                'weight-max'   => '31.0',
                'weight-costs' => '63.27',
            ],
            [
                'weight-max'   => '32.0',
                'weight-costs' => '65.42',
            ],
            [
                'weight-max'   => '33.0',
                'weight-costs' => '67.57',
            ],
            [
                'weight-max'   => '34.0',
                'weight-costs' => '69.72',
            ],
            [
                'weight-max'   => '35.0',
                'weight-costs' => '71.87',
            ],
            [
                'weight-max'   => '36.0',
                'weight-costs' => '74.02',
            ],
            [
                'weight-max'   => '37.0',
                'weight-costs' => '76.17',
            ],
            [
                'weight-max'   => '38.0',
                'weight-costs' => '78.32',
            ],
            [
                'weight-max'   => '39.0',
                'weight-costs' => '80.47',
            ],
            [
                'weight-max'   => '40.0',
                'weight-costs' => '82.62',
            ],
            [
                'weight-max'   => '41.0',
                'weight-costs' => '84.77',
            ],
            [
                'weight-max'   => '42.0',
                'weight-costs' => '86.92',
            ],
            [
                'weight-max'   => '43.0',
                'weight-costs' => '89.07',
            ],
            [
                'weight-max'   => '44.0',
                'weight-costs' => '91.22',
            ],
            [
                'weight-max'   => '45.0',
                'weight-costs' => '93.37',
            ],
            [
                'weight-max'   => '46.0',
                'weight-costs' => '95.52',
            ],
            [
                'weight-max'   => '47.0',
                'weight-costs' => '97.67',
            ],
            [
                'weight-max'   => '48.0',
                'weight-costs' => '99.82',
            ],
            [
                'weight-max'   => '49.0',
                'weight-costs' => '101.97',
            ],
            [
                'weight-max'   => '50.0',
                'weight-costs' => '104.12',
            ],
            [
                'weight-max'   => '51.0',
                'weight-costs' => '106.27',
            ],
            [
                'weight-max'   => '52.0',
                'weight-costs' => '108.42',
            ],
            [
                'weight-max'   => '53.0',
                'weight-costs' => '110.57',
            ],
            [
                'weight-max'   => '54.0',
                'weight-costs' => '112.72',
            ],
            [
                'weight-max'   => '55.0',
                'weight-costs' => '114.87',
            ],
            [
                'weight-max'   => '56.0',
                'weight-costs' => '117.02',
            ],
            [
                'weight-max'   => '57.0',
                'weight-costs' => '119.17',
            ],
            [
                'weight-max'   => '58.0',
                'weight-costs' => '121.32',
            ],
            [
                'weight-max'   => '59.0',
                'weight-costs' => '123.47',
            ],
            [
                'weight-max'   => '60.0',
                'weight-costs' => '125.62',
            ],
            [
                'weight-max'   => '61.0',
                'weight-costs' => '127.77',
            ],
            [
                'weight-max'   => '62.0',
                'weight-costs' => '129.92',
            ],
            [
                'weight-max'   => '63.0',
                'weight-costs' => '132.07',
            ],
            [
                'weight-max'   => '64.0',
                'weight-costs' => '134.22',
            ],
            [
                'weight-max'   => '65.0',
                'weight-costs' => '136.37',
            ],
            [
                'weight-max'   => '66.0',
                'weight-costs' => '138.52',
            ],
            [
                'weight-max'   => '67.0',
                'weight-costs' => '140.67',
            ],
            [
                'weight-max'   => '68.0',
                'weight-costs' => '142.82',
            ],
            [
                'weight-max'   => '69.0',
                'weight-costs' => '144.97',
            ],
            [
                'weight-max'   => '70.0',
                'weight-costs' => '147.12',
            ],
        ];
        $json = json_encode($data);

        return $json;
    }

    public static function getShippingZone5(): string
    {
        $data = [
            [
                'weight-max'   => '0.5',
                'weight-costs' => '12.20',
            ],
            [
                'weight-max'   => '1.0',
                'weight-costs' => '16.67',
            ],
            [
                'weight-max'   => '1.5',
                'weight-costs' => '17.14',
            ],
            [
                'weight-max'   => '2.0',
                'weight-costs' => '17.61',
            ],
            [
                'weight-max'   => '2.5',
                'weight-costs' => '18.15',
            ],
            [
                'weight-max'   => '3.0',
                'weight-costs' => '18.72',
            ],
            [
                'weight-max'   => '3.5',
                'weight-costs' => '19.29',
            ],
            [
                'weight-max'   => '4.0',
                'weight-costs' => '19.86',
            ],
            [
                'weight-max'   => '4.5',
                'weight-costs' => '20.43',
            ],
            [
                'weight-max'   => '5.0',
                'weight-costs' => '21.00',
            ],
            [
                'weight-max'   => '5.5',
                'weight-costs' => '21.68',
            ],
            [
                'weight-max'   => '6.0',
                'weight-costs' => '22.36',
            ],
            [
                'weight-max'   => '6.5',
                'weight-costs' => '23.04',
            ],
            [
                'weight-max'   => '7.0',
                'weight-costs' => '23.72',
            ],
            [
                'weight-max'   => '7.5',
                'weight-costs' => '24.40',
            ],
            [
                'weight-max'   => '8.0',
                'weight-costs' => '25.08',
            ],
            [
                'weight-max'   => '8.5',
                'weight-costs' => '25.76',
            ],
            [
                'weight-max'   => '9.0',
                'weight-costs' => '26.44',
            ],
            [
                'weight-max'   => '9.5',
                'weight-costs' => '27.12',
            ],
            [
                'weight-max'   => '10.0',
                'weight-costs' => '27.80',
            ],
            [
                'weight-max'   => '10.5',
                'weight-costs' => '28.66',
            ],
            [
                'weight-max'   => '11.0',
                'weight-costs' => '29.52',
            ],
            [
                'weight-max'   => '11.5',
                'weight-costs' => '30.38',
            ],
            [
                'weight-max'   => '12.0',
                'weight-costs' => '31.24',
            ],
            [
                'weight-max'   => '12.5',
                'weight-costs' => '32.10',
            ],
            [
                'weight-max'   => '13.0',
                'weight-costs' => '32.96',
            ],
            [
                'weight-max'   => '13.5',
                'weight-costs' => '33.82',
            ],
            [
                'weight-max'   => '14.0',
                'weight-costs' => '34.68',
            ],
            [
                'weight-max'   => '14.5',
                'weight-costs' => '35.54',
            ],
            [
                'weight-max'   => '15.0',
                'weight-costs' => '36.40',
            ],
            [
                'weight-max'   => '15.5',
                'weight-costs' => '37.26',
            ],
            [
                'weight-max'   => '16.0',
                'weight-costs' => '38.12',
            ],
            [
                'weight-max'   => '16.5',
                'weight-costs' => '38.98',
            ],
            [
                'weight-max'   => '17.0',
                'weight-costs' => '39.84',
            ],
            [
                'weight-max'   => '17.5',
                'weight-costs' => '40.70',
            ],
            [
                'weight-max'   => '18.0',
                'weight-costs' => '41.56',
            ],
            [
                'weight-max'   => '18.5',
                'weight-costs' => '42.42',
            ],
            [
                'weight-max'   => '19.0',
                'weight-costs' => '43.28',
            ],
            [
                'weight-max'   => '19.5',
                'weight-costs' => '44.14',
            ],
            [
                'weight-max'   => '20.0',
                'weight-costs' => '45.00',
            ],
            [
                'weight-max'   => '20.5',
                'weight-costs' => '45.99',
            ],
            [
                'weight-max'   => '21.0',
                'weight-costs' => '46.98',
            ],
            [
                'weight-max'   => '21.5',
                'weight-costs' => '47.97',
            ],
            [
                'weight-max'   => '22.0',
                'weight-costs' => '48.96',
            ],
            [
                'weight-max'   => '22.5',
                'weight-costs' => '49.95',
            ],
            [
                'weight-max'   => '23.0',
                'weight-costs' => '50.94',
            ],
            [
                'weight-max'   => '23.5',
                'weight-costs' => '51.93',
            ],
            [
                'weight-max'   => '24.0',
                'weight-costs' => '52.92',
            ],
            [
                'weight-max'   => '24.5',
                'weight-costs' => '53.91',
            ],
            [
                'weight-max'   => '25.0',
                'weight-costs' => '54.90',
            ],
            [
                'weight-max'   => '25.5',
                'weight-costs' => '55.89',
            ],
            [
                'weight-max'   => '26.0',
                'weight-costs' => '56.88',
            ],
            [
                'weight-max'   => '26.5',
                'weight-costs' => '57.87',
            ],
            [
                'weight-max'   => '27.0',
                'weight-costs' => '58.86',
            ],
            [
                'weight-max'   => '27.5',
                'weight-costs' => '59.85',
            ],
            [
                'weight-max'   => '28.0',
                'weight-costs' => '60.84',
            ],
            [
                'weight-max'   => '28.5',
                'weight-costs' => '61.83',
            ],
            [
                'weight-max'   => '29.0',
                'weight-costs' => '62.82',
            ],
            [
                'weight-max'   => '29.5',
                'weight-costs' => '63.81',
            ],
            [
                'weight-max'   => '30.0',
                'weight-costs' => '64.80',
            ],
            [
                'weight-max'   => '31.0',
                'weight-costs' => '67.08',
            ],
            [
                'weight-max'   => '32.0',
                'weight-costs' => '69.36',
            ],
            [
                'weight-max'   => '33.0',
                'weight-costs' => '71.64',
            ],
            [
                'weight-max'   => '34.0',
                'weight-costs' => '73.92',
            ],
            [
                'weight-max'   => '35.0',
                'weight-costs' => '76.20',
            ],
            [
                'weight-max'   => '36.0',
                'weight-costs' => '78.48',
            ],
            [
                'weight-max'   => '37.0',
                'weight-costs' => '80.76',
            ],
            [
                'weight-max'   => '38.0',
                'weight-costs' => '83.04',
            ],
            [
                'weight-max'   => '39.0',
                'weight-costs' => '85.32',
            ],
            [
                'weight-max'   => '40.0',
                'weight-costs' => '87.60',
            ],
            [
                'weight-max'   => '41.0',
                'weight-costs' => '89.88',
            ],
            [
                'weight-max'   => '42.0',
                'weight-costs' => '92.16',
            ],
            [
                'weight-max'   => '43.0',
                'weight-costs' => '94.44',
            ],
            [
                'weight-max'   => '44.0',
                'weight-costs' => '96.72',
            ],
            [
                'weight-max'   => '45.0',
                'weight-costs' => '99.00',
            ],
            [
                'weight-max'   => '46.0',
                'weight-costs' => '101.28',
            ],
            [
                'weight-max'   => '47.0',
                'weight-costs' => '103.56',
            ],
            [
                'weight-max'   => '48.0',
                'weight-costs' => '105.84',
            ],
            [
                'weight-max'   => '49.0',
                'weight-costs' => '108.12',
            ],
            [
                'weight-max'   => '50.0',
                'weight-costs' => '110.40',
            ],
            [
                'weight-max'   => '51.0',
                'weight-costs' => '112.68',
            ],
            [
                'weight-max'   => '52.0',
                'weight-costs' => '114.96',
            ],
            [
                'weight-max'   => '53.0',
                'weight-costs' => '117.24',
            ],
            [
                'weight-max'   => '54.0',
                'weight-costs' => '119.52',
            ],
            [
                'weight-max'   => '55.0',
                'weight-costs' => '121.80',
            ],
            [
                'weight-max'   => '56.0',
                'weight-costs' => '124.08',
            ],
            [
                'weight-max'   => '57.0',
                'weight-costs' => '126.36',
            ],
            [
                'weight-max'   => '58.0',
                'weight-costs' => '128.64',
            ],
            [
                'weight-max'   => '59.0',
                'weight-costs' => '130.92',
            ],
            [
                'weight-max'   => '60.0',
                'weight-costs' => '133.20',
            ],
            [
                'weight-max'   => '61.0',
                'weight-costs' => '135.48',
            ],
            [
                'weight-max'   => '62.0',
                'weight-costs' => '137.76',
            ],
            [
                'weight-max'   => '63.0',
                'weight-costs' => '140.04',
            ],
            [
                'weight-max'   => '64.0',
                'weight-costs' => '142.32',
            ],
            [
                'weight-max'   => '65.0',
                'weight-costs' => '144.60',
            ],
            [
                'weight-max'   => '66.0',
                'weight-costs' => '146.88',
            ],
            [
                'weight-max'   => '67.0',
                'weight-costs' => '149.16',
            ],
            [
                'weight-max'   => '68.0',
                'weight-costs' => '151.44',
            ],
            [
                'weight-max'   => '69.0',
                'weight-costs' => '153.72',
            ],
            [
                'weight-max'   => '70.0',
                'weight-costs' => 156.00,
            ],
        ];
        $json = json_encode($data);

        return $json;
    }

    public static function getShippingZone6(): string
    {
        $data = [
            [
                'weight-max'   => '0.5',
                'weight-costs' => '12.20',
            ],
            [
                'weight-max'   => '1.0',
                'weight-costs' => '18.33',
            ],
            [
                'weight-max'   => '1.5',
                'weight-costs' => '18.84',
            ],
            [
                'weight-max'   => '2.0',
                'weight-costs' => '19.35',
            ],
            [
                'weight-max'   => '2.5',
                'weight-costs' => '19.95',
            ],
            [
                'weight-max'   => '3.0',
                'weight-costs' => '20.58',
            ],
            [
                'weight-max'   => '3.5',
                'weight-costs' => '21.21',
            ],
            [
                'weight-max'   => '4.0',
                'weight-costs' => '21.84',
            ],
            [
                'weight-max'   => '4.5',
                'weight-costs' => '22.47',
            ],
            [
                'weight-max'   => '5.0',
                'weight-costs' => '23.10',
            ],
            [
                'weight-max'   => '5.5',
                'weight-costs' => '23.85',
            ],
            [
                'weight-max'   => '6.0',
                'weight-costs' => '24.60',
            ],
            [
                'weight-max'   => '6.5',
                'weight-costs' => '25.35',
            ],
            [
                'weight-max'   => '7.0',
                'weight-costs' => '26.10',
            ],
            [
                'weight-max'   => '7.5',
                'weight-costs' => '26.85',
            ],
            [
                'weight-max'   => '8.0',
                'weight-costs' => '27.60',
            ],
            [
                'weight-max'   => '8.5',
                'weight-costs' => '28.35',
            ],
            [
                'weight-max'   => '9.0',
                'weight-costs' => '29.10',
            ],
            [
                'weight-max'   => '9.5',
                'weight-costs' => '29.85',
            ],
            [
                'weight-max'   => '10.0',
                'weight-costs' => '30.60',
            ],
            [
                'weight-max'   => '10.5',
                'weight-costs' => '31.62',
            ],
            [
                'weight-max'   => '11.0',
                'weight-costs' => '32.64',
            ],
            [
                'weight-max'   => '11.5',
                'weight-costs' => '33.66',
            ],
            [
                'weight-max'   => '12.0',
                'weight-costs' => '34.68',
            ],
            [
                'weight-max'   => '12.5',
                'weight-costs' => '35.70',
            ],
            [
                'weight-max'   => '13.0',
                'weight-costs' => '36.72',
            ],
            [
                'weight-max'   => '13.5',
                'weight-costs' => '37.74',
            ],
            [
                'weight-max'   => '14.0',
                'weight-costs' => '38.76',
            ],
            [
                'weight-max'   => '14.5',
                'weight-costs' => '39.78',
            ],
            [
                'weight-max'   => '15.0',
                'weight-costs' => '40.80',
            ],
            [
                'weight-max'   => '15.5',
                'weight-costs' => '41.82',
            ],
            [
                'weight-max'   => '16.0',
                'weight-costs' => '42.84',
            ],
            [
                'weight-max'   => '16.5',
                'weight-costs' => '43.86',
            ],
            [
                'weight-max'   => '17.0',
                'weight-costs' => '44.88',
            ],
            [
                'weight-max'   => '17.5',
                'weight-costs' => '45.90',
            ],
            [
                'weight-max'   => '18.0',
                'weight-costs' => '46.92',
            ],
            [
                'weight-max'   => '18.5',
                'weight-costs' => '47.94',
            ],
            [
                'weight-max'   => '19.0',
                'weight-costs' => '48.96',
            ],
            [
                'weight-max'   => '19.5',
                'weight-costs' => '49.98',
            ],
            [
                'weight-max'   => '20.0',
                'weight-costs' => '51.00',
            ],
            [
                'weight-max'   => '20.5',
                'weight-costs' => '52.17',
            ],
            [
                'weight-max'   => '21.0',
                'weight-costs' => '53.34',
            ],
            [
                'weight-max'   => '21.5',
                'weight-costs' => '54.51',
            ],
            [
                'weight-max'   => '22.0',
                'weight-costs' => '55.68',
            ],
            [
                'weight-max'   => '22.5',
                'weight-costs' => '56.85',
            ],
            [
                'weight-max'   => '23.0',
                'weight-costs' => '58.02',
            ],
            [
                'weight-max'   => '23.5',
                'weight-costs' => '59.19',
            ],
            [
                'weight-max'   => '24.0',
                'weight-costs' => '60.36',
            ],
            [
                'weight-max'   => '24.5',
                'weight-costs' => '61.53',
            ],
            [
                'weight-max'   => '25.0',
                'weight-costs' => '62.70',
            ],
            [
                'weight-max'   => '25.5',
                'weight-costs' => '63.87',
            ],
            [
                'weight-max'   => '26.0',
                'weight-costs' => '65.04',
            ],
            [
                'weight-max'   => '26.5',
                'weight-costs' => '66.21',
            ],
            [
                'weight-max'   => '27.0',
                'weight-costs' => '67.38',
            ],
            [
                'weight-max'   => '27.5',
                'weight-costs' => '68.55',
            ],
            [
                'weight-max'   => '28.0',
                'weight-costs' => '69.72',
            ],
            [
                'weight-max'   => '28.5',
                'weight-costs' => '70.89',
            ],
            [
                'weight-max'   => '29.0',
                'weight-costs' => '72.06',
            ],
            [
                'weight-max'   => '29.5',
                'weight-costs' => '73.23',
            ],
            [
                'weight-max'   => '30.0',
                'weight-costs' => '74.40',
            ],
            [
                'weight-max'   => '31.0',
                'weight-costs' => '77.16',
            ],
            [
                'weight-max'   => '32.0',
                'weight-costs' => '79.92',
            ],
            [
                'weight-max'   => '33.0',
                'weight-costs' => '82.68',
            ],
            [
                'weight-max'   => '34.0',
                'weight-costs' => '85.44',
            ],
            [
                'weight-max'   => '35.0',
                'weight-costs' => '88.20',
            ],
            [
                'weight-max'   => '36.0',
                'weight-costs' => '90.96',
            ],
            [
                'weight-max'   => '37.0',
                'weight-costs' => '93.72',
            ],
            [
                'weight-max'   => '38.0',
                'weight-costs' => '96.48',
            ],
            [
                'weight-max'   => '39.0',
                'weight-costs' => '99.24',
            ],
            [
                'weight-max'   => '40.0',
                'weight-costs' => '102.00',
            ],
            [
                'weight-max'   => '41.0',
                'weight-costs' => '104.76',
            ],
            [
                'weight-max'   => '42.0',
                'weight-costs' => '107.52',
            ],
            [
                'weight-max'   => '43.0',
                'weight-costs' => '110.28',
            ],
            [
                'weight-max'   => '44.0',
                'weight-costs' => '113.04',
            ],
            [
                'weight-max'   => '45.0',
                'weight-costs' => '115.80',
            ],
            [
                'weight-max'   => '46.0',
                'weight-costs' => '118.56',
            ],
            [
                'weight-max'   => '47.0',
                'weight-costs' => '121.32',
            ],
            [
                'weight-max'   => '48.0',
                'weight-costs' => '124.08',
            ],
            [
                'weight-max'   => '49.0',
                'weight-costs' => '126.84',
            ],
            [
                'weight-max'   => '50.0',
                'weight-costs' => '129.60',
            ],
            [
                'weight-max'   => '51.0',
                'weight-costs' => '132.36',
            ],
            [
                'weight-max'   => '52.0',
                'weight-costs' => '135.12',
            ],
            [
                'weight-max'   => '53.0',
                'weight-costs' => '137.88',
            ],
            [
                'weight-max'   => '54.0',
                'weight-costs' => '140.64',
            ],
            [
                'weight-max'   => '55.0',
                'weight-costs' => '143.40',
            ],
            [
                'weight-max'   => '56.0',
                'weight-costs' => '146.16',
            ],
            [
                'weight-max'   => '57.0',
                'weight-costs' => '148.92',
            ],
            [
                'weight-max'   => '58.0',
                'weight-costs' => '151.68',
            ],
            [
                'weight-max'   => '59.0',
                'weight-costs' => '154.44',
            ],
            [
                'weight-max'   => '60.0',
                'weight-costs' => '157.20',
            ],
            [
                'weight-max'   => '61.0',
                'weight-costs' => '159.96',
            ],
            [
                'weight-max'   => '62.0',
                'weight-costs' => '162.72',
            ],
            [
                'weight-max'   => '63.0',
                'weight-costs' => '165.48',
            ],
            [
                'weight-max'   => '64.0',
                'weight-costs' => '168.24',
            ],
            [
                'weight-max'   => '65.0',
                'weight-costs' => '171.00',
            ],
            [
                'weight-max'   => '66.0',
                'weight-costs' => '173.76',
            ],
            [
                'weight-max'   => '67.0',
                'weight-costs' => '176.52',
            ],
            [
                'weight-max'   => '68.0',
                'weight-costs' => '179.28',
            ],
            [
                'weight-max'   => '69.0',
                'weight-costs' => '182.04',
            ],
            [
                'weight-max'   => '70.0',
                'weight-costs' => 184.80,
            ],
        ];
        $json = json_encode($data);

        return $json;
    }

    public static function getShippingZone7(): string
    {
        $data = [
            [
                'weight-max'   => '0.5',
                'weight-costs' => '12.20',
            ],
            [
                'weight-max'   => '1.0',
                'weight-costs' => '19.65',
            ],
            [
                'weight-max'   => '1.5',
                'weight-costs' => '20.57',
            ],
            [
                'weight-max'   => '2.0',
                'weight-costs' => '21.49',
            ],
            [
                'weight-max'   => '2.5',
                'weight-costs' => '22.17',
            ],
            [
                'weight-max'   => '3.0',
                'weight-costs' => '23.24',
            ],
            [
                'weight-max'   => '3.5',
                'weight-costs' => '24.31',
            ],
            [
                'weight-max'   => '4.0',
                'weight-costs' => '25.38',
            ],
            [
                'weight-max'   => '4.5',
                'weight-costs' => '26.45',
            ],
            [
                'weight-max'   => '5.0',
                'weight-costs' => '27.52',
            ],
            [
                'weight-max'   => '5.5',
                'weight-costs' => '28.79',
            ],
            [
                'weight-max'   => '6.0',
                'weight-costs' => '30.06',
            ],
            [
                'weight-max'   => '6.5',
                'weight-costs' => '31.33',
            ],
            [
                'weight-max'   => '7.0',
                'weight-costs' => '32.60',
            ],
            [
                'weight-max'   => '7.5',
                'weight-costs' => '33.87',
            ],
            [
                'weight-max'   => '8.0',
                'weight-costs' => '35.14',
            ],
            [
                'weight-max'   => '8.5',
                'weight-costs' => '36.41',
            ],
            [
                'weight-max'   => '9.0',
                'weight-costs' => '37.68',
            ],
            [
                'weight-max'   => '9.5',
                'weight-costs' => '38.95',
            ],
            [
                'weight-max'   => '10.0',
                'weight-costs' => '40.22',
            ],
            [
                'weight-max'   => '10.5',
                'weight-costs' => '41.84',
            ],
            [
                'weight-max'   => '11.0',
                'weight-costs' => '43.46',
            ],
            [
                'weight-max'   => '11.5',
                'weight-costs' => '45.08',
            ],
            [
                'weight-max'   => '12.0',
                'weight-costs' => '46.70',
            ],
            [
                'weight-max'   => '12.5',
                'weight-costs' => '48.32',
            ],
            [
                'weight-max'   => '13.0',
                'weight-costs' => '49.94',
            ],
            [
                'weight-max'   => '13.5',
                'weight-costs' => '51.56',
            ],
            [
                'weight-max'   => '14.0',
                'weight-costs' => '53.18',
            ],
            [
                'weight-max'   => '14.5',
                'weight-costs' => '54.80',
            ],
            [
                'weight-max'   => '15.0',
                'weight-costs' => '56.42',
            ],
            [
                'weight-max'   => '15.5',
                'weight-costs' => '58.04',
            ],
            [
                'weight-max'   => '16.0',
                'weight-costs' => '59.66',
            ],
            [
                'weight-max'   => '16.5',
                'weight-costs' => '61.28',
            ],
            [
                'weight-max'   => '17.0',
                'weight-costs' => '62.90',
            ],
            [
                'weight-max'   => '17.5',
                'weight-costs' => '64.52',
            ],
            [
                'weight-max'   => '18.0',
                'weight-costs' => '66.14',
            ],
            [
                'weight-max'   => '18.5',
                'weight-costs' => '67.76',
            ],
            [
                'weight-max'   => '19.0',
                'weight-costs' => '69.38',
            ],
            [
                'weight-max'   => '19.5',
                'weight-costs' => '71.00',
            ],
            [
                'weight-max'   => '20.0',
                'weight-costs' => '72.62',
            ],
            [
                'weight-max'   => '20.5',
                'weight-costs' => '74.49',
            ],
            [
                'weight-max'   => '21.0',
                'weight-costs' => '76.36',
            ],
            [
                'weight-max'   => '21.5',
                'weight-costs' => '78.23',
            ],
            [
                'weight-max'   => '22.0',
                'weight-costs' => '80.10',
            ],
            [
                'weight-max'   => '22.5',
                'weight-costs' => '81.97',
            ],
            [
                'weight-max'   => '23.0',
                'weight-costs' => '83.84',
            ],
            [
                'weight-max'   => '23.5',
                'weight-costs' => '85.71',
            ],
            [
                'weight-max'   => '24.0',
                'weight-costs' => '87.58',
            ],
            [
                'weight-max'   => '24.5',
                'weight-costs' => '89.45',
            ],
            [
                'weight-max'   => '25.0',
                'weight-costs' => '91.32',
            ],
            [
                'weight-max'   => '25.5',
                'weight-costs' => '93.19',
            ],
            [
                'weight-max'   => '26.0',
                'weight-costs' => '95.06',
            ],
            [
                'weight-max'   => '26.5',
                'weight-costs' => '96.93',
            ],
            [
                'weight-max'   => '27.0',
                'weight-costs' => '98.80',
            ],
            [
                'weight-max'   => '27.5',
                'weight-costs' => '100.67',
            ],
            [
                'weight-max'   => '28.0',
                'weight-costs' => '102.54',
            ],
            [
                'weight-max'   => '28.5',
                'weight-costs' => '104.41',
            ],
            [
                'weight-max'   => '29.0',
                'weight-costs' => '106.28',
            ],
            [
                'weight-max'   => '29.5',
                'weight-costs' => '108.15',
            ],
            [
                'weight-max'   => '30.0',
                'weight-costs' => '110.02',
            ],
            [
                'weight-max'   => '31.0',
                'weight-costs' => '113.47',
            ],
            [
                'weight-max'   => '32.0',
                'weight-costs' => '116.92',
            ],
            [
                'weight-max'   => '33.0',
                'weight-costs' => '120.37',
            ],
            [
                'weight-max'   => '34.0',
                'weight-costs' => '123.82',
            ],
            [
                'weight-max'   => '35.0',
                'weight-costs' => '127.27',
            ],
            [
                'weight-max'   => '36.0',
                'weight-costs' => '130.72',
            ],
            [
                'weight-max'   => '37.0',
                'weight-costs' => '134.17',
            ],
            [
                'weight-max'   => '38.0',
                'weight-costs' => '137.62',
            ],
            [
                'weight-max'   => '39.0',
                'weight-costs' => '141.07',
            ],
            [
                'weight-max'   => '40.0',
                'weight-costs' => '144.52',
            ],
            [
                'weight-max'   => '41.0',
                'weight-costs' => '147.97',
            ],
            [
                'weight-max'   => '42.0',
                'weight-costs' => '151.42',
            ],
            [
                'weight-max'   => '43.0',
                'weight-costs' => '154.87',
            ],
            [
                'weight-max'   => '44.0',
                'weight-costs' => '158.32',
            ],
            [
                'weight-max'   => '45.0',
                'weight-costs' => '161.77',
            ],
            [
                'weight-max'   => '46.0',
                'weight-costs' => '165.22',
            ],
            [
                'weight-max'   => '47.0',
                'weight-costs' => '168.67',
            ],
            [
                'weight-max'   => '48.0',
                'weight-costs' => '172.12',
            ],
            [
                'weight-max'   => '49.0',
                'weight-costs' => '175.57',
            ],
            [
                'weight-max'   => '50.0',
                'weight-costs' => '179.02',
            ],
            [
                'weight-max'   => '51.0',
                'weight-costs' => '182.47',
            ],
            [
                'weight-max'   => '52.0',
                'weight-costs' => '185.92',
            ],
            [
                'weight-max'   => '53.0',
                'weight-costs' => '189.37',
            ],
            [
                'weight-max'   => '54.0',
                'weight-costs' => '192.82',
            ],
            [
                'weight-max'   => '55.0',
                'weight-costs' => '196.27',
            ],
            [
                'weight-max'   => '56.0',
                'weight-costs' => '199.72',
            ],
            [
                'weight-max'   => '57.0',
                'weight-costs' => '203.17',
            ],
            [
                'weight-max'   => '58.0',
                'weight-costs' => '206.62',
            ],
            [
                'weight-max'   => '59.0',
                'weight-costs' => '210.07',
            ],
            [
                'weight-max'   => '60.0',
                'weight-costs' => '213.52',
            ],
            [
                'weight-max'   => '61.0',
                'weight-costs' => '216.97',
            ],
            [
                'weight-max'   => '62.0',
                'weight-costs' => '220.42',
            ],
            [
                'weight-max'   => '63.0',
                'weight-costs' => '223.87',
            ],
            [
                'weight-max'   => '64.0',
                'weight-costs' => '227.32',
            ],
            [
                'weight-max'   => '65.0',
                'weight-costs' => '230.77',
            ],
            [
                'weight-max'   => '66.0',
                'weight-costs' => '234.22',
            ],
            [
                'weight-max'   => '67.0',
                'weight-costs' => '237.67',
            ],
            [
                'weight-max'   => '68.0',
                'weight-costs' => '241.12',
            ],
            [
                'weight-max'   => '69.0',
                'weight-costs' => '244.57',
            ],
            [
                'weight-max'   => '70.0',
                'weight-costs' => '248.02',
            ],
        ];
        $json = json_encode($data);

        return $json;
    }

    public static function getShippingZone8(): string
    {
        $data = [
            [
                'weight-max'   => '0.5',
                'weight-costs' => '12.20',
            ],
            [
                'weight-max'   => '1.0',
                'weight-costs' => '21.64',
            ],
            [
                'weight-max'   => '1.5',
                'weight-costs' => '22.70',
            ],
            [
                'weight-max'   => '2.0',
                'weight-costs' => '23.76',
            ],
            [
                'weight-max'   => '2.5',
                'weight-costs' => '24.55',
            ],
            [
                'weight-max'   => '3.0',
                'weight-costs' => '26.37',
            ],
            [
                'weight-max'   => '3.5',
                'weight-costs' => '28.19',
            ],
            [
                'weight-max'   => '4.0',
                'weight-costs' => '30.01',
            ],
            [
                'weight-max'   => '4.5',
                'weight-costs' => '31.83',
            ],
            [
                'weight-max'   => '5.0',
                'weight-costs' => '33.65',
            ],
            [
                'weight-max'   => '5.5',
                'weight-costs' => '35.31',
            ],
            [
                'weight-max'   => '6.0',
                'weight-costs' => '36.97',
            ],
            [
                'weight-max'   => '6.5',
                'weight-costs' => '38.63',
            ],
            [
                'weight-max'   => '7.0',
                'weight-costs' => '40.29',
            ],
            [
                'weight-max'   => '7.5',
                'weight-costs' => '41.95',
            ],
            [
                'weight-max'   => '8.0',
                'weight-costs' => '43.61',
            ],
            [
                'weight-max'   => '8.5',
                'weight-costs' => '45.27',
            ],
            [
                'weight-max'   => '9.0',
                'weight-costs' => '46.93',
            ],
            [
                'weight-max'   => '9.5',
                'weight-costs' => '48.59',
            ],
            [
                'weight-max'   => '10.0',
                'weight-costs' => '50.25',
            ],
            [
                'weight-max'   => '10.5',
                'weight-costs' => '52.20',
            ],
            [
                'weight-max'   => '11.0',
                'weight-costs' => '54.15',
            ],
            [
                'weight-max'   => '11.5',
                'weight-costs' => '56.10',
            ],
            [
                'weight-max'   => '12.0',
                'weight-costs' => '58.05',
            ],
            [
                'weight-max'   => '12.5',
                'weight-costs' => '60.00',
            ],
            [
                'weight-max'   => '13.0',
                'weight-costs' => '61.95',
            ],
            [
                'weight-max'   => '13.5',
                'weight-costs' => '63.90',
            ],
            [
                'weight-max'   => '14.0',
                'weight-costs' => '65.85',
            ],
            [
                'weight-max'   => '14.5',
                'weight-costs' => '67.80',
            ],
            [
                'weight-max'   => '15.0',
                'weight-costs' => '69.75',
            ],
            [
                'weight-max'   => '15.5',
                'weight-costs' => '71.70',
            ],
            [
                'weight-max'   => '16.0',
                'weight-costs' => '73.65',
            ],
            [
                'weight-max'   => '16.5',
                'weight-costs' => '75.60',
            ],
            [
                'weight-max'   => '17.0',
                'weight-costs' => '77.55',
            ],
            [
                'weight-max'   => '17.5',
                'weight-costs' => '79.50',
            ],
            [
                'weight-max'   => '18.0',
                'weight-costs' => '81.45',
            ],
            [
                'weight-max'   => '18.5',
                'weight-costs' => '83.40',
            ],
            [
                'weight-max'   => '19.0',
                'weight-costs' => '85.35',
            ],
            [
                'weight-max'   => '19.5',
                'weight-costs' => '87.30',
            ],
            [
                'weight-max'   => '20.0',
                'weight-costs' => '89.25',
            ],
            [
                'weight-max'   => '20.5',
                'weight-costs' => '91.27',
            ],
            [
                'weight-max'   => '21.0',
                'weight-costs' => '93.29',
            ],
            [
                'weight-max'   => '21.5',
                'weight-costs' => '95.31',
            ],
            [
                'weight-max'   => '22.0',
                'weight-costs' => '97.33',
            ],
            [
                'weight-max'   => '22.5',
                'weight-costs' => '99.35',
            ],
            [
                'weight-max'   => '23.0',
                'weight-costs' => '101.37',
            ],
            [
                'weight-max'   => '23.5',
                'weight-costs' => '103.39',
            ],
            [
                'weight-max'   => '24.0',
                'weight-costs' => '105.41',
            ],
            [
                'weight-max'   => '24.5',
                'weight-costs' => '107.43',
            ],
            [
                'weight-max'   => '25.0',
                'weight-costs' => '109.45',
            ],
            [
                'weight-max'   => '25.5',
                'weight-costs' => '111.47',
            ],
            [
                'weight-max'   => '26.0',
                'weight-costs' => '113.49',
            ],
            [
                'weight-max'   => '26.5',
                'weight-costs' => '115.51',
            ],
            [
                'weight-max'   => '27.0',
                'weight-costs' => '117.53',
            ],
            [
                'weight-max'   => '27.5',
                'weight-costs' => '119.55',
            ],
            [
                'weight-max'   => '28.0',
                'weight-costs' => '121.57',
            ],
            [
                'weight-max'   => '28.5',
                'weight-costs' => '123.59',
            ],
            [
                'weight-max'   => '29.0',
                'weight-costs' => '125.61',
            ],
            [
                'weight-max'   => '29.5',
                'weight-costs' => '127.63',
            ],
            [
                'weight-max'   => '30.0',
                'weight-costs' => '129.65',
            ],
            [
                'weight-max'   => '31.0',
                'weight-costs' => '133.37',
            ],
            [
                'weight-max'   => '32.0',
                'weight-costs' => '137.09',
            ],
            [
                'weight-max'   => '33.0',
                'weight-costs' => '140.81',
            ],
            [
                'weight-max'   => '34.0',
                'weight-costs' => '144.53',
            ],
            [
                'weight-max'   => '35.0',
                'weight-costs' => '148.25',
            ],
            [
                'weight-max'   => '36.0',
                'weight-costs' => '151.97',
            ],
            [
                'weight-max'   => '37.0',
                'weight-costs' => '155.69',
            ],
            [
                'weight-max'   => '38.0',
                'weight-costs' => '159.41',
            ],
            [
                'weight-max'   => '39.0',
                'weight-costs' => '163.13',
            ],
            [
                'weight-max'   => '40.0',
                'weight-costs' => '166.85',
            ],
            [
                'weight-max'   => '41.0',
                'weight-costs' => '170.57',
            ],
            [
                'weight-max'   => '42.0',
                'weight-costs' => '174.29',
            ],
            [
                'weight-max'   => '43.0',
                'weight-costs' => '178.01',
            ],
            [
                'weight-max'   => '44.0',
                'weight-costs' => '181.73',
            ],
            [
                'weight-max'   => '45.0',
                'weight-costs' => '185.45',
            ],
            [
                'weight-max'   => '46.0',
                'weight-costs' => '189.17',
            ],
            [
                'weight-max'   => '47.0',
                'weight-costs' => '192.89',
            ],
            [
                'weight-max'   => '48.0',
                'weight-costs' => '196.61',
            ],
            [
                'weight-max'   => '49.0',
                'weight-costs' => '200.33',
            ],
            [
                'weight-max'   => '50.0',
                'weight-costs' => '204.05',
            ],
            [
                'weight-max'   => '51.0',
                'weight-costs' => '207.77',
            ],
            [
                'weight-max'   => '52.0',
                'weight-costs' => '211.49',
            ],
            [
                'weight-max'   => '53.0',
                'weight-costs' => '215.21',
            ],
            [
                'weight-max'   => '54.0',
                'weight-costs' => '218.93',
            ],
            [
                'weight-max'   => '55.0',
                'weight-costs' => '222.65',
            ],
            [
                'weight-max'   => '56.0',
                'weight-costs' => '226.37',
            ],
            [
                'weight-max'   => '57.0',
                'weight-costs' => '230.09',
            ],
            [
                'weight-max'   => '58.0',
                'weight-costs' => '233.81',
            ],
            [
                'weight-max'   => '59.0',
                'weight-costs' => '237.53',
            ],
            [
                'weight-max'   => '60.0',
                'weight-costs' => '241.25',
            ],
            [
                'weight-max'   => '61.0',
                'weight-costs' => '244.97',
            ],
            [
                'weight-max'   => '62.0',
                'weight-costs' => '248.69',
            ],
            [
                'weight-max'   => '63.0',
                'weight-costs' => '252.41',
            ],
            [
                'weight-max'   => '64.0',
                'weight-costs' => '256.13',
            ],
            [
                'weight-max'   => '65.0',
                'weight-costs' => '259.85',
            ],
            [
                'weight-max'   => '66.0',
                'weight-costs' => '263.57',
            ],
            [
                'weight-max'   => '67.0',
                'weight-costs' => '267.29',
            ],
            [
                'weight-max'   => '68.0',
                'weight-costs' => '271.01',
            ],
            [
                'weight-max'   => '69.0',
                'weight-costs' => '274.73',
            ],
            [
                'weight-max'   => '70.0',
                'weight-costs' => '278.45',
            ],
        ];
        $json = json_encode($data);

        return $json;
    }

    public static function getShippingZone9(): string
    {
        $data = [
            [
                'weight-max'   => '0.5',
                'weight-costs' => '12.20',
            ],
            [
                'weight-max'   => '1.0',
                'weight-costs' => '24.26',
            ],
            [
                'weight-max'   => '1.5',
                'weight-costs' => '25.48',
            ],
            [
                'weight-max'   => '2.0',
                'weight-costs' => '26.70',
            ],
            [
                'weight-max'   => '2.5',
                'weight-costs' => '27.61',
            ],
            [
                'weight-max'   => '3.0',
                'weight-costs' => '30.70',
            ],
            [
                'weight-max'   => '3.5',
                'weight-costs' => '33.79',
            ],
            [
                'weight-max'   => '4.0',
                'weight-costs' => '36.88',
            ],
            [
                'weight-max'   => '4.5',
                'weight-costs' => '39.97',
            ],
            [
                'weight-max'   => '5.0',
                'weight-costs' => '43.06',
            ],
            [
                'weight-max'   => '5.5',
                'weight-costs' => '45.87',
            ],
            [
                'weight-max'   => '6.0',
                'weight-costs' => '48.68',
            ],
            [
                'weight-max'   => '6.5',
                'weight-costs' => '51.49',
            ],
            [
                'weight-max'   => '7.0',
                'weight-costs' => '54.30',
            ],
            [
                'weight-max'   => '7.5',
                'weight-costs' => '57.11',
            ],
            [
                'weight-max'   => '8.0',
                'weight-costs' => '59.92',
            ],
            [
                'weight-max'   => '8.5',
                'weight-costs' => '62.73',
            ],
            [
                'weight-max'   => '9.0',
                'weight-costs' => '65.54',
            ],
            [
                'weight-max'   => '9.5',
                'weight-costs' => '68.35',
            ],
            [
                'weight-max'   => '10.0',
                'weight-costs' => '71.16',
            ],
            [
                'weight-max'   => '10.5',
                'weight-costs' => '73.60',
            ],
            [
                'weight-max'   => '11.0',
                'weight-costs' => '76.04',
            ],
            [
                'weight-max'   => '11.5',
                'weight-costs' => '78.48',
            ],
            [
                'weight-max'   => '12.0',
                'weight-costs' => '80.92',
            ],
            [
                'weight-max'   => '12.5',
                'weight-costs' => '83.36',
            ],
            [
                'weight-max'   => '13.0',
                'weight-costs' => '85.80',
            ],
            [
                'weight-max'   => '13.5',
                'weight-costs' => '88.24',
            ],
            [
                'weight-max'   => '14.0',
                'weight-costs' => '90.68',
            ],
            [
                'weight-max'   => '14.5',
                'weight-costs' => '93.12',
            ],
            [
                'weight-max'   => '15.0',
                'weight-costs' => '95.56',
            ],
            [
                'weight-max'   => '15.5',
                'weight-costs' => '98.00',
            ],
            [
                'weight-max'   => '16.0',
                'weight-costs' => '100.44',
            ],
            [
                'weight-max'   => '16.5',
                'weight-costs' => '102.88',
            ],
            [
                'weight-max'   => '17.0',
                'weight-costs' => '105.32',
            ],
            [
                'weight-max'   => '17.5',
                'weight-costs' => '107.76',
            ],
            [
                'weight-max'   => '18.0',
                'weight-costs' => '110.20',
            ],
            [
                'weight-max'   => '18.5',
                'weight-costs' => '112.64',
            ],
            [
                'weight-max'   => '19.0',
                'weight-costs' => '115.08',
            ],
            [
                'weight-max'   => '19.5',
                'weight-costs' => '117.52',
            ],
            [
                'weight-max'   => '20.0',
                'weight-costs' => '119.96',
            ],
            [
                'weight-max'   => '20.5',
                'weight-costs' => '122.48',
            ],
            [
                'weight-max'   => '21.0',
                'weight-costs' => '125.00',
            ],
            [
                'weight-max'   => '21.5',
                'weight-costs' => '127.52',
            ],
            [
                'weight-max'   => '22.0',
                'weight-costs' => '130.04',
            ],
            [
                'weight-max'   => '22.5',
                'weight-costs' => '132.56',
            ],
            [
                'weight-max'   => '23.0',
                'weight-costs' => '135.08',
            ],
            [
                'weight-max'   => '23.5',
                'weight-costs' => '137.60',
            ],
            [
                'weight-max'   => '24.0',
                'weight-costs' => '140.12',
            ],
            [
                'weight-max'   => '24.5',
                'weight-costs' => '142.64',
            ],
            [
                'weight-max'   => '25.0',
                'weight-costs' => '145.16',
            ],
            [
                'weight-max'   => '25.5',
                'weight-costs' => '147.68',
            ],
            [
                'weight-max'   => '26.0',
                'weight-costs' => '150.20',
            ],
            [
                'weight-max'   => '26.5',
                'weight-costs' => '152.72',
            ],
            [
                'weight-max'   => '27.0',
                'weight-costs' => '155.24',
            ],
            [
                'weight-max'   => '27.5',
                'weight-costs' => '157.76',
            ],
            [
                'weight-max'   => '28.0',
                'weight-costs' => '160.28',
            ],
            [
                'weight-max'   => '28.5',
                'weight-costs' => '162.80',
            ],
            [
                'weight-max'   => '29.0',
                'weight-costs' => '165.32',
            ],
            [
                'weight-max'   => '29.5',
                'weight-costs' => '167.84',
            ],
            [
                'weight-max'   => '30.0',
                'weight-costs' => '170.36',
            ],
            [
                'weight-max'   => '31.0',
                'weight-costs' => '174.83',
            ],
            [
                'weight-max'   => '32.0',
                'weight-costs' => '179.30',
            ],
            [
                'weight-max'   => '33.0',
                'weight-costs' => '183.77',
            ],
            [
                'weight-max'   => '34.0',
                'weight-costs' => '188.24',
            ],
            [
                'weight-max'   => '35.0',
                'weight-costs' => '192.71',
            ],
            [
                'weight-max'   => '36.0',
                'weight-costs' => '197.18',
            ],
            [
                'weight-max'   => '37.0',
                'weight-costs' => '201.65',
            ],
            [
                'weight-max'   => '38.0',
                'weight-costs' => '206.12',
            ],
            [
                'weight-max'   => '39.0',
                'weight-costs' => '210.59',
            ],
            [
                'weight-max'   => '40.0',
                'weight-costs' => '215.06',
            ],
            [
                'weight-max'   => '41.0',
                'weight-costs' => '219.53',
            ],
            [
                'weight-max'   => '42.0',
                'weight-costs' => '224.00',
            ],
            [
                'weight-max'   => '43.0',
                'weight-costs' => '228.47',
            ],
            [
                'weight-max'   => '44.0',
                'weight-costs' => '232.94',
            ],
            [
                'weight-max'   => '45.0',
                'weight-costs' => '237.41',
            ],
            [
                'weight-max'   => '46.0',
                'weight-costs' => '241.88',
            ],
            [
                'weight-max'   => '47.0',
                'weight-costs' => '246.35',
            ],
            [
                'weight-max'   => '48.0',
                'weight-costs' => '250.82',
            ],
            [
                'weight-max'   => '49.0',
                'weight-costs' => '255.29',
            ],
            [
                'weight-max'   => '50.0',
                'weight-costs' => '259.76',
            ],
            [
                'weight-max'   => '51.0',
                'weight-costs' => '264.23',
            ],
            [
                'weight-max'   => '52.0',
                'weight-costs' => '268.70',
            ],
            [
                'weight-max'   => '53.0',
                'weight-costs' => '273.17',
            ],
            [
                'weight-max'   => '54.0',
                'weight-costs' => '277.64',
            ],
            [
                'weight-max'   => '55.0',
                'weight-costs' => '282.11',
            ],
            [
                'weight-max'   => '56.0',
                'weight-costs' => '286.58',
            ],
            [
                'weight-max'   => '57.0',
                'weight-costs' => '291.05',
            ],
            [
                'weight-max'   => '58.0',
                'weight-costs' => '295.52',
            ],
            [
                'weight-max'   => '59.0',
                'weight-costs' => '299.99',
            ],
            [
                'weight-max'   => '60.0',
                'weight-costs' => '304.46',
            ],
            [
                'weight-max'   => '61.0',
                'weight-costs' => '308.93',
            ],
            [
                'weight-max'   => '62.0',
                'weight-costs' => '313.40',
            ],
            [
                'weight-max'   => '63.0',
                'weight-costs' => '317.87',
            ],
            [
                'weight-max'   => '64.0',
                'weight-costs' => '322.34',
            ],
            [
                'weight-max'   => '65.0',
                'weight-costs' => '326.81',
            ],
            [
                'weight-max'   => '66.0',
                'weight-costs' => '331.28',
            ],
            [
                'weight-max'   => '67.0',
                'weight-costs' => '335.75',
            ],
            [
                'weight-max'   => '68.0',
                'weight-costs' => '340.22',
            ],
            [
                'weight-max'   => '69.0',
                'weight-costs' => '344.69',
            ],
            [
                'weight-max'   => '70.0',
                'weight-costs' => '349.16',
            ],
        ];
        $json = json_encode($data);

        return $json;
    }

    public static function getShippingZone10(): string
    {
        $data = [
            [
                'weight-max'   => '0.5',
                'weight-costs' => '12.20',
            ],
            [
                'weight-max'   => '1.0',
                'weight-costs' => '27.19',
            ],
            [
                'weight-max'   => '1.5',
                'weight-costs' => '28.59',
            ],
            [
                'weight-max'   => '2.0',
                'weight-costs' => '29.99',
            ],
            [
                'weight-max'   => '2.5',
                'weight-costs' => '31.03',
            ],
            [
                'weight-max'   => '3.0',
                'weight-costs' => '34.59',
            ],
            [
                'weight-max'   => '3.5',
                'weight-costs' => '38.15',
            ],
            [
                'weight-max'   => '4.0',
                'weight-costs' => '41.71',
            ],
            [
                'weight-max'   => '4.5',
                'weight-costs' => '45.27',
            ],
            [
                'weight-max'   => '5.0',
                'weight-costs' => '48.83',
            ],
            [
                'weight-max'   => '5.5',
                'weight-costs' => '52.06',
            ],
            [
                'weight-max'   => '6.0',
                'weight-costs' => '55.29',
            ],
            [
                'weight-max'   => '6.5',
                'weight-costs' => '58.52',
            ],
            [
                'weight-max'   => '7.0',
                'weight-costs' => '61.75',
            ],
            [
                'weight-max'   => '7.5',
                'weight-costs' => '64.98',
            ],
            [
                'weight-max'   => '8.0',
                'weight-costs' => '68.21',
            ],
            [
                'weight-max'   => '8.5',
                'weight-costs' => '71.44',
            ],
            [
                'weight-max'   => '9.0',
                'weight-costs' => '74.67',
            ],
            [
                'weight-max'   => '9.5',
                'weight-costs' => '77.90',
            ],
            [
                'weight-max'   => '10.0',
                'weight-costs' => '81.13',
            ],
            [
                'weight-max'   => '10.5',
                'weight-costs' => '83.93',
            ],
            [
                'weight-max'   => '11.0',
                'weight-costs' => '86.73',
            ],
            [
                'weight-max'   => '11.5',
                'weight-costs' => '89.53',
            ],
            [
                'weight-max'   => '12.0',
                'weight-costs' => '92.33',
            ],
            [
                'weight-max'   => '12.5',
                'weight-costs' => '95.13',
            ],
            [
                'weight-max'   => '13.0',
                'weight-costs' => '97.93',
            ],
            [
                'weight-max'   => '13.5',
                'weight-costs' => '100.73',
            ],
            [
                'weight-max'   => '14.0',
                'weight-costs' => '103.53',
            ],
            [
                'weight-max'   => '14.5',
                'weight-costs' => '106.33',
            ],
            [
                'weight-max'   => '15.0',
                'weight-costs' => '109.13',
            ],
            [
                'weight-max'   => '15.5',
                'weight-costs' => '111.93',
            ],
            [
                'weight-max'   => '16.0',
                'weight-costs' => '114.73',
            ],
            [
                'weight-max'   => '16.5',
                'weight-costs' => '117.53',
            ],
            [
                'weight-max'   => '17.0',
                'weight-costs' => '120.33',
            ],
            [
                'weight-max'   => '17.5',
                'weight-costs' => '123.13',
            ],
            [
                'weight-max'   => '18.0',
                'weight-costs' => '125.93',
            ],
            [
                'weight-max'   => '18.5',
                'weight-costs' => '128.73',
            ],
            [
                'weight-max'   => '19.0',
                'weight-costs' => '131.53',
            ],
            [
                'weight-max'   => '19.5',
                'weight-costs' => '134.33',
            ],
            [
                'weight-max'   => '20.0',
                'weight-costs' => '137.13',
            ],
            [
                'weight-max'   => '20.5',
                'weight-costs' => '140.03',
            ],
            [
                'weight-max'   => '21.0',
                'weight-costs' => '142.93',
            ],
            [
                'weight-max'   => '21.5',
                'weight-costs' => '145.83',
            ],
            [
                'weight-max'   => '22.0',
                'weight-costs' => '148.73',
            ],
            [
                'weight-max'   => '22.5',
                'weight-costs' => '151.63',
            ],
            [
                'weight-max'   => '23.0',
                'weight-costs' => '154.53',
            ],
            [
                'weight-max'   => '23.5',
                'weight-costs' => '157.43',
            ],
            [
                'weight-max'   => '24.0',
                'weight-costs' => '160.33',
            ],
            [
                'weight-max'   => '24.5',
                'weight-costs' => '163.23',
            ],
            [
                'weight-max'   => '25.0',
                'weight-costs' => '166.13',
            ],
            [
                'weight-max'   => '25.5',
                'weight-costs' => '169.03',
            ],
            [
                'weight-max'   => '26.0',
                'weight-costs' => '171.93',
            ],
            [
                'weight-max'   => '26.5',
                'weight-costs' => '174.83',
            ],
            [
                'weight-max'   => '27.0',
                'weight-costs' => '177.73',
            ],
            [
                'weight-max'   => '27.5',
                'weight-costs' => '180.63',
            ],
            [
                'weight-max'   => '28.0',
                'weight-costs' => '183.53',
            ],
            [
                'weight-max'   => '28.5',
                'weight-costs' => '186.43',
            ],
            [
                'weight-max'   => '29.0',
                'weight-costs' => '189.33',
            ],
            [
                'weight-max'   => '29.5',
                'weight-costs' => '192.23',
            ],
            [
                'weight-max'   => '30.0',
                'weight-costs' => '195.13',
            ],
            [
                'weight-max'   => '31.0',
                'weight-costs' => '200.49',
            ],
            [
                'weight-max'   => '32.0',
                'weight-costs' => '205.85',
            ],
            [
                'weight-max'   => '33.0',
                'weight-costs' => '211.21',
            ],
            [
                'weight-max'   => '34.0',
                'weight-costs' => '216.57',
            ],
            [
                'weight-max'   => '35.0',
                'weight-costs' => '221.93',
            ],
            [
                'weight-max'   => '36.0',
                'weight-costs' => '227.29',
            ],
            [
                'weight-max'   => '37.0',
                'weight-costs' => '232.65',
            ],
            [
                'weight-max'   => '38.0',
                'weight-costs' => '238.01',
            ],
            [
                'weight-max'   => '39.0',
                'weight-costs' => '243.37',
            ],
            [
                'weight-max'   => '40.0',
                'weight-costs' => '248.73',
            ],
            [
                'weight-max'   => '41.0',
                'weight-costs' => '254.09',
            ],
            [
                'weight-max'   => '42.0',
                'weight-costs' => '259.45',
            ],
            [
                'weight-max'   => '43.0',
                'weight-costs' => '264.81',
            ],
            [
                'weight-max'   => '44.0',
                'weight-costs' => '270.17',
            ],
            [
                'weight-max'   => '45.0',
                'weight-costs' => '275.53',
            ],
            [
                'weight-max'   => '46.0',
                'weight-costs' => '280.89',
            ],
            [
                'weight-max'   => '47.0',
                'weight-costs' => '286.25',
            ],
            [
                'weight-max'   => '48.0',
                'weight-costs' => '291.61',
            ],
            [
                'weight-max'   => '49.0',
                'weight-costs' => '296.97',
            ],
            [
                'weight-max'   => '50.0',
                'weight-costs' => '302.33',
            ],
            [
                'weight-max'   => '51.0',
                'weight-costs' => '307.69',
            ],
            [
                'weight-max'   => '52.0',
                'weight-costs' => '313.05',
            ],
            [
                'weight-max'   => '53.0',
                'weight-costs' => '318.41',
            ],
            [
                'weight-max'   => '54.0',
                'weight-costs' => '323.77',
            ],
            [
                'weight-max'   => '55.0',
                'weight-costs' => '329.13',
            ],
            [
                'weight-max'   => '56.0',
                'weight-costs' => '334.49',
            ],
            [
                'weight-max'   => '57.0',
                'weight-costs' => '339.85',
            ],
            [
                'weight-max'   => '58.0',
                'weight-costs' => '345.21',
            ],
            [
                'weight-max'   => '59.0',
                'weight-costs' => '350.57',
            ],
            [
                'weight-max'   => '60.0',
                'weight-costs' => '355.93',
            ],
            [
                'weight-max'   => '61.0',
                'weight-costs' => '361.29',
            ],
            [
                'weight-max'   => '62.0',
                'weight-costs' => '366.65',
            ],
            [
                'weight-max'   => '63.0',
                'weight-costs' => '372.01',
            ],
            [
                'weight-max'   => '64.0',
                'weight-costs' => '377.37',
            ],
            [
                'weight-max'   => '65.0',
                'weight-costs' => '382.73',
            ],
            [
                'weight-max'   => '66.0',
                'weight-costs' => '388.09',
            ],
            [
                'weight-max'   => '67.0',
                'weight-costs' => '393.45',
            ],
            [
                'weight-max'   => '68.0',
                'weight-costs' => '398.81',
            ],
            [
                'weight-max'   => '69.0',
                'weight-costs' => '404.17',
            ],
            [
                'weight-max'   => '70.0',
                'weight-costs' => '409.53',
            ],
        ];
        $json = json_encode($data);

        return $json;
    }

    public static function getShippingZonePerKg(): string
    {
        $costsPerKg = \json_encode(
            [
                [
                    'from'  => '30',
                    'to'    => '70',
                    'zones' => [
                        '1'  => '1.50',
                        '2'  => '1.77',
                        '3'  => '1.88',
                        '4'  => '2.15',
                        '5'  => '2.28',
                        '6'  => '2.76',
                        '7'  => '3.45',
                        '8'  => '3.72',
                        '9'  => '4.47',
                        '10' => '5.36',
                    ],
                ],
                [
                    'from'  => '70',
                    'to'    => '300',
                    'zones' => [
                        '1'  => '1.68',
                        '2'  => '2.03',
                        '3'  => '2.18',
                        '4'  => '2.32',
                        '5'  => '2.51',
                        '6'  => '3.03',
                        '7'  => '3.94',
                        '8'  => '4.93',
                        '9'  => '5.91',
                        '10' => '7.10',
                    ],
                ],
                [
                    'from'  => '300',
                    'to'    => '99999',
                    'zones' => [
                        '1'  => '1.85',
                        '2'  => '2.24',
                        '3'  => '2.38',
                        '4'  => '2.56',
                        '5'  => '2.76',
                        '6'  => '3.34',
                        '7'  => '4.34',
                        '8'  => '5.64',
                        '9'  => '6.76',
                        '10' => '8.12',
                    ],
                ],
            ],
        );

        return $costsPerKg;
    }

    public static function getSurcharges(): string
    {
        $surcharges = json_encode(
            [
                [
                    'name'  => 'Treibstoff',
                    'costs' => '30',
                    'type'  => 'percent',
                ],
                [
                    'name'      => 'Peak',
                    'costs'     => '4.9',
                    'type'      => 'fixed',
                    'date-from' => date('Y-m-d', strtotime('31st October this year')),
                    'date-to'   => date('Y-m-d', strtotime('01st January next year')),
                ],
                [
                    'name'      => 'Peak (großes Paket)',
                    'costs'     => '43',
                    'type'      => 'fixed',
                    'date-from' => date('Y-m-d', strtotime('31st October this year')),
                    'date-to'   => date('Y-m-d', strtotime('01st January next year')),
                ],
            ],
            JSON_UNESCAPED_UNICODE
        );

        return $surcharges;
    }

    public static function getPickPack(): string
    {
        $pickPack = json_encode(
            [
                [
                    'weight-max'   => '1',
                    'weight-costs' => '1.3',
                ],
                [
                    'weight-max'   => '5',
                    'weight-costs' => '1.6',
                ],
                [
                    'weight-max'   => '10',
                    'weight-costs' => '2',
                ],
                [
                    'weight-max'   => '20',
                    'weight-costs' => '2.6',
                ],
                [
                    'weight-max'   => '60',
                    'weight-costs' => '3',
                ],
            ]
        );

        return $pickPack;
    }
}
