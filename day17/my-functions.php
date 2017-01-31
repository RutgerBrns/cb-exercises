<?php 

//return a movie name based on the unique ID
function get_name($unique_id) {

		//first go get the specific array
		$movie_names = get_names();

		//then go get the specific value
		return $movie_names[$unique_id];
}


function get_rating($unique_id){

		$movie_ratings = get_ratings();

		return $movie_ratings[$unique_id];
}
