<?php
namespace Domains\TestDog;

class DogCommandHandler {
    protected $dogs = [];

    public function addDog(Dog $dog)
    {
        $this->dogs[$dog->getName()] = $dog;
    }

    public function handleCommand($command)
    {
        list($dogName, $action) = explode(' ', $command);

        if (!isset($this->dogs[$dogName])) {
            return "Unknown dog name: $dogName";
        }

        $dog = $this->dogs[$dogName];

        switch ($action) {
            case 'sound':
                return $dog->makeSound();
            case 'hunt':
                return $dog->hunt();
            default:
                return "Unknown command: $action";
        }
    }
}