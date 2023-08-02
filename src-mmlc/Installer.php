<?php

namespace Grandeljay\DhlExpress;

class Installer
{
    public function getShippingZone1(): string
    {
        $data = array(
            array(
                'weight-max'   => '0.5',
                'weight-costs' => '12.20',
            ),
            array(
                'weight-max'   => '1.0',
                'weight-costs' => '12.49',
            ),
            array(
                'weight-max'   => '1.5',
                'weight-costs' => '12.84',
            ),
            array(
                'weight-max'   => '2.0',
                'weight-costs' => '13.19',
            ),
            array(
                'weight-max'   => '2.5',
                'weight-costs' => '13.60',
            ),
            array(
                'weight-max'   => '3.0',
                'weight-costs' => '14.03',
            ),
            array(
                'weight-max'   => '3.5',
                'weight-costs' => '14.46',
            ),
            array(
                'weight-max'   => '4.0',
                'weight-costs' => '14.89',
            ),
            array(
                'weight-max'   => '4.5',
                'weight-costs' => '15.32',
            ),
            array(
                'weight-max'   => '5.0',
                'weight-costs' => '15.75',
            ),
            array(
                'weight-max'   => '5.5',
                'weight-costs' => '16.26',
            ),
            array(
                'weight-max'   => '6.0',
                'weight-costs' => '16.77',
            ),
            array(
                'weight-max'   => '6.5',
                'weight-costs' => '17.28',
            ),
            array(
                'weight-max'   => '7.0',
                'weight-costs' => '17.79',
            ),
            array(
                'weight-max'   => '7.5',
                'weight-costs' => '18.30',
            ),
            array(
                'weight-max'   => '8.0',
                'weight-costs' => '18.81',
            ),
            array(
                'weight-max'   => '8.5',
                'weight-costs' => '19.32',
            ),
            array(
                'weight-max'   => '9.0',
                'weight-costs' => '19.83',
            ),
            array(
                'weight-max'   => '9.5',
                'weight-costs' => '20.34',
            ),
            array(
                'weight-max'   => '10.0',
                'weight-costs' => '20.85',
            ),
            array(
                'weight-max'   => '10.5',
                'weight-costs' => '21.43',
            ),
            array(
                'weight-max'   => '11.0',
                'weight-costs' => '22.01',
            ),
            array(
                'weight-max'   => '11.5',
                'weight-costs' => '22.59',
            ),
            array(
                'weight-max'   => '12.0',
                'weight-costs' => '23.17',
            ),
            array(
                'weight-max'   => '12.5',
                'weight-costs' => '23.75',
            ),
            array(
                'weight-max'   => '13.0',
                'weight-costs' => '24.33',
            ),
            array(
                'weight-max'   => '13.5',
                'weight-costs' => '24.91',
            ),
            array(
                'weight-max'   => '14.0',
                'weight-costs' => '25.49',
            ),
            array(
                'weight-max'   => '14.5',
                'weight-costs' => '26.07',
            ),
            array(
                'weight-max'   => '15.0',
                'weight-costs' => '26.65',
            ),
            array(
                'weight-max'   => '15.5',
                'weight-costs' => '27.23',
            ),
            array(
                'weight-max'   => '16.0',
                'weight-costs' => '27.81',
            ),
            array(
                'weight-max'   => '16.5',
                'weight-costs' => '28.39',
            ),
            array(
                'weight-max'   => '17.0',
                'weight-costs' => '28.97',
            ),
            array(
                'weight-max'   => '17.5',
                'weight-costs' => '29.55',
            ),
            array(
                'weight-max'   => '18.0',
                'weight-costs' => '30.13',
            ),
            array(
                'weight-max'   => '18.5',
                'weight-costs' => '30.71',
            ),
            array(
                'weight-max'   => '19.0',
                'weight-costs' => '31.29',
            ),
            array(
                'weight-max'   => '19.5',
                'weight-costs' => '31.87',
            ),
            array(
                'weight-max'   => '20.0',
                'weight-costs' => '32.45',
            ),
            array(
                'weight-max'   => '20.5',
                'weight-costs' => '33.12',
            ),
            array(
                'weight-max'   => '21.0',
                'weight-costs' => '33.79',
            ),
            array(
                'weight-max'   => '21.5',
                'weight-costs' => '34.46',
            ),
            array(
                'weight-max'   => '22.0',
                'weight-costs' => '35.13',
            ),
            array(
                'weight-max'   => '22.5',
                'weight-costs' => '35.80',
            ),
            array(
                'weight-max'   => '23.0',
                'weight-costs' => '36.47',
            ),
            array(
                'weight-max'   => '23.5',
                'weight-costs' => '37.14',
            ),
            array(
                'weight-max'   => '24.0',
                'weight-costs' => '37.81',
            ),
            array(
                'weight-max'   => '24.5',
                'weight-costs' => '38.48',
            ),
            array(
                'weight-max'   => '25.0',
                'weight-costs' => '39.15',
            ),
            array(
                'weight-max'   => '25.5',
                'weight-costs' => '39.82',
            ),
            array(
                'weight-max'   => '26.0',
                'weight-costs' => '40.49',
            ),
            array(
                'weight-max'   => '26.5',
                'weight-costs' => '41.16',
            ),
            array(
                'weight-max'   => '27.0',
                'weight-costs' => '41.83',
            ),
            array(
                'weight-max'   => '27.5',
                'weight-costs' => '42.50',
            ),
            array(
                'weight-max'   => '28.0',
                'weight-costs' => '43.17',
            ),
            array(
                'weight-max'   => '28.5',
                'weight-costs' => '43.84',
            ),
            array(
                'weight-max'   => '29.0',
                'weight-costs' => '44.51',
            ),
            array(
                'weight-max'   => '29.5',
                'weight-costs' => '45.18',
            ),
            array(
                'weight-max'   => '30.0',
                'weight-costs' => '45.85',
            ),
            array(
                'weight-max'   => '31.0',
                'weight-costs' => '47.35',
            ),
            array(
                'weight-max'   => '32.0',
                'weight-costs' => '48.85',
            ),
            array(
                'weight-max'   => '33.0',
                'weight-costs' => '50.35',
            ),
            array(
                'weight-max'   => '34.0',
                'weight-costs' => '51.85',
            ),
            array(
                'weight-max'   => '35.0',
                'weight-costs' => '53.35',
            ),
            array(
                'weight-max'   => '36.0',
                'weight-costs' => '54.85',
            ),
            array(
                'weight-max'   => '37.0',
                'weight-costs' => '56.35',
            ),
            array(
                'weight-max'   => '38.0',
                'weight-costs' => '57.85',
            ),
            array(
                'weight-max'   => '39.0',
                'weight-costs' => '59.35',
            ),
            array(
                'weight-max'   => '40.0',
                'weight-costs' => '60.85',
            ),
            array(
                'weight-max'   => '41.0',
                'weight-costs' => '62.35',
            ),
            array(
                'weight-max'   => '42.0',
                'weight-costs' => '63.85',
            ),
            array(
                'weight-max'   => '43.0',
                'weight-costs' => '65.35',
            ),
            array(
                'weight-max'   => '44.0',
                'weight-costs' => '66.85',
            ),
            array(
                'weight-max'   => '45.0',
                'weight-costs' => '68.35',
            ),
            array(
                'weight-max'   => '46.0',
                'weight-costs' => '69.85',
            ),
            array(
                'weight-max'   => '47.0',
                'weight-costs' => '71.35',
            ),
            array(
                'weight-max'   => '48.0',
                'weight-costs' => '72.85',
            ),
            array(
                'weight-max'   => '49.0',
                'weight-costs' => '74.35',
            ),
            array(
                'weight-max'   => '50.0',
                'weight-costs' => '75.85',
            ),
            array(
                'weight-max'   => '51.0',
                'weight-costs' => '77.35',
            ),
            array(
                'weight-max'   => '52.0',
                'weight-costs' => '78.85',
            ),
            array(
                'weight-max'   => '53.0',
                'weight-costs' => '80.35',
            ),
            array(
                'weight-max'   => '54.0',
                'weight-costs' => '81.85',
            ),
            array(
                'weight-max'   => '55.0',
                'weight-costs' => '83.35',
            ),
            array(
                'weight-max'   => '56.0',
                'weight-costs' => '84.85',
            ),
            array(
                'weight-max'   => '57.0',
                'weight-costs' => '86.35',
            ),
            array(
                'weight-max'   => '58.0',
                'weight-costs' => '87.85',
            ),
            array(
                'weight-max'   => '59.0',
                'weight-costs' => '89.35',
            ),
            array(
                'weight-max'   => '60.0',
                'weight-costs' => '90.85',
            ),
            array(
                'weight-max'   => '61.0',
                'weight-costs' => '92.35',
            ),
            array(
                'weight-max'   => '62.0',
                'weight-costs' => '93.85',
            ),
            array(
                'weight-max'   => '63.0',
                'weight-costs' => '95.35',
            ),
            array(
                'weight-max'   => '64.0',
                'weight-costs' => '96.85',
            ),
            array(
                'weight-max'   => '65.0',
                'weight-costs' => '98.35',
            ),
            array(
                'weight-max'   => '66.0',
                'weight-costs' => '99.85',
            ),
            array(
                'weight-max'   => '67.0',
                'weight-costs' => '101.35',
            ),
            array(
                'weight-max'   => '68.0',
                'weight-costs' => '102.85',
            ),
            array(
                'weight-max'   => '69.0',
                'weight-costs' => '104.35',
            ),
            array(
                'weight-max'   => '70.0',
                'weight-costs' => '105.85',
            ),
        );
        $json = json_encode($data);

        return $json;
    }

