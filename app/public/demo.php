<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    // Startup code goes here
    if (isset($_POST["firstname"], $_POST["age"])){
        echo $_POST["firstname"];
        echo "</br>";
        echo $_POST['age'];
      }
?>