<?php

$pattern = '#a#i'; //the i means case insenstive.
$pattern2 = '#a#'; //the i means case senstive.
$pattern3 = '#cat#'; //the i means case senstive.
$pattern4 = '#Cat#i'; //the i means case senstive.
$pattern5 = '#@#i';
$pattern6 = ''

$string = 'Cat';
$string2 = 'rutger@foobar.org';

$result = preg_match($pattern, $string, $matches);
$result2 = preg_match($pattern2, $string, $matches);
$result3 = preg_match($pattern3, $string, $matches);
$result4 = preg_match($pattern4, $string, $matches);
$result5 = preg_match($pattern5, $string, $matches);
$result6 = preg_match($pattern5, $string2, $matches);

var_dump($result);
var_dump($result2);
var_dump($result3);
var_dump($result4);
var_dump($result5);
var_dump($result6);

