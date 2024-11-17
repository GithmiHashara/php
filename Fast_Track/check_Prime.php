<?php
function isPrime($num) {  // $num is only known inside this function
    if ($num <= 1) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

$number = 29;  // $number is an independent variable outside the function
if (isPrime($number)) {  // Pass $number's value to the function
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>
