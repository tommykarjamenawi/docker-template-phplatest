<?php
    $age;
    $age += 75;
    $age -= 25;
    $age *= 5;
    $age /= 50;
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