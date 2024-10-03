<?php

//variable value assign
$x= 10;
$y= 5;
$z = 20;

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

//function3
function calculate3($x, $y){
    return $x + $y;
}

$f3 = calculate3($x, $y);
echo "For x = $x and y = $y, f(x,y) = $f3 \n";

//function4
function calculate4($x, $y, $z) {
    return 2* $x + $y + ($z/2);
}

$f4 = calculate4($x, $y, $z);
echo "For x = $x, y = $y and z = $z, f(x,y,z) = $f4 \n";