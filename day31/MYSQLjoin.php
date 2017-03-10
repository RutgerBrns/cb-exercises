//# 71615 the holy mountain

SELECT `imdb_movie_has_genre`.*
FROM `imdb_movie_has_genre`
WHERE `imdb_movie_has_genre` . `imdb_movie_id` = 71615;

//JOIN query (2 tables)

SELECT *
FROM `imdb_movie_has_genre`
INNER JOIN `imdb_genre`
	ON `imdb_movie_has_genre`.`imdb_genre_id` = `imdb_genre` . `id`
WHERE `imdb_movie_has_genre` . `imdb_movie_id` = 71615;


SELECT *
FROM `imdb_movie`
INNER JOIN `imdb_movie_type`
	ON `imdb_movie`.`imdb_movie_type_id` = `imdb_movie_type` . `id`
WHERE `imdb_movie` . `imdb_movie_id` = 71615;

SELECT *
FROM `imdb_movie_has_person`
INNER JOIN `imdb_person`
	ON `imdb_movie_has_person`.`imdb_person_id` = `imdb_person` . `imdb_id`
WHERE `imdb_movie_has_person` . `imdb_movie_id` = 71615;