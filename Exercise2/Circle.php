<?php
require_once "Shape.php";
class Circle extends Shape {
    public function __construct(int $radius) {
        $this->width = $radius;
        $this->height = $radius;
    }
    public function area() {
        return pi() * $this->width * $this->height;
    }
}
?>