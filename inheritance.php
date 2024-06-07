<?php

class Mother {
    public function getEyeCount() 
    {
        return 2;
    }
}

class Child extends Mother {

}

$child = new Child();

var_dump($child->getEyeCount());
echo "<br>" . $child->getEyeCount() . "<br>";

// ////////////////////////////////////////

// Abstract Class - not instatiation ever!
abstract class Shape {
    protected $color;

    public function __construct($color = "red")
    {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }

    // This means, that every subclass must have this method! (But different for every subclass in this case)
    // Class Circle (or every other subclass of Shape class) contains 1 abstract method and must therefore be declared abstract or implement the remaining methods
    abstract protected function getArea();
}

class Square extends Shape {
    protected $length = 4;

    public function getArea()
    {
        return pow($this->length, 2);
    }
}

class Triangle extends Shape {
    protected $base = 4;
    protected $height = 7;

    public function getArea()
    {
        return .5* $this->base * $this->height;
    }

}

class Circle extends Shape {
    protected $radius = 5;

    public function getArea()
    {
        return pow($this->radius, 2) * pi();
    }
}

echo (new Triangle("orange"))->getArea();

$square = new Square("green");
echo $square->getColor();

echo (new Circle())->getColor();

$circle = new Circle();

echo $circle->getArea();


?>