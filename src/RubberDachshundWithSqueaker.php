<?php
namespace Domains\TestDog;
class RubberDachshundWithSqueaker extends Dog
{
    public function __construct($name)
    {
        parent::__construct($name, "Rubber Dachshund With Squeaker");
    }

    public function makeSound()
    {
        return "Squeak! Squeak!";
    }

    public function hunt()
    {
        return $this->name . " can't hunt, it's a toy.";
    }
}

