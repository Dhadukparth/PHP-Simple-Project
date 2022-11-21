<?php

    $con = mysqli_connect('localhost', 'root', '', 'phpdemodb');

    if(!$con){
        die("Error: Unable to connect to database");
    }
    else{
        echo "<script>alert('Connected to database')</script>";
    }

?>