<?php

class Cinema {

public string $name; 
public string $location;
public array $movies = [];

public function __construct(string $name, string $location)
{
    $this->name = $name;
    $this->location = $location;
}

public function addMovie(Movie $movie): void{

    $this->movies[] = $movie;

}

public function getName (): string{
    return $this->name;
}

public function getLocation (): string{
    return $this->location;
}

}