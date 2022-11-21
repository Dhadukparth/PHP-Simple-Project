<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div style="background-color: black; color: white; padding: 1rem; text-align: center; font-size: 2rem;">
        <?php
            session_start();
            if ($_SESSION['uname'] != ""){
                echo "<h2>Welcome To ".$_SESSION['uname']."</h2>";
        ?>

            <a href="logout.php" onclick="return confirm('Are You Sure This Account Is Logout.');">
                <button type="button" style="background-color: white; color: black; padding: .5rem 5rem; font-size: 1.5rem; cursor: pointer;">Logout</button>
            </a>
            
            <?php
        }
        else{
            header("location: index.php");
        }
        ?>
    </div>
</body>
</html>