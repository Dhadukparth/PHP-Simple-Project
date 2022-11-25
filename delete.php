<?php

    include "connection.php";

    session_start();
    if($_SESSION['uname'] != ""){

        $uid = $_GET['uid'];
        if($uid == ""){
            header("location: display.php");
        }
        else{
            $query = "DELETE FROM `users` WHERE id='$uid'";
            $result = mysqli_query($con, $query);
            $checkquery = mysqli_num_rows($result);
            if ($checkquery == 1){
                header('location: display.php');
            }
            else{
                header('location: display.php');
            }
        }
    }
    else{
        header('location: index.php');
    }

?>