<?php

//PHP numbers
$a=5;
$b=5.0;
$c="25";

var_dump($a);
var_dump($b);
var_dump($c);

echo "<br>";

var_dump(is_int($a));
echo "<br>";
var_dump(is_float($b));
echo "<br>";
var_dump(is_float($a));
echo "<br>";
var_dump(is_finite($c));
echo "<br>";
var_dump(is_numeric($c));
echo "<br>";

$x = 1.9e411;
var_dump(is_infinite($x));
echo "<br>";

//Math in php
//pi
echo pi();
echo "<br>";

echo min(-1,-100,5,0,100);
echo "<br>";
echo max(-1,-100,5,0,100);
echo "<br>";

echo abs(-6.7);
echo "<br>";
echo sqrt(81);
echo "<br>";
echo round(5.6);
echo "<br>";
echo round(5.1);
echo "<br>";
echo(rand(10, 100));
echo "<br>";

?>