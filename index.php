<?php

class Movie
{
    private string $title;
    private string $originalTitle;
    private string $genre;

    private string $originalLanguage;
    private string $cover;
    private float $rating;
    
    public function __construct($title, $originalTitle, $genre)
    {
        $this->title = $title;
        $this->originalTitle = $originalTitle;
        $this->genre = $genre;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getOriginalTitle() {
        return $this->originalTitle;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function setOriginalLanguage($_originalLanguage) {
        $this->originalLanguage = $_originalLanguage;
    }

    public function getOriginalLanguage() {
        return $this->originalLanguage;
    }

    public function setCover($cover) {
        $this->cover = $cover;
    }
    
    public function getCover() {
        return $this->cover;
    }

    public function setRating($rating) {
        $this->rating = $rating;
    }

    public function getRating() {
        return $this->rating;
    }

}

$movie1 = new Movie("The Shawshank Redemption", "The Shawshank Redemption", "Drama");
$movie1->setOriginalLanguage("English");
$movie1->setCover("https://images-na.ssl-images-amazon.com/images/I/513z1tsloNL._SX331_BO1,204,203,200_.jpg");
$movie1->setRating(9.3);

var_dump($movie1);

$movie2 = new Movie("The Godfather", "The Godfather", "Crime");
$movie2->setOriginalLanguage("English");
$movie2->setCover("https://www.crimemuseum.org/wp-content/uploads/2014/06/The-Godfather-1.jpg");
$movie2->setRating(9.2);

var_dump($movie2);

$movie3 = new Movie("The Dark Knight", "The Dark Knight", "Action");
$movie3->setOriginalLanguage("English");
$movie3->setCover("https://m.media-amazon.com/images/I/91KkWf50SoL._SL1500_.jpg");
$movie3->setRating(9.0);

var_dump($movie3);

$movie4 = new Movie("Schindler's List", "Schindler's List", "Biography");
$movie4->setOriginalLanguage("English");
$movie4->setCover("https://pad.mymovies.it/filmclub/2006/02/315/locandina.jpg");
$movie4->setRating(8.9);

var_dump($movie4);

$movie5 = new Movie("The Lord of the Rings: The Return of the King", "The Lord of the Rings: The Return of the King", "Adventure");
$movie5->setOriginalLanguage("English");
$movie5->setCover("https://static.posters.cz/image/1300/poster/lord-of-the-rings-return-of-the-king-one-sheet-i11969.jpg");
$movie5->setRating(8.9);

var_dump($movie5);