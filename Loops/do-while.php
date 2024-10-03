<?php

//Print $i as long as $i is less than 6:

$i = 0;
do {
    echo $i . "\n";
    $i++;
} while ($i < 6);

echo "\n";
//Print $j as long as $j is less than 10:

$j=1;
do {
    echo $j . "\n";
    $j++;
} while ($j < 10);

echo "\n";

//Set $i = 8, then print $i as long as $i is less than 6:

$i = 8;

do {
    echo $i . "\n";
    $i++;
} while ($i < 6);
//This is because the condition ($i < 6) is checked after the first iteration.
//The loop will always be executed at least once, even if the condition is false, because the code block is executed before the condition is tested.
//$i is incremented to 9.

echo "\n";

//Stop the loop when $i is 3:

$i = 0;
do {
    if ($i == 3) break;
    echo $i . "\n";
    $i++;
        
} while ($i < 6);