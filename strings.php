<?php
$txt1="World";
echo ("Hello $txt1 <br>");//Double Quote Replaces
echo ('Hello $txt <br>'); 

//Functions

//Length
$txt="Hello";
echo strlen($txt);
echo "<br>";

//WOrd count;
echo str_word_count($txt);
echo "<br>";

//Containes
var_dump(str_contains($txt,"He"));
echo "<br>";

//Position
echo (strpos($txt,"l"));
echo "<br>";

//Uppercase
echo strtoupper($txt);
echo "<br>";

//LowerCase
echo strtolower($txt);
echo "<br>";

//Replace
echo str_replace("Hello","World",$txt);
echo "<br>";

//Reverse
echo strrev($txt);
echo "<br>";

//Trim
$txt="         Hello World      ";
trim($txt);
echo ($txt);

//Explode
$x="Hello i am tanuj";
$y=explode(" ",$x);
print_r($y);
echo"<br>";

//Concatenation
$x="Hello";
$y="World";
$z=$x.$y;
echo($z);
echo ("<br>");

/*--- Slicing strings ---- */
$x="Hello World!";
echo substr($x,0,5);
echo "<br>";

echo substr($x,6);
echo "<br>";

echo substr($x,-5,3);
echo "<br>";

echo  substr($x,0,-3);
echo "<br>";
?>