    public function getShippingZone2(): string
    {
        $data = array(
            array(
                'weight-max'   => '0.5',
                'weight-costs' => '12.20',
            ),
            array(
                'weight-max'   => '1.0',
                'weight-costs' => '13.75',
            ),
            array(
                'weight-max'   => '1.5',
                'weight-costs' => '14.13',
            ),
            array(
                'weight-max'   => '2.0',
                'weight-costs' => '14.51',
            ),
            array(
                'weight-max'   => '2.5',
                'weight-costs' => '14.96',
            ),
            array(
                'weight-max'   => '3.0',
                'weight-costs' => '15.43',
            ),
            array(
                'weight-max'   => '3.5',
                'weight-costs' => '15.90',
            ),
            array(
                'weight-max'   => '4.0',
                'weight-costs' => '16.37',
            ),
            array(
                'weight-max'   => '4.5',
                'weight-costs' => '16.84',
            ),
            array(
                'weight-max'   => '5.0',
                'weight-costs' => '17.31',
            ),
            array(
                'weight-max'   => '5.5',
                'weight-costs' => '17.87',
            ),
            array(
                'weight-max'   => '6.0',
                'weight-costs' => '18.43',
            ),
            array(
                'weight-max'   => '6.5',
                'weight-costs' => '18.99',
            ),
            array(
                'weight-max'   => '7.0',
                'weight-costs' => '19.55',
            ),
            array(
                'weight-max'   => '7.5',
                'weight-costs' => '20.11',
            ),
            array(
                'weight-max'   => '8.0',
                'weight-costs' => '20.67',
            ),
            array(
                'weight-max'   => '8.5',
                'weight-costs' => '21.23',
            ),
            array(
                'weight-max'   => '9.0',
                'weight-costs' => '21.79',
            ),
            array(
                'weight-max'   => '9.5',
                'weight-costs' => '22.35',
            ),
            array(
                'weight-max'   => 10.,
                'weight-costs' => '22.91',
            ),
            array(
                'weight-max'   => 10.,
                'weight-costs' => '23.58',
            ),
            array(
                'weight-max'   => 11.,
                'weight-costs' => '24.25',
            ),
            array(
                'weight-max'   => 11.,
                'weight-costs' => '24.92',
            ),
            array(
                'weight-max'   => 12.,
                'weight-costs' => '25.59',
            ),
            array(
                'weight-max'   => 12.,
                'weight-costs' => '26.26',
            ),
            array(
                'weight-max'   => 13.,
                'weight-costs' => '26.93',
            ),
            array(
                'weight-max'   => 13.,
                'weight-costs' => '27.60',
            ),
            array(
                'weight-max'   => 14.,
                'weight-costs' => '28.27',
            ),
            array(
                'weight-max'   => 14.,
                'weight-costs' => '28.94',
            ),
            array(
                'weight-max'   => 15.,
                'weight-costs' => '29.61',
            ),
            array(
                'weight-max'   => 15.,
                'weight-costs' => '30.28',
            ),
            array(
                'weight-max'   => 16.,
                'weight-costs' => '30.95',
            ),
            array(
                'weight-max'   => 16.,
                'weight-costs' => '31.62',
            ),
            array(
                'weight-max'   => 17.,
                'weight-costs' => '32.29',
            ),
            array(
                'weight-max'   => 17.,
                'weight-costs' => '32.96',
            ),
            array(
                'weight-max'   => 18.,
                'weight-costs' => '33.63',
            ),
            array(
                'weight-max'   => 18.,
                'weight-costs' => '34.30',
            ),
            array(
                'weight-max'   => 19.,
                'weight-costs' => '34.97',
            ),
            array(
                'weight-max'   => 19.,
                'weight-costs' => '35.64',
            ),
            array(
                'weight-max'   => 20.,
                'weight-costs' => '36.31',
            ),
            array(
                'weight-max'   => 20.,
                'weight-costs' => '37.08',
            ),
            array(
                'weight-max'   => 21.,
                'weight-costs' => '37.85',
            ),
            array(
                'weight-max'   => 21.,
                'weight-costs' => '38.62',
            ),
            array(
                'weight-max'   => 22.,
                'weight-costs' => '39.39',
            ),
            array(
                'weight-max'   => 22.,
                'weight-costs' => '40.16',
            ),
            array(
                'weight-max'   => 23.,
                'weight-costs' => '40.93',
            ),
            array(
                'weight-max'   => 23.,
                'weight-costs' => '41.70',
            ),
            array(
                'weight-max'   => 24.,
                'weight-costs' => '42.47',
            ),
            array(
                'weight-max'   => 24.,
                'weight-costs' => '43.24',
            ),
            array(
                'weight-max'   => 25.,
                'weight-costs' => '44.01',
            ),
            array(
                'weight-max'   => 25.,
                'weight-costs' => '44.78',
            ),
            array(
                'weight-max'   => 26.,
                'weight-costs' => '45.55',
            ),
            array(
                'weight-max'   => 26.,
                'weight-costs' => '46.32',
            ),
            array(
                'weight-max'   => 27.,
                'weight-costs' => '47.09',
            ),
            array(
                'weight-max'   => 27.,
                'weight-costs' => '47.86',
            ),
            array(
                'weight-max'   => 28.,
                'weight-costs' => '48.63',
            ),
            array(
                'weight-max'   => 28.,
                'weight-costs' => '49.40',
            ),
            array(
                'weight-max'   => 29.,
                'weight-costs' => '50.17',
            ),
            array(
                'weight-max'   => 29.,
                'weight-costs' => '50.94',
            ),
            array(
                'weight-max'   => 30.,
                'weight-costs' => '51.71',
            ),
            array(
                'weight-max'   => 31.,
                'weight-costs' => '53.48',
            ),
            array(
                'weight-max'   => 32.,
                'weight-costs' => '55.25',
            ),
            array(
                'weight-max'   => 33.,
                'weight-costs' => '57.02',
            ),
            array(
                'weight-max'   => 34.,
                'weight-costs' => '58.79',
            ),
            array(
                'weight-max'   => 35.,
                'weight-costs' => '60.56',
            ),
            array(
                'weight-max'   => 36.,
                'weight-costs' => '62.33',
            ),
            array(
                'weight-max'   => 37.,
                'weight-costs' => '64.10',
            ),
            array(
                'weight-max'   => 38.,
                'weight-costs' => '65.87',
            ),
            array(
                'weight-max'   => 39.,
                'weight-costs' => '67.64',
            ),
            array(
                'weight-max'   => 40.,
                'weight-costs' => '69.41',
            ),
            array(
                'weight-max'   => 41.,
                'weight-costs' => '71.18',
            ),
            array(
                'weight-max'   => 42.,
                'weight-costs' => '72.95',
            ),
            array(
                'weight-max'   => 43.,
                'weight-costs' => '74.72',
            ),
            array(
                'weight-max'   => 44.,
                'weight-costs' => '76.49',
            ),
            array(
                'weight-max'   => 45.,
                'weight-costs' => '78.26',
            ),
            array(
                'weight-max'   => 46.,
                'weight-costs' => '80.03',
            ),
            array(
                'weight-max'   => 47.,
                'weight-costs' => '81.80',
            ),
            array(
                'weight-max'   => 48.,
                'weight-costs' => '83.57',
            ),
            array(
                'weight-max'   => 49.,
                'weight-costs' => '85.34',
            ),
            array(
                'weight-max'   => 50.,
                'weight-costs' => '87.11',
            ),
            array(
                'weight-max'   => 51.,
                'weight-costs' => '88.88',
            ),
            array(
                'weight-max'   => 52.,
                'weight-costs' => '90.65',
            ),
            array(
                'weight-max'   => 53.,
                'weight-costs' => '92.42',
            ),
            array(
                'weight-max'   => 54.,
                'weight-costs' => '94.19',
            ),
            array(
                'weight-max'   => 55.,
                'weight-costs' => '95.96',
            ),
            array(
                'weight-max'   => 56.,
                'weight-costs' => '97.73',
            ),
            array(
                'weight-max'   => 57.,
                'weight-costs' => '99.50',
            ),
            array(
                'weight-max'   => 58.,
                'weight-costs' => '101.27',
            ),
            array(
                'weight-max'   => 59.,
                'weight-costs' => '103.04',
            ),
            array(
                'weight-max'   => 60.,
                'weight-costs' => '104.81',
            ),
            array(
                'weight-max'   => 61.,
                'weight-costs' => '106.58',
            ),
            array(
                'weight-max'   => 62.,
                'weight-costs' => '108.35',
            ),
            array(
                'weight-max'   => 63.,
                'weight-costs' => '110.12',
            ),
            array(
                'weight-max'   => 64.,
                'weight-costs' => '111.89',
            ),
            array(
                'weight-max'   => 65.,
                'weight-costs' => '113.66',
            ),
            array(
                'weight-max'   => 66.,
                'weight-costs' => '115.43',
            ),
            array(
                'weight-max'   => 67.,
                'weight-costs' => '117.20',
            ),
            array(
                'weight-max'   => 68.,
                'weight-costs' => '118.97',
            ),
            array(
                'weight-max'   => 69.,
                'weight-costs' => '120.74',
            ),
            array(
                'weight-max'   => 70.,
                'weight-costs' => '122.51',
            ),
        );
        $json = json_encode($data);

        return $json;
    }

    public function getShippingZone3(): string
    {
        $data = array(
            array(
                'weight-max'   => '0.5',
                'weight-costs' => '12.20',
            ),
            array(
                'weight-max'   => '1.0',
                'weight-costs' => '14.45',
            ),
            array(
                'weight-max'   => '1.5',
                'weight-costs' => '14.87',
            ),
            array(
                'weight-max'   => '2.0',
                'weight-costs' => '15.29',
            ),
            array(
                'weight-max'   => '2.5',
                'weight-costs' => '15.78',
            ),
            array(
                'weight-max'   => '3.0',
                'weight-costs' => '16.30',
            ),
            array(
                'weight-max'   => '3.5',
                'weight-costs' => '16.82',
            ),
            array(
                'weight-max'   => '4.0',
                'weight-costs' => '17.34',
            ),
            array(
                'weight-max'   => '4.5',
                'weight-costs' => '17.86',
            ),
            array(
                'weight-max'   => '5.0',
                'weight-costs' => '18.38',
            ),
            array(
                'weight-max'   => '5.5',
                'weight-costs' => '19.00',
            ),
            array(
                'weight-max'   => '6.0',
                'weight-costs' => '19.62',
            ),
            array(
                'weight-max'   => '6.5',
                'weight-costs' => '20.24',
            ),
            array(
                'weight-max'   => '7.0',
                'weight-costs' => '20.86',
            ),
            array(
                'weight-max'   => '7.5',
                'weight-costs' => '21.48',
            ),
            array(
                'weight-max'   => '8.0',
                'weight-costs' => '22.10',
            ),
            array(
                'weight-max'   => '8.5',
                'weight-costs' => '22.72',
            ),
            array(
                'weight-max'   => '9.0',
                'weight-costs' => '23.34',
            ),
            array(
                'weight-max'   => '9.5',
                'weight-costs' => '23.96',
            ),
            array(
                'weight-max'   => '10.0',
                'weight-costs' => '24.58',
            ),
            array(
                'weight-max'   => '10.5',
                'weight-costs' => '25.33',
            ),
            array(
                'weight-max'   => '11.0',
                'weight-costs' => '26.08',
            ),
            array(
                'weight-max'   => '11.5',
                'weight-costs' => '26.83',
            ),
            array(
                'weight-max'   => '12.0',
                'weight-costs' => '27.58',
            ),
            array(
                'weight-max'   => '12.5',
                'weight-costs' => '28.33',
            ),
            array(
                'weight-max'   => '13.0',
                'weight-costs' => '29.08',
            ),
            array(
                'weight-max'   => '13.5',
                'weight-costs' => '29.83',
            ),
            array(
                'weight-max'   => '14.0',
                'weight-costs' => '30.58',
            ),
            array(
                'weight-max'   => '14.5',
                'weight-costs' => '31.33',
            ),
            array(
                'weight-max'   => '15.0',
                'weight-costs' => '32.08',
            ),
            array(
                'weight-max'   => '15.5',
                'weight-costs' => '32.83',
            ),
            array(
                'weight-max'   => '16.0',
                'weight-costs' => '33.58',
            ),
            array(
                'weight-max'   => '16.5',
                'weight-costs' => '34.33',
            ),
            array(
                'weight-max'   => '17.0',
                'weight-costs' => '35.08',
            ),
            array(
                'weight-max'   => '17.5',
                'weight-costs' => '35.83',
            ),
            array(
                'weight-max'   => '18.0',
                'weight-costs' => '36.58',
            ),
            array(
                'weight-max'   => '18.5',
                'weight-costs' => '37.33',
            ),
            array(
                'weight-max'   => '19.0',
                'weight-costs' => '38.08',
            ),
            array(
                'weight-max'   => '19.5',
                'weight-costs' => '38.83',
            ),
            array(
                'weight-max'   => '20.0',
                'weight-costs' => '39.58',
            ),
            array(
                'weight-max'   => '20.5',
                'weight-costs' => '40.42',
            ),
            array(
                'weight-max'   => '21.0',
                'weight-costs' => '41.26',
            ),
            array(
                'weight-max'   => '21.5',
                'weight-costs' => '42.10',
            ),
            array(
                'weight-max'   => '22.0',
                'weight-costs' => '42.94',
            ),
            array(
                'weight-max'   => '22.5',
                'weight-costs' => '43.78',
            ),
            array(
                'weight-max'   => '23.0',
                'weight-costs' => '44.62',
            ),
            array(
                'weight-max'   => '23.5',
                'weight-costs' => '45.46',
            ),
            array(
                'weight-max'   => '24.0',
                'weight-costs' => '46.30',
            ),
            array(
                'weight-max'   => '24.5',
                'weight-costs' => '47.14',
            ),
            array(
                'weight-max'   => '25.0',
                'weight-costs' => '47.98',
            ),
            array(
                'weight-max'   => '25.5',
                'weight-costs' => '48.82',
            ),
            array(
                'weight-max'   => '26.0',
                'weight-costs' => '49.66',
            ),
            array(
                'weight-max'   => '26.5',
                'weight-costs' => '50.50',
            ),
            array(
                'weight-max'   => '27.0',
                'weight-costs' => '51.34',
            ),
            array(
                'weight-max'   => '27.5',
                'weight-costs' => '52.18',
            ),
            array(
                'weight-max'   => '28.0',
                'weight-costs' => '53.02',
            ),
            array(
                'weight-max'   => '28.5',
                'weight-costs' => '53.86',
            ),
            array(
                'weight-max'   => '29.0',
                'weight-costs' => '54.70',
            ),
            array(
                'weight-max'   => '29.5',
                'weight-costs' => '55.54',
            ),
            array(
                'weight-max'   => '30.0',
                'weight-costs' => '56.38',
            ),
            array(
                'weight-max'   => '31.0',
                'weight-costs' => '58.26',
            ),
            array(
                'weight-max'   => '32.0',
                'weight-costs' => '60.14',
            ),
            array(
                'weight-max'   => '33.0',
                'weight-costs' => '62.02',
            ),
            array(
                'weight-max'   => '34.0',
                'weight-costs' => '63.90',
            ),
            array(
                'weight-max'   => '35.0',
                'weight-costs' => '65.78',
            ),
            array(
                'weight-max'   => '36.0',
                'weight-costs' => '67.66',
            ),
            array(
                'weight-max'   => '37.0',
                'weight-costs' => '69.54',
            ),
            array(
                'weight-max'   => '38.0',
                'weight-costs' => '71.42',
            ),
            array(
                'weight-max'   => '39.0',
                'weight-costs' => '73.30',
            ),
            array(
                'weight-max'   => '40.0',
                'weight-costs' => '75.18',
            ),
            array(
                'weight-max'   => '41.0',
                'weight-costs' => '77.06',
            ),
            array(
                'weight-max'   => '42.0',
                'weight-costs' => '78.94',
            ),
            array(
                'weight-max'   => '43.0',
                'weight-costs' => '80.82',
            ),
            array(
                'weight-max'   => '44.0',
                'weight-costs' => '82.70',
            ),
            array(
                'weight-max'   => '45.0',
                'weight-costs' => '84.58',
            ),
            array(
                'weight-max'   => '46.0',
                'weight-costs' => '86.46',
            ),
            array(
                'weight-max'   => '47.0',
                'weight-costs' => '88.34',
            ),
            array(
                'weight-max'   => '48.0',
                'weight-costs' => '90.22',
            ),
            array(
                'weight-max'   => '49.0',
                'weight-costs' => '92.10',
            ),
            array(
                'weight-max'   => '50.0',
                'weight-costs' => '93.98',
            ),
            array(
                'weight-max'   => '51.0',
                'weight-costs' => '95.86',
            ),
            array(
                'weight-max'   => '52.0',
                'weight-costs' => '97.74',
            ),
            array(
                'weight-max'   => '53.0',
                'weight-costs' => '99.62',
            ),
            array(
                'weight-max'   => '54.0',
                'weight-costs' => '101.50',
            ),
            array(
                'weight-max'   => '55.0',
                'weight-costs' => '103.38',
            ),
            array(
                'weight-max'   => '56.0',
                'weight-costs' => '105.26',
            ),
            array(
                'weight-max'   => '57.0',
                'weight-costs' => '107.14',
            ),
            array(
                'weight-max'   => '58.0',
                'weight-costs' => '109.02',
            ),
            array(
                'weight-max'   => '59.0',
                'weight-costs' => '110.90',
            ),
            array(
                'weight-max'   => '60.0',
                'weight-costs' => '112.78',
            ),
            array(
                'weight-max'   => '61.0',
                'weight-costs' => '114.66',
            ),
            array(
                'weight-max'   => '62.0',
                'weight-costs' => '116.54',
            ),
            array(
                'weight-max'   => '63.0',
                'weight-costs' => '118.42',
            ),
            array(
                'weight-max'   => '64.0',
                'weight-costs' => '120.30',
            ),
            array(
                'weight-max'   => '65.0',
                'weight-costs' => '122.18',
            ),
            array(
                'weight-max'   => '66.0',
                'weight-costs' => '124.06',
            ),
            array(
                'weight-max'   => '67.0',
                'weight-costs' => '125.94',
            ),
            array(
                'weight-max'   => '68.0',
                'weight-costs' => '127.82',
            ),
            array(
                'weight-max'   => '69.0',
                'weight-costs' => '129.70',
            ),
            array(
                'weight-max'   => '70.0',
                'weight-costs' => '131.58',
            ),
        );
        $json = json_encode($data);

        return $json;
    }

