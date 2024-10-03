<?php
$i = 5;

while ($i < 10){
    echo $i . "\n";
    $i++;
}

//With the continue statement we can stop the current iteration, and continue with the next:

while ($i < 6){
    $i++;
    if($i==3) continue;
    echo $i . "\n";
}

//The while loop syntax can also be written with the endwhile statement like this

while ($i < 3):
 echo $i . "\n";
 $i++;
 endwhile;

//count until 100 but increase by 10

while ($i <= 100):
    echo $i . "\n";
    $i += 10;
endwhile;