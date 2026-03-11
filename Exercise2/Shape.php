<?php
require_once "Shape.php";
abstract class Shape {
    public int $width;
    public int $height;
     public function __construct(int $width, int $height) {
        $this->width = $width;
        $this->height = $height;
     }
     public abstract function area();
}
?>