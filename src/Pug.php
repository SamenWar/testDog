<?php
namespace Domains\TestDog;
class Pug extends Dog
{
    public function __construct($name)
    {
        parent::__construct($name, "Pug");
    }

    public function makeSound()
    {
        return "Grunt! Grunt!";
    }

    public function hunt()
    {
        return $this->name . " is too lazy to hunt.";
    }
}
