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
        <form action="display.php" method="post">
            <div class="d-flex w-100 justify-content-between align-items-center">
                <div class="form-group w-75 mb-4 mr-2">
                    <label for="sorting"></label>
                    <select class="form-control" name="sortingvalue" id="sorting">
                        <option value="name">Name</option>
                        <option value="username">Username</option>
                        <option value="email">Email</option>
                    </select>
                </div>
                <div class="ml-2 w-25">
                    <button type="submit" name="sorting" class="w-100 btn btn-outline-primary">Sort</button>
                </div>
            </div>
        </form>
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
                                <td><a href="update.php?uid=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a></td>
                                <td><a href="delete.php?uid=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are Your Sure This Record Is delete.');">Delete</a></td>
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