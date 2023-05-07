<?php require_once "controllerUserData.php";

    require_once "config.php";

    if (isset($_SESSION['access_token'])) {
        header('Location: index2.php');
        exit();
    }

    $loginURL = $gClient->createAuthUrl();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="icon" href ="img/logoo.png" type="image/x-icon">

    <style type="text/css">
        html,body{
            background-image: url("img/bgsignin.png");
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
            height: 130%;
        }
        
        .button {
            background-color: #e8b178;
        }
        .login-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
        }
        
        @media only screen and (min-width: 576px) {
            .login-form {
                margin-top: 50px;
                margin-bottom: 50px;
            }
        }
        
        @media only screen and (min-width: 768px) {
            .login-form {
                margin-top: 100px;
                margin-bottom: 100px;
            }
        }
        
        @media only screen and (min-width: 992px) {
            .login-form {
                margin-top: 150px;
                margin-bottom: 150px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                <div>
                <center>
                <img src="img/logo2.png" alt="Logo" width="200" height="200">
                </center>
                </div>
                    <h2 class="text-center">Car-To-Go Inc.</h2>
                    <p class="text-center">Login with your email and password.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <div><center>
                    <input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In With Google" class="btn btn-danger">
                    </div></center>
                    <div class="link login-link text-center">Not yet a member? <a href="signup-user.php">Signup now</a></div>
                    <a href="index.php"><center>Home</center></a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
