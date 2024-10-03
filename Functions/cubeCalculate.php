<?php
$x = 2;

function calculate($x){
    return ($x * $x * $x);
}

$f = calculate($x);
echo "For x = $x, f(x) = $f \n";