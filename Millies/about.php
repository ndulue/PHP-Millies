<?php

    include 'db_connect.php';

    session_start();


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
                                        <li><a href="#">Home</a></li>
                                        <li class="current" ><a href="about.php">About</a></li>
                                        <li><a href="agents.php">Agents</a></li>
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
                                <li><a href="#">Home</a></li>
                                <li class="current" ><a href="about.php">About</a></li>
                                <li><a href="agents.php">Agents</a></li>
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
        <div class="auto-container"><br>
            <div class="inner-container clearfix">
                <h1>About Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- About Us -->
    <section class="about-us style-two">
        <div class="auto-container">
            <div class="row">
                <!-- Info Column -->
                <div class="info-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">THE BEST PLACE TO FIND THE HOUSE YOU WANT</span>
                            <h2>WELL TO WILLIES REAL ESTATE</h2>
                        </div>

                        <div class="text"><strong>WILLIES REAL ESTATE</strong> is the best place for elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minimam, quis nostrud exercitation oris nisi ut aliquip ex ea. </div>

                        <div class="row features">
                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-house-1"></span>
                                    <h4><a href="about.php">Buy Property</a></h4>
                                    <div class="text">We have the best properties Sale, Buy, and Rent Dealers.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-rent"></span>
                                    <h4><a href="about.php">REnt Property</a></h4>
                                    <div class="text">We have the best properties Sale, Buy, and Rent Dealers.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-house-5"></span>
                                    <h4><a href="about.php">Real Estate Kit</a></h4>
                                    <div class="text">We have the best properties Sale, Buy, and Rent Dealers.</div>
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <span class="icon flaticon-apartment"></span>
                                    <h4><a href="about.php">Sale Property</a></h4>
                                    <div class="text">We have the best properties Sale, Buy, and Rent Dealers.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video Column -->
                <div class="video-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="video-box">
                            <figure class="image"><img src="images/resource/image-2.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us -->

    <!-- Fun Fact -->
    <section class="fun-facts-section" style="background-image:url(images/background/6.jpg);">
        <div class="auto-container">
            <div class="video-box">
                 <figure class="image"><img src="images/resource/image-5.jpg" alt="">
                    <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="link" data-fancybox="gallery" data-caption=""><span class="icon flaticon-play-button-3"></span></a>
                </figure>
            </div>

            <div class="fun-facts">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="column count-box col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <div class="icon-box"><span class="la la-home"></span></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="300">0 </span>
                            </div>
                            <div class="counter-title">Sold Houses</div>
                        </div>
                    </div>
                    

                    <!--Column-->
                    <div class="column count-box col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <div class="icon-box"><span class="la la-th-list"></span></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="2000" data-stop="470">0 </span>
                            </div>
                            <div class="counter-title">Daily Listings</div>
                        </div>
                    </div>
                    

                    <!--Column-->
                    <div class="column count-box col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <div class="icon-box"><span class="la la-user-secret"></span></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="2000" data-stop="250">0 </span>
                            </div>
                            <div class="counter-title">Expert Agents</div>
                        </div>
                    </div>
                    
                    <!--Column-->
                    <div class="column count-box col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <div class="icon-box"><span class="la la-trophy"></span></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="200">0 </span>
                            </div>
                            <div class="counter-title">Won Awards</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fun Fact -->

    <!-- Services Section -->
    <section class="services-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">we offer the best real estate</span>
                <h2>Property Services</h2>
            </div>

            <div class="row">
                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-buildings"></span></div>
                        <h4><a href="property-detail.php">Houses</a></h4>
                        <div class="text">Nonec pede justo fringilla vel aliquet nec vulputate eget arcu in enim justo rhoncus ut imperdiet venenatis vitae justo.</div>
                        <div class="link-box"><a href="property-detail.php">Read More</a></div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-apartment-1"></span></div>
                        <h4><a href="property-detail.php">apartments</a></h4>
                        <div class="text">Nonec pede justo fringilla vel aliquet nec vulputate eget arcu in enim justo rhoncus ut imperdiet venenatis vitae justo.</div>
                        <div class="link-box"><a href="property-detail.php">Read More</a></div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-urban"></span></div>
                        <h4><a href="property-detail.php">Commercial</a></h4>
                        <div class="text">Nonec pede justo fringilla vel aliquet nec vulputate eget arcu in enim justo rhoncus ut imperdiet venenatis vitae justo.</div>
                        <div class="link-box"><a href="property-detail.php">Read More</a></div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-house-1"></span></div>
                        <h4><a href="property-detail.php">Renting & Selling</a></h4>
                        <div class="text">Nonec pede justo fringilla vel aliquet nec vulputate eget arcu in enim justo rhoncus ut imperdiet venenatis vitae justo.</div>
                        <div class="link-box"><a href="property-detail.php">Read More</a></div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-settings-2"></span></div>
                        <h4><a href="property-detail.php">Management</a></h4>
                        <div class="text">Nonec pede justo fringilla vel aliquet nec vulputate eget arcu in enim justo rhoncus ut imperdiet venenatis vitae justo.</div>
                        <div class="link-box"><a href="property-detail.php">Read More</a></div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-file-1"></span></div>
                        <h4><a href="property-detail.php">Property Listing</a></h4>
                        <div class="text">Nonec pede justo fringilla vel aliquet nec vulputate eget arcu in enim justo rhoncus ut imperdiet venenatis vitae justo.</div>
                        <div class="link-box"><a href="property-detail.php">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section -->

     <!-- Process Section -->
    <section class="process-section" style="background-image: url(images/background/9.jpg);">
        <div class="auto-container">
            <div class="sec-title light">
                <span class="title">FIND YOUR HOUSE IN YOUR CITY</span>
                <h2>WORK PROCESS</h2>
            </div>

            <div class="row">
                <!-- Process Block -->
                <div class="process-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="la la-user-secret"></span></div>
                        <h4><a href="about.php">Meet Our Agent</a></h4>
                        <div class="text">You Meet our agent and decuse your property Demand</div>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="la la-building-o"></span></div>
                        <h4><a href="about.php">Choose Location</a></h4>
                        <div class="text">You Meet our agent and decuse your property Demand</div>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="la la-map-marker"></span></div>
                        <h4><a href="about.php">Select Your Property</a></h4>
                        <div class="text">You Meet our agent and decuse your property Demand</div>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="la la-file-text"></span></div>
                        <h4><a href="about.php">Confirmation</a></h4>
                        <div class="text">You Meet our agent and decuse your property Demand</div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    <!--End Process Section -->

    <!-- Why Choose Us -->
    <section class="why-choose-us">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">FIND YOUR HOUSE IN YOUR CITY</span>
                <h2>WHY CHOOSE US</h2>
            </div>

            <div class="row">
                <!-- Features BLock -->
                <div class="feature-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-sketching"></span></div>
                        <h4><a href="about.php">Architecture Experience</a></h4>
                        <div class="text">The heart and soul of what we provide. Our comprehensive architectural services include conceptual and schematic design</div>
                    </div>
                </div>

                <!-- Features BLock -->
                <div class="feature-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-worker"></span></div>
                        <h4><a href="about.php">Refinance Calculator</a></h4>
                        <div class="text">The heart and soul of what we provide. Our comprehensive architectural services include conceptual and schematic design</div>
                    </div>
                </div>

                <!-- Features BLock -->
                <div class="feature-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-mixer-with-wheels"></span></div>
                        <h4><a href="about.php">House / Condo Contruction</a></h4>
                        <div class="text">The heart and soul of what we provide. Our comprehensive architectural services include conceptual and schematic design</div>
                    </div>
                </div>

                <!-- Features BLock -->
                <div class="feature-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-award"></span></div>
                        <h4><a href="about.php">Fince Winner</a></h4>
                        <div class="text">The heart and soul of what we provide. Our comprehensive architectural services include conceptual and schematic design</div>
                    </div>
                </div>

                <!-- Features BLock -->
                <div class="feature-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-trophy"></span></div>
                        <h4><a href="about.php">Best House Saller Winner</a></h4>
                        <div class="text">The heart and soul of what we provide. Our comprehensive architectural services include conceptual and schematic design</div>
                    </div>
                </div>

                <!-- Features BLock -->
                <div class="feature-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-medal"></span></div>
                        <h4><a href="about.php">Best Support Winner</a></h4>
                        <div class="text">The heart and soul of what we provide. Our comprehensive architectural services include conceptual and schematic design</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Choose Us -->

    <!-- App Section -->
    <section class="app-section" style="background-image: url(images/background/10.jpg);">
        <div class="auto-container">
            <div class="row">
                <!-- Image Box -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image"><img src="images/resource/image-6.png" alt=""></figure>
                        </div>
                    </div>
                </div>

                <!-- Content Box -->
                <div class="content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2>Find Your Property By Your Finger Tip</h2>
                        <div class="text">Temporibus autem quibusdam et aut officiis debitis is aut rerum necessitatibuse in saepes eveniet ut etes seo lage voluptates repudiandae sint et molestiae non mes for Creating futures through building pres Creating preservation etes from quibusdam barcelona.</div>
                        <div class="link-box">
                            <a href="#"><img src="images/resource/app-store.png" alt=""></a>
                            <a href="#"><img src="images/resource/google-play.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End App Section -->

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
<script src="js/isotope.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
<!-- Color Setting -->
</body>


</html>