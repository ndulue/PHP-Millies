<?php 

    include 'db_connect.php';
    session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Millies - Real Estate | Contact Us</title>
<!-- Stylesheets -->
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

                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->      
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon flaticon-menu"></span>
                                    </button>
                                </div>
                                
                                <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="agents.php">Agents</a></li>
                                        <li><a href="properties.php">Properties</a></li>
                                        <li><a href="blog.php">Blog</a></li>
                                        <li class="current" ><a href="contact.php">Contact</a></li>
                                        <li><a href="faq.php">FAQ's</a></li>
                                    </ul>              
                                </div>
                            </nav><!-- Main Menu End-->
                                
                            <!-- Main Menu End-->
                            <div class="outer-box">
                               <div class="btn-box">
                                   <a href="admin/submit-property.php" class="theme-btn btn-style-five">Submit Property</a>
                               </div>
                            </div>
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
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="agents.php">Agents</a></li>
                                <li><a href="properties.php">Properties</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li class="current" ><a href="contact.php">Contact</a></li>
                                <li><a href="faq.php">FAQ's</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                    <?php

                    echo isset($_SESSION['id']) ? '<div class="outer-box">
                       <div class="btn-box">
                           <a href="admin/submit-property.html" class="theme-btn btn-style-five">Submit Property</a>
                       </div>
                    </div>' : '';

                    ?>
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    </header>
    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/16.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Contact Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Section -->
    <section class="contact-section style-two">
        <div class="auto-container">
            <div class="row">
                <!-- Form Column -->
                <div class="form-column col-lg-8 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <span class="title">How To</span>
                            <h2>Contact Us</h2>
                            <div class="text">Don’t Hesitate to Contact with us for any kind of information</div>
                        </div>

                        <!-- Contact Form -->
                        <div class="contact-form">
                            <?php 
                                $user = $email = $sub = $message = "";
                                $user_err = $email_err = $sub_err = $message_err = "";

                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    
                                    if (!empty($_POST['username'])) {
                                        $user = test_input($_POST['username']);
                                        if (!preg_match('/^[a-zA-Z]*$/', $user)) {
                                            $user_err = "Only alphabet and whitespaces are allowed";
                                        }
                                    } else{                                    
                                        $user_err = "Fill in your name";
                                    }

                                    if (!empty($_POST['email'])) {
                                        $email = test_input($_POST['email']);
                                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                            $email_err = "Enter a valid email address";
                                        }
                                    }else{
                                        $email_err = "Fill in your email address";                                    
                                    }

                                    if (!empty($_POST['subject'])) {
                                        $subject = test_input($_POST['subject']);
                                        if (!preg_match('/^[a-zA-Z]*$/', $subject)) {
                                            $sub_err = "Only alphabet and whitespaces are allowed";
                                        }
                                    }else{                                    
                                        $sub_err = "Fill in your the subject of your message";
                                    }
                                    if (!empty($_POST['message'])) {
                                        $message = test_input($_POST['message']);
                                        if (!preg_match('/^[a-zA-Z]*$/', $message)) {
                                            $message_err = "Only alphabet and whitespaces are allowed";
                                        }
                                    }else{                                    
                                        $message_err = "Fill in your message";
                                    }

                                    $Isql = "INSERT INTO `contact` (`id`,`name`,`email`,`subject`,`message`) VALUE ('', '$user', '$email', '$subject', '$message')";
                                    $Iquery = $conn->query($Isql);
                                }

                                function test_input($data){
                                    
                                    $data = trim($data);
                                    $data = stripslashes($data);
                                    $data = htmlspecialchars($data);

                                    return $data;
                                }

                            ?>
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="contact-form">
                                <div class="form-group">
                                    <input type="text" name="username" id="username" value="<?php echo $user;?>" placeholder="Name" required>
                                    <span class="err"><?php echo $user_err;?></span>
                                </div>
                                
                                <div class="form-group">
                                    <input type="email" name="email" id="email" value="<?php echo $email;?>" placeholder="Email" required>
                                    <span class="err"><?php echo $email_err;?></span>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="subject" id="subject" value="<?php echo $sub;?>" placeholder="Subject" required>
                                    <span class="err"><?php echo $sub_err;?></span>
                                </div>

                                <div class="form-group">
                                    <textarea name="message" id="message" value="<?php echo $message;?>" placeholder="Message"></textarea>
                                    <span class="err"><?php echo $message_err;?></span>
                                </div>
                                
                                <div class="form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">Send Now</button>
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <!-- Info Box -->
                        <div class="contact-info-box">
                            <div class="inner-box">
                                <span class="icon la la-phone"></span>
                                <h4>Phones</h4>
                                <ul>
                                    <li>88 867 56 453</li>
                                    <li>21 535 42 546</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Info Box -->
                        <div class="contact-info-box">
                            <div class="inner-box">
                                <span class="icon la la-envelope-o"></span>
                                <h4>Emails</h4>
                                <ul>
                                    <li>info@yousite.com</li>
                                    <li>sale@yousite.com</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Info Box -->
                        <div class="contact-info-box">
                            <div class="inner-box">
                                <span class="icon la la-globe"></span>
                                <h4>Address</h4>
                                <ul>
                                    <li>123 Ipsum Ave, Lorem City, <br> Dolor Country, Thw World</li>
                                </ul> 
                            </div>
                        </div>

                        <!-- Info Box -->
                        <div class="contact-info-box follow-us">
                            <div class="inner-box">
                                <h4>Follow Us:</h4>
                                <ul class="social-icon-three">
                                    <li><a href="#"><span class="la la-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="la la-twitter"></span></a></li>
                                    <li><a href="#"><span class="la la-google-plus"></span></a></li>
                                    <li><a href="#"><span class="la la-dribbble"></span></a></li>
                                    <li><a href="#"><span class="la la-pinterest"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>
    <!--End Contact Section -->

    <!-- Map Section -->
    <section class="map-section">
        <div class="map-outer">
            <!--Map Canvas-->
            <div class="map-canvas"
                data-zoom="12"
                data-lat="-37.817085"
                data-lng="144.955631"
                data-type="roadmap"
                data-hue="#ffc400"
                data-title="Envato"
                data-icon-path="images/icons/map-marker.png"
                data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
            </div>
        </div>
    </section>
    <!-- End Map Section -->

    <!-- Main Footer -->
    <footer class="main-footer style-three">
        
        
        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <!--Scroll to top-->
                <div class="scroll-to-top scroll-to-target" data-target="html"><span class="la la-angle-double-up"></span></div>

                <div class="inner-container clearfix">                                             
                   <div class="copyright-text">
                        
                    </div>
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
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validate.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjirg3UoMD5oUiFuZt3P9sErZD-2Rxc68"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
<!-- Color Setting -->
<script src="js/color-settings.js"></script>
</body>

</html>