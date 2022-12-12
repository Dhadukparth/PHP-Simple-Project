<?php 
    include 'connection.php'; 
    session_start();
    
    if($_SESSION['uname'] != ""){
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
        Display Records
    </h2>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <form action="display.php" method="post" class="w-100">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <select class="form-control" name="sortingvalue" id="sorting">
                                    <option value="name">Name</option>
                                    <option value="username">Username</option>
                                    <option value="email">Email</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <button type="submit" name="sorting" class="btn btn-outline-primary">Sort</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
            <form action="display.php" method="post" class="w-100">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="form-group">
                                <input type="text" name="searchValue" id="UserSearch" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <button type="submit" name="search" class="btn btn-outline-primary">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Age</th>
                    <th scope="col">Date Of Birth</th>
                    <th scope="col">City</th>
                    <th scope="col">State</th>
                    <th scope="col">Country</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "";
                    if (isset($_POST['sorting'])){
                        $sort = $_POST['sortingvalue'];
                        $query = "SELECT * FROM `users` ORDER BY ".$sort;
                    }
                    else if (isset($_POST['search'])){ 
                        $searchValue = $_POST['searchValue'];
                        $query = "SELECT * FROM `users` WHERE name LIKE '%$searchValue%' OR username LIKE '%$searchValue%' OR email LIKE '%$searchValue%'";
                    }
                    else{
                        $query = "SELECT * FROM `users`";
                    }

                    $result = mysqli_query($con, $query);
                    $checkrecords = mysqli_num_rows($result);
                    if($checkrecords != 0){
                        $i = 1;
                        while($row = mysqli_fetch_array($result)){
                ?>
                            <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['username'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['age'];?></td>
                                <td><?php echo $row['dob'];?></td>
                                <td><?php echo $row['city'];?></td>
                                <td><?php echo $row['state'];?></td>
                                <td><?php echo $row['country'];?></td>
                                <td><a href="edit.php?uid=<?php echo $row['id']; ?>" class="btn btn-outline-primary">Edit</a></td>
                                <td><a href="delete.php?uid=<?php echo $row['id']; ?>" class="btn btn-outline-danger" onclick="return confirm('Are Your Sure This Record Is delete.');">Delete</a></td>
                            </tr>
                <?php
                            $i++;
                        }
                    }
                    else{
                ?>
                        <tr>
                            <td colspan="11" align="center">Records Not Found</td>
                        </tr>
                <?php
                    }
                ?>
                
            </tbody>
        </table>
    </div>
</body>

</html>

<?php 
    }
    else{
        header('location: index.php');
    }    
?>



<!-- SELECT * FROM `users` WHERE name LIKE '%%' OR username LIKE '%%' OR email LIKE '%%' OR age LIKE '%%' OR country LIKE '%%' state LIKE '%%' OR city LIKE '%%' -->