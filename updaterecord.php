<?php

    include 'connection.php';
    session_start();
    if (isset($_POST['btnupdate'])) 
    {
        $uid = $_POST['uid'];
        $name = $_POST['upname'];
        $username = $_POST['upusername'];
        $email = $_POST['upemail'];
        $age = $_POST['upage'];
        $dob = $_POST['updob'];
        $city = $_POST['upcity'];
        $state = $_POST['upstate'];
        $country = $_POST['upcountry'];

        $query = "UPDATE `users` SET `name`='$name', `username`='$username', `email`='$email', `age`='$age', `dob`='$dob', `country`='$country', `state`='$state', `city`='$city' WHERE id='$uid'";
        $result = mysqli_query($con, $query);
        $checkquery = mysqli_num_rows($result);
        if($checkquery == 1){
            header("location: display.php");
        }
        else{
            header("location: display.php");
        }
        
    }


?>