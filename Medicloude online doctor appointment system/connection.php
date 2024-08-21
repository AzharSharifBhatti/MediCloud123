<?php

    $database= new mysqli("localhost","root","","medicloud");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>