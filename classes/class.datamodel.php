<?php
namespace whmcsDataGen;
/**
 * dataModel class for setting up the table
 * @author Karl Kloppenborg
 * @package WHMCS Data Generator
 */

require_once(dirname(__FILE__).'/../classes/class.sqlfuncs.php');

abstract class dataModels extends sqlCore {
	public $columns = array();
	private $tblname = null;

	function __construct($tblname) {
		parent::__construct();
		$this->tblname = $tblname;
		$this->tableDefinition();
	}
	public function hasColumn($name, $type) {
		$this->columns[$name] = $type;
		$this->{$name} = null;
	}

	private function formulateQuery() {
		/*
		 * Setup the columns & values
		 */
		$columnText = ""; //Empty string;
		$valueText  = ""; //Empty String;
		
		$counter = 0;
		foreach($this->columns as $key => $type) {
			$counter++;
			switch($type) {
				case 'string':
					$columnText .= sprintf('`%s`', $key);
					$valueText	.= sprintf('`%s`', $parent->mysql_escape_string($this->{$key}));
				break;
			}
			if($counter !== count($this->columns)) {
				$columnText .= ", ";
				$valueText	.= ", ";
			}
				
		}

		return sprintf("INSERT INTO `%s`(%s) VALUES(%s);", $this->tblname, $columnText, $valueText);
	}

	public function save() {
		
		$query = $this->formulateQuery();
		return $query;
	}

	/*********
	/* Abstracted methods
	 **********/
	abstract function tableDefinition();

}