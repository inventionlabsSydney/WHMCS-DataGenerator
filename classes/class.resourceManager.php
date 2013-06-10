<?php
namespace whmcsDataGen;
/**
 * Class for managing the requirements of the projects php.ini settings
 * @author Karl Kloppenborg
 * @package WHMCS Data Generator
 */

require_once(dirname(__FILE__).'/../definitions/defs.coreDefinitions.php');

class resourceManager {

	private $_memory;
	private $_executionTime;

	public function __construct() {
		$this->_memory		  = (int)substr(ini_get('memory_limit'), 0, -1);
		$this->_executionTime = ini_get('max_execution_time');
	}

	public function refresh() {
		$this->__construct();
	}

	public function check() {
		if($this->_memory < RAM_NEEDED) {
			$this->setMemory();
			if($this->_memory < RAM_NEEDED)
				return false;
		}

		if($this->_executionTime < 600) {
			$this->setExectutionTime();
			if($this->_executionTime < 600)
				return false;
		}
		return true; 
	}

	public function setMemory() {
		ini_set('memory_limit', RAM_NEEDED.'M');
		$this->refresh();
	}

	public function setExectutionTime() {
		ini_set('max_execution_time', '600');
		$this->refresh();
	}
}