<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form In Bootstrap</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <div class="mainbox container-fluid d-flex justify-content-center align-items-center position-relative" style="background-color: #e1e1e1;">
        <div class="box container bg-white" style="height: fit-content;">
            <div class="row h-100">
                
                <div class="right rounded py-4 col-md-4 bg-my d-flex justify-content-center align-items-center">
                    <div class="container text-center">
                        <div class="ltitle my-4 text-white h1 position-relative">Hello, Friend!</div>
                        <p class="text-white h5 my-4">Fill up personal information ans start journey with us.</p>
                        <div class="button">
                            <a href="index.php">
                                <button class="signup border border-2 border-white rounded-pill w-50 text-white btn btn-outlin-x">Sign In</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 h-100 p-4">
                    
                    <div class="header">
                        <div class="text-my h6">Company <span class="text-black">Name</span></div>
                    </div>

                    <div class="social-section">
                        <div class="position-relative my-3">
                            <div class="title h2 py-4 text-center text-my">Create New Account</div>
                        </div>
                        <div class="socialicon d-flex justify-content-center align-items-center">
                            <div class="icon h5 mx-3 rounded-circle d-flex justify-content-center align-items-center">
                                <i class="fab fa-facebook"></i>
                            </div>
                            <div class="icon h5 mx-3 rounded-circle d-flex justify-content-center align-items-center">
                                <i class="fab fa-linkedin"></i>
                            </div>
                            <div class="icon h5 mx-3 rounded-circle d-flex justify-content-center align-items-center">
                                <i class="fab fa-google"></i>
                            </div>
                        </div>
                        <div class="py-4 text-center">or use your email account</div>
                    </div>
                    
                    <div class="form container w-75">
                        <form action="signup.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <input type="file" name="uploadProfile" class="form-control-file" id="newprofileImage" accept=".jpg, .png, .jpeg">
                            </div>
                            <div class="form-outline my-3 position-relative">
                                <input type="text" name="fullname" id="name" class="form-control" required>
                                <label for="name" class="form-label bg-white">Name</label>
                            </div>
                            <div class="form-outline my-3 position-relative">
                                <input type="text" name="username" id="username" class="form-control" required>
                                <label for="username" class="form-label bg-white">Username</label>
                            </div>
                            <div class="form-outline my-3 position-relative">
                                <input type="text" name="email" id="email" class="form-control" required>
                                <label for="email" class="form-label bg-white">Email</label>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-outline my-3 position-relative">
                                        <input type="number" name="age" id="age" class="form-control" required>
                                        <label for="age" class="form-label bg-white">Age</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-outline my-3 position-relative">
                                        <input type="date" name="dob" id="dob" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-sm-12">
                                    <div class="form-group">
                                        <select class="form-control" name="coutry" id="country">
                                            <option value="Australia">Australia</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="Canada">Canada</option>
                                            <option value="China">China</option>
                                            <option value="India">India</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Nepal">Nepal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <div class="form-group">
                                        <select class="form-control" name="state" id="state">
                                            <option value="Delhi">Delhi</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Haryana">Haryana</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="Maharastra">Maharastra</option>
                                            <option value="Manipur">Manipur</option>
                                            <option value="Odisha">Odisha</option>
                                            <option value="Punjab">Punjab</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <div class="form-group">
                                        <select class="form-control" name="city" id="city">
                                            <option value="Ahemadabad">Ahemadabad</option>
                                            <option value="Bhavnagar">Bhavnagar</option>
                                            <option value="Dwarka">Dwarka</option>
                                            <option value="Gandhinagar">Gandhinagar</option>
                                            <option value="Jamnagar">Jamnagar</option>
                                            <option value="Junagadh">Junagadh</option>
                                            <option value="Porbandar">Porbandar</option>
                                            <option value="Rajkot">Rajkot</option>
                                            <option value="Surat">Surat</option>
                                            <option value="Tapi">Tapi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-outline my-3 position-relative">
                                <input type="password" name="password" id="password" class="form-control" required>
                                <label for="password" class="form-label bg-white">Password</label>
                            </div>
                            <div class="form-outline my-3 position-relative">
                                <input type="password" name="repassword" id="repassword" class="form-control" required>
                                <label for="repassword" class="form-label bg-white">Re - Password</label>
                            </div>
                            <div class="button text-center my-3">
                                <button name="signup" class="btn text-white rounded-pill w-50 bg-my">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>

<?php
    include 'connection.php';
    if (isset($_POST['signup'])){
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $dob = $_POST['dob'];
        $country = $_POST['coutry'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];

        if(isset($_FILES['uploadProfile'])){
            $tempFileName = $_FILES["uploadProfile"]["tmp_name"];
            $fileName = $_FILES["uploadProfile"]["name"];
            $path = "C:/wamp64/www/phpconntivity/upload/";
            $dest = $path.$fileName;
            if(move_uploaded_file($tempFileName,$dest)){

                if ($password == $repassword){
                    $sql = "INSERT INTO `users`(`name`, `username`, `email`, `age`, `dob`, `profile`, `country`, `state`, `city`, `password`) 
                    VALUES ('$fullname','$username','$email','$age','$dob', '$fileName','$country','$state','$city','$password')";
                    $query = mysqli_query($con, $sql);
                    
                    if($query){
                        echo "<script> location.href='index.php' </script>";
                    }
                    else{
                        echo "<script> alert('Sorry! This Record Is Not Saved.')</script>";
                    }
                }
                else{
                    echo "<script> alert('Sorry! Both password are not matched.')</script>";
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

?>