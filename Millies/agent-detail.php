<?php 

    include 'db_connect.php';
    session_start();

    if (!empty($_GET["id"])) {
        $id = $_GET['id'];
        if (is_numeric($id)) {
            $sql = "SELECT * FROM `agent` WHERE id = '$id'";
            $query = $conn->query($sql);
            while ($result = $query->fetch_assoc()) {
                $name = $result['name'];
                $pix = $result['pix'];
                $phone = $result['phone_number'];
                $bio = $result['bio'];
                $email = $result['email'];
                $facebook = $result['facebook'];
                $twitter = $result['twitter'];
                $google = $result['google-plus'];
                $pinterest = $result['pinterest'];
            }
        } else{
            header("location:agents.php");
        }
    } else {
        header("location:agents.php");
    }


    $user = $email = $sub = $message = "";
    $user_err = $email_err = $sub_err = $message_err = "";

    if ($_SERVER["REQUEST_METHOD"] == "post") {
        
        if (!empty($_POST['username'])) {
            $user = test_input($_POST['username']);
            if (!preg_match('/^[a-zA-Z]*$/', $user)) {
                $user_err = "Only alphabet and whitespaces are allowed";
            }
            $user_err = "Fill in your name";
        }

        if (!empty($_POST['email'])) {
            $email = test_input($_POST['email']);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email_err = "Enter a valid email address";
            }
            $email_err = "Fill in your email address";
        }
        if (!empty($_POST['subject'])) {
            $subject = test_input($_POST['subject']);
            if (!preg_match('/^[a-zA-Z]*$/', $subject)) {
                $sub_err = "Only alphabet and whitespaces are allowed";
            }
            $sub_err = "Fill in your the subject of your message";
        }
        if (!empty($_POST['message'])) {
            $message = test_input($_POST['message']);
            if (!preg_match('/^[a-zA-Z]*$/', $message)) {
                $message_err = "Only alphabet and whitespaces are allowed";
            }
            $message_err = "Fill in your message";
        }

        $sql = "INSERT INTO `contact` (`id`,`name`,`email`,`subject`,`message`) VALUE '', '$user', '$email', '$subject', '$message'";
        $query = $conn->query($sql);

    }

                        

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Millies - Real Estate </title>
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
                                        <li class="current" ><a href="agents.php">Agents</a></li>
                                        <li><a href="properties.php">Properties</a></li>
                                        <li><a href="blog.php">Blog</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="faq.php">FAQ's</a></li>
                                    </ul>              
                                </div>
                            </nav><!-- Main Menu End-->
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
                                <li class="current" ><a href="#">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li class="current" ><a href="agents.php">Agents</a></li>
                                <li><a href="properties.php">Properties</a></li>
                                <li><a href="blog.php">Blog</a></li>
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
        </div><!-- End Sticky Menu -->
    </header>
    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/16.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Agent Detail</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>Agent Detail</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Agent Detail -->
    <section class="agent-detail">
        <div class="auto-container">
            <div class="row">
                <div class="image-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image"><img src="<?php echo $pix;?>" alt=""></figure>
                        </div>
                    </div>
                </div>

                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="about-agent">
                            <h3 class="name"><?php echo $name;?></h3>
                            <span class="designation">Real Estate Agent</span>
                            <div class="text"><?php echo $bio;?></div>
                            <div class="contact-info">
                                <div class="row">
                                    <div class="column col-xl-4 col-lg-12 col-md-12 col-sm-12">
                                        <ul>
                                            <li><i class="la la-phone"></i> <?php echo $phone;?></li>
                                            <li><i class="la la-envelope-o"></i> <a href="#"><?php echo $email;?></a></li>
                                        </ul>
                                    </div>

                                    <div class="column col-xl-4 col-lg-12 col-md-12 col-sm-12">
                                        <ul>
                                            <li><span>Address</span></li>
                                            <li>8542 El Paseo Grande New Yark</li>
                                        </ul>
                                    </div>

                                    <div class="column col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <ul>
                                            <li><strong>Follow Us:</strong></li>
                                            <li>
                                                <ul class="social-links">
                                                    <li><a href="<?php echo $facebook;?>"><i class="la la-facebook"></i></a></li>
                                                    <li><a href="<?php echo $twitter;?>"><i class="la la-twitter"></i></a></li>
                                                    <li><a href="<?php echo $google;?>"><i class="la la-google-plus"></i></a></li>
                                                    <li><a href="<?php echo $pinterest;?>"><i class="la la-pinterest"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Agent Detail -->

    <!-- Recent Section -->
    <section class="property-section alternate">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">FIND YOUR HOUSE IN YOUR CITY</span>
                <h2>RECENT PROPERTIES</h2>
            </div>

            <div class="row">
                <!-- Property Block -->
                <?php 
                    $query = "SELECT * FROM `property` WHERE agent = '$name' limit 3";
                    $sql = $conn->query($query);
                    
                    while ($prop = $sql->fetch_assoc()):
                        $id = $prop['Id'];
                        $date = $prop['date'];
                        $title = $prop['title'];
                        $agent = $prop['agent'];
                        $state = $prop['state'];
                        $address = $prop['address'];
                        $type = $prop['type'];
                        $garage = $prop['garage'];
                        $bedroom = $prop['bedroom'];
                        $bathroom = $prop['bathroom'];
                        $size = $prop['size'];
                        $description = $prop['description'];
                        $price = $prop['price'];
                        $image1 = $prop['image1'];
                        $image2 = $prop['image2'];
                        $image3 = $prop['image3'];
                        $image4 = $prop['image4'];
                    

                ?>
                    <div class="property-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="single-item-carousel owl-carousel owl-theme">
                                    <figure class="image"><img src="<?php echo $image2;?>" alt="" height="320" width="300" class="img-responsive"></figure>
                                    <figure class="image"><img src="<?php echo $image3;?>" alt="" height="320" width="300" class="img-responsive"></figure>
                                    <figure class="image"><img src="<?php echo $image4;?>" alt="" height="320" width="300" class="img-responsive"></figure>
                                </div>
                                <span class="for">FOR SALE</span>
                                <span class="featured">FEATURED</span>
                                <ul class="info clearfix">
                                    <li><i class="la la-calendar-minus-o"><?php echo $date;?></i></li>
                                    <li><a href="agent-detail.php?id=<?php echo $id;?>"><i class="la la-user-secret"></i><?php echo $agent;?></a></li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <ul class="tags">
                                    <li><?php echo $type;?></li>
                                </ul>
                                <h3><a href="property-detail.php?id=<?php echo $id;?>"><?php echo $title;?></a></h3>
                                <div class="lucation"><i class="la la-map-marker"></i> <?php echo $address.", ".$state;?></div>
                                <ul class="property-info clearfix">
                                    <li><i class="flaticon-dimension"></i> <?php echo $size;?> Sq-Ft</li>
                                    <li><i class="flaticon-bed"></i> <?php echo $bedroom;?> Bedrooms</li>
                                    <li><i class="flaticon-car"></i> <?php echo $garage;?> Garage</li>
                                    <li><i class="flaticon-bathtub"></i> <?php echo $bathroom;?> Bathroom</li>
                                </ul>
                                <div class="property-price clearfix">
                                    <div class="read-more"><a href="property-detail.php?id=<?php echo $id;?>" class="theme-btn">More Detail</a></div>
                                    <div class="price">$ <?php echo $price;?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endwhile;?>
            </div>
            <?php 

                    $num_query = "SELECT * FROM `property` WHERE agent = '$name'";
                    $num_sql = $conn->query($num_query);
                    $num = $num_sql->num_rows;
                if ($num > 3) {

                    echo '<div class="load-more-btn text-center">
                            <a href="#" class="theme-btn btn-style-two">Load More</a>
                        </div>';

                } else{

                    echo '';
                };

            ?>
            
        </div>
    </section>
    <!--End Property Section -->

    <!-- Appointment Section -->
    <section class="appointment-section">
        <div class="auto-container">
            <div class="row">
                <div class="title-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">Meet our agent</span>
                            <h2>Get Appointment</h2>
                        </div>
                        <div class="text">Please fill out the booking form and <?php echo $name;?> will contact with you to schedule an appointment. </div>
                    </div>
                </div>

                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Appointment Form -->
                        <div class="appointment-form">
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                                        <input type="text" class="form-control" name="username" id="username" value="<?php echo $user;?>" placeholder="Name" required>
                                        <span class="err"><?php echo $user_err;?></span>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                                        <input type="email" class="form-control" name="email" id="email" value="<?php echo $email;?>" placeholder="Email" required>
                                        <span class="err"><?php echo $email_err;?></span>
                                    </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                                        <input type="text" class="form-control" name="subject" id="subject" value="<?php echo $sub;?>" placeholder="Subject" required>
                                        <span class="err"><?php echo $sub_err;?></span>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" class="form-control" id="message" value="<?php echo $message;?>" placeholder="Message"></textarea>
                                        <span class="err"><?php echo $message_err;?></span>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">Submit Request</button>
                                    </div> 
                                </div>
                            </form>
                        </div>
                        <!--End Appointment Form --> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End FAQ Form Section -->

    <!-- Agents Section -->
    <div class="agents-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">MEET OUR PROFESSIONAL AGENTS</span>
                <h2>MEET OUR AGENTS</h2>
            </div>

            <div class="agents-carousel owl-carousel owl-theme">
                <?php 
                    $sql = "SELECT * FROM `agent`";
                    $query = $conn->query($sql);
                    while($result = $query->fetch_assoc()):
                        $id = $result['Id'];
                        $name = $result['name'];
                        $pix = $result['pix'];
                        $facebook = $result['facebook'];
                        $twitter = $result['twitter'];
                        $google = $result['google-plus'];
                        $pinterest = $result['pinterest'];
                ?>
                    <div class="agent-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="agent-detail.php?id=<?php echo $id;?>"><img src="<?php echo $pix;?>" alt=""></a></figure>
                            </div>
                            <div class="info-box">
                                <h4 class="name"><a href="agent-detail.php?id=<?php echo $id;?>"><?php echo $name;?></a></h4>
                                <span class="designation">Real Estate Agent</span>
                                <ul class="social-links">
                                    <li><a href="<?php echo $facebook;?>"><i class="la la-facebook-f"></i><span>Facebook</span></a></li>
                                    <li><a href="<?php echo $twitter;?>"><i class="la la-twitter"></i><span>Twitter</span></a></li>
                                    <li><a href="<?php echo $google;?>"><i class="la la-google-plus"><span>google+</span></i></a></li>
                                    <li><a href="<?php echo $pinterest;?>"><i class="la la-pinterest"></i><span>Pinterest</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endwhile;?>
            </div>
        </div>
    </div>
    <!-- End Agents Section -->

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

<!-- Color Palate / Color Switcher -->


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