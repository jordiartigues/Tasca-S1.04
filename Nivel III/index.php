<?php

require_once 'Cinema.php';
require_once 'Movie.php';

$movie1 = new Movie("Interstellar", 169, "Christopher Nolan");
$movie2 = new Movie("Shrek", 90, "Director Shrek");
$movie3 = new Movie("Inception", 60, "Christopher Nolan");
$movie4 = new Movie("Shutter Island", 120, "Christopher Nolan");


$cinema1 = new Cinema("Verdi", "Barcelona");
$cinema2 = new Cinema("Renoir", "Girona");


$cinema1->addMovie($movie1);
$cinema1->addMovie($movie2);
$cinema2->addMovie($movie3);
$cinema2->addMovie($movie4);
$cinema2->addMovie($movie1);

$cinemas = [$cinema1, $cinema2];

$director = "Christopher Nolan"; //cuando hagamos HTML y CSS usaremos el metodo post para intrducir el nombre del director por formulario
echo "Las peliculas de " . $director  . " son:  \n";
$foundMovies = [];
foreach ($cinemas as $cinema) {
    $movies = $cinema->getMoviesByDirector($director);
    foreach ($movies as $movie) {
        if (!in_array($movie, $foundMovies)) {
            $foundMovies[] = $movie;
            echo $movie->getName() . "\n";
        }
    }
}

foreach ($cinemas as $cinema) {
    $longestMovie = null;
    echo "Lista de peliculas cine " . $cinema->getName() . "\n";
    foreach ($cinema->movies as $movie) {
        if ($longestMovie === null || $movie->getDuration() > $longestMovie->getDuration()) {
            $longestMovie = $movie;
        }
        echo "Película: " . $movie->getName() . ". Duración: " . $movie->getDuration() . " minutos" . "\n";
    }
    echo "La pelicula más larga es: " . $longestMovie->getName() . "\n";
}
