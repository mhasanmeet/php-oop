<?php

/*
    An abstract method is a method declared within an abstract class that does not contain an 
    implementation. Instead, it serves as a placeholder for methods that must be implemented by 
    concrete subclasses.
*/

abstract class Shape {
    abstract public function calculateArea();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

class Square extends Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function calculateArea() {
        return $this->side * $this->side;
    }
}

$circle = new Circle(5);
echo "Area of the circle: " . $circle->calculateArea() . "\n";

$square = new Square(4);
echo "Area of the square: " . $square->calculateArea() . "\n";