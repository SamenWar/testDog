<?php
use Domains\TestDog\ShibaInu;
use Domains\TestDog\Pug;
use Domains\TestDog\PlushLabrador;
use Domains\TestDog\RubberDachshundWithSqueaker;

use PHPUnit\Framework\TestCase;

class DogTest extends TestCase
{
    public function testShibaInuSound()
    {
        $shibaInu = new ShibaInu('shiba');
        $this->assertEquals('Woof! Woof!', $shibaInu->makeSound());
    }

    public function testPugSound()
    {
        $pug = new Pug('mops');
        $this->assertEquals('Grunt! Grunt!', $pug->makeSound());
    }

    public function testPugHunt()
    {
        $pug = new Pug('mops');
        $this->assertEquals('mops is too lazy to hunt.', $pug->hunt());
    }

    public function testPlushLabradorSound()
    {
        $plushLabrador = new PlushLabrador('plush');
        $this->assertEquals('....', $plushLabrador->makeSound());
    }

    public function testPlushLabradorHunt()
    {
        $plushLabrador = new PlushLabrador('plush');
        $this->assertEquals('plush can\'t hunt, it\'s a toy.', $plushLabrador->hunt());
    }

}
