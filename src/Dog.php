<?php
namespace Domains\TestDog;
abstract class Dog
{
    protected $name;
    protected $type;

    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }

    abstract public function makeSound();

    public function hunt()
    {
        return $this->name . " is hunting.";
    }
}
