<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Form In Bootstrap</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <div class="mainbox container-fluid vh-100 d-flex justify-content-center align-items-center" style="background-color: #e1e1e1;">
        <div class="box rounded container bg-white" style="height: fit-content;">
            <div class="row h-100">
                
                <div class="col-md-8 h-100 p-4">
                    
                    <div>
                        <div class="text-my h6">Company <span class="text-black">Name</span></div>
                    </div>

                    <div class="social-section">
                        <div class="position-relative my-3">
                            <div class="title h2 py-4 text-center text-my">Sign In Account</div>
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
                    
                    <div class="form container">
                        <form method="POST" action="auth.php">
                            <div class="form-outline my-3 position-relative">
                                <input type="text" name="username" id="username" class="form-control" required>
                                <label for="username" class="form-label bg-white">Username</label>

                                <span class="text-danger"></span>
                            </div>
                            <div class="form-outline my-3 position-relative">
                                <input type="password" name="password" id="password" class="form-control" required>
                                <label for="password" class="form-label bg-white">Password</label>
                                <span class="text-danger"></span>
                            </div>
                            <div class="checkrow row form-check d-flex justify-content-between py-3">
                                <div class="col-md-12 col-lg-6 py-2">
                                    <input type="checkbox" class="form-check-input" id="checkbox1">
                                    <label class="form-check-label" for="checkbox1"><b>Remember Me</b></label>
                                </div>
                                <div class="col-md-12 col-lg-6 py-2">
                                    <a href="#" class="text-black"><b>Forgot Password</b></a>
                                </div>
                            </div>
                            <div class="button text-center my-3">
                                <button type="submit" name="login" class="btn text-white rounded-pill w-50 bg-my">Sign In</button>
                            </div>
                        </form>
                    </div>
                    
                    <div class="footer mt-3 d-flex justify-content-center align-items-center">
                        <div>Privacy Policy</div>
                        <div class="dot mx-4"></div>
                        <div>Terms & Conditions</div>
                    </div>
                </div>

                <div class="right py-4 col-md-4 bg-my d-flex justify-content-center align-items-center">
                    <div class="container text-center">
                        <div class="ltitle my-4 text-white h1 position-relative">Hello, Friend!</div>
                        <p class="text-white h5 my-4">Fill up personal information ans start journey with us.</p>
                        <div class="button">
                            <a href="signup.php">
                                <button class="signup border border-2 border-white rounded-pill w-50 text-white btn btn-outlin-x">Sign Up</button>
                            </a>
                        </div>
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