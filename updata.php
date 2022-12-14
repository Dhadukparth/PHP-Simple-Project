<?php

    include 'connection.php';
    session_start();
    if ($_SESSION['uname'] != "") {

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

            if(isset($_FILES['updateProfileImage'])){

                $tempname = $_FILES["updateProfileImage"]["tmp_name"];
                $filename = $_FILES["updateProfileImage"]["name"];
                $uploadfilepath = "C:/wamp64/www/phpconntivity/upload/";
                $dest = $uploadfilepath.$filename;

                if(move_uploaded_file($tempname, $dest)){
                    $upquery = "UPDATE `users` SET `name`='$name', `username`='$username', `email`='$email', `age`='$age', `dob`='$dob', `profile`='$filename', `country`='$country', `state`='$state', `city`='$city' WHERE id='$uid'";
                    $result = mysqli_query($con, $upquery);
                    $checkquery = mysqli_num_rows($result);
                    if($checkquery){
                        header("location: display.php");
                    }
                    else{
                        header("location: display.php");
                    }
                }
                else{
                    echo "<script> alert('Sorry! Your File Is not Uploaded.')</script>";
                }
            }

            else{
                echo "<script> alert('Please, Select your profile image.')</script>";
            }

        }
    }

    else{
        header("location: index.php");
    }

?>