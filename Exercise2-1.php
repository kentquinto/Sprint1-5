<?php
abstract class Shape {
    public $width;
    public $height;
     function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
     }
     abstract function area();
}
class Rectangle extends Shape {
      function area() {
         return $this->width * $this->height;
      }
}
class Triangle extends Shape {
      function area() {
         return  $this->width * $this->height /2;
        }  
}
class Circle extends Shape {
      function __construct($radius) {
        $this->width = $radius;
        $this->height = $radius;
      }
      function area() {
        return pi() * $this->width * $this->height;
}
}
$rectangle = new Rectangle(5, 10);
$triangle = new Triangle(5, 10);
$circle = new Circle(5);
echo "Area of the rectangle: " . $rectangle->area() . "\n";
echo "Area of the triangle: " . $triangle->area() . "\n";
echo "Area of the circle: " . $circle->area() . "\n";
?>