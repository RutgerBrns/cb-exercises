<?php
session_start();

require_once './shared/database.php';
$db = new Database();
$products = $db->getproducts();

/* if (isset($_SESSION['userid'])) {
	$name = $db->getuser($_SESSION['userid'])['name'];
} */

var_dump($_SESSION);

if($_POST) {
	if(!isset($_SESSION['products'])) {
		$_SESSION['products'] = [];
	}
	$_SESSION['products'][] = $_POST['id'];
	header('location:index.php');
}



?>

<div class="allindexcontent">
<?php require './shared/header.php'; ?>
<h1><span><?php if(isset($name)) {echo htmlspecialchars($name);} ?></span>, hello again. Foo site, buy some foo</h1><br>
<br>



<?php
foreach ($products as $product) {
	echo 'Name: ' . htmlspecialchars($product['name']) . '<br>';
	echo 'Price: ' . htmlspecialchars($product['price']) . '<br>';
	echo 'Size: ' . htmlspecialchars($product['size']) . '<br>';
	echo 'Color: ' . htmlspecialchars($product['color']) . '<br>';
	echo '<form action="" method="post">'
		. '<input type="hidden" name="id" value="' . htmlspecialchars($product['id']) . '">'
		. '<br> <input type="submit" value="Buy this">'
		. '<br> </form><hr>';
}
?>

</div>

<style type="text/css">

span {
	color: red;
}

h1:first-letter {
	text-transform: uppercase;
}

.allindexcontent {
	width: 1000px;
	margin-right: auto;
	margin-top: 5%;
	margin-left: auto;
}

</style>
