<?php
// Reference Arguments (multiple variables returned in 1 function)
function divide($number_1, $number_2, & $remainder) {
	$remainder = $number_1 % $number_2;
	$result = $number_1 / $number_2;
	return $result;
}

$result_of_division = divide(3,2, $remainder);
echo "the result of dividing is ".$result_of_division."<br>"; 
echo "the remainder is ".$remainder;

function validate($value, $messages) {

	if(empty($value)) {
		$message[] = 'invalid value';
		return $message;		
	} 
}


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php $messages = array(); ?>

	<?php $message = validate(0, $messages); ?>

	<?php foreach ($messages as $message) : ?>
		<div><p><?php echo $message; ?></p></div>
	<?php endforeach; ?>

</body>
</html>

