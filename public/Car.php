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
      echo "�������� ���������� �� ��������� ($this->x, $this->y) � ���������� ($x, $y)<br />";
      $this->x = $x;
      $this->y = $y;
    }
    public function sound() {
      echo "���� �������� ����������<br />";
    }
  }
?>