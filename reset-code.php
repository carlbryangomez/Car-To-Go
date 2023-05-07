<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Code Verification</title>
    <link rel="icon" href ="img/logoo.png" type="image/x-icon">
</head>
<style type="text/css">
    /* Global styles */
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.form {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.3);
    padding: 20px;
}

.form h2 {
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 20px;
}

.form .form-group {
    margin-bottom: 20px;
}

.form .form-control {
    border-radius: 5px;
    border: 1px solid #ccc;
    padding: 10px;
    width: 100%;
}

.form .button {
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    font-size: 16px;
    font-weight: 600;
    padding: 10px;
    transition: all 0.3s ease-in-out;
}

.form .button:hover {
    background-color: #0069d9;
}

.alert {
    border-radius: 5px;
    margin-bottom: 20px;
    padding: 10px;
    text-align: center;
    width: 100%;
}

.alert-success {
    background-color: #d4edda;
    border-color: #c3e6cb;
    color: #155724;
}

.alert-danger {
    background-color: #f8d7da;
    border-color: #f5c6cb;
    color: #721c24;
}

/* Media queries */
@media (max-width: 767px) {
    .form {
        padding: 10px;
    }

    .form .form-control {
        font-size: 14px;
    }

    .form .button {
        font-size: 14px;
        padding: 8px;
    }
}

</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="reset-code.php" method="POST" autocomplete="off">
                    <h2 class="text-center">Code Verification</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
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
                        <input class="form-control" type="number" name="otp" placeholder="Enter code" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-reset-otp" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>