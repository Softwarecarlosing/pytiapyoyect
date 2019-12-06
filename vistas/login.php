<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel="icon" type="css/login/image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/login/vendor/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="css/login/css/main.css">
<!--===============================================================================================-->



    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="css/login/images/logobrazo.png" alt="IMG">
                </div>

                <form class="login100-form validate-form" form action="" method="POST" >
                     <?php

                     if(isset($errorLogin)){
                        echo $errorLogin;
                     }

                     ?>
                    <span class="login100-form-title">
                        Ingresa tus datos para ingresar al sistema
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="username" placeholder="username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" >
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Forgot
                        </span>
                        <a class="txt2" href="#">
                            Username / Password?
                        </a>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="#">
                            Create your Account
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>






        <!--===============================================================================================-->
    <script src="css/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="css/login/vendor/bootstrap/js/popper.js"></script>
    <script src="css/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="css/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="css/login/vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="css/login/js/main.js"></script>

<!--===============================================================================================-->

<!--===============================================================================================-->

        <script src="jsadmin/jquery-3.3.1.min.js"></script>
        <script src="jsadmin/popper.js"></script>
        <script src="jsadmin/bootstrap.min.js"></script>
        <script src="jsadmin/stellar.js"></script>
        <script src="vendorsadmin/lightbox/simpleLightbox.min.js"></script>
        <script src="vendorsadmin/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendorsadmin/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendorsadmin/isotope/isotope.pkgd.min.js"></script>
        <script src="vendorsadmin/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendorsadmin/popup/jquery.magnific-popup.min.js"></script>
        <script src="jsadmin/jquery.ajaxchimp.min.js"></script>
        <script src="vendorsadmin/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendorsadmin/counter-up/jquery.counterup.js"></script>
        <script src="jsadmin/mail-script.js"></script>
        <script src="jsadmin/theme.js"></script>
</body>
</html>