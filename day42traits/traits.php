<?php 

/**
* 
*/
class Animal
{
	
	public function sleep()
	{
		echo 'zzzzzzzzzzzz';
	}
}


/**
* 
*/
class Cat extends Animal
{
	public function sleep()
	{
		echo 'miauwwzzzzz';
		parent::sleep(); ///prints 'zzzzzzzzzzz'

		//using the parent will make the object do both actions. So on the screen will be printed bouth miauwzzzz as well as zzzzzzzzzzzzz.
	}
}

$oliver = new cat();
$oliver->sleep();


 ?>