    public function getShippingZone4(): string
    {
        $data = array(
            array(
                'weight-max'   => '0.5',
                'weight-costs' => '12.20',
            ),
            array(
                'weight-max'   => '1.0',
                'weight-costs' => '15.19',
            ),
            array(
                'weight-max'   => '1.5',
                'weight-costs' => '15.66',
            ),
            array(
                'weight-max'   => '2.0',
                'weight-costs' => '16.13',
            ),
            array(
                'weight-max'   => '2.5',
                'weight-costs' => '16.67',
            ),
            array(
                'weight-max'   => '3.0',
                'weight-costs' => '17.24',
            ),
            array(
                'weight-max'   => '3.5',
                'weight-costs' => '17.81',
            ),
            array(
                'weight-max'   => '4.0',
                'weight-costs' => '18.38',
            ),
            array(
                'weight-max'   => '4.5',
                'weight-costs' => '18.95',
            ),
            array(
                'weight-max'   => '5.0',
                'weight-costs' => '19.52',
            ),
            array(
                'weight-max'   => '5.5',
                'weight-costs' => '20.20',
            ),
            array(
                'weight-max'   => '6.0',
                'weight-costs' => '20.88',
            ),
            array(
                'weight-max'   => '6.5',
                'weight-costs' => '21.56',
            ),
            array(
                'weight-max'   => '7.0',
                'weight-costs' => '22.24',
            ),
            array(
                'weight-max'   => '7.5',
                'weight-costs' => '22.92',
            ),
            array(
                'weight-max'   => '8.0',
                'weight-costs' => '23.60',
            ),
            array(
                'weight-max'   => '8.5',
                'weight-costs' => '24.28',
            ),
            array(
                'weight-max'   => '9.0',
                'weight-costs' => '24.96',
            ),
            array(
                'weight-max'   => '9.5',
                'weight-costs' => '25.64',
            ),
            array(
                'weight-max'   => '10.0',
                'weight-costs' => '26.32',
            ),
            array(
                'weight-max'   => '10.5',
                'weight-costs' => '27.13',
            ),
            array(
                'weight-max'   => '11.0',
                'weight-costs' => '27.94',
            ),
            array(
                'weight-max'   => '11.5',
                'weight-costs' => '28.75',
            ),
            array(
                'weight-max'   => '12.0',
                'weight-costs' => '29.56',
            ),
            array(
                'weight-max'   => '12.5',
                'weight-costs' => '30.37',
            ),
            array(
                'weight-max'   => '13.0',
                'weight-costs' => '31.18',
            ),
            array(
                'weight-max'   => '13.5',
                'weight-costs' => '31.99',
            ),
            array(
                'weight-max'   => '14.0',
                'weight-costs' => '32.80',
            ),
            array(
                'weight-max'   => '14.5',
                'weight-costs' => '33.61',
            ),
            array(
                'weight-max'   => '15.0',
                'weight-costs' => '34.42',
            ),
            array(
                'weight-max'   => '15.5',
                'weight-costs' => '35.23',
            ),
            array(
                'weight-max'   => '16.0',
                'weight-costs' => '36.04',
            ),
            array(
                'weight-max'   => '16.5',
                'weight-costs' => '36.85',
            ),
            array(
                'weight-max'   => '17.0',
                'weight-costs' => '37.66',
            ),
            array(
                'weight-max'   => '17.5',
                'weight-costs' => '38.47',
            ),
            array(
                'weight-max'   => '18.0',
                'weight-costs' => '39.28',
            ),
            array(
                'weight-max'   => '18.5',
                'weight-costs' => '40.09',
            ),
            array(
                'weight-max'   => '19.0',
                'weight-costs' => '40.90',
            ),
            array(
                'weight-max'   => '19.5',
                'weight-costs' => '41.71',
            ),
            array(
                'weight-max'   => '20.0',
                'weight-costs' => '42.52',
            ),
            array(
                'weight-max'   => '20.5',
                'weight-costs' => '43.45',
            ),
            array(
                'weight-max'   => '21.0',
                'weight-costs' => '44.38',
            ),
            array(
                'weight-max'   => '21.5',
                'weight-costs' => '45.31',
            ),
            array(
                'weight-max'   => '22.0',
                'weight-costs' => '46.24',
            ),
            array(
                'weight-max'   => '22.5',
                'weight-costs' => '47.17',
            ),
            array(
                'weight-max'   => '23.0',
                'weight-costs' => '48.10',
            ),
            array(
                'weight-max'   => '23.5',
                'weight-costs' => '49.03',
            ),
            array(
                'weight-max'   => '24.0',
                'weight-costs' => '49.96',
            ),
            array(
                'weight-max'   => '24.5',
                'weight-costs' => '50.89',
            ),
            array(
                'weight-max'   => '25.0',
                'weight-costs' => '51.82',
            ),
            array(
                'weight-max'   => '25.5',
                'weight-costs' => '52.75',
            ),
            array(
                'weight-max'   => '26.0',
                'weight-costs' => '53.68',
            ),
            array(
                'weight-max'   => '26.5',
                'weight-costs' => '54.61',
            ),
            array(
                'weight-max'   => '27.0',
                'weight-costs' => '55.54',
            ),
            array(
                'weight-max'   => '27.5',
                'weight-costs' => '56.47',
            ),
            array(
                'weight-max'   => '28.0',
                'weight-costs' => '57.40',
            ),
            array(
                'weight-max'   => '28.5',
                'weight-costs' => '58.33',
            ),
            array(
                'weight-max'   => '29.0',
                'weight-costs' => '59.26',
            ),
            array(
                'weight-max'   => '29.5',
                'weight-costs' => '60.19',
            ),
            array(
                'weight-max'   => '30.0',
                'weight-costs' => '61.12',
            ),
            array(
                'weight-max'   => '31.0',
                'weight-costs' => '63.27',
            ),
            array(
                'weight-max'   => '32.0',
                'weight-costs' => '65.42',
            ),
            array(
                'weight-max'   => '33.0',
                'weight-costs' => '67.57',
            ),
            array(
                'weight-max'   => '34.0',
                'weight-costs' => '69.72',
            ),
            array(
                'weight-max'   => '35.0',
                'weight-costs' => '71.87',
            ),
            array(
                'weight-max'   => '36.0',
                'weight-costs' => '74.02',
            ),
            array(
                'weight-max'   => '37.0',
                'weight-costs' => '76.17',
            ),
            array(
                'weight-max'   => '38.0',
                'weight-costs' => '78.32',
            ),
            array(
                'weight-max'   => '39.0',
                'weight-costs' => '80.47',
            ),
            array(
                'weight-max'   => '40.0',
                'weight-costs' => '82.62',
            ),
            array(
                'weight-max'   => '41.0',
                'weight-costs' => '84.77',
            ),
            array(
                'weight-max'   => '42.0',
                'weight-costs' => '86.92',
            ),
            array(
                'weight-max'   => '43.0',
                'weight-costs' => '89.07',
            ),
            array(
                'weight-max'   => '44.0',
                'weight-costs' => '91.22',
            ),
            array(
                'weight-max'   => '45.0',
                'weight-costs' => '93.37',
            ),
            array(
                'weight-max'   => '46.0',
                'weight-costs' => '95.52',
            ),
            array(
                'weight-max'   => '47.0',
                'weight-costs' => '97.67',
            ),
            array(
                'weight-max'   => '48.0',
                'weight-costs' => '99.82',
            ),
            array(
                'weight-max'   => '49.0',
                'weight-costs' => '101.97',
            ),
            array(
                'weight-max'   => '50.0',
                'weight-costs' => '104.12',
            ),
            array(
                'weight-max'   => '51.0',
                'weight-costs' => '106.27',
            ),
            array(
                'weight-max'   => '52.0',
                'weight-costs' => '108.42',
            ),
            array(
                'weight-max'   => '53.0',
                'weight-costs' => '110.57',
            ),
            array(
                'weight-max'   => '54.0',
                'weight-costs' => '112.72',
            ),
            array(
                'weight-max'   => '55.0',
                'weight-costs' => '114.87',
            ),
            array(
                'weight-max'   => '56.0',
                'weight-costs' => '117.02',
            ),
            array(
                'weight-max'   => '57.0',
                'weight-costs' => '119.17',
            ),
            array(
                'weight-max'   => '58.0',
                'weight-costs' => '121.32',
            ),
            array(
                'weight-max'   => '59.0',
                'weight-costs' => '123.47',
            ),
            array(
                'weight-max'   => '60.0',
                'weight-costs' => '125.62',
            ),
            array(
                'weight-max'   => '61.0',
                'weight-costs' => '127.77',
            ),
            array(
                'weight-max'   => '62.0',
                'weight-costs' => '129.92',
            ),
            array(
                'weight-max'   => '63.0',
                'weight-costs' => '132.07',
            ),
            array(
                'weight-max'   => '64.0',
                'weight-costs' => '134.22',
            ),
            array(
                'weight-max'   => '65.0',
                'weight-costs' => '136.37',
            ),
            array(
                'weight-max'   => '66.0',
                'weight-costs' => '138.52',
            ),
            array(
                'weight-max'   => '67.0',
                'weight-costs' => '140.67',
            ),
            array(
                'weight-max'   => '68.0',
                'weight-costs' => '142.82',
            ),
            array(
                'weight-max'   => '69.0',
                'weight-costs' => '144.97',
            ),
            array(
                'weight-max'   => '70.0',
                'weight-costs' => '147.12',
            ),
        );
        $json = json_encode($data);

        return $json;
    }

