<?php
    // Catching/displaying errors
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Startup code goes here
    $birth_date = $_GET["age"];
 
    function getAgeFromString($birth_date) { // calculate age from a string
        $birth_date = explode("-", $birth_date);
        $age = (date("md", date("U", mktime(0, 0, 0, $birth_date[1], $birth_date[2], $birth_date[0]))) > date("md")
            ? ((date("Y") - $birth_date[0]) - 1)
            : (date("Y") - $birth_date[0]));
        return $age;
    }
    
    $actualAge = getAgeFromString($birth_date); // converte date to age
    
    if (isset($_GET["firstname"], $_GET["age"])){
        echo "your name is: ".$_GET["firstname"];
        echo "</br>";
        echo "you are ".$actualAge. " years old";
      }
?>