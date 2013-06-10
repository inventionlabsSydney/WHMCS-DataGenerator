<?php
namespace whmcsDataGen;
/**
 * Definitions class for SQL queries
 * @package WHMCS Data Generator
 * @author Karl Kloppenborg
 */

require_once(dirname(__FILE__).'/defs.coreDefinitions.php');
require_once(dirname(__FILE__).'/models.dataModels.php');

class sqlDefinitions extends dataModels {

	static function add_client(newClient $clientObject) {
		//Using the $clientObject [class newClient] we can instantiate the modules needed
		//24 values being inserted (25 including the table name)
		$SQL = sprintf(
			"INSERT INTO `%s` (
					`firstname`, `lastname`, `companyname`, `email`, `address1`, `address2`, `city`, `state`, `postcode`, 
					`country`, `phonenumber`, `password`, `currency`, `credit`, `datecreated`, `billingcid`, `securityqid`, `securityqans`, `groupid`, `lastlogin`, `ip`, `host`, `status`, `pwresetexpiry`) VALUES (
					'%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s');", 
			TABLE_CLIENTS, $clientObject->firstname, $clientObject->lastname, $clientObject->companyname, $clientObject->email, $clientObject->address1,
			$clientObject->address2, $clientObject->city, $clientObject->state, $clientObject->postcode, $clientObject->country, $clientObject->phonenumber, $clientObject->password, $clientObject->currency, $clientObject->credit,
			$clientObject->datecreated, $clientObject->billingcid, $clientObject->securityqid, $clientObject->securityqans, $clientObject->groupid, $clientObject->lastlogin, $clientObject->ip, $clientObject->host, $clientObject->status, $clientObject->pwresetexpiry);
		return $SQL;
	}
}