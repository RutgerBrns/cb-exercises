<?php
require_once './shared/database.php';

$db = new Database();

session_start();

foreach ($_SESSION['products'] as $id) {
	$product = $db->getproduct($id);
	echo 'You are buying this:';
	echo htmlspecialchars($product['name']);
	echo htmlspecialchars($product['price']);
	echo '<hr><br>';
}

?>

<form action="checkout.php" method="post">
<input type="submit" value="Check out" name="submit">
</form>

<form action="index.php" method="post">
<input type="submit" value="back to shop">
</form>