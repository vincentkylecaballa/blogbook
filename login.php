<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/login.css">
    <link rel="stylesheet" href="scss/login.scss">
    <title>TechGuide PH | Blogbook</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 register">
                <div class="container-fluid">
                    <img class="logo-img mt-4" src="assets/TechGuide-PH-Yellow.png" alt="">
                    <img class="register-img" src="assets/register-girl.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 login-account">


                <div class="container">
                    <div class="col-md-8 offset-md-2 align-self-center">
                        <h1 class="login-text mt-5 mb-4">Log In</h1>

                        <div class="col-lg-12 mt-4  mb-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="btn">
                                        <span class="left-icon"><img class="left-inner-icon" src="assets/google-logo.png" alt=""></span>
                                        <span class="inner-text">Log in with Google</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="btn">
                                        <span class="left-icon"><img class="left-inner-icon" src="assets/facebook-logo.png" alt=""></span>
                                        <span class="inner-text">Log in with Facebook</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="login-divider mt-4 mb-4">
                            <div class="row">
                                <div class="col">
                                    <hr>
                                </div>
                                <div class="col-auto">OR</div>
                                <div class="col">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <form class="justify-content-center" action="">
                            <div class="form-group m-2">
                                <label for="email-address">Email Address</label>
                                <input class="form-control" type="email" name="Email Address" id="email-address">
                            </div>
                            <div class="form-group m-2">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="Password" id="password">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                  Remember Me
                                </label>
                            </div>
                            <button class="submit mt-3 mb-3">LOG IN</button>
                            <p class=" m-4">Don't have an account? <a href="register.html">Sign Up</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>