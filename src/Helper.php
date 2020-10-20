<?php
/* This file has been prefixed by <PHP-Prefixer> for "Hello Prefixed World for Joomla" */

/**
 * @package Hello Prefixed World for Joomla
 * @version 1.0.0
 */

namespace ModHelloWorld;

// No direct access
defined('_JEXEC') or die;

use PPP\Carbon\Carbon;

class Helper
{
    /**
     * Retrieves the hello message
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */
    public static function getHello($params)
    {
        $now = Carbon::now();
        $formattedDate = $now->toDateTimeString();

        return $formattedDate.' / Hello, World!';
    }
}