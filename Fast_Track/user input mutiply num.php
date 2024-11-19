<?php

function multiply($num1, $num2) {
    return $num1 * $num2;
}

$num1 = (float)readline("Enter first number: ");
$num2 = (float)readline("Enter second number: ");

echo "The product of $num1 and $num2 is: " . multiply($num1, $num2) . "\n";