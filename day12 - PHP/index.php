<?php 

define('My_OS', 'Sean_OS'); // Defining a CONSTANT: degine (Name Variable, content)
$variable = 1;
$first_name = 'Rutger';
$surname = 'Beerens';
$year_of_birth = 1987;
$height = 1.83;
$celsius = -6;

$variable_result = $variable + $variable;

echo "The result is " . $variable_result . '<br/>';

echo 'My name is ' . $first_name . $surname . ' and I was born in ' . $year_of_birth . '. I am ' . $height . 'm tall. <br/>';

echo 'My OS is: ' . My_OS . '<br/>';

// .= means adding something to the variable
$string = 'H'; //H
$string .= 'e'; //He
$string .= 'llo'; //Hello
echo $string . '<br/>';

function calculate_fahrenheit($celsius)
{
$fahrenheit = (9/5) * $celsius + 32;
echo $fahrenheit;
}

calculate_fahrenheit($celsius);

 $male = true;

 if ($male == true) {
 	echo '<br/> I am a male';
 } else {
 	echo '<br/> I am a female';
 }

 $number = 99;

 if ($number%2 == 0) {
 	echo '<br/> even';
 } else {
 	echo '<br/> odd';
 }

function calculate_height($height)
{
	if ($height < 1.20){
		echo '<br/> Short <br/>';
	} elseif ($height < 1.60){
		echo '<br/> Medium <br/>';
	}	elseif ($height < 1.80){
		echo '<br/> Tall <br/>';
	} else {
		echo '<br/> Very Tall <br/>';
	}
}

calculate_height($height);

$color = 'black';

switch ($color) {
	case 'blue':
		echo 'the color is blue';
		break;
	case 'red':
		echo 'the color is red';
		break;
	case 'black':
	    echo 'the color is black';
		break;
	default:
		echo 'the color is yellow';
		break;
}

$age = 29;
$gender = 'male';
$employed = true;

if ($age > 35){

}

if ($employed == true){

}

if ($age <= 18){

} 

if ($age < 12 && $gender == 'female'){
	
} 

if ($age >= 18 && $employed == false){
	
} 

if ($age >= 60 && $employed == true && gender == female){
	
} 

if (($gender == 'male' && $age > 20) || ($employed == false && $gender == $female && $age > 25)){
	
} 

$is_admin = true;

$is_admin AND do_some_function();



 ?>