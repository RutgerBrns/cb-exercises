<?php 

	function print_radiobutton($input_name, $values) {
		echo $_POST['gender'];
	}


?>


<!DOCTYPE html>

<html>


<head>
	<title></title>
</head>


<body>

<form method="post">

	<h1>This is a form</h1>

	<br><hr><br>
	
	<h4>Personal Details</h4><br>
	name:<input type="text" name="name"><br>
	age:<input type="text" name="age"><br>
	color:<input type="color" name="color"><br>

	<h4>gender</h4><br>
	Male: <input type="radio" name="gender" value="male">
	Female: <input type="radio" name="gender" value="female"><br>

	<h4>Nationality</h4><br>
	<select name="Nationality">
		<option>Dutch</option>
		<option>Czech</option>
		<option>American</option>
		<option>Japanese</option>
		<option>Latvian</option>
		<option>Irish</option>
		<option>Greek</option>
		<option>Korean</option>
	</select>


</form>

</body>


</html>