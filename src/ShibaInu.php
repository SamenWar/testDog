<?php
namespace Domains\TestDog;
class ShibaInu extends Dog
{
    public function __construct($name)
    {
        parent::__construct($name, "Shiba Inu");
    }

    public function makeSound()
    {
        return "Woof! Woof!";
    }
}