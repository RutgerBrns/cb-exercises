<?php
header('Content-Type: image/png'); //we tell the browser to expect an image

//echo 2345; //this will give an error, beacuse we told the browser to expect an image

//adding an 'image'
$im = imagecreate(310, 250);
$background_color = imagecolorallocate($im, 21, 213, 79);

//adding text
$text_color = imagecolorallocate($im, 211, 21, 10);
imagestring($im, 5, 5, 5, 'A Simple String Message', $text_color);

//adding lines
$line_color = imagecolorallocate($im, 0, 0, 0);
imageline($im, 0, 0, 100, 100, $line_color);
imageline($im, 100, 100, 310, 250, $line_color);
imageline($im, 100, 50, 10, 90, $line_color);


//the most common thing is to resize images in php.

imagepng($im);


