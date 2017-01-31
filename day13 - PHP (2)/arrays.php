<?php

require_once('var_show.php');

$variable = 'Jan';
$array = array();

$fruit = array(
    0 => 'Apple',
    1 => 'Pear',
    2 => 'Orange'
);


?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php val_show($variable); ?>
	<?php var_show($variable); ?>

	<?php val_show($fruit); ?>
	<?php var_show($fruit); ?>

	<?php var_dump($fruit); ?>

	<?php // we are adding a new item into the array's next available index.
	$fruit[] = '123'; ?>
	<?php val_show($fruit); ?>

	<?php // we can randomly re-order the values assigned to the numeric keys
	shuffle($fruit); ?>
	<?php val_show($fruit); ?>

	<?php // we are adding a new item into the array's next available index.
	$array[] = 'first'; ?>
	<?php val_show($array); ?>

	<?php // we are adding a new item into the array's next available numeric index.
	$array[] = 'second'; ?>
	<?php val_show($array); ?>

	<?php // we are adding a new item into the array's with a specific value. It will not count to the numeric arrays.
	$array['my_key'] = 'my_value'; ?>
	<?php val_show($array); ?>

	<?php // we are adding a new item into the array's next available numeric index.
	$array[] = 'third'; ?>
	<?php val_show($array); ?>

	<?php // we are adding a new item into the array's specific numeric index. It will continue from this numeric index (see next)
	$array[123] = 'string'; ?>
	<?php val_show($array); ?>


	<?php // we are adding a new item into the array's next available numeric index.
	$array[] = 'onehunderedandtwentyfour'; ?>
	<?php val_show($array); ?>

	<?php // we can also add an array to the array.
	$array[] = $array; ?>
	<?php val_show($array); ?>

	<?php // we can randomly re-order the values assigned to the numeric keys
	array_pop($fruit); ?>
	<?php val_show($fruit); ?>

</body>
</html>