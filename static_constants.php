<?php

// STATICS

// class Math {
//     public static function add(...$num) 
//     {
//         return array_sum($num);
//     }
// }

// echo Math::add(1, 2, 3);


class Person {
    public $age = 1;

    public function __construct()
    {
        
    }

    public function haveBirthday() 
    {
        $this->age++;
    }

    public function age()
    {
        return $this->age;
    }
}

$joe = new Person();
$joe->haveBirthday();
$joe->haveBirthday();

echo $joe->age;

$jane = new Person();
$jane->haveBirthday();

echo $jane->age . "<br/>";


// CONSTANTS

class BankAccount {
    const TAX = .09;
}

echo BankAccount::TAX;

?>