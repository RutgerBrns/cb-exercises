<?php

error_reporting(E_ALL);

/**
* 
*/
class adress

{
	protected $name = NULL;
	protected $street = NULL;
	protected $house_nr = NULL;
	protected $city = NULL;
	protected $country = NULL;
	protected $postal_code = NULL;
	protected static $local_country = NULL;

	function __construct($adress_array){
		foreach ($adress_array as $details => $value) {
			if (!empty($adress_array['name'])) {$this->name = $adress_array['name'];}
			if (!empty($adress_array['street'])) {$this->street = $adress_array['street'];}
			if (!empty($adress_array['street'])) {$this->city = $adress_array['city'];}
			if (!empty($adress_array['street'])) {$this->country = $adress_array['country'];}
			if (!empty($adress_array['street'])) {$this->postal_code = $adress_array['postal_code'];}
		}
		
	}

	static function setLocalCountry($local_country) {
		static::$local_country = $local_country;
	}

	function getLocalCountry() {
		return static::$local_country;
	}

	function getCountry() {
		return $this->country;
	}

	//assignment 4
	function isLocal() {
		if ($this->getCountry() == static::getLocalCountry()) {
			return true;
		} else {
			return false;
		}
	}

}

$local_country = 'cz';

adress::setLocalCountry($local_country);

$country = adress::getLocalCountry();
echo $country;

$adress1_details = array(
    'street' => 'Schorbachstrasse',
    'city' => 'Butzbach',
    'postal_code' => '35510',
    'country' => 'de'
);

$adress2_details = array(
    'name' => 'Rahim Henderson',
    'street' => 'Diam Rd.',
    'house_nr' => 5037,
    'city' => 'Daly City',
    'country' => 'us',
    'postal_code' => '90255'
);

$adress3_details = array(
    'name' => 'Czech Post',
    'street' => 'Prujezdna',
    'house_nr' => 9,
    'city' => 'Praha',
    'country' => 'cz',
    'postal_code' => '22599'
);

$adress4_details = array(
    'street' => 'Kordačova',
    'house_nr' => 2912,
    'city' => 'Kladno',
    'country' => 'cz',
    'postal_code' => '27204'
);

//ASSIGNMENT 3
$adress1 = new adress($adress1_details);
$adress2 = new adress($adress2_details);
$adress3 = new adress($adress3_details);
$adress4 = new adress($adress4_details);

var_dump($adress1);
var_dump($adress2);
var_dump($adress3);
var_dump($adress4);

//Assignment 4
echo $adress4->getCountry();
echo $adress4::getLocalCountry(); 

$boolean = adress4::getLocal();
var_dump($boolean);












/* ASSIGNMENT 1

$calling_codes = array(
    'AR' => '+54',
    'CZ' => '+420',
    'DE' => '+49',
    'HU' => '+36',
    'US' => '+1'
);

$country_names = array(
    'US' => 'USA',
    'HU' => 'Hungary',
    'CZ' => 'Czechia',
    'AR' => 'Argentina',
    'DE' => 'Germany',
    'DK' => 'Denmark',
    'IN' => 'India'
);


foreach ($calling_codes as $country_codes => $call_codes) {
	echo 'The calling code of ' . $country_names[$country_codes] . ' is ' .  $call_codes . '<br>';
}

*/