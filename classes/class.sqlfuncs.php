<?php
namespace whmcsDataGen;
/**
 * SQL Functions - class for executing SQL
 * @author Karl Kloppenborg
 * @copyright Invention Labs PTY LTD 2013. All Rights Reserved.
 * @package WHMCS Data Generator
 */


class sqlCore {
	/**
	 * When instanciating the class we need to connect to the WHMCS installation, lets get the configuration file
	 * @author Karl Kloppenborg
	 * @return (object) class
	 */
	public function __construct($configuration = dirname(__FILE__.'/../../../../configuration.php')) {
		//Check for existence;
		if(!file_exists($configuration))
			throw new exception(sprintf("Unable to open configuration file located at: %s", $configuration));
		
	}
}