<?php
    //Function
    function myMessage(){
        echo "Hello World <br>";
    }
    myMessage();


    //Function with parameters
    function familyName($fname){
        echo "$fname <br>";
    }
    familyName("Tanuj");

    //Default Parameter value
    function setHeight($height=50){
        echo "The height is $height <br>";
    }
    setHeight(305);
    setHeight();

    //Returning values
    function sum($x,$y){
        $z=$x+$y;
        return $z;
    }
    echo "5+10=". sum(5,10), "<br>";

    //Passing by reference
    function add(&$value){
        $value+=5;
    }
    $num=2;
    add($num);
    echo "Value : $num";

    
?>