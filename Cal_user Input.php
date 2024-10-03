<?php

echo "Enter an arithmatic function : ";
$function = trim(fgets(STDIN));

echo "Enter the first number : ";
$x = trim(fgets(STDIN));

echo "Enter the second number : ";
$y = trim(fgets (STDIN));

if (!is_numeric($x) || !is_numeric($y)){
    echo "Invalid input. Please enter a number. \n";
    exit;
}

switch ($function){
    case "Addition":
        echo $x + $y ;
        break; 
        
    case "Subtraction":
        echo $x - $y ;
        break;

    case "Multiplication":
        echo $x * $y ;
        break;
        
    case "Division":
        //validate to avoid division by zero
        if ($y == 0){
            echo "Invalid input. Cannot divide by zero. \n";
            exit;
        } else {
        echo $x / $y ;
        }
        break;

    default: 
        echo "Invalid Function";
        break;
}