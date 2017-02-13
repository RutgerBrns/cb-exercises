<?php

require_once '../shared/database.php';

if($_POST) {
	$db = new database();
	$db->insertproduct($_POST['name'], $_POST['price'], $_POST['size'], $_POST['color']);
	header('location: addproduct.php');
}

?>

<div class="header">
<h2>We got some information that we need about this product.</h2>
<p>please fill in the following fields</p>
<br>
<br>
</div>

<form action="" method="post" class="form">
	<br>
	Name: <input type="text" name="name"> 
	<br>
	<br>

	Price: <input type="text" name="price"> 
	<br>
	<br>

	Size: <input type="text" name="size"> 
	<br>
	<br>

	Color: <input type="text" name="color"> 
	<br>
	<br>

	<input type="submit" name="submit" class="btn2">	

</form>
<a href="products.php"><button class="btn">See Products</button></a>

<style type="text/css">

.header {
	background-color: #DDD;
	width: 50%;
}

.form {
	background-color: #EEE;
	width: 50%;
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
  margin-bottom: 2%;
  margin-top: 2%;
  margin-left:40%;
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

.btn2 {
  background: #d9344f;
  background-image: -webkit-linear-gradient(top, #d9344f, #d93211);
  background-image: -moz-linear-gradient(top, #d9344f, #d93211);
  background-image: -ms-linear-gradient(top, #d9344f, #d93211);
  background-image: -o-linear-gradient(top, #d9344f, #d93211);
  background-image: linear-gradient(to bottom, #d9344f, #d93211);
  -webkit-border-radius: 5;
  -moz-border-radius: 5;
  border-radius: 5px;
  font-family: Arial;
  color: #ffffff;
  font-size: 10px;
  margin-bottom: 2%;
  margin-top: 2%;
  margin-left: 2%;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn2:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}

</style>