    public function getShippingZone5(): string
    {
        $data = array(
            array(
                'weight-max'   => '0.5',
                'weight-costs' => '12.20',
            ),
            array(
                'weight-max'   => '1.0',
                'weight-costs' => '16.67',
            ),
            array(
                'weight-max'   => '1.5',
                'weight-costs' => '17.14',
            ),
            array(
                'weight-max'   => '2.0',
                'weight-costs' => '17.61',
            ),
            array(
                'weight-max'   => '2.5',
                'weight-costs' => '18.15',
            ),
            array(
                'weight-max'   => '3.0',
                'weight-costs' => '18.72',
            ),
            array(
                'weight-max'   => '3.5',
                'weight-costs' => '19.29',
            ),
            array(
                'weight-max'   => '4.0',
                'weight-costs' => '19.86',
            ),
            array(
                'weight-max'   => '4.5',
                'weight-costs' => '20.43',
            ),
            array(
                'weight-max'   => '5.0',
                'weight-costs' => '21.00',
            ),
            array(
                'weight-max'   => '5.5',
                'weight-costs' => '21.68',
            ),
            array(
                'weight-max'   => '6.0',
                'weight-costs' => '22.36',
            ),
            array(
                'weight-max'   => '6.5',
                'weight-costs' => '23.04',
            ),
            array(
                'weight-max'   => '7.0',
                'weight-costs' => '23.72',
            ),
            array(
                'weight-max'   => '7.5',
                'weight-costs' => '24.40',
            ),
            array(
                'weight-max'   => '8.0',
                'weight-costs' => '25.08',
            ),
            array(
                'weight-max'   => '8.5',
                'weight-costs' => '25.76',
            ),
            array(
                'weight-max'   => '9.0',
                'weight-costs' => '26.44',
            ),
            array(
                'weight-max'   => '9.5',
                'weight-costs' => '27.12',
            ),
            array(
                'weight-max'   => '10.0',
                'weight-costs' => '27.80',
            ),
            array(
                'weight-max'   => '10.5',
                'weight-costs' => '28.66',
            ),
            array(
                'weight-max'   => '11.0',
                'weight-costs' => '29.52',
            ),
            array(
                'weight-max'   => '11.5',
                'weight-costs' => '30.38',
            ),
            array(
                'weight-max'   => '12.0',
                'weight-costs' => '31.24',
            ),
            array(
                'weight-max'   => '12.5',
                'weight-costs' => '32.10',
            ),
            array(
                'weight-max'   => '13.0',
                'weight-costs' => '32.96',
            ),
            array(
                'weight-max'   => '13.5',
                'weight-costs' => '33.82',
            ),
            array(
                'weight-max'   => '14.0',
                'weight-costs' => '34.68',
            ),
            array(
                'weight-max'   => '14.5',
                'weight-costs' => '35.54',
            ),
            array(
                'weight-max'   => '15.0',
                'weight-costs' => '36.40',
            ),
            array(
                'weight-max'   => '15.5',
                'weight-costs' => '37.26',
            ),
            array(
                'weight-max'   => '16.0',
                'weight-costs' => '38.12',
            ),
            array(
                'weight-max'   => '16.5',
                'weight-costs' => '38.98',
            ),
            array(
                'weight-max'   => '17.0',
                'weight-costs' => '39.84',
            ),
            array(
                'weight-max'   => '17.5',
                'weight-costs' => '40.70',
            ),
            array(
                'weight-max'   => '18.0',
                'weight-costs' => '41.56',
            ),
            array(
                'weight-max'   => '18.5',
                'weight-costs' => '42.42',
            ),
            array(
                'weight-max'   => '19.0',
                'weight-costs' => '43.28',
            ),
            array(
                'weight-max'   => '19.5',
                'weight-costs' => '44.14',
            ),
            array(
                'weight-max'   => '20.0',
                'weight-costs' => '45.00',
            ),
            array(
                'weight-max'   => '20.5',
                'weight-costs' => '45.99',
            ),
            array(
                'weight-max'   => '21.0',
                'weight-costs' => '46.98',
            ),
            array(
                'weight-max'   => '21.5',
                'weight-costs' => '47.97',
            ),
            array(
                'weight-max'   => '22.0',
                'weight-costs' => '48.96',
            ),
            array(
                'weight-max'   => '22.5',
                'weight-costs' => '49.95',
            ),
            array(
                'weight-max'   => '23.0',
                'weight-costs' => '50.94',
            ),
            array(
                'weight-max'   => '23.5',
                'weight-costs' => '51.93',
            ),
            array(
                'weight-max'   => '24.0',
                'weight-costs' => '52.92',
            ),
            array(
                'weight-max'   => '24.5',
                'weight-costs' => '53.91',
            ),
            array(
                'weight-max'   => '25.0',
                'weight-costs' => '54.90',
            ),
            array(
                'weight-max'   => '25.5',
                'weight-costs' => '55.89',
            ),
            array(
                'weight-max'   => '26.0',
                'weight-costs' => '56.88',
            ),
            array(
                'weight-max'   => '26.5',
                'weight-costs' => '57.87',
            ),
            array(
                'weight-max'   => '27.0',
                'weight-costs' => '58.86',
            ),
            array(
                'weight-max'   => '27.5',
                'weight-costs' => '59.85',
            ),
            array(
                'weight-max'   => '28.0',
                'weight-costs' => '60.84',
            ),
            array(
                'weight-max'   => '28.5',
                'weight-costs' => '61.83',
            ),
            array(
                'weight-max'   => '29.0',
                'weight-costs' => '62.82',
            ),
            array(
                'weight-max'   => '29.5',
                'weight-costs' => '63.81',
            ),
            array(
                'weight-max'   => '30.0',
                'weight-costs' => '64.80',
            ),
            array(
                'weight-max'   => '31.0',
                'weight-costs' => '67.08',
            ),
            array(
                'weight-max'   => '32.0',
                'weight-costs' => '69.36',
            ),
            array(
                'weight-max'   => '33.0',
                'weight-costs' => '71.64',
            ),
            array(
                'weight-max'   => '34.0',
                'weight-costs' => '73.92',
            ),
            array(
                'weight-max'   => '35.0',
                'weight-costs' => '76.20',
            ),
            array(
                'weight-max'   => '36.0',
                'weight-costs' => '78.48',
            ),
            array(
                'weight-max'   => '37.0',
                'weight-costs' => '80.76',
            ),
            array(
                'weight-max'   => '38.0',
                'weight-costs' => '83.04',
            ),
            array(
                'weight-max'   => '39.0',
                'weight-costs' => '85.32',
            ),
            array(
                'weight-max'   => '40.0',
                'weight-costs' => '87.60',
            ),
            array(
                'weight-max'   => '41.0',
                'weight-costs' => '89.88',
            ),
            array(
                'weight-max'   => '42.0',
                'weight-costs' => '92.16',
            ),
            array(
                'weight-max'   => '43.0',
                'weight-costs' => '94.44',
            ),
            array(
                'weight-max'   => '44.0',
                'weight-costs' => '96.72',
            ),
            array(
                'weight-max'   => '45.0',
                'weight-costs' => '99.00',
            ),
            array(
                'weight-max'   => '46.0',
                'weight-costs' => '101.28',
            ),
            array(
                'weight-max'   => '47.0',
                'weight-costs' => '103.56',
            ),
            array(
                'weight-max'   => '48.0',
                'weight-costs' => '105.84',
            ),
            array(
                'weight-max'   => '49.0',
                'weight-costs' => '108.12',
            ),
            array(
                'weight-max'   => '50.0',
                'weight-costs' => '110.40',
            ),
            array(
                'weight-max'   => '51.0',
                'weight-costs' => '112.68',
            ),
            array(
                'weight-max'   => '52.0',
                'weight-costs' => '114.96',
            ),
            array(
                'weight-max'   => '53.0',
                'weight-costs' => '117.24',
            ),
            array(
                'weight-max'   => '54.0',
                'weight-costs' => '119.52',
            ),
            array(
                'weight-max'   => '55.0',
                'weight-costs' => '121.80',
            ),
            array(
                'weight-max'   => '56.0',
                'weight-costs' => '124.08',
            ),
            array(
                'weight-max'   => '57.0',
                'weight-costs' => '126.36',
            ),
            array(
                'weight-max'   => '58.0',
                'weight-costs' => '128.64',
            ),
            array(
                'weight-max'   => '59.0',
                'weight-costs' => '130.92',
            ),
            array(
                'weight-max'   => '60.0',
                'weight-costs' => '133.20',
            ),
            array(
                'weight-max'   => '61.0',
                'weight-costs' => '135.48',
            ),
            array(
                'weight-max'   => '62.0',
                'weight-costs' => '137.76',
            ),
            array(
                'weight-max'   => '63.0',
                'weight-costs' => '140.04',
            ),
            array(
                'weight-max'   => '64.0',
                'weight-costs' => '142.32',
            ),
            array(
                'weight-max'   => '65.0',
                'weight-costs' => '144.60',
            ),
            array(
                'weight-max'   => '66.0',
                'weight-costs' => '146.88',
            ),
            array(
                'weight-max'   => '67.0',
                'weight-costs' => '149.16',
            ),
            array(
                'weight-max'   => '68.0',
                'weight-costs' => '151.44',
            ),
            array(
                'weight-max'   => '69.0',
                'weight-costs' => '153.72',
            ),
            array(
                'weight-max'   => '70.0',
                'weight-costs' => 156.00                        ,
            ),
        );
        $json = json_encode($data);

        return $json;
    }

