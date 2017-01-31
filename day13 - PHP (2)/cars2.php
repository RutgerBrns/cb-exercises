<?php

require_once('var_show.php');

$cars_i_want = array(
    'Porshe' => 2000000,
    'Ferrari' => 2500000,
    'Aston Martin' => 2800000,
    'Lamborghini' => 3500000,
    'Bugatti' => 16000000
);

$cars_my_wife_wants = array(
    'Smart' => 320000,
    'Mercedes' => 620000,
    'Toyota' => 480000,
    'Ford Mustang' => 1200000
);
$cars_i_cant_stand = array(
    'Smart'
);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php // we are adding a new item into the array's next available index.
	$cars_i_dont_have = array_merge($cars_i_want, $cars_my_wife_wants);
	val_show($cars_i_dont_have); ?>

	<?php // we are adding a new item into the array's next available index.
	arsort($cars_i_dont_have);
	val_show($cars_i_dont_have); ?>

	<?php // we are adding a new item into the array's next available index.
	$keys = array_keys($cars_i_dont_have);
	val_show($keys); ?>

	<?php // we are adding a new item into the array's next available index.
	$cars_that_we_really_want = array_diff_key($cars_i_dont_have, array_flip($cars_i_cant_stand));
	val_show($cars_that_we_really_want); ?>

	<?php 
	$car_we_buy = array_pop($cars_that_we_really_want);	
	var_show($car_we_buy); ?>

	<hr>

	<?php
	echo 'ul';
	foreach($cars_that_we_really_want as $brand => $price)
	{
		echo <li>'price of ' . $brand . ' is ' . $price</li>;
	} ?>

	

</body>
</html>