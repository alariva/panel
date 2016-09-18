<?php
/**
 * Adminlter Smallbox facade
 */

namespace Alariva\Adminlter\Facades;

/**
 * Facade for Accordions
 *
 * @package Adminlter\Facades
 * @see     Adminlter\Smallbox
 */
class Smallbox extends AdminlterFacade
{

    /**
     * {@inheritdoc}
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Adminlter::smallbox';
    }
}
