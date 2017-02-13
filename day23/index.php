<?php

	/* $files = scandir('classes');

	//go trough all the files
	foreach ($file as $file) {
		// if the file is a reference to this folder or the one above, continue
		if($file == '.' || $file == '..') continue;
		//if the file is a php file 
		if(pathinfo($file, PATH_EXTENSION) == 'php') {
			require_once('classes/'.$file);
		}		
	} */

	require_once('classes/giraffe.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>Giraffe</title>
</head>
<body>

	<form method="POST">
	<input type="text" name="name">	
	<input type="submit" name="submit">
	</form>

	<?php if(isset($_POST['name'])) {
		$name = $_POST['name'];
		
		$name = new giraffe($name);

		$name->drink();

		$name->eat();
		
	}  

	

	?>

</body>
</html>