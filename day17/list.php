<?php 
require_once('functions.php');
require_once('my-functions.php');
// get_names()
// get_ratings()
// get_name()
// get_rating()

$all_the_names = get_names();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>A List of Movies</h1>

	<?php foreach ($list_of_ids as $ID => $Movie) : ?>
		<p>The movie is called <?php echo $Movie ?> and it's ID is <?php echo $ID ?></p>
		<a href="movie.php?id=<?php echo $unique_id; ?>"> Details of the movie </a>
	<?php endforeach; ?>

</body>
</html>
