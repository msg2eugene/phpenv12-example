<?php
  class Car {
    public $x;
    public $y;
    public function __construct($x, $y) {
      $this->x = $x;
      $this->y = $y;
    }
    public function move ($x, $y) {
      $this->sound();
      echo "Движение автомобиля из координат ($this->x, $this->y) в координаты ($x, $y)<br />";
      $this->x = $x;
      $this->y = $y;
    }
    public function sound() {
      echo "Звук движения автомобиля<br />";
    }
  }
?>