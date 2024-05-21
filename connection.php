<?php

    $database= new mysqli("localhost:3308","root","","mydoc");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>