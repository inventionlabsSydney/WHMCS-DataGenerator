<?php
namespace whmcsDataGen;
/**
 * Random User Generator For clients
 * @author Karl Kloppenborg
 * @package WHMCS Data Generator
 */
require_once(dirname(__FILE__).'/class.resourceManager.php');


class userGenerator {

	private $_usersToGenerator = 0;
	private $_handle;
	private $_ingestedCSV = array();

	function __construct() {
		$resMan = new resourceManager();
		if($resMan->check() == false)
			throw new \Exception("Unable to instanciate the userGenerator class as the resourceManager checks did not pass!");
		$this->_usersToGenerator = rand(2300, 3500); //Sets a good range of users to generate
		for($c = 0; $c < $this->_usersToGenerator; $c++) {
			$this->_ingestedCSV[rand(2, 1000002)] = array();
		}

	}

	public function openCSV($file = false) {
		if(!$file)
			$file = dirname(__FILE__).'/../generationData/FakeNameGenerator.com.csv';
		if(($this->_handle = fopen($file, "r")) !== FALSE) {
			$row = 1;
			while(($data = fgetcsv($this->_handle)) !== FALSE) {
				if($row == 1)
					print_r($data);
				if(array_key_exists($row, $this->_ingestedCSV))
					$this->_ingestedCSV[$row] = $data;
				$row++;
			}
			fclose($this->_handle);
		}
		return true;
	}

}