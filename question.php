
<?php
require_once 'library/lib.php';
require_once 'classes/crud.php';
require_once 'classes/auth.php';
?>

<?php
$lib=new Lib;
$crud=new Crud;

$crud->checkLoginQ();

if (isset($_POST['submit'])) {
$crud->checkQuestion($_POST);
}
// $rand=['name','email','gender','phone','address'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>UASUQA|QUESTION</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="question/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="question/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="question/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="question/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="question/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="question/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="question/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="question/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="question/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="question/css/util.css">
    <link rel="stylesheet" type="text/css" href="question/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55"><?php $lib->msg();?><br/>
                <form action="#" method="post" class="login100-form validate-form flex-sb flex-w">
                    <span class="login100-form-title p-b-32">
                        ACCOUNT VERIFICATION QUESTION
                    </span>

                    <span class="login100-form-title p-b-22" style="font-size: 16px;color: #3E4CF7;">
                        <?php
                        $question='';
                        $questions='';
                        $rand=rand(1,5);
                        if ($rand == '1') {
                        $question='name';
                        $questions='fullname';
                        } else if ($rand == '2'){
                        $question='email';
                        $questions='email address';
                        } else if ($rand == '3'){
                        $question='gender';
                        $questions='gender';
                        } else if ($rand == '4'){
                        $question='phone';
                        $questions='phone number';
                        } else if ($rand == '5'){
                        $question='address';
                        $questions='residential address';
                        } else{
                        $question='invalid';
                        }
                        ?>
                        Question:  What is your <?=$questions;?>
                    </span>



                    
                    <span class="txt1 p-b-11">
                        Answer:
                    </span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate = "Answer is required">
                        <span class="btn-show-pass">
                            <i class="fa fa-eye"></i>
                        </span>
                        <input class="input100" type="password" name="answer" required="required">
                        <input class="input100" type="hidden" name="question" required="required" value="<?=$question?>">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" name="submit">
                           VERIFY
                        </button>
                    </div>
<br/><br/><br/>
                    <div>
                            <a href="login.php" class="txt3">
                                Login
                            </a>
                            |
                            <a href="index.php" class="txt3">
                                Back to Home
                            </a>
                        </div>

                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="question/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="question/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="question/vendor/bootstrap/js/popper.js"></script>
    <script src="question/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="question/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="question/vendor/daterangepicker/moment.min.js"></script>
    <script src="question/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="question/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="question/js/main.js"></script>

</body>
</html>