
<?php
require_once 'library/lib.php';
require_once 'classes/crud.php';
require_once 'classes/auth.php';
?>

<?php
$lib=new Lib;
$crud=new Crud;

if (isset($_POST['register'])) {
$crud->addUser($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>UASUQA|SIGN UP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="registration/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="registration/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="registration/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="registration/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="registration/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="registration/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="registration/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="registration/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="registration/registration/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="registration/css/util.css">
    <link rel="stylesheet" type="text/css" href="registration/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
    
    <div class="container-login100" style="background-image: url('images/e.png');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            <form action="#" class="login100-form validate-form" method="post">
                <span class="login100-form-title p-b-37">
                    Sign Up
                </span>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter fullname">
                    <input class="input100" type="text" name="name" placeholder="Enter fullname" required="required">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter email">
                    <input class="input100" type="text" name="email" placeholder="Enter email" required="required">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
                    <input class="input100" type="password" name="password" placeholder="Enter password" required="required">
                    <span class="focus-input100"></span>
                </div>


                <div class="wrap-input100 validate-input m-b-20">
                    <select class="input100" type="text" name="gender" required="required">
                        <option value="">------Select Your Gender------</option>
                        <option value="MALE">MALE</option>
                        <option value="FEMALE">FEMALE</option>
                    </select>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter Your Phone Number">
                    <input class="input100" type="text" name="phone" placeholder="Enter Your Phone Number" required="required">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter Your Address">
                    <input class="input100" type="text" name="address" placeholder="Enter Your Address" required="required">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" name="register" type="submit">
                        Sign Up
                    </button>
                </div>

<br><br>
                <div class="text-center">
                    <a href="login.php" class="txt2 hov1">
                        Back to Login
                    </a>
                    |
                    <a href="index.php" class="txt2 hov1">
                        Home
                    </a>
                </div>
            </form>

            
        </div>
    </div>
    
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="registration/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="registration/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="registration/vendor/bootstrap/js/popper.js"></script>
    <script src="registration/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="registration/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="registration/vendor/daterangepicker/moment.min.js"></script>
    <script src="registration/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="registration/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="registration/js/main.js"></script>

</body>
</html>