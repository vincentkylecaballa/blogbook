<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/styles.css">
    <link rel="stylesheet" href="scss/styles.scss">
    <title>TechGuide PH | Register</title>
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
            <div class="col-lg-6 ml-5 register-account">
                <div class="container input-register">
                    <div class="col-md-8 offset-md-2">
                        <h1 class="create-account mt-5 mb-4">Create an Account</h1>
                        <form class="justify-content-center" action="">
                            <div class="form-group m-2">
                                <label for="first-name">First Name</label>
                                <input type="text" class="form-control" name="First Name" id="first-name">
                            </div>
                            <div class="form-group m-2">
                                <label for="last-name">Last Name</label>
                                <input type="text" class="form-control" name="Last Name" id="last-name">
                            </div>
                            <div class="form-group m-2">
                                <label for="email-address">Email Address</label>
                                <input class="form-control" type="email" name="Email Address" id="email-address">
                            </div>
                            <div class="form-group m-2">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="Password" id="password">
                            </div>
                            <button class="submit mt-5">Register</button>
                            <p class="text-start m-4">Already have an account? <a href="login.html">Log In</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>