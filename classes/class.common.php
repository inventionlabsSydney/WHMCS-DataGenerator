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

	static function output() {
		$page = (isset($_GET['page']) == false? "default" : $_GET['page']);

		switch($page) {
			default:
				self::page_default();
			break;
		}
	}

	static function page_default() {
		$template = new Smarty;
		$template->caching = false;

		//Render
		$template->display(dirname(__FILE__).'/../templates/default.tpl');
	}
}