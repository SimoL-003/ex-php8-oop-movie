<?php

trait FilmMakers
{
    public $producer;
    public $filmCompany;

    public function getProductionInfo()
    {
        $productionInfo = "{$this->producer} - {$this->filmCompany}";
        return $productionInfo;
    }
}

class Genre
{
    public $name;

    public function __construct($_name)
    {
        $this->name = $_name;
    }
}


class Movie
{
    use FilmMakers;
    public $title;
    public $director;
    public $year;
    public $minutes;
    public $genres;

    // Constructor
    public function __construct($_title, $_director, $_year, $_minutes, $_genres)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->minutes = $_minutes;
        $this->genres = $_genres;
    }

    // Transform minutes in a more readable string
    public function getDuration()
    {
        $hours = floor($this->minutes / 60);
        $remainingMinutes = $this->minutes % 60;
        $result = '';
        if ($hours > 0) {
            $result .= "{$hours}h";
        }
        if ($remainingMinutes > 0) {
            if ($result !== '') {
                $result .= ' ';
            }
            $result .= "{$remainingMinutes}min";
        }
        return $result !== '' ? $result : '0min';
    }
}