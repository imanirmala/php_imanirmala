<?php

    $host="localhost";
    $user="root";
    $pass="";
    $db="dba1";

    $con = mysqli_connect($host, $user, $pass, $db) or die("Error BROO!!" . mysqli_error ($con));
    
?>