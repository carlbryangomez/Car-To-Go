<?php require_once "controllerUserData.php"; ?>
<?php
if($_SESSION['info'] == false){
    header('Location: login-user.php');  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="icon" href ="img/logoo.png" type="image/x-icon">
</head>
<style type="text/css">
    /* Login Form CSS */

body {
    background-color: #f2f2f2;
}

.container {
    margin-top: 50px;
}

.form {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
}

.form h2 {
    margin-bottom: 20px;
}

.form .form-group {
    margin-bottom: 20px;
}

.form label {
    font-size: 14px;
    font-weight: 600;
}

.form input[type="email"],
.form input[type="password"] {
    border: none;
    border-radius: 5px;
    padding: 10px;
    font-size: 16px;
    width: 100%;
}

.form input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px;
    font-size: 16px;
    width: 100%;
    cursor: pointer;
    transition: all 0.3s ease;
}

.form input[type="submit"]:hover {
    background-color: #0069d9;
}

.alert {
    margin-bottom: 20px;
}

.login-form {
    max-width: 500px;
    margin: 0 auto;
}

@media only screen and (max-width: 600px) {
    .login-form {
        max-width: 90%;
    }
}

</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
            <?php 
            if(isset($_SESSION['info'])){
                ?>
                <div class="alert alert-success text-center">
                <?php echo $_SESSION['info']; ?>
                </div>
                <?php
            }
            ?>
                <form action="login-user.php" method="POST">
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login-now" value="Login Now">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>