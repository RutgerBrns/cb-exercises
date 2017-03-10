<?php 

$pdo = new PDO('mysql:host=127.0.0.1;dbname=game;charset=utf8', 'root', '');


//Select all games
$query = ("
  	SELECT *
	FROM `game`
	WHERE 1
");

$stmt = $pdo->prepare($query);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_OBJ);
$result = $stmt->fetchAll();



//Select all the genres

$query = ("
  	SELECT *
	FROM `genre`
	WHERE 1
");

$stmt = $pdo->prepare($query);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_OBJ);
$genres = $stmt->fetchAll();


$query = ("
SELECT *
FROM `game`
INNER JOIN `game_has_genre`
	ON `game`.`id` = `game_has_genre` . `game_id`
WHERE 1
");

$stmt = $pdo->prepare($query);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_OBJ);
$gameandgenres = $stmt->fetchAll();



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script>

	/* $(document).ready(function() {

   		//the jquery code in here will only run after the full page is loaded.............

	}); */

	$(function() {	
		var headings = $('h1');
		console.log(headings);

		var firstheading = $('h1:first');
		console.log(firstheading);

		$('.game').fadeOut(3000);
		$('.game').fadeIn(6000);

		
	});


	</script>


</head>
<body>

<div class="content">
	<h1>Latest games:</h1>
	<hr>
		<?php foreach ($result as $games): ?>
			
	<div class="game">
		<div class="image">
			<img src="<?php echo $games->image_url; ?>" />
		</div>
		<div class="info">
			<h2 class="name"><?php echo $games->name; ?></h2>
			<div class="release">
				released: <?php echo $games->released_at; ?>				
			</div>
			<div class="genres">
			    <a href="#">Sci-fi</a>
			    <a href="#">Fantasy</a>
			</div>
			<div class="description"><br><br>
			    <?php echo $games->description; ?>
			</div><br>
			<div class="rating"><br>
				<?php echo $games->rating; ?>%				
			</div><br><br>        
		</div> <br><br>
	</div>
	<?php endforeach; ?>
</div>

<div class="sidebar">
	<h1>Available genres</h1>
	<hr>
	<?php foreach ($genres as $genre): ?>
		<p><?php echo $genre->name; ?></p>
	<?php endforeach; ?>
</div>

</body>
</html>


<style type="text/css">

.content {
	width: 55%;
	margin-left: 15%;
	float: left;
}	

.sidebar {
	width: 15%;	
	float: left;
	margin-left: 2%;
}

.info {
	background-color: #EEE;
	box-shadow: 4px 4px 4px #888888;
	padding: 2%;
}

</style>



