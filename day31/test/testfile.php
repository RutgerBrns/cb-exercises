<?php

/**
* 
*/
class address

{
	protected $name = NULL;
	protected $street = NULL;
	protected $house_nr = NULL;
	protected $city = NULL;
	protected $country = NULL;
	protected $postal_code = NULL;
	protected static $local_country = NULL;

	function __construct($address_array){
		foreach ($address_array as $details => $value) {
			if (!empty($address_array['name'])) {$this->name = $address_array['name'];}
			if (!empty($address_array['street'])) {$this->street = $address_array['street'];}
			if (!empty($address_array['street'])) {$this->city = $address_array['city'];}
			if (!empty($address_array['street'])) {$this->country = $address_array['country'];}
			if (!empty($address_array['street'])) {$this->postal_code = $address_array['postal_code'];}
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