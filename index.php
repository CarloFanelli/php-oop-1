<?php

class Movie
{
    public $title;

    public $description;

    public $img_url;

    public $cast;

    public $language;

    public $genre;

    public $rating;

    function __construct(
        $title,
        $description,
        $img_url,
        $cast,
        $language,
        $genre,
        $rating,
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->img_url = $img_url;
        $this->cast = $cast;
        $this->language = $language;
        $this->genre = $genre;
        $this->rating = $rating;
    }
}
