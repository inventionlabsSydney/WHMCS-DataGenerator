<?php
/**
 * Table Model Testing
 * @author Karl Kloppenborg
 * @package WHMCS Data Generator
 */

require_once(dirname(__FILE__).'/../definitions/models.dataModels.php');

use whmcsDataGen\tblclients as tblclients;

$user = new tblclients('../../configuration.php');

//Add the data
$user->firstname = "Karl";
$user->lastname  = "Kloppenborg";
$user->companyname = "testingCompany";
$user->email = "karlos@karl.com";
$user->status = "Active";
print_r($user);

echo print_r($user->save(), true)."\n\n";