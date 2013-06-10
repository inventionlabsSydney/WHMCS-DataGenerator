<?php
namespace whmcsDataGen;
/**
 * dataModels for each SQL object
 * @author Karl Kloppenborg
 * @package WHMCS Data Generator
 */

require_once(dirname(__FILE__).'/../classes/class.datamodel.php');


class tblclients extends dataModels {

	function __construct($configuration = false) {
		parent::__construct(__CLASS__, $configuration);
	}

	public function tableDefinition() {
		
		$this->hasColumn('firstname',   'string');
		$this->hasColumn('lastname'	,   'string');
		$this->hasColumn('companyname', 'string');
		$this->hasColumn('email',		'string');
		$this->hasColumn('address1',	'string');
		$this->hasColumn('address2',	'string');
		$this->hasColumn('city',		'string');
		$this->hasColumn('state',		'string');
		$this->hasColumn('postcode',	'string');
		$this->hasColumn('country',		'string');
		$this->hasColumn('phonenumber', 'string');
		$this->hasColumn('password',	'string');
		$this->hasColumn('currency',	'string');
		$this->hasColumn('credit',		'string');
		$this->hasColumn('datecreated',	'string');
		$this->hasColumn('billingcid', 	'string');
		$this->hasColumn('securityqid',	'string');
		$this->hasColumn('securityqans', 'string');
		$this->hasColumn('groupid',		'string');
		$this->hasColumn('status',		'string');
	}
 }