<?php 

    include 'db_connect.php';
    session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Millies - Real Estate</title>
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
                                        <li><a href="index">Home</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="agents.php">Agents</a></li>
                                        <li><a href="properties.php">Properties</a></li>
                                        <li><a href="blog.php">Blog</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li class="current" ><a href="faq.php">FAQ's</a></li>
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
                                <li><a href="#">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="agents.php">Agents</a></li>
                                <li><a href="properties.php">Properties</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li class="current" ><a href="faq.php">FAQ's</a></li>
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
        <div class="auto-container"><br>
            <div class="inner-container clearfix">
                <h1>Frequently Ask Question</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>FAQ's</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

<!-- FAQ's Section -->
    <section class="faq-section">
        <div class="auto-container">
             <!--Product Info Tabs-->
            <div class="faq-tabs">
                <!--Product Tabs-->
                <div class="tabs-box">
                    <!--Tab Btns-->
                    <ul class="tab-btns tab-buttons clearfix">
                        <li data-tab="#all-items" class="tab-btn active-btn">All House</li>
                        <li data-tab="#computer" class="tab-btn">Apprtment</li>
                        <li data-tab="#laptop" class="tab-btn">Restaurent</li>
                        <li data-tab="#tablet" class="tab-btn">Villa</li>
                        <li data-tab="#mobile" class="tab-btn">Form</li>
                    </ul>

                    <!--Tabs Container-->
                    <div class="tabs-content">
                        <!--Tab / Active tab-->
                        <div class="tab active-tab" id="all-items">
                            <div class="content">
                                <ul class="accordion-box">
                                    <!--Block-->

                                    <?php
                                        $yes = ""; 
                                        $sql = "SELECT * FROM faq";
                                        $query = $conn->query($sql);
                                        while ($result = $query->fetch_assoc()):
                                        $id = $result['id'];
                                        $question = $result["question"];
                                        $answer = $result["answer"];
                                        if ($id == 1) {
                                            $yes = "current";
                                        } else {
                                            $yes = "";
                                        }
                                    ?>
                                        <li class="accordion block">
                                            <div class="acc-btn"><?php echo $question;?><div class="icon la la-arrow-circle-o-right"></div></div>
                                            <div class="acc-content <?php echo $yes;?>">
                                                <div class="content">
                                                    <div class="text"><?php echo $answer;?> </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endwhile;?>
                                </ul>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="computer">
                            <div class="content">
                                <ul class="accordion-box">
                                    <!--Block-->

                                    <?php
                                        $yes = ""; 
                                        $sql = "SELECT * FROM faq";
                                        $query = $conn->query($sql);
                                        while ($result = $query->fetch_assoc()):
                                        $id = $result['id'];
                                        $question = $result["question"];
                                        $answer = $result["answer"];
                                        if ($id == 1) {
                                            $yes = "current";
                                        } else {
                                            $yes = "";
                                        }
                                    ?>
                                        <li class="accordion block">
                                            <div class="acc-btn"><?php echo $question;?><div class="icon la la-arrow-circle-o-right"></div></div>
                                            <div class="acc-content <?php echo $yes;?>">
                                                <div class="content">
                                                    <div class="text"><?php echo $answer;?> </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endwhile;?>
                                </ul>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="laptop">
                            <div class="content">
                                <ul class="accordion-box">
                                    <!--Block-->

                                    <?php
                                        $yes = ""; 
                                        $sql = "SELECT * FROM faq";
                                        $query = $conn->query($sql);
                                        while ($result = $query->fetch_assoc()):
                                        $id = $result['id'];
                                        $question = $result["question"];
                                        $answer = $result["answer"];
                                        if ($id == 1) {
                                            $yes = "current";
                                        } else {
                                            $yes = "";
                                        }
                                    ?>
                                        <li class="accordion block">
                                            <div class="acc-btn"><?php echo $question;?><div class="icon la la-arrow-circle-o-right"></div></div>
                                            <div class="acc-content <?php echo $yes;?>">
                                                <div class="content">
                                                    <div class="text"><?php echo $answer;?> </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endwhile;?>
                                </ul>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="tablet">
                            <div class="content">
                                <ul class="accordion-box">
                                    <!--Block-->

                                    <?php
                                        $yes = ""; 
                                        $sql = "SELECT * FROM faq";
                                        $query = $conn->query($sql);
                                        while ($result = $query->fetch_assoc()):
                                        $id = $result['id'];
                                        $question = $result["question"];
                                        $answer = $result["answer"];
                                        if ($id == 1) {
                                            $yes = "current";
                                        } else {
                                            $yes = "";
                                        }
                                    ?>
                                        <li class="accordion block">
                                            <div class="acc-btn"><?php echo $question;?><div class="icon la la-arrow-circle-o-right"></div></div>
                                            <div class="acc-content <?php echo $yes;?>">
                                                <div class="content">
                                                    <div class="text"><?php echo $answer;?> </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endwhile;?>
                                </ul>
                            </div>
                        </div>

                        <!-- Tab -->
                        <div class="tab" id="mobile">
                            <div class="content">
                                <ul class="accordion-box">
                                    <!--Block-->

                                    <?php
                                        $yes = ""; 
                                        $sql = "SELECT * FROM faq";
                                        $query = $conn->query($sql);
                                        while ($result = $query->fetch_assoc()):
                                        $id = $result['id'];
                                        $question = $result["question"];
                                        $answer = $result["answer"];
                                        if ($id == 1) {
                                            $yes = "current";
                                        } else {
                                            $yes = "";
                                        }
                                    ?>
                                        <li class="accordion block">
                                            <div class="acc-btn"><?php echo $question;?><div class="icon la la-arrow-circle-o-right"></div></div>
                                            <div class="acc-content <?php echo $yes;?>">
                                                <div class="content">
                                                    <div class="text"><?php echo $answer;?> </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endwhile;?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End FAQ's Section -->

    <!-- FAQ Form Section -->
    <section class="faq-form-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">WHAT IS YOUR QUESTION</span>
                <h2>Ask Your Question</h2>
            </div>

            <!-- Comment Form -->
            <div class="faq-form">
                <!--Comment Form-->
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

                        if (!empty($_POST['message'])) {
                            $message = test_input($_POST['message']);
                            if (!preg_match('/^[a-zA-Z]*$/', $message)) {
                                $message_err = "Only alphabet and whitespaces are allowed";
                            }
                        }else{                                    
                            $message_err = "Fill in your message";
                        }

                        $Isql = "INSERT INTO `question` (`id`,`name`,`email`,`message`) VALUE ('', '$user', '$email', '$message')";
                        $Iquery = $conn->query($Isql);
                    }

                    function test_input($data){
                        
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);

                        return $data;
                    }

                ?>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="row">
                        <div class="form-group">
                            <input type="text" name="username" id="username" value="<?php echo $user;?>" placeholder="Name" required>
                            <span class="err"><?php echo $user_err;?></span>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" name="email" id="email" value="<?php echo $email;?>" placeholder="Email" required>
                            <span class="err"><?php echo $email_err;?></span>
                        </div>
                        
                        <div class="form-group">
                            <textarea name="message" id="message" value="<?php echo $message;?>" placeholder="Message"></textarea>
                            <span class="err"><?php echo $message_err;?></span>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <button class="theme-btn btn-style-two" type="submit" name="submit-form">Submit Now</button>
                        </div>
                        
                    </div>
                </form>
                    
            </div>
            <!--End Comment Form --> 

        </div>
    </section>
    <!--End FAQ Form Section -->


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
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/isotope.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
<!-- Color Setting -->
<script src="js/color-settings.js"></script>
</body>

</html>