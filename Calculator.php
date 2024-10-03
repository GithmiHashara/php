<?php
$function="Multiplication";
$x=15;
$y=20;

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
        echo $x / $y ;
        break;

    default: 
        echo "Invalid Function";
        break;
}