<?php
/**
 * WHMCS Data Generator
 * @author Karl Kloppenborg
 * @package WHMCS Data Generator
 * @version 1.0
 */
require_once(dirname(__FILE__).'/classes/class.common.php');

function whmcs_dataGen_config() {
	return whmcsDataGen\common::configuration();
}

function whmcs_dataGen_activate() {
	return whmcsDataGen\common::activate();
}