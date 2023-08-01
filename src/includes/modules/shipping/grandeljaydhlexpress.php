<?php

/**
 * DHL Express
 *
 * @author  Jay Trees <dhlexpress@grandels.email>
 * @link    https://github.com/grandeljay/modified-dhl-express
 * @package GrandeljayDhlExpress
 *
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 * @phpcs:disable Squiz.Classes.ValidClassName.NotCamelCaps
 */

use Grandeljay\DhlExpress\{Constants, Installer, Quote};
use Grandeljay\DhlExpress\Field\{Shipping, Surcharges};
use RobinTheHood\ModifiedStdModule\Classes\StdModule;

class grandeljaydhlexpress extends StdModule
{
    private Installer $installer;

    public const VERSION     = '0.1.1';
    public array $properties = array();

    public static function shipping(string $value, string $option): string
    {
        $decoded       = json_decode(base64_decode($value), true);
        $international = $decoded['international'];

        $html = Shipping::getInternational($international);

        return $html;
    }

    public static function surcharges(string $value, string $option): string
    {
        $decoded    = json_decode(base64_decode($value), true);
        $surcharges = $decoded;

        $html = Surcharges::getSurcharges($surcharges);

        return $html;
    }

    /**
     * Used by modified to determine the cheapest shipping method. Should
     * contain the return value of the `quote` method.
     *
     * @var array
     */
    public array $quotes = array();

    public function __construct()
    {
        parent::__construct(Constants::MODULE_SHIPPING_NAME);

        $this->addKey('SHIPPING');
        $this->addKey('SURCHARGES');

        $this->installer               = new Installer();
        $this->properties['form_edit'] = xtc_draw_form('modules', 'grandeljaydhlexpress.php');
    }

    public function install()
    {
        parent::install();

        $this->addConfiguration('ALLOWED', '', 6, 1);
        $this->addConfiguration('SHIPPING', $this->installer->getShipping(), 6, 1, \grandeljaydhlexpress::class . '::shipping(');
        $this->addConfiguration('SURCHARGES', $this->installer->getSurcharges(), 6, 1, \grandeljaydhlexpress::class . '::surcharges(');

        $this->installer->installAdminAccess();
    }

    public function remove()
    {
        parent::remove();

        $this->removeConfiguration('ALLOWED');
        $this->removeConfiguration('SHIPPING');
        $this->removeConfiguration('SURCHARGES');

        $this->installer->uninstallAdminAccess();
    }

    /**
     * Used by modified to show shipping costs. Will be ignored if the value is
     * not an array.
     *
     * @var ?array
     */
    public function quote(): ?array
    {
        $quote  = new Quote();
        $quotes = $quote->getQuote();

        if (is_array($quotes)) {
            $this->quotes = $quotes;
        }

        return $quotes;
    }
}