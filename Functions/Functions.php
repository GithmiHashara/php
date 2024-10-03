<?php

$x=100;

function calculate($x){
    return ((($x* $x* $x ) - 2*($x *$x) + sqrt($x) - sqrt(43) + 6.3)/ (($x * $x) + 0.05 * $x + 3.14));
}

$f = calculate($x);
echo "For x = $x, f(x) = $f \n";

