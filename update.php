<?php 
    include 'connection.php';
    session_start();
    if ($_SESSION['uname'] != "") {

        $uid = $_GET['uid'];

        if ($uid == "") {
            header("location: display.php");
        }
        else {
            $query = "select * from users where id = $uid";
            $result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Records</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <?php include "headerBar.php" ?>
    <h2 class="text-center mt-5">
        Update Records
    </h2>
    <div class="container mt-5">
        <?php while($srow = mysqli_fetch_array($result)){ 
            ?>
            <form method="POST" action="updata.php">
                <input type="hidden" class="form-control" name="uid" value="<?php echo $uid; ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="upname" value="<?php echo $srow['name']; ?>" id="name" placeholder="Enter Your Name" required>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="upusername" value="<?php echo $srow['username']; ?>"  id="username" placeholder="Enter Your Username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="upemail"  value="<?php echo $srow['email']; ?>"  id="email" placeholder="Enter Your Email Address" required>
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" class="form-control" name="upage" value="<?php echo $srow['age']; ?>"  id="age" placeholder="Enter Your Age" required>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" name="updob" value="<?php echo $srow['dob']; ?>"  id="dob" placeholder="Enter Your Date Of Birth" required>
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" name="upcity" value="<?php echo $srow['city']; ?>"  id="city" placeholder="Enter Your City" required>
                </div>
                <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" class="form-control" name="upstate" value="<?php echo $srow['state']; ?>"  id="state" placeholder="Enter Your State" required>
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" name="upcountry" value="<?php echo $srow['country']; ?>"  id="country" placeholder="Enter Your Country" required>
                </div>
                <div>
                    <button type="submit" name="btnupdate" class="w-100 btn btn-primary">Update</button>
                </div>
            </form>
        <?php
            }
        ?>
    </div>
</body>

</html>
    <?php
        }
    }
    else{
        header("location: index.php");
    }
    ?>