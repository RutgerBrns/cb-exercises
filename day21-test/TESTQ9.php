<?php  
define("CURRENCY", "EURO", true);

function print_price($price) {

		switch ($price) {
			case 'EURO':
				$currency = "€";
				break;

			case 'USD':
				$currency = "$";
				break;

			case 'CZK':
				$currency = "Kc";
				break;

			default:
				$currency = "€";
				break;
		}

		return $price." ".$currency;
}


?>