    public function getShippingZone6(): string
    {
        $data = array(
            array(
                'weight-max'   => '0.5',
                'weight-costs' => '12.20',
            ),
            array(
                'weight-max'   => '1.0',
                'weight-costs' => '18.33',
            ),
            array(
                'weight-max'   => '1.5',
                'weight-costs' => '18.84',
            ),
            array(
                'weight-max'   => '2.0',
                'weight-costs' => '19.35',
            ),
            array(
                'weight-max'   => '2.5',
                'weight-costs' => '19.95',
            ),
            array(
                'weight-max'   => '3.0',
                'weight-costs' => '20.58',
            ),
            array(
                'weight-max'   => '3.5',
                'weight-costs' => '21.21',
            ),
            array(
                'weight-max'   => '4.0',
                'weight-costs' => '21.84',
            ),
            array(
                'weight-max'   => '4.5',
                'weight-costs' => '22.47',
            ),
            array(
                'weight-max'   => '5.0',
                'weight-costs' => '23.10',
            ),
            array(
                'weight-max'   => '5.5',
                'weight-costs' => '23.85',
            ),
            array(
                'weight-max'   => '6.0',
                'weight-costs' => '24.60',
            ),
            array(
                'weight-max'   => '6.5',
                'weight-costs' => '25.35',
            ),
            array(
                'weight-max'   => '7.0',
                'weight-costs' => '26.10',
            ),
            array(
                'weight-max'   => '7.5',
                'weight-costs' => '26.85',
            ),
            array(
                'weight-max'   => '8.0',
                'weight-costs' => '27.60',
            ),
            array(
                'weight-max'   => '8.5',
                'weight-costs' => '28.35',
            ),
            array(
                'weight-max'   => '9.0',
                'weight-costs' => '29.10',
            ),
            array(
                'weight-max'   => '9.5',
                'weight-costs' => '29.85',
            ),
            array(
                'weight-max'   => '10.0',
                'weight-costs' => '30.60',
            ),
            array(
                'weight-max'   => '10.5',
                'weight-costs' => '31.62',
            ),
            array(
                'weight-max'   => '11.0',
                'weight-costs' => '32.64',
            ),
            array(
                'weight-max'   => '11.5',
                'weight-costs' => '33.66',
            ),
            array(
                'weight-max'   => '12.0',
                'weight-costs' => '34.68',
            ),
            array(
                'weight-max'   => '12.5',
                'weight-costs' => '35.70',
            ),
            array(
                'weight-max'   => '13.0',
                'weight-costs' => '36.72',
            ),
            array(
                'weight-max'   => '13.5',
                'weight-costs' => '37.74',
            ),
            array(
                'weight-max'   => '14.0',
                'weight-costs' => '38.76',
            ),
            array(
                'weight-max'   => '14.5',
                'weight-costs' => '39.78',
            ),
            array(
                'weight-max'   => '15.0',
                'weight-costs' => '40.80',
            ),
            array(
                'weight-max'   => '15.5',
                'weight-costs' => '41.82',
            ),
            array(
                'weight-max'   => '16.0',
                'weight-costs' => '42.84',
            ),
            array(
                'weight-max'   => '16.5',
                'weight-costs' => '43.86',
            ),
            array(
                'weight-max'   => '17.0',
                'weight-costs' => '44.88',
            ),
            array(
                'weight-max'   => '17.5',
                'weight-costs' => '45.90',
            ),
            array(
                'weight-max'   => '18.0',
                'weight-costs' => '46.92',
            ),
            array(
                'weight-max'   => '18.5',
                'weight-costs' => '47.94',
            ),
            array(
                'weight-max'   => '19.0',
                'weight-costs' => '48.96',
            ),
            array(
                'weight-max'   => '19.5',
                'weight-costs' => '49.98',
            ),
            array(
                'weight-max'   => '20.0',
                'weight-costs' => '51.00',
            ),
            array(
                'weight-max'   => '20.5',
                'weight-costs' => '52.17',
            ),
            array(
                'weight-max'   => '21.0',
                'weight-costs' => '53.34',
            ),
            array(
                'weight-max'   => '21.5',
                'weight-costs' => '54.51',
            ),
            array(
                'weight-max'   => '22.0',
                'weight-costs' => '55.68',
            ),
            array(
                'weight-max'   => '22.5',
                'weight-costs' => '56.85',
            ),
            array(
                'weight-max'   => '23.0',
                'weight-costs' => '58.02',
            ),
            array(
                'weight-max'   => '23.5',
                'weight-costs' => '59.19',
            ),
            array(
                'weight-max'   => '24.0',
                'weight-costs' => '60.36',
            ),
            array(
                'weight-max'   => '24.5',
                'weight-costs' => '61.53',
            ),
            array(
                'weight-max'   => '25.0',
                'weight-costs' => '62.70',
            ),
            array(
                'weight-max'   => '25.5',
                'weight-costs' => '63.87',
            ),
            array(
                'weight-max'   => '26.0',
                'weight-costs' => '65.04',
            ),
            array(
                'weight-max'   => '26.5',
                'weight-costs' => '66.21',
            ),
            array(
                'weight-max'   => '27.0',
                'weight-costs' => '67.38',
            ),
            array(
                'weight-max'   => '27.5',
                'weight-costs' => '68.55',
            ),
            array(
                'weight-max'   => '28.0',
                'weight-costs' => '69.72',
            ),
            array(
                'weight-max'   => '28.5',
                'weight-costs' => '70.89',
            ),
            array(
                'weight-max'   => '29.0',
                'weight-costs' => '72.06',
            ),
            array(
                'weight-max'   => '29.5',
                'weight-costs' => '73.23',
            ),
            array(
                'weight-max'   => '30.0',
                'weight-costs' => '74.40',
            ),
            array(
                'weight-max'   => '31.0',
                'weight-costs' => '77.16',
            ),
            array(
                'weight-max'   => '32.0',
                'weight-costs' => '79.92',
            ),
            array(
                'weight-max'   => '33.0',
                'weight-costs' => '82.68',
            ),
            array(
                'weight-max'   => '34.0',
                'weight-costs' => '85.44',
            ),
            array(
                'weight-max'   => '35.0',
                'weight-costs' => '88.20',
            ),
            array(
                'weight-max'   => '36.0',
                'weight-costs' => '90.96',
            ),
            array(
                'weight-max'   => '37.0',
                'weight-costs' => '93.72',
            ),
            array(
                'weight-max'   => '38.0',
                'weight-costs' => '96.48',
            ),
            array(
                'weight-max'   => '39.0',
                'weight-costs' => '99.24',
            ),
            array(
                'weight-max'   => '40.0',
                'weight-costs' => '102.00',
            ),
            array(
                'weight-max'   => '41.0',
                'weight-costs' => '104.76',
            ),
            array(
                'weight-max'   => '42.0',
                'weight-costs' => '107.52',
            ),
            array(
                'weight-max'   => '43.0',
                'weight-costs' => '110.28',
            ),
            array(
                'weight-max'   => '44.0',
                'weight-costs' => '113.04',
            ),
            array(
                'weight-max'   => '45.0',
                'weight-costs' => '115.80',
            ),
            array(
                'weight-max'   => '46.0',
                'weight-costs' => '118.56',
            ),
            array(
                'weight-max'   => '47.0',
                'weight-costs' => '121.32',
            ),
            array(
                'weight-max'   => '48.0',
                'weight-costs' => '124.08',
            ),
            array(
                'weight-max'   => '49.0',
                'weight-costs' => '126.84',
            ),
            array(
                'weight-max'   => '50.0',
                'weight-costs' => '129.60',
            ),
            array(
                'weight-max'   => '51.0',
                'weight-costs' => '132.36',
            ),
            array(
                'weight-max'   => '52.0',
                'weight-costs' => '135.12',
            ),
            array(
                'weight-max'   => '53.0',
                'weight-costs' => '137.88',
            ),
            array(
                'weight-max'   => '54.0',
                'weight-costs' => '140.64',
            ),
            array(
                'weight-max'   => '55.0',
                'weight-costs' => '143.40',
            ),
            array(
                'weight-max'   => '56.0',
                'weight-costs' => '146.16',
            ),
            array(
                'weight-max'   => '57.0',
                'weight-costs' => '148.92',
            ),
            array(
                'weight-max'   => '58.0',
                'weight-costs' => '151.68',
            ),
            array(
                'weight-max'   => '59.0',
                'weight-costs' => '154.44',
            ),
            array(
                'weight-max'   => '60.0',
                'weight-costs' => '157.20',
            ),
            array(
                'weight-max'   => '61.0',
                'weight-costs' => '159.96',
            ),
            array(
                'weight-max'   => '62.0',
                'weight-costs' => '162.72',
            ),
            array(
                'weight-max'   => '63.0',
                'weight-costs' => '165.48',
            ),
            array(
                'weight-max'   => '64.0',
                'weight-costs' => '168.24',
            ),
            array(
                'weight-max'   => '65.0',
                'weight-costs' => '171.00',
            ),
            array(
                'weight-max'   => '66.0',
                'weight-costs' => '173.76',
            ),
            array(
                'weight-max'   => '67.0',
                'weight-costs' => '176.52',
            ),
            array(
                'weight-max'   => '68.0',
                'weight-costs' => '179.28',
            ),
            array(
                'weight-max'   => '69.0',
                'weight-costs' => '182.04',
            ),
            array(
                'weight-max'   => '70.0',
                'weight-costs' => 184.80                        ,
            ),
        );
        $json = json_encode($data);

        return $json;
    }

