<?php

echo " Enter the First Number: ";
$x = trim(fgets(STDIN));

echo " Enter the Second Number: ";
$y = trim(fgets(STDIN));


if ($x > $y){
    echo"$x is greater than $y";
} else {
    if ($x < $y){
        echo "$x is less than $y";
    } else {
        echo "$x is equal to $y";
    }
}
