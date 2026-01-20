<?php

// Indexed Arrays
$cars=array("Volvo","BMW","Toyota");
echo $cars[0];
echo "<br>";

//Change value
$cars[1]="Mahindra";
echo $cars[1];
echo "<br>";

//Loop through array
foreach($cars as $car){
    echo "$car ";
}
echo "<br>";

//Associative arrays
$car=array("brand"=>"mahindra","year"=>1964,"model"=>"mustang");
print_r($car);
echo "<br>";

//access
echo $car['year']. "<br>";

//changing elements
$car["year"]=2024;
echo $car["year"] ."<br>";

//Loop through arrays
foreach($car as $x=>$y){
    echo "$x => $y";
}
echo "<br>";

//Executing function item;
function message(){
    echo "These is message from array <br>";
}
$arr=["Volvo",15,"message"];
$arr[2]();

//Array function for adding elements;
$fruits=array("Apple","Banana","Cherry");
$fruits[]="Orange"; //Adds Single element;
var_dump($fruits);
echo"<br>";

//Adding multiple elements
array_push($fruits,"Kiwi","Coconut");
var_dump($fruits);
echo"<br>";

//Adding elements at first
array_unshift($fruits,"Lemon");
var_dump($fruits);
echo "<br>";


//Splice
$fruits=array("Apple","Banana","Cheery");
$new_fruit="Orange";
array_splice($fruits,1,2,"$new_fruit");
var_dump($fruits);
echo "<br>";

//Merging two arrays
$fruits1=["Apple","Orange"];
$fruits2=["Cherry","banana"];
$result=array_merge($fruits1,$fruits2);
var_dump($result);
echo "<br>";

//Removing elements;

//Splice
$cars=["Volvo","BMW","Toyota"];
array_splice($cars,1,1); //First arg->starting index  Second Arg->no of ele to be deleted
var_dump($cars);
echo "<br>";

//Unset
unset($cars[0],$cars[1]);
var_dump($cars);
echo "<br>";

//Array diff -Take values from as parameters;
$cars=array("brand"=>"Ford","model"=>"Mustang","year"=>1964);
$newarr=array_diff($cars,["Mustang",1964]);
var_dump($newarr);
echo "<br>";

//Pop -remves last ele;
array_pop($cars);
var_dump($cars);
echo "<br>";

//Shift-removes first element;
$cars=array("Volvo","BMW","Toyota");
array_shift($cars);
var_dump($cars);
echo "<br>";

//------------Sort Array -----------------------
$cars=array("Volvo","BMW","Toyota");
sort($cars);
print_r($cars);echo "<br>";
rsort($cars);
print_r($cars);
echo "<br>";

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
asort($age); //Sort according to value -ascending;
print_r($age);
echo "<br>";
arsort($age);
print_r($age); //Sort according to value-descending;
echo "<br>";
ksort($age);
print_r($age); //Sort according to key-ascending;
echo "<br>";
krsort($age);
print_r($age); //Sort according to key- descending;
echo "<br>";

//
?>