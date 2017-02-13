<?php

$movie_name = 'arrival';


$ratings = array(
	'user642' => 69,
	'user214' => 95,
	'user013' => 82,
	);

$user_names = array(
    'user642' => 'Bob',
    'user214' => 'Stuart',
    'user013' => 'Kevin'
);

$username = $user_names['user214'];


function print_rating($user_id, $ratings) {
	$rating = $ratings[$user_id];
	echo $rating . '%';
}

function get_username($user_names, $user_id) {
	$user_name = $user_names[$user_id];
	return $user_name;	
}

foreach ($ratings as $user_id => $rating) {
	$user_name = get_username($user_names, $user_id);

	echo $user_name . ' gave this movie a rating of '; print_rating($user_id, $ratings); echo '<br />';

	}