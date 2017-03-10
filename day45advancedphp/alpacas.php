<?php

header('Content-Type: image/jpeg');

$size = getImagesize('alpacas.jpg');
//var_dump($size);

//echo $size[0] . 'x' . $size[1];

$original_image = imagecreatefromjpeg('alpacas.jpg');

$new_image = imagecreatetruecolor(400, 500);

$factor = 400 / $size[0];

imagecopyresampled($new_image, $original_image, 0, 0, 0, 0, 400, ($factor * $size[1]), $size[0], $size[1]);

$text_color = imagecolorallocate($new_image, 255, 0, 0);
imagestring($new_image, 10, 155, 25, 'Kosta & Sean', $text_color);

imagejpeg($new_image, 'alpacas-small.jpg');
imagejpeg($new_image);