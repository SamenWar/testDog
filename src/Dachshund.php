<?php
namespace Domains\TestDog;
class Dachshund extends Dog
{
    public function __construct($name)
    {
        parent::__construct($name, "Dachshund");
    }

    public function makeSound()
    {
        return "Bark! Bark!";
    }
}
