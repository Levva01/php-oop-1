<?php

class Movie{
    public $title;
    public $movieDirector;
    public $year;
    public $duration;
    public $price;

    public function __construct($_title, $_movieDirector, $_year, $_duration){

        $this->title = $_title;
        $this->movieDirector = $_movieDirector;
        $this->year = $_year;
        $this->duration = $_duration;

        if($this->movieDirector == 'National Geographic') {
            $this->price = 'Free';
        }


    }
}