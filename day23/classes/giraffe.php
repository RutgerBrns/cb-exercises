<?php 

	/**
	* 
	*/
class giraffe
{	
			
	//general information about giraffes.
	public static $number_of_giraffes = 0;
	public static $number_of_giraffes_at_the_pond = 0;
	public static $number_of_giraffes_in_the_forest = 0;

	//informamtion about a specific copy of the giraffe.
	public $number_of_legs = 4;
	public $is_thirsty = true;
	public $is_hungry = true;
	public $color = 'yellow';
	public $name = 'Micky';
	public $location = 'forest'; //other possible location is: 'pond'.
	
	//Starting Behaviour
	public function __construct($name)
		{
			$this->name=$name;
			echo 'This giraffe was just born, it is called '.$name.'<br /> <br/>';
			static::$number_of_giraffes++;
		}
	
	//Ending behaviour 
	public function __destruct()
		{
			static::$number_of_giraffes--;
		}

	//functions (possible behaviour)
	public function drink()
	{
		if($this->is_thirsty == true){
			echo 'Hmmm I am thirsty, I will drink. <br/>';
			$this->is_thirsty = false;
			$this->is_hungry = true;
			echo 'Hmm that was very nice, I am no longer thirsty. Now I am Hungry, though <br/> <br/>';
		} else {
			echo 'I am not thirsty, I first need to get food <br/> <br/>';
		}
	}

	public function eat()
	{
		if($this->is_hungry == true){
			echo 'Hmmm I am hungry, I will eat some leaves. <br/>';
			$this->is_thirsty = true;
			$this->is_hungry = false;
			echo 'Hmm that was very nice, I am no longer hungry. It was very salty though (hint, hint). <br /> <br/>';
		} else {
			echo 'I am not hungry, I first need to get drink <br/> <br/>';
		}
	}
}

 ?>
