<?php
/**
 * Table Model Testing
 * @author Karl Kloppenborg
 * @package WHMCS Data Generator
 */

require_once(dirname(__FILE__).'/../definitions/models.dataModels.php');

use whmcsDataGen\tblclients as tblclients;

$user = new tblclients();
print_r($user);

echo print_r($user->save(), true)."\n\n";