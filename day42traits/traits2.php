<?php 

/**
* 
*/
class animal
{
	
	protected $hungry = true;

	public function eat(){
		$this->hungry = false;
	}

}

/**
* The dog inherits from the animal class that it can be hungry
*/
class dog extends animal
{
	use domesticated;	
}

/**
* The wolf inherits from the animal class that it can be hungry
*/
class wolf extends animal
{
	
}

trait domesticated {
	$owners_mood = 'unhappy';

	public function beFed(){
		$this->hungry = false;
		$this->owners_mood = 'happy';
	}
}

$clifford = new dog();
$clifford->beFed();

//NOT: if there are functions with the same name in the parent and the trait. The trait will overwrite teh functions in the parent. If the function with the same name is also defined in the child (dog/wolf) it would also overwrite the trait. The child always has always the strongest priority.


 ?>