<?php

require_once 'test2.php'; //this is the file with the address class

/**
* 
*/
class us_address extends address
{
	protected $state = NULL;

	function __construct()
	{
		$this->address->setLocalCountry('us');
	}
}

$country = us_address::getLocalCountry();
echo $country;