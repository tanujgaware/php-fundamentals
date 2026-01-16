<?php

//While Loop
$x=1;
while($x<=5){
    echo $x. " ";
    $x++;
}
echo "<br>";

//Do while
$x=6;
do{
    echo $x;
}while($x<5);
echo "<br>";

// for loop
for($x=0;$x<5;$x++){
    echo $x." ";
}
echo "<br>";
//for each loop
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}

$age=array("tanuj"=>19,"pratham"=>30,"vayuj"=>40);
foreach($age as $key=>$value){
    echo "$key : $value <br>";
}
?>