    public function getShippingZone7(): string
    {
        $data = array(
            array(
                'weight-max'   => '0.5',
                'weight-costs' => '12.20',
            ),
            array(
                'weight-max'   => '1.0',
                'weight-costs' => '19.65',
            ),
            array(
                'weight-max'   => '1.5',
                'weight-costs' => '20.57',
            ),
            array(
                'weight-max'   => '2.0',
                'weight-costs' => '21.49',
            ),
            array(
                'weight-max'   => '2.5',
                'weight-costs' => '22.17',
            ),
            array(
                'weight-max'   => '3.0',
                'weight-costs' => '23.24',
            ),
            array(
                'weight-max'   => '3.5',
                'weight-costs' => '24.31',
            ),
            array(
                'weight-max'   => '4.0',
                'weight-costs' => '25.38',
            ),
            array(
                'weight-max'   => '4.5',
                'weight-costs' => '26.45',
            ),
            array(
                'weight-max'   => '5.0',
                'weight-costs' => '27.52',
            ),
            array(
                'weight-max'   => '5.5',
                'weight-costs' => '28.79',
            ),
            array(
                'weight-max'   => '6.0',
                'weight-costs' => '30.06',
            ),
            array(
                'weight-max'   => '6.5',
                'weight-costs' => '31.33',
            ),
            array(
                'weight-max'   => '7.0',
                'weight-costs' => '32.60',
            ),
            array(
                'weight-max'   => '7.5',
                'weight-costs' => '33.87',
            ),
            array(
                'weight-max'   => '8.0',
                'weight-costs' => '35.14',
            ),
            array(
                'weight-max'   => '8.5',
                'weight-costs' => '36.41',
            ),
            array(
                'weight-max'   => '9.0',
                'weight-costs' => '37.68',
            ),
            array(
                'weight-max'   => '9.5',
                'weight-costs' => '38.95',
            ),
            array(
                'weight-max'   => '10.0',
                'weight-costs' => '40.22',
            ),
            array(
                'weight-max'   => '10.5',
                'weight-costs' => '41.84',
            ),
            array(
                'weight-max'   => '11.0',
                'weight-costs' => '43.46',
            ),
            array(
                'weight-max'   => '11.5',
                'weight-costs' => '45.08',
            ),
            array(
                'weight-max'   => '12.0',
                'weight-costs' => '46.70',
            ),
            array(
                'weight-max'   => '12.5',
                'weight-costs' => '48.32',
            ),
            array(
                'weight-max'   => '13.0',
                'weight-costs' => '49.94',
            ),
            array(
                'weight-max'   => '13.5',
                'weight-costs' => '51.56',
            ),
            array(
                'weight-max'   => '14.0',
                'weight-costs' => '53.18',
            ),
            array(
                'weight-max'   => '14.5',
                'weight-costs' => '54.80',
            ),
            array(
                'weight-max'   => '15.0',
                'weight-costs' => '56.42',
            ),
            array(
                'weight-max'   => '15.5',
                'weight-costs' => '58.04',
            ),
            array(
                'weight-max'   => '16.0',
                'weight-costs' => '59.66',
            ),
            array(
                'weight-max'   => '16.5',
                'weight-costs' => '61.28',
            ),
            array(
                'weight-max'   => '17.0',
                'weight-costs' => '62.90',
            ),
            array(
                'weight-max'   => '17.5',
                'weight-costs' => '64.52',
            ),
            array(
                'weight-max'   => '18.0',
                'weight-costs' => '66.14',
            ),
            array(
                'weight-max'   => '18.5',
                'weight-costs' => '67.76',
            ),
            array(
                'weight-max'   => '19.0',
                'weight-costs' => '69.38',
            ),
            array(
                'weight-max'   => '19.5',
                'weight-costs' => '71.00',
            ),
            array(
                'weight-max'   => '20.0',
                'weight-costs' => '72.62',
            ),
            array(
                'weight-max'   => '20.5',
                'weight-costs' => '74.49',
            ),
            array(
                'weight-max'   => '21.0',
                'weight-costs' => '76.36',
            ),
            array(
                'weight-max'   => '21.5',
                'weight-costs' => '78.23',
            ),
            array(
                'weight-max'   => '22.0',
                'weight-costs' => '80.10',
            ),
            array(
                'weight-max'   => '22.5',
                'weight-costs' => '81.97',
            ),
            array(
                'weight-max'   => '23.0',
                'weight-costs' => '83.84',
            ),
            array(
                'weight-max'   => '23.5',
                'weight-costs' => '85.71',
            ),
            array(
                'weight-max'   => '24.0',
                'weight-costs' => '87.58',
            ),
            array(
                'weight-max'   => '24.5',
                'weight-costs' => '89.45',
            ),
            array(
                'weight-max'   => '25.0',
                'weight-costs' => '91.32',
            ),
            array(
                'weight-max'   => '25.5',
                'weight-costs' => '93.19',
            ),
            array(
                'weight-max'   => '26.0',
                'weight-costs' => '95.06',
            ),
            array(
                'weight-max'   => '26.5',
                'weight-costs' => '96.93',
            ),
            array(
                'weight-max'   => '27.0',
                'weight-costs' => '98.80',
            ),
            array(
                'weight-max'   => '27.5',
                'weight-costs' => '100.67',
            ),
            array(
                'weight-max'   => '28.0',
                'weight-costs' => '102.54',
            ),
            array(
                'weight-max'   => '28.5',
                'weight-costs' => '104.41',
            ),
            array(
                'weight-max'   => '29.0',
                'weight-costs' => '106.28',
            ),
            array(
                'weight-max'   => '29.5',
                'weight-costs' => '108.15',
            ),
            array(
                'weight-max'   => '30.0',
                'weight-costs' => '110.02',
            ),
            array(
                'weight-max'   => '31.0',
                'weight-costs' => '113.47',
            ),
            array(
                'weight-max'   => '32.0',
                'weight-costs' => '116.92',
            ),
            array(
                'weight-max'   => '33.0',
                'weight-costs' => '120.37',
            ),
            array(
                'weight-max'   => '34.0',
                'weight-costs' => '123.82',
            ),
            array(
                'weight-max'   => '35.0',
                'weight-costs' => '127.27',
            ),
            array(
                'weight-max'   => '36.0',
                'weight-costs' => '130.72',
            ),
            array(
                'weight-max'   => '37.0',
                'weight-costs' => '134.17',
            ),
            array(
                'weight-max'   => '38.0',
                'weight-costs' => '137.62',
            ),
            array(
                'weight-max'   => '39.0',
                'weight-costs' => '141.07',
            ),
            array(
                'weight-max'   => '40.0',
                'weight-costs' => '144.52',
            ),
            array(
                'weight-max'   => '41.0',
                'weight-costs' => '147.97',
            ),
            array(
                'weight-max'   => '42.0',
                'weight-costs' => '151.42',
            ),
            array(
                'weight-max'   => '43.0',
                'weight-costs' => '154.87',
            ),
            array(
                'weight-max'   => '44.0',
                'weight-costs' => '158.32',
            ),
            array(
                'weight-max'   => '45.0',
                'weight-costs' => '161.77',
            ),
            array(
                'weight-max'   => '46.0',
                'weight-costs' => '165.22',
            ),
            array(
                'weight-max'   => '47.0',
                'weight-costs' => '168.67',
            ),
            array(
                'weight-max'   => '48.0',
                'weight-costs' => '172.12',
            ),
            array(
                'weight-max'   => '49.0',
                'weight-costs' => '175.57',
            ),
            array(
                'weight-max'   => '50.0',
                'weight-costs' => '179.02',
            ),
            array(
                'weight-max'   => '51.0',
                'weight-costs' => '182.47',
            ),
            array(
                'weight-max'   => '52.0',
                'weight-costs' => '185.92',
            ),
            array(
                'weight-max'   => '53.0',
                'weight-costs' => '189.37',
            ),
            array(
                'weight-max'   => '54.0',
                'weight-costs' => '192.82',
            ),
            array(
                'weight-max'   => '55.0',
                'weight-costs' => '196.27',
            ),
            array(
                'weight-max'   => '56.0',
                'weight-costs' => '199.72',
            ),
            array(
                'weight-max'   => '57.0',
                'weight-costs' => '203.17',
            ),
            array(
                'weight-max'   => '58.0',
                'weight-costs' => '206.62',
            ),
            array(
                'weight-max'   => '59.0',
                'weight-costs' => '210.07',
            ),
            array(
                'weight-max'   => '60.0',
                'weight-costs' => '213.52',
            ),
            array(
                'weight-max'   => '61.0',
                'weight-costs' => '216.97',
            ),
            array(
                'weight-max'   => '62.0',
                'weight-costs' => '220.42',
            ),
            array(
                'weight-max'   => '63.0',
                'weight-costs' => '223.87',
            ),
            array(
                'weight-max'   => '64.0',
                'weight-costs' => '227.32',
            ),
            array(
                'weight-max'   => '65.0',
                'weight-costs' => '230.77',
            ),
            array(
                'weight-max'   => '66.0',
                'weight-costs' => '234.22',
            ),
            array(
                'weight-max'   => '67.0',
                'weight-costs' => '237.67',
            ),
            array(
                'weight-max'   => '68.0',
                'weight-costs' => '241.12',
            ),
            array(
                'weight-max'   => '69.0',
                'weight-costs' => '244.57',
            ),
            array(
                'weight-max'   => '70.0',
                'weight-costs' => '248.02',
            ),
        );
        $json = json_encode($data);

        return $json;
    }

    public function getShippingZone8(): string
    {
        $data = array(
            array(
                'weight-max'   => '0.5',
                'weight-costs' => '12.20',
            ),
            array(
                'weight-max'   => '1.0',
                'weight-costs' => '21.64',
            ),
            array(
                'weight-max'   => '1.5',
                'weight-costs' => '22.70',
            ),
            array(
                'weight-max'   => '2.0',
                'weight-costs' => '23.76',
            ),
            array(
                'weight-max'   => '2.5',
                'weight-costs' => '24.55',
            ),
            array(
                'weight-max'   => '3.0',
                'weight-costs' => '26.37',
            ),
            array(
                'weight-max'   => '3.5',
                'weight-costs' => '28.19',
            ),
            array(
                'weight-max'   => '4.0',
                'weight-costs' => '30.01',
            ),
            array(
                'weight-max'   => '4.5',
                'weight-costs' => '31.83',
            ),
            array(
                'weight-max'   => '5.0',
                'weight-costs' => '33.65',
            ),
            array(
                'weight-max'   => '5.5',
                'weight-costs' => '35.31',
            ),
            array(
                'weight-max'   => '6.0',
                'weight-costs' => '36.97',
            ),
            array(
                'weight-max'   => '6.5',
                'weight-costs' => '38.63',
            ),
            array(
                'weight-max'   => '7.0',
                'weight-costs' => '40.29',
            ),
            array(
                'weight-max'   => '7.5',
                'weight-costs' => '41.95',
            ),
            array(
                'weight-max'   => '8.0',
                'weight-costs' => '43.61',
            ),
            array(
                'weight-max'   => '8.5',
                'weight-costs' => '45.27',
            ),
            array(
                'weight-max'   => '9.0',
                'weight-costs' => '46.93',
            ),
            array(
                'weight-max'   => '9.5',
                'weight-costs' => '48.59',
            ),
            array(
                'weight-max'   => '10.0',
                'weight-costs' => '50.25',
            ),
            array(
                'weight-max'   => '10.5',
                'weight-costs' => '52.20',
            ),
            array(
                'weight-max'   => '11.0',
                'weight-costs' => '54.15',
            ),
            array(
                'weight-max'   => '11.5',
                'weight-costs' => '56.10',
            ),
            array(
                'weight-max'   => '12.0',
                'weight-costs' => '58.05',
            ),
            array(
                'weight-max'   => '12.5',
                'weight-costs' => '60.00',
            ),
            array(
                'weight-max'   => '13.0',
                'weight-costs' => '61.95',
            ),
            array(
                'weight-max'   => '13.5',
                'weight-costs' => '63.90',
            ),
            array(
                'weight-max'   => '14.0',
                'weight-costs' => '65.85',
            ),
            array(
                'weight-max'   => '14.5',
                'weight-costs' => '67.80',
            ),
            array(
                'weight-max'   => '15.0',
                'weight-costs' => '69.75',
            ),
            array(
                'weight-max'   => '15.5',
                'weight-costs' => '71.70',
            ),
            array(
                'weight-max'   => '16.0',
                'weight-costs' => '73.65',
            ),
            array(
                'weight-max'   => '16.5',
                'weight-costs' => '75.60',
            ),
            array(
                'weight-max'   => '17.0',
                'weight-costs' => '77.55',
            ),
            array(
                'weight-max'   => '17.5',
                'weight-costs' => '79.50',
            ),
            array(
                'weight-max'   => '18.0',
                'weight-costs' => '81.45',
            ),
            array(
                'weight-max'   => '18.5',
                'weight-costs' => '83.40',
            ),
            array(
                'weight-max'   => '19.0',
                'weight-costs' => '85.35',
            ),
            array(
                'weight-max'   => '19.5',
                'weight-costs' => '87.30',
            ),
            array(
                'weight-max'   => '20.0',
                'weight-costs' => '89.25',
            ),
            array(
                'weight-max'   => '20.5',
                'weight-costs' => '91.27',
            ),
            array(
                'weight-max'   => '21.0',
                'weight-costs' => '93.29',
            ),
            array(
                'weight-max'   => '21.5',
                'weight-costs' => '95.31',
            ),
            array(
                'weight-max'   => '22.0',
                'weight-costs' => '97.33',
            ),
            array(
                'weight-max'   => '22.5',
                'weight-costs' => '99.35',
            ),
            array(
                'weight-max'   => '23.0',
                'weight-costs' => '101.37',
            ),
            array(
                'weight-max'   => '23.5',
                'weight-costs' => '103.39',
            ),
            array(
                'weight-max'   => '24.0',
                'weight-costs' => '105.41',
            ),
            array(
                'weight-max'   => '24.5',
                'weight-costs' => '107.43',
            ),
            array(
                'weight-max'   => '25.0',
                'weight-costs' => '109.45',
            ),
            array(
                'weight-max'   => '25.5',
                'weight-costs' => '111.47',
            ),
            array(
                'weight-max'   => '26.0',
                'weight-costs' => '113.49',
            ),
            array(
                'weight-max'   => '26.5',
                'weight-costs' => '115.51',
            ),
            array(
                'weight-max'   => '27.0',
                'weight-costs' => '117.53',
            ),
            array(
                'weight-max'   => '27.5',
                'weight-costs' => '119.55',
            ),
            array(
                'weight-max'   => '28.0',
                'weight-costs' => '121.57',
            ),
            array(
                'weight-max'   => '28.5',
                'weight-costs' => '123.59',
            ),
            array(
                'weight-max'   => '29.0',
                'weight-costs' => '125.61',
            ),
            array(
                'weight-max'   => '29.5',
                'weight-costs' => '127.63',
            ),
            array(
                'weight-max'   => '30.0',
                'weight-costs' => '129.65',
            ),
            array(
                'weight-max'   => '31.0',
                'weight-costs' => '133.37',
            ),
            array(
                'weight-max'   => '32.0',
                'weight-costs' => '137.09',
            ),
            array(
                'weight-max'   => '33.0',
                'weight-costs' => '140.81',
            ),
            array(
                'weight-max'   => '34.0',
                'weight-costs' => '144.53',
            ),
            array(
                'weight-max'   => '35.0',
                'weight-costs' => '148.25',
            ),
            array(
                'weight-max'   => '36.0',
                'weight-costs' => '151.97',
            ),
            array(
                'weight-max'   => '37.0',
                'weight-costs' => '155.69',
            ),
            array(
                'weight-max'   => '38.0',
                'weight-costs' => '159.41',
            ),
            array(
                'weight-max'   => '39.0',
                'weight-costs' => '163.13',
            ),
            array(
                'weight-max'   => '40.0',
                'weight-costs' => '166.85',
            ),
            array(
                'weight-max'   => '41.0',
                'weight-costs' => '170.57',
            ),
            array(
                'weight-max'   => '42.0',
                'weight-costs' => '174.29',
            ),
            array(
                'weight-max'   => '43.0',
                'weight-costs' => '178.01',
            ),
            array(
                'weight-max'   => '44.0',
                'weight-costs' => '181.73',
            ),
            array(
                'weight-max'   => '45.0',
                'weight-costs' => '185.45',
            ),
            array(
                'weight-max'   => '46.0',
                'weight-costs' => '189.17',
            ),
            array(
                'weight-max'   => '47.0',
                'weight-costs' => '192.89',
            ),
            array(
                'weight-max'   => '48.0',
                'weight-costs' => '196.61',
            ),
            array(
                'weight-max'   => '49.0',
                'weight-costs' => '200.33',
            ),
            array(
                'weight-max'   => '50.0',
                'weight-costs' => '204.05',
            ),
            array(
                'weight-max'   => '51.0',
                'weight-costs' => '207.77',
            ),
            array(
                'weight-max'   => '52.0',
                'weight-costs' => '211.49',
            ),
            array(
                'weight-max'   => '53.0',
                'weight-costs' => '215.21',
            ),
            array(
                'weight-max'   => '54.0',
                'weight-costs' => '218.93',
            ),
            array(
                'weight-max'   => '55.0',
                'weight-costs' => '222.65',
            ),
            array(
                'weight-max'   => '56.0',
                'weight-costs' => '226.37',
            ),
            array(
                'weight-max'   => '57.0',
                'weight-costs' => '230.09',
            ),
            array(
                'weight-max'   => '58.0',
                'weight-costs' => '233.81',
            ),
            array(
                'weight-max'   => '59.0',
                'weight-costs' => '237.53',
            ),
            array(
                'weight-max'   => '60.0',
                'weight-costs' => '241.25',
            ),
            array(
                'weight-max'   => '61.0',
                'weight-costs' => '244.97',
            ),
            array(
                'weight-max'   => '62.0',
                'weight-costs' => '248.69',
            ),
            array(
                'weight-max'   => '63.0',
                'weight-costs' => '252.41',
            ),
            array(
                'weight-max'   => '64.0',
                'weight-costs' => '256.13',
            ),
            array(
                'weight-max'   => '65.0',
                'weight-costs' => '259.85',
            ),
            array(
                'weight-max'   => '66.0',
                'weight-costs' => '263.57',
            ),
            array(
                'weight-max'   => '67.0',
                'weight-costs' => '267.29',
            ),
            array(
                'weight-max'   => '68.0',
                'weight-costs' => '271.01',
            ),
            array(
                'weight-max'   => '69.0',
                'weight-costs' => '274.73',
            ),
            array(
                'weight-max'   => '70.0',
                'weight-costs' => '278.45',
            ),
        );
        $json = json_encode($data);

        return $json;
    }

