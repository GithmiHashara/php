<?php
function calculateSquareRoot($x){
    return sqrt($x); // PHP's sqrt() function calculates the square root
}

$x = 16;
$result = calculateSquareRoot($x);

echo "The square root of $x is $result \n";

//2nd method (Easy way)

$y=36;
$result2 = sqrt($y);

echo "The square root of $y is $result2 \n";   

//with user input
$z = (float)readline("Enter a number: ");
$result3 = sqrt($z);

echo "The square root of $z is $result3 \n";   
