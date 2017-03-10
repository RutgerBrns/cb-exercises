<?php
if ($_POST) {
	var_dump($_POST);
echo nl2br(var_export($_FILES, true)); //making the files visible.

$source_path = $_FILES['uploaded_file']['tmp_name'];
$target_path = __DIR__.'/uploads/'.$_FILES['uploaded_file']['name']; //this is entering the array inside the multidimensional array.

$target_path =  __DIR__.'/uploads/'. 'beagle.jpg';
move_uploaded_file($source_path, $target_path);
}

if ($_POST) {
	$target_fir = __DIR__ . '/uploads/';

	$file_nr = 0;

	do
	{
		$file_nr++;

		$target_path = $target_dir.$file_nr.'.jpg';
	} 
	while(file_exists($target_path));

	$path_info = pathinfo($_FILES['uploaded_file']['name'], PATHINFO_EXTENSION);

	if(!in_array($pathinfo, array('jpg', 'png', 'jpeg'))){
		die('unauthorized file extension');
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="form">
		<form action="" method="post" enctype="multipart/form-data">

			<input type="text" name="description">

			<input type="file" name="uploaded_file">

			<input type="submit" name="upload file.">

		</form>

</body>
</html>