<?php 

require_once('var_show.php');

$movies = array(
  'The Shawshank redemption',
  'The Godfather',
  'The Godfather II',
  'Dark Knight', 
  '12 angry men', 
  'Schindler\'s list',
  'Pulp fiction',
  'Lord of the Rings: Return of the King',
  'The good, the bad and the ugly',
  'Fight club'
);

$movie_names = array(
  'tt0111161' => 'The Shawshank redemption',
  'tt0068646' => 'The Godfather',
  'tt0071562' => 'The Godfather II',
  'tt0468569' => 'Dark Knight', 
  'tt0050083' => '12 angry men', 
  'tt0108052' => 'Schindler\'s list',
  'tt0110912' => 'Pulp fiction',
  'tt0167260' => 'Lord of the Rings: Return of the King',
  'tt0060196' => 'The good, the bad and the ugly',
  'tt0137523' => 'Fight club'
);
$movie_ratings = array(
  'tt0111161' => 9.2,
  'tt0068646' => 9.2,
  'tt0071562' => 9.0,
  'tt0468569' => 8.9, 
  'tt0050083' => 8.9, 
  'tt0108052' => 8.9,
  'tt0110912' => 8.9,
  'tt0167260' => 8.9,
  'tt0060196' => 8.9,
  'tt0137523' => 8.8
);

$number_items = count($movies);
echo $number_items;

sort($movies);

$merged = array_merge($movie_names, $movie_ratings);


?> 

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/php.css">
</head>
<body>

<ol>
<?php foreach($movies as $name) : ?>
  <div class="name"><li><?php echo $name; ?>;</li></div>
<?php endforeach; ?>
</ol>

<br>

<ol>
<?php for($i = 0; $i < $number_items; $i++) : ?>
  <div class="name"><li><?php echo $movies[$i]; ?>;</li></div>
<?php endfor; ?>
</ol>

<br>

<ol>
<?php foreach($movie_names as $name) : ?>
  <div class="name"><li><?php echo $name." ".array_shift($movie_ratings); ?>;</li></div>
<?php endforeach; ?>
</ol>

<br>


<ol>
<?php for($i = 0; $i < 5; $i++) : ?>
	<div class="name"><li><?php echo "List Item Number ".$i; ?>;</li></div>
<?php endfor; ?>
</ol>

<?php asort($mov);?>
<ol>
<?php for($i = 0; $i < 5; $i++) : ?>
	<div class="name"><li><?php echo "List Item Number ".$i; ?>;</li></div>
<?php endfor; ?>
</ol>




<?php $a = 10; $p = 0; ?>

<?php for($i = 0; $i < 10; $i++) : ?>
	<?php for($j = $a; $j > 0; $j--) : ?>
		<div class="brick" style="left: <?php echo (($j*3) + $p) ?>em; bottom: <?php echo $i; ?>em;">
			<?php echo "B"; ?>;
		</div>
	<?php endfor; ?>
	<?php $a--; $p = $p + 1.5; ?>
<?php endfor; ?>


<?php $messages = array(
  'error' => array(
    'Something went wrong',
    'Something went REALLY wrong',
    'There is no end to this!'
  ),
  'warning' => array(
    'This is your first warning',
    'This is your final warning'
  ),
  'success' => array(
    'Finally, something was successful.'
  )
); ?>



<?php foreach($messages as $messagetype => $messages_of_type) : ?>	
	<?php foreach ($messages_of_type as $message2) : ?>
		<div class="message <?php echo $message_type; ?>"><?php echo $message2 ?></div>
	<?php endforeach; ?>
<?php endforeach; ?>



</body>
</html>