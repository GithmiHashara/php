<?php
function calculateSquareRoot($x){
    return sqrt($x); // PHP's sqrt() function calculates the square root
}

$x = 16;
$result = calculateSquareRoot($x);

echo "The square root of $x is $result \n";