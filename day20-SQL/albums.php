<?php
require_once('databasse.php');

if($_POST) {
	$stmt = $db->prepare('INSERT INTO albums (title, id_owner) VALUES (?, ?)');
	$stmt-> execute([$_POST['title'], $_POST['id_owner']]);
	header('location:albums.php?status=ok'); //prevent resubmission thing.
}

if (isset($_GET['status']) && $_GET['status'] == 'ok'){
	echo 'OK, it was added correct';
}

$stmt = $db->prepare('SELECT id, firstname, lastname FROM students ORDER BY lastname, firstname');
$stmt -> execute();
$owners = [];
foreach ($stmt->fetchAll() as $value) {

	$owners[$value['id']] = $value['firstname'].''.$value['lastname']; 
	
}

	?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</html>

<form action="" method="post">
<label for="title">title: </label>
<input name="title" id="title">

<label for="id_owner">owner id: </label>
<select name="id_owner">
	<?php foreach ($owners as $id => $name) {
		echo "<option value=$id>$name</option>";
	}?>
</select>

<input type="submit">

</form>

</body>

</html>



