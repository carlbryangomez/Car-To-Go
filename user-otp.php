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
  background-color: #f8f8f8;
}

.container {
  margin: 0 auto;
  max-width: 600px;
  padding: 20px;
}

.form {
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  padding: 20px;
}

.form h2 {
  font-size: 24px;
  font-weight: 600;
  margin-bottom: 20px;
  text-align: center;
}

.form .form-group {
  margin-bottom: 20px;
}

.form .form-control {
  border-radius: 5px;
  border: none;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  padding: 10px 15px;
  width: 100%;
}

.form .form-control:focus {
  outline: none;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.form .button {
  background-color: #4caf50;
  border-radius: 5px;
  border: none;
  color: #fff;
  cursor: pointer;
  font-size: 16px;
  font-weight: 600;
  padding: 10px 15px;
  transition: all 0.3s ease;
  width: 100%;
}

.form .button:hover {
  background-color: #3e8e41;
}

.alert {
  border-radius: 5px;
  margin-bottom: 20px;
  padding: 10px 15px;
  text-align: center;
  width: 100%;
}

.alert-danger {
  background-color: #f44336;
  color: #fff;
}

.alert-success {
  background-color: #4caf50;
  color: #fff;
}

/* Media queries */
@media screen and (max-width: 768px) {
  .container {
    max-width: 100%;
    padding: 10px;
  }
}

</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="user-otp.php" method="POST" autocomplete="off">
                    <h2 class="text-center">Code Verification</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
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
                        <input class="form-control" type="number" name="otp" placeholder="Enter verification code" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>