<?php

$genres = [
    "animation_genre" => new Genre('animation'),
    "fantasy_genre" => new Genre('fantasy'),
];


$movies = [
    new Movie("Toy Story", 1995, "USA", $genres['animation_genre']),
    new Movie("Harry Potter and the Philosopher's Stone", 2001, "USA", $genres['fantasy_genre'])
];