<?php 

    include 'db_connect.php';

    if (isset($_GET['start'])) {
        $start = $_GET['start'];
    }else{
        $start = 1;
    }

    $after = 6;

    $continue = $start > 1 ? ($start * $after) - ($after) : 0;

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
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="agents.php">Agents</a></li>
                                        <li class="current" ><a href="properties.php">Properties</a></li>
                                        <li><a href="blog.php">Blog</a></li>
                                        <li><a href="contact.php">Contact</a></li>
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
        </div><!-- End Sticky Menu -->
    </header>
    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/16.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Properties</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>Properties</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Property Filter Section -->
    <section class="property-filter-section">
        <div class="auto-container">
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                <div class="upper-box clearfix">
                    <div class="sec-title">
                        <span class="title">FIND YOUR HOUSE IN YOUR CITY</span>
                        <h2>PROPERTY TYPES</h2>
                    </div>

                    <!--Filter-->
                    <div class="filters">
                        <ul class="filter-tabs filter-btns clearfix">
                            <a href=""><li class="active filter" data-role="button" data-filter="all">All</li></a> &nbsp; &nbsp;
                            <a href=""><li class="filter" data-role="button" data-filter=".apprtment">Apprtment</li></a>  &nbsp; &nbsp;
                            <a href=""><li class="filter" data-role="button" data-filter=".house">House</li></a>  &nbsp; &nbsp;
                            <a href=""><li class="filter" data-role="button" data-filter=".villa">Villa</li></a>  &nbsp; &nbsp;
                            <a href=""><li class="filter" data-role="button" data-filter=".restaurent">Restaurent</li></a>
                        </ul>                                    
                    </div>
                </div>

                <div class="filter-list row">
                    <!-- Property Block -->
                    <?php 

                        $sql = "SELECT * FROM `property` ORDER BY rand() LIMIT $continue,$after";
                        $query = $conn->query($sql);
                        $num = $query->num_rows;
                        while ($prop = $query->fetch_assoc()):

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
                        <div class="property-block all mix house villa col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="<?php echo $image1;?>" alt=""></figure>
                                    <span class="for">FOR SALE</span>
                                    <ul class="info clearfix">
                                        <li><i class="la la-calendar-minus-o"></i><?php echo $date;?></li>
                                    </ul>
                                </div>
                                <div class="lower-content">
                                    <ul class="tags">
                                        <li><a href="property-detail.php?id=<?php echo $id;?>"><?php echo $type;?></a></li>
                                    </ul>
                                    <?php 
                                        $isql = "SELECT * FROM agent WHERE name = '$agent'";
                                        $iquery = $conn->query($isql);
                                        while ($result = $iquery->fetch_assoc()):
                                            $iimage = $result['pix'];
                                        
                                    ?>
                                        <div class="thumb"><img src="<?php echo $iimage;?>" alt=""></div>
                                    <?php endwhile;?>
                                    <h3><a href="property-detail.php?id=<?php echo $id;?>"><?php echo $title;?></a></h3>
                                    <div class="lucation"><i class="la la-map-marker"></i><?php echo $address;?></div>
                                    <ul class="property-info clearfix">
                                        <li><i class="flaticon-dimension"></i> <?php echo $size;?> Sq-Ft</li>
                                        <li><i class="flaticon-bed"></i> <?php echo $bedroom;?> Bedrooms</li>
                                        <li><i class="flaticon-car"></i> <?php echo $garage;?> Garage</li>
                                        <li><i class="flaticon-bathtub"></i> <?php echo $bathroom;?> Bathroom</li>
                                    </ul>
                                    <div class="property-price clearfix">
                                        <div class="read-more"><a href="property-detail.php?id=<?php echo $id;?>" class="theme-btn">More Detail</a></div>
                                        <div class="price"><?php echo $price;?></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endwhile;?>

                </div>
            </div>

            

            <!--Post Share Options-->
            <div class="styled-pagination">
                <ul class="clearfix">
                    
                    <?php 
                        $total_page = ceil($num/$after);

                        if ($start > 1) {
                            echo '<li class="prev"><a href="properties.php?start'.($start-1).'><span>Prev</span></a></li>';
                        }

                        for ($i=1; $i < $total_page; $i++){
                            echo '<li class="active"><a href="properties.php?start='.$i.'"><span>'.$i.'</span></a></li>';
                        } 
                        if ($i > $start) {
                            echo '<li class="next"><a href="properties.php?start'.($start+1).'><span>Next</span></a></li>';
                        }

                    ?>
                </ul>
            </div>
        </div>
    </section>
    <!--End Property Filter Section -->


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