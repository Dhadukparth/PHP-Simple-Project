<?php
    include 'connection.php';
    session_start();
    if (isset($_POST['login'])) 
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $query = "SELECT * FROM `users` WHERE username='$username' AND password='$password'";
        $result = mysqli_query($con, $query);
        if(isset($result)){
            $_SESSION['uname'] = $username;
            header("Location: home.php");
        }
        else{
            echo "<script> alert('Sorry! Your Username and Password is incorrect')</script>";
        }
        
    }
?>