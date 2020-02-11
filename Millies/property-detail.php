<?php 

    include 'db_connect.php';
    session_start();


    if (!empty($_GET["id"])) {
        $id = $_GET['id'];
        if (is_numeric($id)) {
            $sql = "SELECT * FROM `property` WHERE id = '$id'";
            $query = $conn->query($sql);
            while ($prop = $query->fetch_assoc()) {
                $id = $prop['Id'];
                $date = $prop['date'];
                $title = $prop['title'];
                $agent = $prop['agent'];
                $state = $prop['state'];
                $sell_type = $prop['sell_type'];
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
                $AirCondition = $prop['AirCondition'];
                $AlarmSystem = $prop['AlarmSystem'];
                $Bedding = $prop['Bedding'];
                $DishWasher = $prop['DishWasher'];
                $Elevator = $prop['Elevator'];
                $Garden = $prop['Garden'];
                $Gym = $prop['Gym'];
                $HeatingSystem = $prop['HeatingSystem'];
                $HotTub = $prop['HotTub'];
                $Microwave = $prop['Microwave'];
                $Oven = $prop['Oven'];
                $Parking = $prop['Parking'];
                $Pool = $prop['Pool'];
                $Click = $prop['click'];
            }
        } else{
            header("location:property.php");
        }
    } else {
        header("location:property.php");
    }
    $Usql = "UPDATE `property` SET `click` = '$Click' + 1";
    $Uquery = $conn->query($Usql);

    $Aquery = "SELECT * FROM property WHERE type = 'Apartment'";
    $Asql = $conn->query($Aquery);
    $Arow = $Asql->num_rows;

    $Rquery = "SELECT * FROM property WHERE type = 'Restaurant'";
    $Rsql = $conn->query($Rquery);
    $Rrow = $Rsql->num_rows;

    $Equery = "SELECT * FROM property WHERE type = 'Estate'";
    $Esql = $conn->query($Equery);
    $Erow = $Esql->num_rows;

    $Oquery = "SELECT * FROM property WHERE type = 'Office'";
    $Osql = $conn->query($Oquery);
    $Orow = $Osql->num_rows;

    $Vquery = "SELECT * FROM property WHERE type = 'Villa'";
    $Vsql = $conn->query($Vquery);
    $Vrow = $Vsql->num_rows;


    $user = $email = $number = $message = $user_name = $email_address = $Pnumber = $user_message = "";
    $user_err = $email_err = $number_err = $message_err = $user_name_err = $email_address_err = $Pnumber_err = $user_message_err = "";

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

        $Rsql = "INSERT INTO `review` (`id`,`post_id`,`name`,`email`,`message`,`rating`,`date`) VALUE '', '$id', '$user', '$email', '$message', '', NOW()";
        $Rquery = $conn->query($Rsql);

    }

    if (isset($_POST['submit'])) {
        
        if (!empty($_POST['user_name'])) {
            $user_name = test_input($_POST['user_name']);
            if (!preg_match('/^[a-zA-Z]*$/', $user_name)) {
                $user_name_err = "Only alphabet and whitespaces are allowed";
                }
            } else{                                    
            $user_name_err = "Fill in your name";
        }

        if (!empty($_POST['email_address'])) {
            $email_address = test_input($_POST['email_address']);
            if (!filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
                $email_address_err = "Enter a valid email address";
                } 
            } else{                               
            $email_address_err = "Fill in your email address";
        }
        

        if (!empty($_POST['Pnumber'])) {
            $Pnumber = test_input($_POST['Pnumber']);
            } else{                               
            $Pnumber_err = "Fill in your Phone number";
        }

        if (!empty($_POST['user_message'])) {
            $user_message = test_input($_POST['user_message']);
            if (!preg_match('/^[a-zA-Z]*$/', $user_message)) {
                $user_message_err = "Only alphabet and whitespaces are allowed";
                }
            } else{                               
            $user_message_err = "Fill in your message";
        }

        $Asql = "INSERT INTO `appointment` (`id`,`name`,`email`,`phone`,`message`,`agent`) VALUE '', '$user_name', '$email_address', '$Pnumber' '$user_message', '$agent'";
        $Aquery = $conn->query($Asql);

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
                                        <li><a href="#">Home</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="agents.php">Agents</a></li>
                                        <li class="current" ><a href="properties.php">Properties</a></li>
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
                                <li class="current" ><a href="properties.php">Properties</a></li>
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

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/16.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Property Detail</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>Property Detail</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="upper-info-box">
                <div class="row">
                    <div class="about-property col-lg-8 col-md-12 col-sm-12">
                        <h2><?php echo $title;?></h2>
                        <div class="location"><i class="la la-map-marker"></i> <?php echo $address;?>, <?php echo $state;?></div>
                        <ul class="property-info clearfix">
                            <li><i class="flaticon-dimension"></i> <?php echo $size;?> Sq-Ft</li>
                            <li><i class="flaticon-bed"></i> <?php echo $bedroom;?> Bedrooms</li>
                            <li><i class="flaticon-car"></i> <?php echo $garage;?> Garage</li>
                            <li><i class="flaticon-bathtub"></i> <?php echo $bedroom;?> Bathroom</li>
                        </ul>
                    </div>
                    <div class="price-column col-lg-4 col-md-12 col-sm-12">
                        <span class="title">Start From</span>
                        <div class="price">₦ <?php echo $price;?></div>
                        <span class="status">For <?php echo $sell_type;?></span>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="property-detail">
                        <div class="upper-box">
                            <div class="carousel-outer">
                                <ul class="image-carousel owl-carousel owl-theme">
                                    <li><a href="<?php echo $image1;?>" class="lightbox-image" title="Image Caption Here"><img src="<?php echo $image1;?>" alt=""></a></li>

                                    <li><a href="<?php echo $image2;?>" class="lightbox-image" title="Image Caption Here"><img src="<?php echo $image2;?>" alt=""></a></li>

                                    <li><a href="<?php echo $image3;?>" class="lightbox-image" title="Image Caption Here"><img src="<?php echo $image3;?>" alt=""></a></li>

                                    <li><a href="<?php echo $image4;?>" class="lightbox-image" title="Image Caption Here"><img src="<?php echo $image4;?>" alt=""></a></li>
                                </ul>
                                
                                <ul class="thumbs-carousel owl-carousel owl-theme">
                                    <li><img src="<?php echo $image1;?>" alt=""></li>
                                    <li><img src="<?php echo $image2;?>" alt=""></li>
                                    <li><img src="<?php echo $image3;?>" alt=""></li>
                                    <li><img src="<?php echo $image4;?>" alt=""></li>
                                </ul>
                            </div>
                        </div>

                        <div class="lower-content">
                            <h4>Descripation</h4>
                            <p><?php echo $description;?></p>
                        </div>

                        <!-- Property Features -->
                        <div class="property-features">
                            <h4>Essential Information</h4>
                            <ul class="list-style-one">
                                <li>Price: $<?php echo $price;?></li>
                                <li>For: <?php echo $sell_type;?></li>
                                <li>Property Types: <?php echo $type;?></li>
                                <li>Area: <?php echo $size;?>SQFT</li>
                                <li>State: <?php echo $state;?> </li>
                                <li>Address: <?php echo $address;?></li>
                                <li>Garages: <?php echo $garage;?> </li>
                                <li>Bedrooms: <?php echo $bedroom;?> </li>
                                <li>Bathrooms: <?php echo $bathroom;?></li>
                            </ul>
                        </div>

                        <!-- Property Features -->
                        <div class="property-features">
                            <h4>Home Amenities</h4>
                            <ul class="list-style-one">
                                <?php echo $AirCondition > 0 ? "<li>Air Condition</li>" : "";?>
                                <?php echo $AlarmSystem > 0 ? "<li>HeatingSystem</li>" : "";?>
                                <?php echo $Bedding > 0 ? "<li>Bedding</li>" : "";?>
                                <?php echo $DishWasher > 0 ? "<li>Dish Washer</li>" : "";?>
                                <?php echo $Elevator > 0 ? "<li>Elevator</li>" : "";?>
                                <?php echo $Garden > 0 ? "<li>Garden</li>" : "";?>
                                <?php echo $Gym > 0 ? "<li>Gym</li>" : "";?>
                                <?php echo $HeatingSystem > 0 ? "<li>Heating System</li>" : "";?>
                                <?php echo $HotTub > 0 ? "<li>Hot Tub</li>" : "";?>
                                <?php echo $Microwave > 0 ? "<li>Microwave</li>" : "";?>
                                <?php echo $Oven > 0 ? "<li>Oven</li>" : "";?>
                                <?php echo $Parking > 0 ? "<li>Parking</li>" : "";?>
                                <?php echo $Pool > 0 ? "<li>Pool</li>" : "";?>
                            </ul>
                        </div>

                        <!-- Review Box -->
                        <div class="review-area">
                            <!--Reviews Container-->
                            <div class="reviews-container">
                                <h4>Reviews For Costomer</h4>
                                <!--Reviews-->
                                <?php

                                    $sql = "SELECT * FROM review WHERE `post_id` = '$id'";
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

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar default-sidebar">


                        <?php 
                            $sql = "SELECT * FROM `agent` WHERE name = '$agent'";
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
                        ?>
                        <!-- Agent Widget -->
                        <div class="sidebar-widget agent-widget">
                            <div class="sidebar-title"><h2>About Agent</h2></div>
                            <div class="widget-content">
                                <div class="image-box">
                                    <figure class="image"><img src="<?php echo $pix;?>" alt=""></figure>
                                </div>
                                <div class="info-box">
                                    <h4 class="name"><?php echo $name;?></h4>
                                    <span class="designation">Real Estate Agent</span>
                                    <ul class="contact-info">
                                        <li><strong>Phone:</strong> <?php echo $phone;?></li>
                                        <li><strong>Email:</strong> <?php echo $email;?></li>
                                        <li><strong>Address:</strong> 8542 Satelite town Lagos</li>
                                    </ul>
                                    <div class="follow-us">
                                        <ul class="social-links">
                                            <li class="link">Follow Us:</li>
                                            <li><a href="<?php echo $facebook;?>"><i class="la la-facebook"></i></a></li>
                                            <li><a href="<?php echo $twitter;?>"><i class="la la-twitter"></i></a></li>
                                            <li><a href="<?php echo $google;?>"><i class="la la-google-plus"></i></a></li>
                                            <li><a href="<?php echo $pinterest;?>"><i class="la la-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-box">
                                        <a href="agent.php?id='<?php echo $id;?>'" class="theme-btn btn-style-one">VIEW PROFILE</a>
                                        <a href="#" class="theme-btn btn-style-six">MY PROPERTIES</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Agent Form Widget -->
                        <div class="sidebar-widget agent-from-widget">
                            <div class="sidebar-title"><h2>Contact Agent</h2></div>
                            <div class="widget-content">
                                <div class="agent-form">
                                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                                        <div class="form-group">
                                            <input type="text" name="user_name" placeholder="Your Name" value="<?php echo $user_name;?>" id="user_name" required>
                                            <span class="err"><?php echo $user_name_err;?></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="email_address" placeholder="Email Address" value="<?php echo $email_address;?>" id="email_address" required>
                                            <span class="err"><?php echo $email_address_err;?></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="Pnumber" placeholder="Phone No." id="Pnumber" value="<?php echo $Pnumber;?>" required>
                                            <span class="err"><?php echo $Pnumber_err;?></span>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="user_message" id="Message" value="<?php echo $user_message;?>" placeholder="Message"></textarea>
                                            <span class="err"><?php echo $user_message_err;?></span>
                                        </div>
                                        <div class="form-group">
                                            <input class="theme-btn btn-style-one" value="Submit now" type="submit" name="submit">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Categories -->
                        <div class="sidebar-widget categories">
                            <div class="sidebar-title"><h2>Category Properties</h2></div>
                            <ul class="cat-list">
                                <li><a href="#">Apartments <span><?php echo $Arow;?></span></a></li>
                                <li><a href="#">Villas <span><?php echo $Vrow;?></span></a></li>
                                <li><a href="#">Offices <span><?php echo $Orow;?></span></a></li>
                                <li><a href="#">Residentals <span><?php echo $Rrow;?></span></a></li>
                                <li><a href="#">Estate <span><?php echo $Erow;?></span></a></li>
                            </ul>
                        </div>

                        <!-- Recent Properties -->
                        <div class="sidebar-widget recent-properties">
                            <div class="sidebar-title"><h2>Recent Properties</h2></div>
                            <div class="widget-content">
                                <?php

                                     $sql = "SELECT * FROM `property` WHERE id != '$id' LIMIT 4";
                                        $query = $conn->query($sql);
                                        while ($prop = $query->fetch_assoc()):
                                            $id = $prop['Id'];
                                            $date = $prop['date'];
                                            $title = $prop['title'];
                                            $agent = $prop['agent'];
                                            $state = $prop['state'];
                                            $sell_type = $prop['sell_type'];
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
                                ?>
                                <!-- Post -->
                                <article class="post">
                                    <div class="post-thumb">
                                        <a href="property-detail.php?id=<?php echo $id;?>">
                                            <img src="<?php echo $image1;?>" alt="" height="2">
                                            <span class="status"><?php echo $sell_type;?></span>
                                        </a>
                                    </div>
                                    <span class="location"><?php echo $address;?>, <?php echo $state;?></span>
                                    <h3><a href="property-detail.php?id=<?php echo $id;?>">Laxury Balles Villa</a></h3>
                                    <div class="price">₦ <?php echo $price;?></div>
                                </article>
                                <?php endwhile;?>
                            </div>
                        </div>

                                   
                    </aside>
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