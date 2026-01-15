<?php 
$x=5;
$y="JOhn";
echo ("Hello $x <br>");
echo ("Hello $y <br>");

echo ('NO is ' .$x ."<br>");

var_dump(5);
var_dump("John");

/* Scope of Variables */
$x=5; //global
function myTest(){
    echo "Number is $x <br>";
}
myTest();
echo "Number is $x <br>";


//Local Scope
function myTest1(){
    $x=15; //local scope
    echo "Number is $x <br>";
}
myTest1();


//global keyword
function myTest3(){
    global $x;
    echo "Number is $x  These is using global keyword <br>";
}
myTest3();

//GLOBALS
$x=5;
$y=10;
function myTest4(){
    $GLOBALS['x']=$GLOBALS['x']+$GLOBALS["y"];
}
myTest4();
echo ("At function myTest4 x = $x");
?>