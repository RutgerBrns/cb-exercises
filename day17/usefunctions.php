<?php

require_once('functions.php');
require_once('my-functions.php');
// get_names()
// get_ratings()
// get_name()
// get_rating()

$ID_of_movie = 'tt0137523'; 
$ids_of_movies = array(
		  'tt0111161',
		  'tt0068646',
		  'tt0071562', 
		  'tt0468569', 
		  'tt0050083',  
		  'tt0108052',
);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="functions.css">
</head>
<body>

<!-- single movie -->
<h1>The movie is called <span><?php echo get_name($ID_of_movie); ?></span> and it is rated <span><?php echo get_rating($ID_of_movie ); ?></span> on IMDB</h1> 

<br><br><hr><br>

<!-- multiple movies -->
<?php foreach($ids_of_movies as $ID) : ?>
<h1>The movie is called <span><?php echo get_name($ID); ?></span> and it is rated <span><?php echo get_rating($ID); ?></span> on IMDB</h1> <br> 
<?php endforeach; ?>

</body>
</html>