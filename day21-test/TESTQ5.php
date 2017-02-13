<?php

// the variables are deliberately initialized with null so that you don't think about their current values
// their current value can be any number
$price = 5;
$in_stock = 10;
$on_sale = true;
$max_price = 4;
$amount_wanted = 1;

if (($price <= $max_price OR $on_sale == true) && ($in_stock >= $amount_wanted) && ($amount_wanted > 0))  {
	
	echo 'conditions are met';
		} else {
			echo "conditions are not met";
		}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<a href="/day21-test/product.php?product_id=321&color=blue&size=XL">Blue t-shirt (XL)</a>

</body>
</html>