    public function getShippingZone9(): string
    {
        $data = array(
            array(
                'weight-max'   => '0.5',
                'weight-costs' => '12.20',
            ),
            array(
                'weight-max'   => '1.0',
                'weight-costs' => '24.26',
            ),
            array(
                'weight-max'   => '1.5',
                'weight-costs' => '25.48',
            ),
            array(
                'weight-max'   => '2.0',
                'weight-costs' => '26.70',
            ),
            array(
                'weight-max'   => '2.5',
                'weight-costs' => '27.61',
            ),
            array(
                'weight-max'   => '3.0',
                'weight-costs' => '30.70',
            ),
            array(
                'weight-max'   => '3.5',
                'weight-costs' => '33.79',
            ),
            array(
                'weight-max'   => '4.0',
                'weight-costs' => '36.88',
            ),
            array(
                'weight-max'   => '4.5',
                'weight-costs' => '39.97',
            ),
            array(
                'weight-max'   => '5.0',
                'weight-costs' => '43.06',
            ),
            array(
                'weight-max'   => '5.5',
                'weight-costs' => '45.87',
            ),
            array(
                'weight-max'   => '6.0',
                'weight-costs' => '48.68',
            ),
            array(
                'weight-max'   => '6.5',
                'weight-costs' => '51.49',
            ),
            array(
                'weight-max'   => '7.0',
                'weight-costs' => '54.30',
            ),
            array(
                'weight-max'   => '7.5',
                'weight-costs' => '57.11',
            ),
            array(
                'weight-max'   => '8.0',
                'weight-costs' => '59.92',
            ),
            array(
                'weight-max'   => '8.5',
                'weight-costs' => '62.73',
            ),
            array(
                'weight-max'   => '9.0',
                'weight-costs' => '65.54',
            ),
            array(
                'weight-max'   => '9.5',
                'weight-costs' => '68.35',
            ),
            array(
                'weight-max'   => '10.0',
                'weight-costs' => '71.16',
            ),
            array(
                'weight-max'   => '10.5',
                'weight-costs' => '73.60',
            ),
            array(
                'weight-max'   => '11.0',
                'weight-costs' => '76.04',
            ),
            array(
                'weight-max'   => '11.5',
                'weight-costs' => '78.48',
            ),
            array(
                'weight-max'   => '12.0',
                'weight-costs' => '80.92',
            ),
            array(
                'weight-max'   => '12.5',
                'weight-costs' => '83.36',
            ),
            array(
                'weight-max'   => '13.0',
                'weight-costs' => '85.80',
            ),
            array(
                'weight-max'   => '13.5',
                'weight-costs' => '88.24',
            ),
            array(
                'weight-max'   => '14.0',
                'weight-costs' => '90.68',
            ),
            array(
                'weight-max'   => '14.5',
                'weight-costs' => '93.12',
            ),
            array(
                'weight-max'   => '15.0',
                'weight-costs' => '95.56',
            ),
            array(
                'weight-max'   => '15.5',
                'weight-costs' => '98.00',
            ),
            array(
                'weight-max'   => '16.0',
                'weight-costs' => '100.44',
            ),
            array(
                'weight-max'   => '16.5',
                'weight-costs' => '102.88',
            ),
            array(
                'weight-max'   => '17.0',
                'weight-costs' => '105.32',
            ),
            array(
                'weight-max'   => '17.5',
                'weight-costs' => '107.76',
            ),
            array(
                'weight-max'   => '18.0',
                'weight-costs' => '110.20',
            ),
            array(
                'weight-max'   => '18.5',
                'weight-costs' => '112.64',
            ),
            array(
                'weight-max'   => '19.0',
                'weight-costs' => '115.08',
            ),
            array(
                'weight-max'   => '19.5',
                'weight-costs' => '117.52',
            ),
            array(
                'weight-max'   => '20.0',
                'weight-costs' => '119.96',
            ),
            array(
                'weight-max'   => '20.5',
                'weight-costs' => '122.48',
            ),
            array(
                'weight-max'   => '21.0',
                'weight-costs' => '125.00',
            ),
            array(
                'weight-max'   => '21.5',
                'weight-costs' => '127.52',
            ),
            array(
                'weight-max'   => '22.0',
                'weight-costs' => '130.04',
            ),
            array(
                'weight-max'   => '22.5',
                'weight-costs' => '132.56',
            ),
            array(
                'weight-max'   => '23.0',
                'weight-costs' => '135.08',
            ),
            array(
                'weight-max'   => '23.5',
                'weight-costs' => '137.60',
            ),
            array(
                'weight-max'   => '24.0',
                'weight-costs' => '140.12',
            ),
            array(
                'weight-max'   => '24.5',
                'weight-costs' => '142.64',
            ),
            array(
                'weight-max'   => '25.0',
                'weight-costs' => '145.16',
            ),
            array(
                'weight-max'   => '25.5',
                'weight-costs' => '147.68',
            ),
            array(
                'weight-max'   => '26.0',
                'weight-costs' => '150.20',
            ),
            array(
                'weight-max'   => '26.5',
                'weight-costs' => '152.72',
            ),
            array(
                'weight-max'   => '27.0',
                'weight-costs' => '155.24',
            ),
            array(
                'weight-max'   => '27.5',
                'weight-costs' => '157.76',
            ),
            array(
                'weight-max'   => '28.0',
                'weight-costs' => '160.28',
            ),
            array(
                'weight-max'   => '28.5',
                'weight-costs' => '162.80',
            ),
            array(
                'weight-max'   => '29.0',
                'weight-costs' => '165.32',
            ),
            array(
                'weight-max'   => '29.5',
                'weight-costs' => '167.84',
            ),
            array(
                'weight-max'   => '30.0',
                'weight-costs' => '170.36',
            ),
            array(
                'weight-max'   => '31.0',
                'weight-costs' => '174.83',
            ),
            array(
                'weight-max'   => '32.0',
                'weight-costs' => '179.30',
            ),
            array(
                'weight-max'   => '33.0',
                'weight-costs' => '183.77',
            ),
            array(
                'weight-max'   => '34.0',
                'weight-costs' => '188.24',
            ),
            array(
                'weight-max'   => '35.0',
                'weight-costs' => '192.71',
            ),
            array(
                'weight-max'   => '36.0',
                'weight-costs' => '197.18',
            ),
            array(
                'weight-max'   => '37.0',
                'weight-costs' => '201.65',
            ),
            array(
                'weight-max'   => '38.0',
                'weight-costs' => '206.12',
            ),
            array(
                'weight-max'   => '39.0',
                'weight-costs' => '210.59',
            ),
            array(
                'weight-max'   => '40.0',
                'weight-costs' => '215.06',
            ),
            array(
                'weight-max'   => '41.0',
                'weight-costs' => '219.53',
            ),
            array(
                'weight-max'   => '42.0',
                'weight-costs' => '224.00',
            ),
            array(
                'weight-max'   => '43.0',
                'weight-costs' => '228.47',
            ),
            array(
                'weight-max'   => '44.0',
                'weight-costs' => '232.94',
            ),
            array(
                'weight-max'   => '45.0',
                'weight-costs' => '237.41',
            ),
            array(
                'weight-max'   => '46.0',
                'weight-costs' => '241.88',
            ),
            array(
                'weight-max'   => '47.0',
                'weight-costs' => '246.35',
            ),
            array(
                'weight-max'   => '48.0',
                'weight-costs' => '250.82',
            ),
            array(
                'weight-max'   => '49.0',
                'weight-costs' => '255.29',
            ),
            array(
                'weight-max'   => '50.0',
                'weight-costs' => '259.76',
            ),
            array(
                'weight-max'   => '51.0',
                'weight-costs' => '264.23',
            ),
            array(
                'weight-max'   => '52.0',
                'weight-costs' => '268.70',
            ),
            array(
                'weight-max'   => '53.0',
                'weight-costs' => '273.17',
            ),
            array(
                'weight-max'   => '54.0',
                'weight-costs' => '277.64',
            ),
            array(
                'weight-max'   => '55.0',
                'weight-costs' => '282.11',
            ),
            array(
                'weight-max'   => '56.0',
                'weight-costs' => '286.58',
            ),
            array(
                'weight-max'   => '57.0',
                'weight-costs' => '291.05',
            ),
            array(
                'weight-max'   => '58.0',
                'weight-costs' => '295.52',
            ),
            array(
                'weight-max'   => '59.0',
                'weight-costs' => '299.99',
            ),
            array(
                'weight-max'   => '60.0',
                'weight-costs' => '304.46',
            ),
            array(
                'weight-max'   => '61.0',
                'weight-costs' => '308.93',
            ),
            array(
                'weight-max'   => '62.0',
                'weight-costs' => '313.40',
            ),
            array(
                'weight-max'   => '63.0',
                'weight-costs' => '317.87',
            ),
            array(
                'weight-max'   => '64.0',
                'weight-costs' => '322.34',
            ),
            array(
                'weight-max'   => '65.0',
                'weight-costs' => '326.81',
            ),
            array(
                'weight-max'   => '66.0',
                'weight-costs' => '331.28',
            ),
            array(
                'weight-max'   => '67.0',
                'weight-costs' => '335.75',
            ),
            array(
                'weight-max'   => '68.0',
                'weight-costs' => '340.22',
            ),
            array(
                'weight-max'   => '69.0',
                'weight-costs' => '344.69',
            ),
            array(
                'weight-max'   => '70.0',
                'weight-costs' => '349.16',
            ),
        );
        $json = json_encode($data);

        return $json;
    }

