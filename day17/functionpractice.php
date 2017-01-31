<?php

function divide($number_1, $number_2, & $remainder) {
	$remainder = $number_1 % $number_2;
	$result = $number_1 / $number_2;
	return $result;
}

$result_of_division = divide(3,2, $remainder);
echo $result_of_division."<br>"; 
echo $remainder;

?>