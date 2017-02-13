<?php

require_once('functions.php');

$message = "We are sorry. Not enough items in stock.";

$remaining_stock = function amount_in_stock($_POST['product_id'], $_POST['color'], $_POST['size']);

if ($remaining_stock >= $_POST['amount']) {
	function add_to_cart($_POST['product_id'], $_POST['color'], $_POST['size'], $_POST['amount']);
		if(isset($_POST['checkout'])) {
			header("/checkout.php");
			die();
		} 
	}	else {
		function add_error($message);
		header("/home.php");
			die();
}


?>
