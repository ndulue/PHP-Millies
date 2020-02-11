<?php 

    include 'db_connect.php';
    session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Millies - Real Estate</title>
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
                                        <li class="current" ><a href="#">Home</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="agents.php">Agents</a></li>
                                        <li><a href="properties.php">Properties</a></li>
                                        <li><a href="blog.php">Blog</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="faq.php">FAQ's</a></li>
                                    </ul>              
                                </div>
                            </nav><!-- Main Menu End-->
                                
                            <!-- Main Menu End-->

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
                                <li class="current" ><a href="#">Home</a></li>
                                <li><a href="about.php">About</a></li>
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
        </div><!-- End Sticky Menu -->
    </header>
    <!--End Main Header -->
	
	<!-- Property Search Section Two -->
	<section class="property-search-section-two" style="background-image: url(images/background/4.jpg);">
		<div class="auto-container">
			<div class="content-box">
				<div class="title-box">
					<h2>Find Your Perfect <span>Property</span> For Your Home</h2>
					<h4>We have over million properties for you</h4>
				</div>

				<?php 
				$location_err = $type_err = $status_err = $bedroom_err = $bathroom_err = '';

				if (isset($_POST['search'])) {
					
					if (!empty($_POST['location'])) {
						$location = $_POST['location'];
					} else{
						$location_err = "select your location"
					}
					
					if (!empty($_POST['type'])) {
						$type = $_POST['type'];
					} else{
						$type_err = "select your type"
					}
					
					if (!empty($_POST['status'])) {
						$status = $_POST['status'];
					} else{
						$status_err = "select your status"
					}
					
					if (!empty($_POST['bathroom'])) {
						$bathroom = $_POST['bathroom'];
					} else{
						$bathroom_err = "select your bathroom"
					}
					
					if (!empty($_POST['bedroom'])) {
						$bedroom = $_POST['bedroom'];
					} else{
						$bedroom_err = "select your bedroom"
					}

					$_SESSION['location'] = $location;
					$_SESSION['type'] = $type;
					$_SESSION['status'] = $statues;
					$_SESSION['bathroom'] = $bathroom;
					$_SESSION['bedroom'] = $bedroom;

					header('location:search.php')

				}

				?>

				 <div class="property-search-form style-two">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                        <div class="row no-gutters">
                            <!-- Form Group -->
                            <div class="form-group col-lg-2 col-md-6 col-sm-12">
                                <select name="location" class="custom-select-box">
                                    <option value="">Location</option>
                                    <option value="lagos">Lagos</option>
                                    <option value="kano">Kano</option>
                                    <option value="abuja">Abuja</option>
                                    <option value="Anambra">Anambra</option>
                                    <option value="rivers">Rivers</option>
                                    <option value="delta">Delta</option>
                                </select>
                                <?php echo $location_err;?>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-2 col-md-6 col-sm-12">
                                <select name="type" class="custom-select-box">
                                    <option value="">Property Type</option>
                                    <option value="residental">Residential</option>
                                    <option value="commercial">Commercial</option>
                                    <option value="industrial">Industrial</option>
                                    <option value="apartment">Apartments</option>
                                </select>
                                <?php echo $type_err;?>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-2 col-md-6 col-sm-12">
                                <select name='status' class="custom-select-box">
                                    <option value="">Property Status</option>
                                    <option value="rent">For Rent</option>
                                    <option value="sale">For Sale</option>
                                </select>
                                <?php echo $status_err;?>
                            </div>


                            <!-- Form Group -->
                            <div class="form-group col-lg-2 col-md-6 col-sm-12">
                                <select id="bedroom" name="bedroom" class="custom-select-box">
                                    <option value="">Any Bedrooms</option>
                                    <option value="1">01 Bedroom</option>
                                    <option value="2">02 Bedrooms</option>
                                    <option value="3">03 Bedrooms</option>
                                    <option value="4">04 Bedrooms</option>
                                    <option value="5">05 Bedrooms</option>
                                </select>
                                <?php echo $bedroom_err;?>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-2 col-md-6 col-sm-12">
                                <select id="bathroom" name="bathroom" class="custom-select-box">
                                    <option value="">Any Bathrooms</option>
                                    <option value="1">01 Bathroom</option>
                                    <option value="2">02 Bathrooms</option>
                                    <option value="3">03 Bathrooms</option>
                                    <option value="4">04 Bathrooms</option>
                                    <option value="5">05 Bathrooms</option>
                                </select>
                                <?php echo $bathroom_err;?>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-2 col-md-6 col-sm-12">
                                <button type="submit" name="search" class="theme-btn btn-style-one">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
			</div>
		</div>
	</section>
	<!--End Property Search Section Two -->    

    <!-- Property Section Two -->
    <section class="property-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">FIND YOUR HOUSE IN YOUR CITY</span>
                <h2>RECENT PROPERTIES</h2>
            </div>

            <div class="row">
                <!-- Property Block -->
                <?php 
                    $sql = "SELECT * FROM `property` ORDER BY rand() LIMIT 3";
                    $result = $conn->query($sql);
                    while($prop = $result->fetch_assoc()):
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
                                <figure class="image"><img src="<?php echo $image2;?>" alt="" height="350" width="300" class="img-responsive"></figure>
                                <figure class="image"><img src="<?php echo $image3;?>" alt="" height="350" width="300" class="img-responsive"></figure>
                                <figure class="image"><img src="<?php echo $image4;?>" alt="" height="350" width="300" class="img-responsive"></figure>
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

            <div class="load-more-btn text-center">
                <a href="#" class="theme-btn btn-style-two">Load More</a>
            </div>
        </div>
    </section>
    <!--End Property Section Two -->

    <!--Popular Places Section-->
    <section class="popular-places-section-two" style="background-image: url(images/background/7.jpg);">
        <div class="auto-container">
            <div class="sec-title light">
                <span class="title">FIND YOUR DREAM HOUSE IN YOUR CITY</span>
                <h2>MOST POPULAR PLACES</h2>
            </div>
        </div>

        <div class="popular-places-carousel owl-carousel owl-theme">
            <?php 

                $Aquery = "SELECT * FROM property WHERE type = 'Apartment'";
                $Asql = $conn->query($Aquery);
                $Arow = $Asql->num_rows;

                $Rquery = "SELECT * FROM property WHERE type = 'Restaurant'";
                $Rsql = $conn->query($Rquery);
                $Rrow = $Rsql->num_rows;

                $Equery = "SELECT * FROM property WHERE type = 'Estate'";
                $Esql = $conn->query($Equery);
                $Erow = $Esql->num_rows;

                $Vquery = "SELECT * FROM property WHERE type = 'Villa'";
                $Vsql = $conn->query($Vquery);
                $Vrow = $Vsql->num_rows;
            ?>

            <!-- Popular item two -->
            <div class="popular-item-two">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/2-2.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <h3 class="place"><a href="properties.php">Port harcourt</a></h3>
                            <div class="view-all"><a href="properties.php">View All</a></div>
                        </div>
                    </div>
                    <div class="info-box">
                        <h4 class="category"><a href="properties.php">Luxury Apartment</a></h4>
                        <span class="properties"><?php echo $Arow;?> Properties</span>
                    </div>
                </div>
            </div>

            <!-- Popular item two -->
            <div class="popular-item-two">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/2-3.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <h3 class="place"><a href="properties.php">Delta</a></h3>
                            <div class="view-all"><a href="properties.php">View All</a></div>
                        </div>
                    </div>
                    <div class="info-box">
                        <h4 class="category"><a href="properties.php">Great Restaurant</a></h4>
                        <span class="properties"><?php echo $Rrow;?> Properties</span>
                    </div>
                </div>
            </div>

            <!-- Popular item two -->
            <div class="popular-item-two">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/2-4.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <h3 class="place"><a href="properties.php">Lagos</a></h3>
                            <div class="view-all"><a href="properties.php">View All</a></div>
                        </div>
                    </div>
                    <div class="info-box">
                        <h4 class="category"><a href="properties.php">Demanding Estate</a></h4>
                        <span class="properties"><?php echo $Erow;?> Properties</span>
                    </div>
                </div>
            </div>

            <!-- Popular item two -->
            <div class="popular-item-two">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/2-5.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <h3 class="place"><a href="properties.php">Abuja</a></h3>
                            <div class="view-all"><a href="properties.php">View All</a></div>
                        </div>
                    </div>
                    <div class="info-box">
                        <h4 class="category"><a href="properties.php">Beautiful Villa</a></h4>
                        <span class="properties"><?php echo $Vrow;?> Properties</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Portfolio Section-->

    <!-- Fun Fact -->
    <section class="about-us" style="background-image: url(images/background/1.jpg);">
        <div class="auto-container">
            <div class="row">
                <!-- Info Column -->
                <div class="info-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title light">
                            <span class="title">THE BEST PLACE TO FIND THE HOUSE YOU WANT</span>
                            <h2>WELL TO WILLIES REAL ESTATE</h2>
                        </div>

                        <div class="text"><strong>WILLIES REAL ESTATE</strong> is the best place for elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minimam, quis nostrud exercitation oris nisi ut aliquip ex ea. </div>

                        <div class="row features">
                            <!-- Feature Block -->
                            <?php 
                                $sql = "SELECT * FROM `feature`";
                                $query = $conn->query($sql);
                                while($result = $query->fetch_assoc()):
                                    $title = $result['title'];
                                    $icon = $result['icon'];
                                    $desc = $result['description'];
                            ?>
                                <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <span class="<?php echo $icon;?>"></span>
                                        <h4><a href="about.php"><?php echo $title;?></a></h4>
                                        <div class="text"><?php echo $desc;?></div>
                                    </div>
                                </div>
                            <?php endwhile;?>
                        </div>
                    </div>
                </div>

                <!-- Video Column -->
                <div class="video-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="video-box">
                            <figure class="image"><img src="images/resource/image-2.jpg" alt=""></figure>
                            <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-now" data-fancybox="gallery" data-caption=""><i class="icon la la-play" aria-hidden="true"></i><span class="ripple"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fun Fact -->

    <!-- News Section -->
    <div class="agents-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="title">MEET OUR PROFESSIONAL AGENTS</span>
                <h2>MEET OUR AGENTS</h2>
            </div>

            <div class="agents-carousel owl-carousel owl-theme">
                <!-- Agent Block -->
                <?php 
                    $sql = "SELECT * FROM `agent`";
                    $query = $conn->query($sql);
                    while($result = $query->fetch_assoc()):
                        $id = $result['Id'];
                        $name = $result['name'];
                        $pix = $result['pix'];
                ?>
                <div class="agent-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="agent-detail.php?id=<?php echo $id;?>"><img src="<?php echo $pix?>" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="agent-detail.php"><?php echo $name;?></a></h4>
                            <span class="designation">Real Estate Agent</span>
                            <ul class="social-links">
                                <li><a href="#"><i class="la la-facebook-f"></i><span>Facebook</span></a></li>
                                <li><a href="#"><i class="la la-twitter"></i><span>Twitter</span></a></li>
                                <li><a href="#"><i class="la la-google-plus"><span>google+</span></i></a></li>
                                <li><a href="#"><i class="la la-dribbble"></i><span>Dribbble</span></a></li>
                                <li><a href="#"><i class="la la-pinterest"></i><span>Pinterest</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
            </div>
        </div>
    </div>
    <!--End News Section -->

    <!-- Testimonial Section -->
    <section class="testimonial-section-two" style="background-image: url(images/background/11.jpg);">
        <div class="auto-container">
            <div class="row">
                <!-- Testimonial Column -->
                <div class="testimonial-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">OUR WEET TESTIMONIAL</span>
                            <h2>WHAT PEOPLE SAID</h2>
                        </div>
                        
                        <div class="testimonial-carousel-two owl-carousel owl-theme">

                            <?php 
                                $sql = "SELECT * FROM `feedback` ORDER BY rand()";
                                $query = $conn->query($sql);
                                while($result = $query->fetch_assoc()):
                                    $id = $result['id'];
                                    $name = $result['name'];
                                    $position = $result['position'];
                                    $message = $result['message'];
                            ?>

                            <!-- Testimonial Block Two -->
                            <div class="testimonial-block-two">
                                <div class="inner-box">
                                    <div class="text"><?php echo $message;?></div>
                                    <div class="info-box">
                                        <div class="thumb"><h4 class="name"><?php echo $name;?></h4>                                        
                                            <span class="designation"><?php echo $position?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php endwhile;?>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image"><img src="images/resource/image-7.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonial Section -->

    <!--Clients Section-->
    <section class="clients-section style-two">
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

    <!-- Contact Section -->
    <section class="contact-section">
    	<div class="outer-container clearfix">

    		<!-- Form Column -->
    		<div class="form-column">
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
            <div class="info-column">
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

    		<!-- Map Column -->
    		<div class="map-column">
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
		    </div>


    	</div>
    </section>
    <!--End Contact Section -->

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
<script src="js/appear.js"></script>
<script src="js/validate.js"></script>
<script src="js/script.js"></script>
<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjirg3UoMD5oUiFuZt3P9sErZD-2Rxc68"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
<!-- Color Setting -->
<script src="js/color-settings.js"></script>
</body>

</html>