<?php
namespace whmcsDataGen;
/**
 * Common class, contains the code that runs for the module
 * @author Karl Kloppenborg
 * @package WHMCS Data Generator
 */

class common {

	static function configuration() {
		return array(
			"name" 			=> "WHMCS Data Generator",
			"description" 	=> "This module allows developers to quickly build a testing environment for their modules by generating lots of data.",
			"version" 		=> "1.0",
			"author" 		=> "Invention Labs",
			"language" 		=> "english",
			"fields" 		=> array()
			);
	}

	static function activate() {
		return array("status" => "success", "description" => "Installed the module successfully!");
	}
}