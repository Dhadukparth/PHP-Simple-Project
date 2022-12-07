<?php
    include 'connection.php';
    session_start();
    if (isset($_POST['login'])) 
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $query = "SELECT * FROM `users` WHERE username='$username' AND password='$password'";
        $result = mysqli_query($con, $query);
        $checkquery = mysqli_num_rows($result);
        echo $checkquery;
        if($checkquery == 1){
            $_SESSION['uname'] = $username;
            header("Location: home.php");
        }
        else{
            echo "<script> alert('Sorry! Your Username and Password is incorrect')</script>";
            header("Location: index.php?error=Please, check your username and password.");
        }
        
    }
?>