    public function getShippingZone10(): string
    {
        $data = array(
            array(
                'weight-max'   => '0.5',
                'weight-costs' => '12.20',
            ),
            array(
                'weight-max'   => '1.0',
                'weight-costs' => '27.19',
            ),
            array(
                'weight-max'   => '1.5',
                'weight-costs' => '28.59',
            ),
            array(
                'weight-max'   => '2.0',
                'weight-costs' => '29.99',
            ),
            array(
                'weight-max'   => '2.5',
                'weight-costs' => '31.03',
            ),
            array(
                'weight-max'   => '3.0',
                'weight-costs' => '34.59',
            ),
            array(
                'weight-max'   => '3.5',
                'weight-costs' => '38.15',
            ),
            array(
                'weight-max'   => '4.0',
                'weight-costs' => '41.71',
            ),
            array(
                'weight-max'   => '4.5',
                'weight-costs' => '45.27',
            ),
            array(
                'weight-max'   => '5.0',
                'weight-costs' => '48.83',
            ),
            array(
                'weight-max'   => '5.5',
                'weight-costs' => '52.06',
            ),
            array(
                'weight-max'   => '6.0',
                'weight-costs' => '55.29',
            ),
            array(
                'weight-max'   => '6.5',
                'weight-costs' => '58.52',
            ),
            array(
                'weight-max'   => '7.0',
                'weight-costs' => '61.75',
            ),
            array(
                'weight-max'   => '7.5',
                'weight-costs' => '64.98',
            ),
            array(
                'weight-max'   => '8.0',
                'weight-costs' => '68.21',
            ),
            array(
                'weight-max'   => '8.5',
                'weight-costs' => '71.44',
            ),
            array(
                'weight-max'   => '9.0',
                'weight-costs' => '74.67',
            ),
            array(
                'weight-max'   => '9.5',
                'weight-costs' => '77.90',
            ),
            array(
                'weight-max'   => '10.0',
                'weight-costs' => '81.13',
            ),
            array(
                'weight-max'   => '10.5',
                'weight-costs' => '83.93',
            ),
            array(
                'weight-max'   => '11.0',
                'weight-costs' => '86.73',
            ),
            array(
                'weight-max'   => '11.5',
                'weight-costs' => '89.53',
            ),
            array(
                'weight-max'   => '12.0',
                'weight-costs' => '92.33',
            ),
            array(
                'weight-max'   => '12.5',
                'weight-costs' => '95.13',
            ),
            array(
                'weight-max'   => '13.0',
                'weight-costs' => '97.93',
            ),
            array(
                'weight-max'   => '13.5',
                'weight-costs' => '100.73',
            ),
            array(
                'weight-max'   => '14.0',
                'weight-costs' => '103.53',
            ),
            array(
                'weight-max'   => '14.5',
                'weight-costs' => '106.33',
            ),
            array(
                'weight-max'   => '15.0',
                'weight-costs' => '109.13',
            ),
            array(
                'weight-max'   => '15.5',
                'weight-costs' => '111.93',
            ),
            array(
                'weight-max'   => '16.0',
                'weight-costs' => '114.73',
            ),
            array(
                'weight-max'   => '16.5',
                'weight-costs' => '117.53',
            ),
            array(
                'weight-max'   => '17.0',
                'weight-costs' => '120.33',
            ),
            array(
                'weight-max'   => '17.5',
                'weight-costs' => '123.13',
            ),
            array(
                'weight-max'   => '18.0',
                'weight-costs' => '125.93',
            ),
            array(
                'weight-max'   => '18.5',
                'weight-costs' => '128.73',
            ),
            array(
                'weight-max'   => '19.0',
                'weight-costs' => '131.53',
            ),
            array(
                'weight-max'   => '19.5',
                'weight-costs' => '134.33',
            ),
            array(
                'weight-max'   => '20.0',
                'weight-costs' => '137.13',
            ),
            array(
                'weight-max'   => '20.5',
                'weight-costs' => '140.03',
            ),
            array(
                'weight-max'   => '21.0',
                'weight-costs' => '142.93',
            ),
            array(
                'weight-max'   => '21.5',
                'weight-costs' => '145.83',
            ),
            array(
                'weight-max'   => '22.0',
                'weight-costs' => '148.73',
            ),
            array(
                'weight-max'   => '22.5',
                'weight-costs' => '151.63',
            ),
            array(
                'weight-max'   => '23.0',
                'weight-costs' => '154.53',
            ),
            array(
                'weight-max'   => '23.5',
                'weight-costs' => '157.43',
            ),
            array(
                'weight-max'   => '24.0',
                'weight-costs' => '160.33',
            ),
            array(
                'weight-max'   => '24.5',
                'weight-costs' => '163.23',
            ),
            array(
                'weight-max'   => '25.0',
                'weight-costs' => '166.13',
            ),
            array(
                'weight-max'   => '25.5',
                'weight-costs' => '169.03',
            ),
            array(
                'weight-max'   => '26.0',
                'weight-costs' => '171.93',
            ),
            array(
                'weight-max'   => '26.5',
                'weight-costs' => '174.83',
            ),
            array(
                'weight-max'   => '27.0',
                'weight-costs' => '177.73',
            ),
            array(
                'weight-max'   => '27.5',
                'weight-costs' => '180.63',
            ),
            array(
                'weight-max'   => '28.0',
                'weight-costs' => '183.53',
            ),
            array(
                'weight-max'   => '28.5',
                'weight-costs' => '186.43',
            ),
            array(
                'weight-max'   => '29.0',
                'weight-costs' => '189.33',
            ),
            array(
                'weight-max'   => '29.5',
                'weight-costs' => '192.23',
            ),
            array(
                'weight-max'   => '30.0',
                'weight-costs' => '195.13',
            ),
            array(
                'weight-max'   => '31.0',
                'weight-costs' => '200.49',
            ),
            array(
                'weight-max'   => '32.0',
                'weight-costs' => '205.85',
            ),
            array(
                'weight-max'   => '33.0',
                'weight-costs' => '211.21',
            ),
            array(
                'weight-max'   => '34.0',
                'weight-costs' => '216.57',
            ),
            array(
                'weight-max'   => '35.0',
                'weight-costs' => '221.93',
            ),
            array(
                'weight-max'   => '36.0',
                'weight-costs' => '227.29',
            ),
            array(
                'weight-max'   => '37.0',
                'weight-costs' => '232.65',
            ),
            array(
                'weight-max'   => '38.0',
                'weight-costs' => '238.01',
            ),
            array(
                'weight-max'   => '39.0',
                'weight-costs' => '243.37',
            ),
            array(
                'weight-max'   => '40.0',
                'weight-costs' => '248.73',
            ),
            array(
                'weight-max'   => '41.0',
                'weight-costs' => '254.09',
            ),
            array(
                'weight-max'   => '42.0',
                'weight-costs' => '259.45',
            ),
            array(
                'weight-max'   => '43.0',
                'weight-costs' => '264.81',
            ),
            array(
                'weight-max'   => '44.0',
                'weight-costs' => '270.17',
            ),
            array(
                'weight-max'   => '45.0',
                'weight-costs' => '275.53',
            ),
            array(
                'weight-max'   => '46.0',
                'weight-costs' => '280.89',
            ),
            array(
                'weight-max'   => '47.0',
                'weight-costs' => '286.25',
            ),
            array(
                'weight-max'   => '48.0',
                'weight-costs' => '291.61',
            ),
            array(
                'weight-max'   => '49.0',
                'weight-costs' => '296.97',
            ),
            array(
                'weight-max'   => '50.0',
                'weight-costs' => '302.33',
            ),
            array(
                'weight-max'   => '51.0',
                'weight-costs' => '307.69',
            ),
            array(
                'weight-max'   => '52.0',
                'weight-costs' => '313.05',
            ),
            array(
                'weight-max'   => '53.0',
                'weight-costs' => '318.41',
            ),
            array(
                'weight-max'   => '54.0',
                'weight-costs' => '323.77',
            ),
            array(
                'weight-max'   => '55.0',
                'weight-costs' => '329.13',
            ),
            array(
                'weight-max'   => '56.0',
                'weight-costs' => '334.49',
            ),
            array(
                'weight-max'   => '57.0',
                'weight-costs' => '339.85',
            ),
            array(
                'weight-max'   => '58.0',
                'weight-costs' => '345.21',
            ),
            array(
                'weight-max'   => '59.0',
                'weight-costs' => '350.57',
            ),
            array(
                'weight-max'   => '60.0',
                'weight-costs' => '355.93',
            ),
            array(
                'weight-max'   => '61.0',
                'weight-costs' => '361.29',
            ),
            array(
                'weight-max'   => '62.0',
                'weight-costs' => '366.65',
            ),
            array(
                'weight-max'   => '63.0',
                'weight-costs' => '372.01',
            ),
            array(
                'weight-max'   => '64.0',
                'weight-costs' => '377.37',
            ),
            array(
                'weight-max'   => '65.0',
                'weight-costs' => '382.73',
            ),
            array(
                'weight-max'   => '66.0',
                'weight-costs' => '388.09',
            ),
            array(
                'weight-max'   => '67.0',
                'weight-costs' => '393.45',
            ),
            array(
                'weight-max'   => '68.0',
                'weight-costs' => '398.81',
            ),
            array(
                'weight-max'   => '69.0',
                'weight-costs' => '404.17',
            ),
            array(
                'weight-max'   => '70.0',
                'weight-costs' => '409.53',
            ),
        );
        $json = json_encode($data);

        return $json;
    }

    public function getSurcharges(): string
    {
        $surcharges = base64_encode(
            json_encode(
                array(
                    array(
                        'name'  => 'Treibstoff',
                        'costs' => '30',
                        'type'  => 'percent',
                    ),
                )
            )
        );

        return $surcharges;
    }

    public function installAdminAccess(): void
    {
        xtc_db_query(
            sprintf(
                'ALTER TABLE `%s`
                         ADD `%s` INT(1) DEFAULT 1 NOT NULL',
                TABLE_ADMIN_ACCESS,
                \grandeljaydhlexpress::class
            )
        );
    }

    public function uninstallAdminAccess(): void
    {
        xtc_db_query(
            sprintf(
                'ALTER TABLE `%s` DROP COLUMN `%s`',
                TABLE_ADMIN_ACCESS,
                \grandeljaydhlexpress::class
            )
        );
    }
}
