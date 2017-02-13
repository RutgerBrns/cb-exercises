<?php

$course_name = 'Coding Bootcamp';
$my_name = 'Rutger';
$result = 11-3;
$instructers = ['Jan', 'Daniel', 'Michal', 'Jakub'];

function greet_me() {
	echo 'Good morning, Prague <br />';
}

greet_me();

$my_greeting = 'Good morning '.$my_name.'<br />';

echo $my_greeting;

sort($instructers);

function greet_someone($name) {
	echo 'Good morning '.$name.'<br />';
}

foreach ($instructers as $key => $name) {
	greet_someone($name);
};

