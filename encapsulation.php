<?php

class Person
{

    // Encapsulation = the internal representation of an object is generally hidden from view outside of the object's definision.
    private $name;

    private $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age * 365;
    }

    public function setAge($age)
    {
        if ($age < 18) {
            throw new Exception("Person is not old enough.");
        }
        $this->age = $age;
    }
}


$john = new Person("John Doe");

$john->setAge(30);
// $john->age = 8;
var_dump($john->getAge());
