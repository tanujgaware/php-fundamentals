<?php 
//int
$x=5;
var_dump($x);
echo "<br>";

//float
$y=4.0;
var_dump($y);
echo "<br>";

$z="Hello World";
var_dump($z);
echo "<br>";

$x=true;
var_dump($x);
echo "<br>";

$y=array(10,5,20,30);
var_dump($y);
echo "<br>";

class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);
echo "<br>";

$z=NULL;
var_dump($z);
echo "<br>";
?>