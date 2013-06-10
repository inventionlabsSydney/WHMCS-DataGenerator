<?php
/**
 * PHP test of the phpinfo controls as we need to get the memory limits
 * @author Karl Kloppenborg
 * @package WHMCS Data Generator
 */

require_once(dirname(__FILE__).'/../classes/class.resourceManager.php');

use whmcsDataGen\resourceManager as resMan;

$res = new resMan();

print_r($res);

$res->check();

print_r($res);