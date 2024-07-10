<?php

/**
 * German translations
 *
 * @author  Jay Trees <dhlexpress@grandels.email>
 * @link    https://github.com/grandeljay/modified-dhl-express
 * @package GrandeljayDhlExpress
 */

use Grandeljay\DhlExpress\Constants;

$translations = [
    /** Module */
    'TITLE'                            => 'grandeljay - DHL Express',
    'TEXT_TITLE'                       => 'DHL Express',
    'TEXT_TITLE_WEIGHT'                => 'DHL Express (%s kg)',
    'LONG_DESCRIPTION'                 => 'Ajoute la méthode d\'expédition DHL Express dans le checkout.',
    'STATUS_TITLE'                     => 'Statut',
    'STATUS_DESC'                      => 'Sélectionnez Oui pour activer le module et Non pour le désactiver.',

    /** Configuration */
    'ALLOWED_TITLE'                    => '',
    'ALLOWED_DESC'                     => '',

    'SORT_ORDER_TITLE'                 => 'Ordre de tri',
    'SORT_ORDER_DESC'                  => 'Détermine le tri dans Admin et Checkout. Les chiffres les plus bas sont affichés en premier.',

    'WEIGHT_TITLE'                     => 'Poids',
    'WEIGHT_DESC'                      => 'Déterminer le poids idéal et le poids maximal.',
    'WEIGHT_PER_KG'                    => 'Prix par kg (à partir de %s Kg, jusqu\'à %s Kg)',

    'SHIPPING_TITLE'                   => 'Expédition',
    'SHIPPING_DESC'                    => 'Poids, prix et paramètres des différents modes d\'expédition de DHL Express.',
    'SHIPPING_ZONE_PER_KG_TITLE'       => 'Prix par kg',
    'SHIPPING_ZONE_PER_KG_DESC'        => 'Ajuste le paramètre "Prix par kg" pour chaque zone.',

    'SURCHARGES_TITLE'                 => 'Suppléments',
    'SURCHARGES_DESC'                  => 'Options relatives aux majorations',

    'BULK_PRICE_CHANGE_TITLE'          => 'Changement de prix en vrac',
    'BULK_PRICE_CHANGE_DESC'           => 'Multiplie tous les prix d\'expédition du module par un facteur. Les modifications ne sont qu\'un aperçu. Ce n\'est qu\'au moment de l\'enregistrement que les valeurs sont définitivement prises en compte. Avant cela, le facteur peut être modifié autant de fois que nécessaire, sans que les prix ne changent réellement.',
    'BULK_PRICE_CHANGE_FACTOR_TITLE'   => 'Facteur',
    'BULK_PRICE_CHANGE_FACTOR_DESC'    => 'De quel facteur les prix d\'expédition doivent-ils être adaptés ? Aperçu Réinitialiser ',
    'BULK_PRICE_CHANGE_BUTTON_PREVIEW' => 'Aperçu',
    'BULK_PRICE_CHANGE_BUTTON_RESET'   => 'Réinitialiser',
];

foreach ($translations as $key => $value) {
    $constant = Constants::MODULE_SHIPPING_NAME . '_' . $key;

    define($constant, $value);
}
