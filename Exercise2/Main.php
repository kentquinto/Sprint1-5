<?php
require_once "Shape.php";
require_once "Rectangle.php";
require_once "Triangle.php";
require_once "Circle.php";
$rectangle = new Rectangle(5, 10);
$triangle = new Triangle(5, 10);
$circle = new Circle(5);
echo "Area of the rectangle: " . $rectangle->area() . "\n";
echo "Area of the triangle: " . $triangle->area() . "\n";
echo "Area of the circle: " . $circle->area() . "\n";
?>