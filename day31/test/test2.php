<?php

require_once 'testfile.php';

//ASSIGNMENT 5 - not (yet) working.

/**
* 
*/
class delivery
{

	protected $adress = NULL;
	protected $is_sent = false;
	protected $sent_at = NULL;
	protected $is_delivered = false;
	protected $deliverd_at = NULL;
	
	public function __construct($address)
	{
		$this->address = $address;	
	}

	public function getPrice(){
		if ($this->address->isLocal() == true) {
			return '0';
		}	else {
			return '8.99';
		}		
	}

	public function send() {
		$this->is_sent = true;
		$this->sent_at = date("l jS \of F Y h:i:s");
	}

	public function delivered($datetime) {
		$this->is_delivered = true;
		$this->delivered_at = $datetime;
	}
}

$address_array = array(
    'name' => 'Rahim Henderson',
    'street' => 'Diam Rd.',
    'house_nr' => 5037,
    'city' => 'Daly City',
    'country' => 'us',
    'postal_code' => '90255'
);

$my_address = new address($address_array);
$my_delivery = new delivery($my_address);
$my_delivery->send();
$my_delivery->delivered('2017-02-20 09:00:00');

var_dump($my_delivery);
echo $my_delivery->getPrice();

?>

