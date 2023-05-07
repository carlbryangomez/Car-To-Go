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
    <title>Create a New Password</title>
    <link rel="icon" href ="img/logoo.png" type="image/x-icon">
</head>
<body>
    <style type="text/css">
/* Responsive layout */
@media (max-width: 768px) {
  .form {
    margin-top: 50px;
  }
}

/* Form styles */
.form {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
  padding: 30px;
  margin: 0 auto; /* Added to center the form horizontally */
  max-width: 500px; /* Added to limit the form's width */
}

.form h2 {
  margin-bottom: 30px;
  font-weight: bold;
  color: #444;
}

.form .form-group {
  margin-bottom: 20px;
}

.form .form-group label {
  font-size: 14px;
  font-weight: bold;
  color: #666;
}

.form .form-group input {
  border-radius: 5px;
  border: 1px solid #ccc;
  height: 40px;
  padding: 10px;
  font-size: 16px;
  color: #444;
}

.form .form-group .show-password-button {
  display: block;
  margin-top: 5px;
}

.form .form-group .button {
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.form .form-group .button:hover {
  background-color: #3e8e41;
}

.form .alert {
  margin-bottom: 20px;
  font-size: 14px;
  font-weight: bold;
}

.form .alert-danger {
  background-color: #f2dede;
  color: #a94442;
  border: 1px solid #ebccd1;
  border-radius: 5px;
}

.form .alert-success {
  background-color: #dff0d8;
  color: #3c763d;
  border: 1px solid #d6e9c6;
  border-radius: 5px;
}

    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="new-password.php" method="POST" autocomplete="off">
                    <h2 class="text-center">New Password</h2>
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
                            <label for="Password"><span style="font-size: 13px;">Password<span style="color:red;">*</span></label>
                            <input class="form-control" type="password" name="password" placeholder="Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                oninvalid="this.setCustomValidity('Password must contain at least one number, one uppercase, and be at least 8 characters long')"
                                onchange="this.setCustomValidity('')" id="password-input">
                            <button type="button" onclick="togglePasswordVisibility()" class="show-password-button">Show password</button>
                        </div>
                        <div class="form-group">
                            <label for="Confirm Password"><span style="font-size: 13px;">Confirm Password<span style="color:red;">*</span></label>
                            <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                        </div>
                        <style>
                            .show-password-button {
                                background-color: #f2f2f2;
                                border: none;
                                color: #666;
                                padding: 8px;
                                font-size: 14px;
                                cursor: pointer;
                                margin-top: 5px;
                            }
                            .show-password-button:hover {
                                background-color: #ddd;
                            }
                        </style>
                        <script>
                            function togglePasswordVisibility() {
                                var passwordInput = document.getElementById("password-input");
                                if (passwordInput.type === "password") {
                                    passwordInput.type = "text";
                                    document.querySelector(".show-password-button").textContent = "Hide password";
                                } else {
                                    passwordInput.type = "password";
                                    document.querySelector(".show-password-button").textContent = "Show password";
                                }
                            }
                        </script>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="change-password" value="Change">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>