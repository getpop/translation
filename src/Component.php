<?php
namespace PoP\Translation;

use PoP\Root\Component\AbstractComponent;

/**
 * Class required to check if this component exists and is active
 */
class Component extends AbstractComponent
{
    /**
     * Indicate if the component is active
     *
     * @var boolean
     */
    public static $active;

    /**
     * Initialize services
     */
    public static function init()
    {
        parent::init();
        self::$active = true;
    }
}
