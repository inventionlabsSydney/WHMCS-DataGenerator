<?php

class funcs {

	static function config() {
	    $configarray = array(
		    "name" => "WHMCS Data Generator",
		    "description" => "Generates random accounts, services, invoices based on a given time period + products with configuration options",
		    "version" => "1.0",
		    "author" => "Karl Kloppenborg",
		    "language" => "english",
		    "fields" => array(
		    ));
	    return $configarray;
	}
}

?>