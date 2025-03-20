<?php

class Genre
{
    public $name;

    function __construct($_name)
    {
        $this->name = $_name;
    }
}

class Movie
{
    public $title;
    public $year;
    public $country;
    public $genre;

    function __construct($_title, $_year, $_country, Genre $_genre)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->country = $_country;
        $this->genre = $_genre;
    }

    public function getTitle(){
        return $this->title;
    }
}

$toy_story = new Movie("Toy Story", 1995, "USA", new Genre("animation"));
$harry_potter = new Movie("Harry Potter and the Philosopher's Stone", 2001, "USA", new Genre("fantasy"));

var_dump($toy_story);
var_dump($harry_potter);
echo $toy_story->getTitle();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP MOVIE</title>
</head>

<body>

</body>

</html>