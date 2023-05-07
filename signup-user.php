<?php
require_once "controllerUserData.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="icon" href ="img/logoo.png" type="image/x-icon">
</head>
<style type="text/css">
html,body{
    background-image: url("img/bgsignin.png");
    background-repeat: no-repeat;
   background-size:103% 175%;
    font-family: 'Poppins', sans-serif;
}
/* Container */
.container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

/* Logo and Registration Title */
.logo-container {
  display: flex;
  justify-content: center;
  align-items: center;
}

.form-title {
  text-align: center;
}
/* Form */
.form {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  width: 100%;
  max-width: 800px;
  margin-top:200px;
  padding: 35px;
  border-radius: 10px;
  background-color: #f5f5f5;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
}

.form-input-container {
  display: flex;
  flex-direction: column;
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 20px;
}

.form-control {
  width: 95%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

.button {
  background-color: #e8b178;
  border: none;
  cursor: pointer;
  padding: 10px 25px;
  border-radius: 5px;
  font-size: 20px;
}

.button:hover {
  background-color: #e8b178;
}

.login-link {
  text-align: center;
}

.login-link a {
  color: #4CAF50;
  text-decoration: none;
}

.login-link a:hover {
  text-decoration: underline;
}

@media screen and (max-width: 991px) {
  /* Container */
  .container {
    padding: 20px;
  }
  
  /* Form */
  .form {
    padding: 20px;
  }
}

@media screen and (max-width: 767px) {
  /* Form */
  .form {
    padding: 10px;
  }

  .form-input-container {
    margin-bottom: 10px;
  }

  .form-control {
    font-size: 14px;
  }

  .button {
    font-size: 14px;
  }

  .login-link {
    margin-top: 10px;
  }
}

@media screen and (max-width: 480px) {
  /* Form */
  .form {
    padding: 5px;
  }

  .form-control {
    font-size: 12px;
    padding: 5px;
  }

  .button {
    font-size: 12px;
    padding: 5px 10px;
  }

  .login-link {
    margin-top: 5px;
  }
}

</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user.php" method="POST" autocomplete="">
                <div>
                <center>
                <img src="img/logo2.png" alt="Logo" width="200" height="200">
                </center>
                </div>
                    <h2 class="text-center">Registration</h2>
                    <p class="text-center"></p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-input-container">
                    <div class="form-group">
                        <label for="firstname"><span style="font-size: 13px;">First Name<span style="color:red;">*</span></label>
                        <input class="form-control" type="text" name="firstname" id="firstname" placeholder="First Name" onkeyup="validateFirstName(this)" maxlength="16" required value="<?php echo $firstname ?>">
                    </div>
                    <script>
                        const firstNameInput = document.querySelector('#firstname');

                        function validateFirstName() {
                            const firstNameValue = firstNameInput.value.replace(/[0-9]/g, ''); // Remove any numbers from input
                            const firstNameRegex = /^[a-zA-Z\s]*$/;
                            const isValidFirstName = firstNameRegex.test(firstNameValue);

                            firstNameInput.value = firstNameValue; // Set input value to remove any numbers

                            return isValidFirstName;
                        }

                        firstNameInput.addEventListener('input', validateFirstName);
                    </script>
                    <div class="form-group">
                        <label for="middlename"><span style="font-size: 13px;">Middle Initial</label>
                        <input class="form-control" type="text" name="middlename" id="middlename" placeholder="Middle Initial" onkeyup="validatemiddlename(this)" maxlength="16" value="<?php echo $middlename ?>">
                    </div>
                    <script>
                        const middleNameInput = document.querySelector('#middlename');

                        function validatemiddlename() {
                            const middleNameValue = middleNameInput.value.replace(/[0-9]/g, ''); // Remove any numbers from input
                            const middleNameRegex = /^[a-zA-Z\s]*$/;
                            const isValidmiddleName = middleNameRegex.test(middleNameValue);

                            middleNameInput.value = middleNameValue; // Set input value to remove any numbers

                            return isValidmiddleName;
                        }

                        middleNameInput.addEventListener('input', validatemiddlename);
                    </script>
                    <div class="form-group">
                        <label for="surname"><span style="font-size: 13px;">Surname<span style="color:red;">*</span></label>
                        <input class="form-control" type="text" name="surname" id="surname" placeholder="Surname" onkeyup="validatesurname(this)" maxlength="16" required value="<?php echo $surname ?>">
                    </div>
                    <script>
                        const surNameInput = document.querySelector('#surname');

                        function validatesurname() {
                            const surNameValue = surNameInput.value.replace(/[0-9]/g, ''); // Remove any numbers from input
                            const surNameRegex = /^[a-zA-Z\s]*$/;
                            const isValsurstName = surNameRegex.test(surNameValue);

                            surNameInput.value = surNameValue; // Set input value to remove any numbers

                            return isValidsurName;
                        }

                        surNameInput.addEventListener('input', validatesurname);
                    </script>
                    <div class="form-group">
                        <label for="houseno"><span style="font-size: 13px;">House No.<span style="color:red;">*</span></label>
                        <input class="form-control" type="text" name="house" placeholder="House No." onkeyup="validateHouseNo(this)" maxlength="16" required value="<?php echo $house ?>">
                    </div>
                    <script>
                        const houseNoInput = document.querySelector('input[name="house"]');
                        const form = document.querySelector('form');

                        function validateHouseNo(event) {
                            const houseNoRegex = /^[0-9A-Za-z\s]{1,16}$/;
                            const isValidHouseNo = houseNoRegex.test(houseNoInput.value);

                            if (!isValidHouseNo) {
                                event.preventDefault();
                                alert("Please enter a valid House No. It can only contain letters, numbers, and spaces and must not exceed 16 characters.");
                            }
                        }

                        form.addEventListener('submit', validateHouseNo);
                    </script>
                    <div class="form-group">
                        <label for="street"><span style="font-size: 13px;">Street<span style="color:red;">*</span></label>
                        <input class="form-control" type="text" name="street" placeholder="Street" maxlength="24" required oninput="validateStreet(this)" value="<?php echo $street ?>">
                    </div>
                    <script>
                        function validateStreet(input) {
                          // Replace all non-letter and non-number characters with an empty string
                          let validChars = input.value.replace(/[^A-Za-z0-9]/g, '');
                          
                          // Enforce a maximum length of 10 characters
                          let maxLength = 16;
                          validChars = validChars.substring(0, maxLength);
                          
                          // Set the input value to the cleaned and validated string
                          input.value = validChars;
                        }
                    </script>
                    <div class="form-group">
                        <label for="baranggay"><span style="font-size: 13px;">Baranggay<span style="color:red;">*</span></label>
                        <input class="form-control" type="text" name="baranggay" placeholder="Barangay" oninput="validatebaranggay(this)" required value="<?php echo $baranggay ?>">
                    </div>
                     <script>
                        function validatebaranggay(input) {
                          // Replace all non-letter and non-number characters with an empty string
                          let validChars = input.value.replace(/[^A-Za-z0-9]/g, '');
                          
                          // Enforce a maximum length of 10 characters
                          let maxLength = 16;
                          validChars = validChars.substring(0, maxLength);
                          
                          // Set the input value to the cleaned and validated string
                          input.value = validChars;
                        }
                    </script>
                    <div class="form-group">
                        <label for="city"><span style="font-size: 13px;">City<span style="color:red;">*</span></label>
                        <input class="form-control" type="text" name="city" placeholder="City" oninput="cityInput(this)" maxlength="16" required value="<?php echo $city ?>">
                    </div>
                    <script>
                      // get the input element
                      var cityInput = document.getElementsByName("city")[0];

                      // add an event listener to the input element for keyup event
                      cityInput.addEventListener("keyup", function(event) {
                        // get the input value
                        var inputValue = event.target.value;

                        // replace any numbers in the input value with an empty string
                        var sanitizedValue = inputValue.replace(/[0-9]/g, '');

                        // update the input value with the sanitized value
                        event.target.value = sanitizedValue;
                      });

                      // add an event listener to the input element for input event
                      cityInput.addEventListener("input", function(event) {
                        // get the input value
                        var inputValue = event.target.value;

                        // validate the input value to allow only letters and spaces
                        var validatedValue = inputValue.replace(/[^A-Za-z\s]/g, '');

                        // update the input value with the validated value
                        event.target.value = validatedValue;
                      });
                    </script>

                    <div class="form-group">
                        <label for="Email Address"><span style="font-size: 13px;">Email Address<span style="color:red;">*</span></label>
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <script>
                    function lettersOnly(input) {
                      // Replace any digits with an empty string
                      input.value = input.value.replace(/[0-9]/g, '');
                      
                      // Replace any non-letter, non-space characters with an empty string
                      input.value = input.value.replace(/[^A-Za-z\s]/g, '');
                      
                      // Remove any double spaces
                      input.value = input.value.replace(/\s\s+/g, ' ');
                      
                      // Trim any leading or trailing spaces
                      input.value = input.value.trim();
                    }
                    </script>
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
                        <input class="form-control button" type="submit" name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-center">Already a member? <a href="login-user.php">Login here</a></div>
                    <a href="index.php"><center>Home</center></a>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>