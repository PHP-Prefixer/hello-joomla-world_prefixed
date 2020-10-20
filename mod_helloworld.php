<?php
/* This file has been prefixed by <PHP-Prefixer> for "Hello Prefixed World for Joomla" */

/**
 * @package Hello Prefixed World for Joomla
 * @version 1.0.0
 */

// No direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__) . '/vendor/autoload.php';

$hello = \ModHelloWorld\Helper::getHello($params);
require JModuleHelper::getLayoutPath('mod_helloworld');
