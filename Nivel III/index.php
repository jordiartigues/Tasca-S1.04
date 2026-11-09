<?php

require_once 'Cinema.php';
require_once 'Movie.php';

$movie1 = new Movie("Interstellar", 169, "Christopher Nolan");
$movie2 = new Movie("Shrek", 90, "Director Shrek");
$movie3 = new Movie ("Blancanieves", 60, "Nomeacuerdo");
$movie4 = new Movie ("Shutter Island", 120 , "Nolan");


$cinema1 = new Cinema ("Verdi", "Barcelona");
$cinema2 = new Cinema ("Renoir", "Girona");


$cinema1->addMovie($movie1);
$cinema1->addMovie($movie2);
$cinema2->addMovie($movie3);
$cinema2->addMovie($movie4);

$cinemas = [$cinema1, $cinema2];

foreach ($cinemas as $cinema){
    echo "Lista de peliculas cine " . $cinema->getName() . "\n";
    foreach ($cinema->movies as $movie){
    echo "Película: " . $movie->getName() . ". Duración: " . $movie->getDuration() . " minutos" . "\n";
    }
}