<?php
/**
 * Tests the userGenerator
 * @author Karl Kloppenborg
 * @package WHMCS Data Generator
 */

require_once(dirname(__FILE__).'/../classes/class.userGenerator.php');

use whmcsDataGen\userGenerator as userGenerator;

$fileGen = new userGenerator();
//print_r($fileGen);

$fileGen->openCSV();
//print_r($fileGen);