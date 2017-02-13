<?php 

$product_id = $_GET['product_id'];
$color = $_GET['color'];
$size = $_GET['size'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="POST">

	<input type="hidden" name="product_id">

		Color: <br>
		RED<input type="radio" name="color" value="red">
		BLACK<input type="radio" name="color" value="black">

		<br>
		Size:
		<select name="size" selected="<?php echo $size; ?>">
			<option value="XS">XS</option>
			<option value="S">S</option>
			<option value="L">L</option>
			<option value="XL">XL</option>
			<option value="XXL">XL</option>
		</select>

		<br>
		Amount:<input type="text" name="amount">

		<br>
		Straight to checkout? <input type="checkbox" name="checkout" value="1" unchecked>

		<br>
		<br>
	<input type="submit" name="submit">

	</form>

</body>
</html>