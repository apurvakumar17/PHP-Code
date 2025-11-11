<?php
// Abstract base class
abstract class Shape {
    abstract public function area(); // abstract method
}

// Circle subclass
class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getRadius() { return $this->radius; }
    public function setRadius($radius) { $this->radius = $radius; }

    public function area() {
        return 3.1416 * $this->radius * $this->radius;
    }
}

// Rectangle subclass
class Rectangle extends Shape {
    private $length;
    private $breadth;

    public function __construct($length, $breadth) {
        $this->length = $length;
        $this->breadth = $breadth;
    }

    public function getLength() { return $this->length; }
    public function setLength($length) { $this->length = $length; }

    public function getBreadth() { return $this->breadth; }
    public function setBreadth($breadth) { $this->breadth = $breadth; }

    public function area() {
        return $this->length * $this->breadth;
    }
}

// Triangle subclass
class Triangle extends Shape {
    private $base;
    private $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function getBase() { return $this->base; }
    public function setBase($base) { $this->base = $base; }

    public function getHeight() { return $this->height; }
    public function setHeight($height) { $this->height = $height; }

    public function area() {
        return 0.5 * $this->base * $this->height;
    }
}

// Example usage
$circle = new Circle(7);
$rect = new Rectangle(5, 8);
$tri = new Triangle(6, 9);

echo "<h3>Areas of Shapes</h3>";
echo "Circle Area: " . $circle->area() . "<br>";
echo "Rectangle Area: " . $rect->area() . "<br>";
echo "Triangle Area: " . $tri->area() . "<br>";

echo "<br><small>Apurva Kumar, 04814902024</small>";
?>