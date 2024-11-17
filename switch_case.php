<?php
$favcolour = "Red";
//$favcolour = readline("Enter your favourite colour: ");

switch ($favcolour) {
    case "Red":
        echo "Your favourite colour is Red!";
        break;
    case "Blue":
        echo "Your favourite colour is Blue!";
        break;
    case "Green":
        echo "Your favourite colour is Green!";
        break;
    default:
        echo "Your favourite colour is neither Red, Blue, nor Green!";
}