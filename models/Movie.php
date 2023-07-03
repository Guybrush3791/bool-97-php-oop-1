<?php

class Movie {

    public $title;
    public $year;
    public $genre;
    public $duration;
    public $director;

    public function __construct(
        $title, $year, $duration, $director, ...$genre
    ) {

        $this -> title = $title;
        $this -> year = $year;
        $this -> duration = $duration;
        $this -> director = $director;

        $this -> genre = $genre;
    }

    public function getGenreStr() {

        $res = "";
        for ($i=0;$i<count($this -> genre);$i++) {

            $genre = $this -> genre[$i];
            $res .= $genre . (
                $i < count($this -> genre) - 1 
                ? ", "
                : ""
            );
        }

        return $res;
    }

    public function getInfo() {

        return "Title: " . $this -> title 
            . "<br>Year: " . $this -> year
            . "<br>Genre: " . $this -> getGenreStr()
            . "<br>Duration: " . $this -> duration
            . "<br>Director: " . $this -> director; 
    }
}