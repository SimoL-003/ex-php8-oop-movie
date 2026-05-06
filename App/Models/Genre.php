<?php
class Genre
{
    public string $name;

    public function __construct(string $_name)
    {
        $this->name = $_name;
    }
}