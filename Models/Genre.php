<?php class Genre
{
    protected $name;

    function __construct($_name)
    {
        $this->name = $_name;
    }

    public function getName()
    {
        return $this->name;
    }
}