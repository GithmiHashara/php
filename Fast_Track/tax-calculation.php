<?php

$salary = 250000;
$tax = 0;

if ($salary <= 100000 ){
    $tax = $salary * 0.6;
    $tax += $tax;
    }

    return $tax;