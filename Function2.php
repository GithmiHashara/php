<?php

//variable value assign
$x= 10;
$y= 5;

//function declaration
function calculate($x){
    return $x + 10;
    }

//function call
$f = calculate($x);

//display result
echo "For x = $x, f(x) = $f \n";


//Function 2
function calculate2($y){
    return  $y + 20;
}

$f2 = calculate2($y);
echo "For y = $y, f(y) = $f2 \n";