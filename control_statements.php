<?php

//IF else and else if and nested if
$x=5;
$y=6;
$z=4;
if($x>$y){
    if($x>$z){
        echo "x =$x is greatest";
    }else{
        echo "z =$z is greatesr";
    }
}else{
    if($y>$z){
        echo "y =$y is greatest";
    }else{
        echo "z =$z is greatesr";
    }
}

echo "<br>";
// Switch cases 

$day=3;
switch ($day){
    case 1:
        echo "Day is monday";
        break;
    case 2:
        echo "Day is tuesday";
        break;
    case 3:
        echo "Day is wednesday";
        break;
    case 4:
        echo "Day is thursday";
        break;
    case 5:
        echo "Day is friday";
        break;
    case 6:
        echo "Day is saturday";
        break;
    case 7:
        echo "Day is sunday";
        break;
    default:
        echo "Invalid Day";
}
?>