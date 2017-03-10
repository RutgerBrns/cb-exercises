<?php
	require_once './shared/database.php';
	$db = new Database();	//we import the object database

	if(isset($_POST['email']) && isset($_POST['password'])) {
//		$userid = $db->insertuser($_POST['name'], $_POST['email'], $_POST['password']);
		$user = $db->getuserbyemail($_POST['email']);
		$pwboolean = password_verify($_POST['password'], $user['password']);
		if($pwboolean == true){
			session_start();
			$_SESSION['userid'] = $user['id'];
			header('Location: index.php');			
		} else {
			echo 'the password or email is incorrect';
		}		
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="registerbox">
		<form action="" method="post">

		<h2>Log in</h2>
		<div class="input">Email: <input type="email" name="email"></div> <br>
		<div class="input">Password <input type="passsword" name="password"></div> <br>
		<div class="input"><div class="btn"><input type="submit" name="submit"></div></div>	

		<br><br><div class="already"><p>Don't have an account yet? click <a href="http://www.cbp-exercises.local/day29Auth/exercises-2017-winter-master/day24-mysql/authentication.php">here</a></p></div><br>	

		</form>
	</div>

</body>
</html>


<style type="text/css">

.registerbox {
	width: 20%;
	height: 30%;
	margin-top: 10%;
	margin-left: auto;
	margin-right: auto;
	background-color: #DDDDDD;
	display: flex;
	align-items: center;
	padding: 3%;
	box-shadow: 2px 2px 1px #888888;

}

.already {
	font-size: 10px;
	float:right;
}

.input {
	float:left;
	margin-bottom: 2%;
	width: 150px;
}


</style>

