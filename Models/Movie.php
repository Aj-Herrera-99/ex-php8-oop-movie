<?php class Movie
{
    public $title;
    public $year;
    public $country;
    protected Genre $genre;

    use HasDirector;

    function __construct($_title, $_year, $_country, Genre $_genre)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->country = $_country;
        $this->genre = $_genre;
    }

    public function getGenreName()
    {
        return $this->genre->getName();
    }
}