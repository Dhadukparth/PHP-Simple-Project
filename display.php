<?php include 'connection.php' ?>
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="display.php">Records</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
            <div>
                <a href="logout.php" class="btn btn-danger" onclick="return confirm('Are you sure this account is logout.');">Logout</a>
            </div>
        </div>
    </nav>
    <h2 class="text-center mt-5">
        Display Records
    </h2>
    <div class="container mt-5">
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
                    $query = "SELECT * FROM `users`";
                    $result = mysqli_query($con, $query);
                    $checkrecords = mysqli_num_rows($result);
                    if($checkrecords == 1){
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