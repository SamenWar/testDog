<?php
namespace Domains\TestDog;

class PlushLabrador extends Dog
{
    public function __construct($name)
    {
        parent::__construct($name, "Plush Labrador");
    }

    public function makeSound()
    {
        return "....";
    }

    public function hunt()
    {
        return $this->name . " can't hunt, it's a toy.";
    }
}

