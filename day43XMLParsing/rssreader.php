<?php

$content = file_get_contents('../day1/index.html'); //gets the content of a file and returns them as a string.

$content2 = file_get_contents('http://rss.nytimes.com/services/xml/rss/nyt/World.xml'); //we can also get it from hyperlinks.
var_dump($content2);

file_put_contents('ny-times.xml', $content2); //no it stores the information in a file named ny-times.xml.
$content3 = file_get_contents('ny-times.xml'); //now we are getting it form the local location.

// it is better to put it in a function, so it is not run every time the application is ran.

function dowloadNYTimesRSS(){

	$content2 = file_get_contents('http://rss.nytimes.com/services/xml/rss/nyt/World.xml'); //we can also get it from hyperlinks.
	file_put_contents('ny-times.xml', $content2); //no it stores the information in a file named ny-times.xml.

}

$simplexml_object = simplexml_load_string($content3); //now we make an xml-object of the string data.
var_dump($simplexml_object);

