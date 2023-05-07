<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="icon" href ="img/logoo.png" type="image/x-icon">
</head>
<style type="text/css">
/* Set a max-width for the container */
.container {
  max-width: 800px;
}

/* Center the container */
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

/* Add a border and padding to the form */
.form {
  border: 2px solid #ccc;
  padding: 30px;
  border-radius: 10px;
}

/* Increase the font size of the heading */
h2 {
  font-size: 2.5rem;
}

/* Increase the font size of the input field and add some padding */
input {
  font-size: 1.5rem;
  padding: 10px;
}

/* Increase the font size and add some padding to the submit button */
.button {
  font-size: 1.5rem;
  padding: 10px;
}

/* Add some margin to the bottom of the form */
.form-group:last-of-type {
  margin-bottom: 30px;
}

/* Make the form fully responsive */
@media (max-width: 767px) {
  /* Decrease the font size of the heading */
  h2 {
    font-size: 2rem;
  }

  /* Decrease the font size of the input field and add some padding */
  input {
    font-size: 1.2rem;
    padding: 8px;
  }

  /* Decrease the font size and add some padding to the submit button */
  .button {
    font-size: 1.2rem;
    padding: 8px;
  }

  /* Add some margin to the bottom of the form */
  .form-group:last-of-type {
    margin-bottom: 20px;
  }
}

</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="forgot-password.php" method="POST" autocomplete="">
                    <h2 class="text-center">Forgot Password</h2>
                    <p class="text-center">Enter your email address</p>
                    <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter email address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-email" value="Continue">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>