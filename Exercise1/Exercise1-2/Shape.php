<?php
abstract class Shape {
    public $width;
    public $height;
      public function __construct(int $width, int $height) {
        $this->width = $width;
        $this->height = $height;
     }
     public abstract function area();
}
?>