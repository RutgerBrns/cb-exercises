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
			if (!empty($adress_array['city'])) {$this->city = $adress_array['city'];}
			if (!empty($adress_array['country'])) {$this->country = $adress_array['country'];}
			if (!empty($adress_array['postal_code'])) {$this->postal_code = $adress_array['postal_code'];}
		}
		
	}

	static function setLocalCountry($local_country) {
		static::$local_country = $local_country;
	}

	static function getLocalCountry() {
		return static::$local_country;
	}
}

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

$adress1 = new adress($adress1_details);
$adress2 = new adress($adress2_details);
$adress3 = new adress($adress3_details);
$adress4 = new adress($adress4_details);

//just for testing

var_dump($adress1);
var_dump($adress2);
var_dump($adress3);
var_dump($adress4);

