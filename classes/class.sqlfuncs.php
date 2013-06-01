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
	 * Private variable assignments
	 */
	private $_sqlObject; //Store the SQL object in here.
	private $_errorHandler; //Store any errors to throw an exception if needed.


	/**
	 * When instanciating the class we need to connect to the WHMCS installation, lets get the configuration file
	 * @author Karl Kloppenborg
	 * @return (object) class
	 */
	public function __construct($configuration = dirname(__FILE__.'/../../../../configuration.php')) {
		//Check for existence;
		if(!file_exists($configuration))
			throw new exception(sprintf("Unable to open configuration file located at: %s", $configuration));
		//Get here - file exists, lets use it.
		include_once($configuration); //Include the configuration file so we can use the DB login details.

		//Okay lets now instanciate the SQL object.
		$this->_sqlObject = new mysqli($db_host, $db_username, $db_password);
		//check connection
		if(mysqli_connect_errno())
			throw new exception(sprintf("MySQLi Unable to connect for reason: %s", mysqli_connect_error()));
		//Set the charset
		if(!$this->_sqlObject->set_charset($mysql_charset))
			throw new exception(sprintf("Unable to set the MySQLi Char Set to: %s", $mysql_charset));
	}
}