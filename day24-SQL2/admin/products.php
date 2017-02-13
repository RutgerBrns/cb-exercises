<?php

require_once '../shared/database.php';

$db = new database();
$products = $db->getproducts();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1> A list of all the products </h1>

<table>
<thead>
	<td><strong>Name </strong></td>
	<td>price </td>
	<td>size </td>
	<td>color </td>
	<td>BUY THIS!</td>
</thead>

<tbody>

<?php foreach ($products as $product) : ?>
	<tr>
		<td>
		<?php echo htmlspecialchars($product['name']) ?> 
		</td>
		<td>
		<?php echo ' € '. htmlspecialchars($product['price']) ; ?>
		</td>
		<td>
		<?php echo htmlspecialchars($product['size']); ?>
		</td>
		<td>
		<?php echo htmlspecialchars($product['color']); ?>
		</td >	
		<td>
		<form action="summary.php" method="post">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($product['id']); ?>">
                <input type="submit" class="btn3" value="Checkout">
    </form>
		<!-- <button class="btn3">buy this</button> -->
		</td >				
	</tr>	
<?php endforeach; ?>

</tbody>

</table>

<a href="addproduct.php"><button class="btn">Add another product</button>

</body>
</html>


<style type="text/css">

body{
	width:40%;
	margin-left: auto;
	margin-right: auto;
}

td {
	width: 10%;
	padding: 2%;
	margin-left: 2%;
	margin-right: 2%;
	border-bottom: 1px solid black;
}

tr {
	margin-top: 1%;

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
  font-size: 10px;
  padding: 10px 20px 10px 20px;
  margin-top: 2%;
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
  font-size: 10px;
  padding: 5px 20px 5px 20px;
  text-decoration: none;
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

</style>

