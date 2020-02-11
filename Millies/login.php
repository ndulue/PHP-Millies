<?php

    require 'db_connect.php'; 

    $email = $password = $email_err = $password_err = "";

    if (isset($_POST['submit-form'])) {

        if (!empty($_POST['email'])) {
            $email = test_input($_POST['email']);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email_err = "Enter a valid email address";
                }
            } else{                                   
            $email_err = "Fill in your email address";
        }

        if (!empty($_POST['password'])) {
            $password = ($_POST['password']);
            
            } else{                                    
            $password_err = "Fill in your password";
        }    

        $sql = "SELECT * FROM agent WHERE `email` = '$email' && `password` = '$password'";
        $query = $conn->query($sql);

        while ($agent = $query->fetch_assoc()) {
            $user_id = $agent['id'];
            $user_email = $agent['email'];
        }
        $row = $query->num_rows;

        if ($row > 0) {
            $_SESSION['email'] = $user_email;
            $_SESSION['id'] = $user_id;
            header('location:admin/dashboard.php');
        } else{
            $password_err = "Invalid login details";
        }

    }

    function test_input($data){
        
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }



?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Willies - Real Estate | Login / Register </title>
<!-- Style sheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

        <!-- Main Header-->
    <header class="main-header header-style-two">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="top-left">
                        <ul class="contact-list clearfix">
                            <li><i class="la la-home"></i> 256 Interior the good, New York</li>
                            <li><i class="la la-envelope-o"></i><a href="#">Supportyou@Interiores.com</a></li>
                        </ul>
                    </div>
                    <div class="top-right">
                        <ul class="social-icon-one clearfix">
                            <li><a href="#"><i class="la la-facebook-f"></i></a></li>
                            <li><a href="#"><i class="la la-twitter"></i></a></li>
                            <li><a href="#"><i class="la la-google-plus"></i></a></li>
                            <li><a href="#"><i class="la la-dribbble"></i></a></li>
                            <li><a href="#"><i class="la la-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Lower -->
        <div class="header-lower">
            <div class="auto-container">
                <div class="main-box">
                    <div class="inner-container clearfix">
                        <div class="logo-box">
                            <div class="logo"><a href="index.php"><img src="images/logo-2.png" alt="" title=""></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Lower-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.php" title=""><img src="images/logo-small.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
            </div>
        </div><!-- End Sticky Menu -->
    </header>
    <!--End Main Header -->

    <!--Login Section-->
    <section class="login-section">
        <div class="auto-container">
            <div class="row clearfix"><br><br>
                
                <div class="container-fluid column col-md-12 col-sm-12 col-xs-12">
                    <h2>Login</h2>
                    
                    <!-- Register Form -->
                    <div class="login-form register-form">
                        <!--Login Form-->
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" name="email" value="<?php echo $email;?>" placeholder="Your Email" required>
                                <span class="err"><?php echo $email_err;?></span>

                            </div>
                            
                            <div class="form-group">
                                <label>Enter Your Password</label>
                                <input type="password" name="password" placeholder="Password" required>
                                <span class="err"><?php echo $password_err;?></span>
                            </div>
                            
                            <div class="form-group text-right">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form">Register</button>
                            </div>
                        </form>      
                    </div>
                    <!--End Register Form -->
                </div>
            </div>
        </div>
    </section>
    <!--End Login Section-->

    <!-- Main Footer -->
    <footer class="main-footer style-two">
        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="inner-container clearfix">                          
                    <!--Scroll to top-->
                    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="la la-angle-double-up"></span></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->

</div>
<!--End pagewrapper-->

<script src="js/jquery.js"></script> 
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
<!-- Color Setting -->
</body>

</html>