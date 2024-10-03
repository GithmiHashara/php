<?php
 function calculate ($x){
     return 5*$x + 10;
 }

 //Get user input
 echo "Enter a number: ";
 $x = trim(fgets(STDIN)); //read input from user

 //validate input
 if (is_numeric($x)){
     $f = calculate($x);
     echo "For x = $x, f(x) = $f \n";
 } else {
     echo "Invalid input. Please enter a number. \n";
 }


 
 
