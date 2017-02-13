<?php

require_once '../shared/database.php';
$db = new Database();
$product = $db->getproduct($_POST['id']);


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="shoppingcart">
	<h1>Information about: <?php echo $product['name']; ?></h1>

	<table>
		<thead>
			<td><strong>Product Name</strong></td>
			<td><strong>Product Size</strong></td>
			<td><strong>Product Color</strong></td>
			<td><strong>Product Price</strong></td>
		</thead>
		<tbody>
			<tr class="trow">
			<td><?php echo $product['name']; ?></td>
			<td><?php echo $product['size']; ?></td>
			<td><?php echo $product['color']; ?></td>
			<td><?php echo $product['price']; ?></td>
			</tr>
		</tbody>
	</table>

	<a href="products.php"><button class="btn">Add another product</button>

	<form action="checkout.php" method="post">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($product['id']); ?>">
                <input type="submit" class="btn3" value="Checkout">
    </form>


	</div> 




</body>
</html>

<style type="text/css">
	
body { 
	margin-left: auto;
	margin-right: auto;
	width: 70%;
	padding-top: 3%;
}

.h1 {
	text-align: center;
}

td {
	width: 7%;
	padding: 2%;
	margin-left: 2%;
	margin-right: 2%;
	border-bottom: 1px solid black;
}

.btn3 {
  background: #34d95a;
  background-image: -webkit-linear-gradient(top, #34d95a, #34d95a);
  background-image: -moz-linear-gradient(top, #34d95a, #34d95a);
  background-image: -ms-linear-gradient(top, #34d95a, #34d95a);
  background-image: -o-linear-gradient(top, #34d95a, #34d95a);
  background-image: linear-gradient(to bottom, #34d95a, #34d95a);
  -webkit-border-radius: 5;
  -moz-border-radius: 5;
  border-radius: 5px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 5px 20px 5px 20px;
  margin-top: 3%;
  text-decoration: none;
  float:right;
}

.btn3:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}

.btn {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 5;
  -moz-border-radius: 5;
  border-radius: 5px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
 padding: 5px 20px 5px 20px;
  margin-top: 3%;
  float:right;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}




</style>
