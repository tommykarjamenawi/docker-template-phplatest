<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    // Startup code goes here
    if (isset($_GET["firstname"], $_GET["lastname"])){
        echo $_GET["firstname"];
        echo "</br>";
        echo $_GET['lastname'];
      }
?>