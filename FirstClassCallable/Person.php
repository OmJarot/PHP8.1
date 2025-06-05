<?php

namespace FirstClassCallable;

class Person
{

    public function __construct(public string $name)
    {
    }

    public function sayHello($name) :string
    {
        return "Hello $name, my name is $this->name";
    }
}

$person = new Person("Piter");

$reference = $person->sayHello(...);//membuat reference

var_dump($reference("Pangaribuan"));