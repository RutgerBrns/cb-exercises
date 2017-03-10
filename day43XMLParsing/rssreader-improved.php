<?php

// it is better to put it in a function, so it is not run every time the application is ran.

function dowloadNYTimesRSS(){

	$content2 = file_get_contents('http://rss.nytimes.com/services/xml/rss/nyt/World.xml'); //we can also get it from hyperlinks.
	file_put_contents('ny-times.xml', $content2); //no it stores the information in a file named ny-times.xml.



}

if (!file_exists('ny-times.xml')) {
	dowloadNYTimesRSS();
}

$content3 = file_get_contents('ny-times.xml');

$simplexml_object = simplexml_load_string($content3); //now we make an xml-object of the string data.
/*
var_dump($simplexml_object);

var_dump($simplexml_object->getName());

var_dump($simplexml_object->channel);

//vardum the first <item> withing the <channel>
var_dump($simplexml_object->channel->item);

foreach ($simplexml_object->channel->item as $one_item) {
	$contents = (string)$one_item->title;
	echo $contents.'<br>';
}

*/
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Diplomata+SC|Special+Elite" rel="stylesheet">
</head>
<body>

<h1 style="font-family: 'Diplomata SC', cursive;">The Ezequiel Times</h1>

<ol>
<?php foreach ($simplexml_object->channel->item as $one_item) : ?>
	<?php $children_of_item = $one_item->children('media', true);
	$image = $children_of_item->content; 
	// This code sets the variable for the image of articles?>
	<div style="width: 30%;">
	<li style="font-family: 'Special Elite', cursive;">The article with the title: <em>'<?php echo $one_item->title ?>'
	<br></em> was published on <strong><?php echo $one_item->pubDate ?></strong> <br>
	<hr>
	<img style="float: left;" src="<?php echo $image->attributes()->url; ?>" height="200px" width="200px">
	<div class="content"><?php echo $one_item->description ?>
	</div>
	<br><br><br><br><br><br><br><br>
	</li>
	</div>	
<?php endforeach ?>
</ol>

	

</body>
</html>


