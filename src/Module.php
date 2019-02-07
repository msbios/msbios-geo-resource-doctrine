<?php
/**
 * @access protected
 * @author Judzhin Miles <judzhin[at]gns-it.com>
 */
namespace MSBios\Geo\Resource\Doctrine;

use MSBios\ModuleInterface;

/**
 * Class Module
 * @package MSBios\Geo\Resource\Doctrine
 */
class Module implements ModuleInterface
{
    /** @const VERSION */
    const VERSION = '0.0.1';

    /**
     * @return mixed
     */
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
