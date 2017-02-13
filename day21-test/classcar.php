<?php

/**
* 
*/
class Car 
{

	private $color = null;
	private $manufacturer = 'VW';
	public $model = null;
	public $price = null;
	public $fueltype = 'petrol';
	public $owner = 'manufacturer';
	public $current_speed = 0;

	public function speedup() 
	{
		echo 'car goes forward';
		$this->current_speed += 10;
	}

		public function speeddown() 
	{
		echo 'car goes forward';
		$this->current_speed -= 10;
	}

	public function sold() 
	{
		$this->current_owner = $new_owner;
	}

	public function get_stolen() 
	{
		$this->current_owner = 'chop-shop';
	}


	public function setManufacturer($brand){
		$this->manufacturer=$brand;
	}

	public function getManufacturer(){
		return $this->manufacturer;
	}
}

$new_car = new car();
$new_car->model = 'Polo';
$new_car->price = 12000;



$manuf = $new_car->getManufacturer();
echo $manuf;

echo "  ";

$new_car->setManufacturer('lambo');
$manuf = $new_car->getManufacturer();
echo $manuf;



