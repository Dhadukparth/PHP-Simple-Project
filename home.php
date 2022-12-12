<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    
    <?php include "headerBar.php" ?>
    
    <div style="background-color: black; color: white; padding: 1rem; text-align: center; font-size: 2rem;">
        <?php
        session_start();
        if ($_SESSION['uname'] != "") {
            echo "<h2>Welcome " . $_SESSION['uname'] . "</h2>";
        }
        else {
            header("location: index.php");
        }
        ?>
    </div>
    

</body>

</html>