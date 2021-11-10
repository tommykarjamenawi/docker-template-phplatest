<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    // Startup code goes here
    $age = readline("Enter your age: ");
    /*$age += 75;
    $age -= 25;
    $age *= 5;
    $age /= 50;*/
    if ($age > 0 && $age < 5) {
        echo "Below average";
    } 
    else if ($age > 5 && $age < 50) {
        echo "average";
    }
    else if ($age > 50) {
        echo "above average";
    }  
?>