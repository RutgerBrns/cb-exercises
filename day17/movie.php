<?php 

	$ID_of_movie = 'tt0137523'; 


	$list_of_ids = getnames();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<nav>
		<a href="list.php">A list of movies</a>	
	</nav>

	


	<h1>The movie is called <span><?php echo get_name($ID_of_movie); ?></span> and it is rated <span><?php echo get_rating($ID_of_movie ); ?></span> on IMDB</h1> 

</body>
</html>







