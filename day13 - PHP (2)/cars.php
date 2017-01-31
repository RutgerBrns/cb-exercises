<?php

require_once('var_show.php');

$cars_i_want = array(
    'Porshe',
    'Ferrari',
    'Aston Martin',
    'Lamborghini',
    'Bugatti'
);

$cars_i_have = array(
    'Ferrari',
    'Lamborghini'
);


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php // we are adding a new item into the array's next available index.
	$cars_i_dont_have = array_diff($cars_i_want, $cars_i_have) ?>
	<?php val_show($cars_i_dont_have); ?>

	<?php // we are adding a new item into the array's next available index.
	shuffle($cars_i_dont_have);
	val_show($cars_i_dont_have); ?>

	<?php // we are adding a new item into the array's next available index.
	$car_i_will_buy = array_shift($cars_i_dont_have);
	var_show($car_i_will_buy); ?>

	

</body>
</html>