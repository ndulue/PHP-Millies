<?php
    
    include 'db_connect.php';
    if (!empty($_GET["id"])) {
        $id = $_GET['id'];
        if (is_numeric($id)) {
            $sql = "SELECT * FROM `blog` WHERE id = '$id'";
            $query = $conn->query($sql);
            while ($blog = $query->fetch_assoc()) {
                $id = $blog['id'];
                $date = $blog['date'];
                $image = $blog['image'];
                $author = $blog['author'];
                $title = $blog['title'];
                $post = $blog['post'];
            }
        } else{
            header("location:property.php");
        }
    } else {
        header("location:property.php");
    }

    $user = $email = $number = $message = $name = $email_address = $Pnumber = $user_message = "";
    $user_err = $email_err = $number_err = $message_err = $user_name_err = $email_address_err = $Pnumber_err = $user_message_err = "";

    $Csql = "SELECT * FROM `comment` where `post_id` = '$id'";
    $Cquery = $conn->query($Csql);
    $num = $Cquery->num_rows;


    if (isset($_POST['submit-form'])) {
        
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
            } else{                                   
            $email_err = "Fill in your email address";
        }

        if (!empty($_POST['message'])) {
            $message = test_input($_POST['message']);
            if (!preg_match('/^[a-zA-Z]*$/', $message)) {
                $message_err = "Only alphabet and whitespaces are allowed";
                }
            } else{                                    
            $message_err = "Fill in your message";
        }    

        $Rsql = "INSERT INTO `comment` (`id`,`post_id`,`name`,`date`,`email`,`rating`,`message`) VALUE '', '$id', '$user', NOW(), '$email', '', '$message'";
        $Rquery = $conn->query($Rsql);

    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Millies - Real Estate | Blog Detail</title>
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
                                        <li><a href="#">Home</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="agents.php">Agents</a></li>
                                        <li><a href="properties.php">Properties</a></li>
                                        <li class="current" ><a href="blog.php">Blog</a></li>
                                        <li><a href="contact.php">Contact</a></li>
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
                                <li class="current" ><a href="blog.php">Blog</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="faq.php">FAQ's</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    </header>
    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/16.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>News Detail</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>News Detail</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container left-sidebar">
        <div class="auto-container">
            <div class="row">
                <!--Content Side-->
                <div class="content-side col-lg-12 col-md-12 col-sm-12">
                    <div class="blog-detail">
                        <div class="upper-box">
                            <div class="image-box">
                                <figure class="image"><img src="<?php echo $image;?>" alt=""></figure>
                            </div>
                        </div>

                        <div class="lower-content">
                            <ul class="info">
                                <li>by <span><?php echo $author?></span></li>
                                <li><?php echo $date;?></li>
                                <li>COMMENTS <?php echo $num;?></li>
                            </ul>
                            <h2><?php echo $title?></h2>

                            <p><?php echo $post;?></p>
                        </div>

                        <!-- Post Share Option -->
                        <div class="post-share-options clearfix">
                            <div class="pull-right clearfix">
                                <ul class="social-icon clearfix">
                                    <li><a href="#"><i class="la la-facebook"></i></a></li>
                                    <li><a href="#"><i class="la la-twitter"></i></a></li>
                                    <li><a href="#"><i class="la la-google-plus"></i></a></li>
                                    <li><a href="#"><i class="la la-dribbble"></i></a></li>
                                    <li><a href="#"><i class="la la-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Review Box -->
                        <div class="review-area">
                            <!--Reviews Container-->
                            <div class="reviews-container">
                                <h4>Reviews For Customer</h4>
                                <?php

                                    $sql = "SELECT * FROM comment WHERE `post_id` = '$id'";
                                    $query = $conn->query($sql);
                                    while ($result = $query->fetch_assoc()):
                                        $name = $result['name'];
                                        $date = $result['date'];
                                        $message = $result['message'];

                                ?>
                                    <article class="review-box">
                                        <div class="content-box">
                                            <div class="name"><?php echo $name;?></div>
                                            <span class="date"><i class="la la-calendar"></i> <?php echo $date;?></span>
                                            <div class="rating"><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span></div>
                                            <div class="text"><?php echo $message;?></div>
                                        </div>
                                    </article>
                                <?php endwhile;?>
                            </div>
                                <!--Reviews-->
                            </div>
                        </div>

                         <!-- Review Comment Form -->
                        <div class="review-comment-form"> 
                            <h4>Leave A Review</h4>
                            
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="username" value="<?php echo $name;?>" placeholder="Full Name" required>
                                        <span class="err"><?php echo $user_err;?></span>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="number" value="<?php echo $email;?>" placeholder="Email Address" required>
                                        <span class="err"><?php echo $email_err;?></span>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <textarea name="message" value="<?php echo $message;?>" placeholder="Message"></textarea>
                                        <span class="err"><?php echo $message_err;?></span>
                                    </div>
                                    <!--<div class="form-group col-lg-6 col-md-6 col-sm-6">
                                        <div class="rating-box">
                                            <div class="text"> Your Rating:</div>
                                            <div class="rating">
                                                <a href="#"><span class="la la-star-o"></span></a>
                                                <a href="#"><span class="la la-star-o"></span></a>
                                                <a href="#"><span class="la la-star-o"></span></a>
                                                <a href="#"><span class="la la-star-o"></span></a>
                                                <a href="#"><span class="la la-star-o"></span></a>
                                            </div>
                                        </div>
                                    </div>-->

                                    <div class="form-group col-lg-6 col-md-6 col-sm-6 text-right">
                                        <input class="theme-btn btn-style-one text-left" type="submit" value="Submit now" name="submit-form">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Container -->

    <!--Clients Section-->
    <section class="clients-section style-three">
        <div class="auto-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section--> 

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
<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2uu6KHbLc_y7fyAVA4dpqSVM4w9ZnnUw"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
<script src="js/script.js"></script>
<!-- Color Setting -->
<script src="js/color-settings.js"></script>
</body>

</html>