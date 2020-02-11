<?php 
	
	include '../db_connect.php';
//	session_start();
//	if (isset($_SESSION['id']) || isset($_SESSION['email'])) {
//		$id = $_SESSION['id'];
//		$email = $_SESSION['email'];
//	}else{
//		header('location:../index.php');
//	}

	$sql = 'SELECT * FROM `agent` WHERE Id = 1';
	$query = $conn->query($sql);
	while ($result = $query->fetch_assoc()) {
		$name = $result['name'];
		$pix = $result['pix'];
		$bio = $result['bio'];
		$phone_number = $result['phone_number'];
		$email = $result['email'];
		$facebook = $result['facebook'];
		$twitter = $result['twitter'];
		$google = $result['google-plus'];
		$pinterest = $result['pinterest'];
		$password = $result['password'];
	};

	$Psql = 'SELECT * FROM `property` where `agent_id` = 1';
	$Pquery = $conn->query($Psql);
	$Prows = $Pquery->num_rows; 
	

	$Rsql = 'SELECT * FROM `review` where `post_id` = 1';
	$Rquery = $conn->query($Rsql);
	$Rrows = $Rquery->num_rows; 
	
	$Csql = 'SELECT COUNT(*)  AS click FROM `property` where `agent_id` = 1';
	$Cquery = $conn->query($Csql);
	$Cresult = $Cquery->fetch_assoc();
	$click = $Cresult['click'];
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from expert-themes.com/html/willies/admin/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Dec 2018 11:39:08 GMT -->
<head>
<meta charset="utf-8">
<title>Millies - Real Estate | Dashboard</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

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

    <!-- Header Span -->
    <span class="header-span"></span>

     <header class="main-header">
        <div class="main-box clearfix">
        	<!-- Logo Box -->
            <div class="logo-box">
                <div class="logo"><a href="../index-2.html"><img src="images/logo-small.png" alt="" title=""></a></div>
            </div>

            <!-- Upper Right-->
            <div class="upper-right">
                <ul class="clearfix">
                    <li class="dropdown option-box">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="<?php echo '../'.$pix;?>" alt="avatar" class="thumb">My Account</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="dashboard.php">Dashboard</a>
                            <a class="dropdown-item" href="messages.php">Messages</a>
                            <a class="dropdown-item" href="my-profile.php">My profile</a>
                            <a class="dropdown-item" href="../index-2.php">Log out</a>
                        </div>
                    </li>
                    <li class="submit-property">
                    	<a href="submit-property.php" class="theme-btn btn-style-one">Submit Property <i class="pe-7s-up-arrow"></i></a>
                    </li>
                    <li class="nav-toggler">
                    	<button class="toggler-btn nav-btn"><span class="bar bar-one"></span><span class="bar bar-two"></span><span class="bar bar-three"></span></button>
                    </li>
                </ul>
            </div>
        </div>
        <!--End Header Lower-->
    </header>
    <!--End Main Header -->
    
    <!-- Hidden Bar -->
    <section class="hidden-bar">
        <div class="dashboard-inner">
        	<div class="cross-icon"><span class="pe-7s-close-circle"></span></div>
        	<ul class="navigation">
	            <li><a href="dashboard.php"><i class="pe-7s-culture"></i> Dashboard</a></li>
	            <li><a href="messages.php"><i class="pe-7s-mail"></i> Messages <span class="tag">6</span></a></li>
	            <li class="active"><a href="my-properties.php"><i class="pe-7s-diamond"></i>My Properties</a></li>
	            <li><a href="submit-property.php"><i class="pe-7s-up-arrow"></i>Submit Property</a></li>
	            <li><a href="my-profile.php"><i class="pe-7s-user"></i>My Profile</a></li>
	            <li><a href="../index.php"><i class="pe-7s-back-2"></i>Logout</a></li>
	        </ul>
	    </div>
    </section>
    <!--End Hidden Bar -->

    <div class="dashboard">
	    <div class="container-fluid">
	        <div class="content-area">
	            <div class="dashboard-content">
	                <div class="dashboard-header clearfix">
	                    <div class="row">
	                        <div class="col-md-6 col-sm-12"><h4>Hi , <?php echo $name;?></h4></div>
	                        <div class="col-md-6 col-sm-12">
	                            <div class="breadcrumb-nav">
	                                <ul>
	                                    <li><a href="../index-2.html">Index</a></li>
	                                    <li class="active">Dashboard</li>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                
	                <div class="alert alert-success" role="alert">
	                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	                    <strong>Your listing</strong> YOUR LISTING HAS BEEN APPROVED!
	                </div>

	                <div class="row">
	                    <div class="col-lg-4 col-md-6 col-sm-6">
	                        <div class="ui-item bg-success">
	                            <div class="left">
	                                <h4><?php echo $Prows;?></h4>
	                                <p>Active Listings</p>
	                            </div>
	                            <div class="right">
	                                <i class="la la-map-marker"></i>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-4 col-md-6 col-sm-6">
	                        <div class="ui-item bg-warning">
	                            <div class="left">
	                                <h4><?php echo $click;?></h4>
	                                <p>Listing Views</p>
	                            </div>
	                            <div class="right">
	                                <i class="la la-eye"></i>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-4 col-md-6 col-sm-6">
	                        <div class="ui-item bg-active">
	                            <div class="left">
	                                <h4><?php echo $Rrows;?></h4>
	                                <p>Reviews</p>
	                            </div>
	                            <div class="right">
	                                <i class="la la-comments-o"></i>
	                            </div>
	                        </div>
	                    </div>
	                </div>

	                <div class="row">
	                    <div class="column col-lg-12 col-md-12">
	                    	<div class="comments-tab">
	                    		<h3>Comments</h3>
                                <div class="tabs-box">
                                	<ul class="tab-buttons">
					                    <li data-tab="#pending" class="tab-btn active-btn">Pending</li>
					                    <li data-tab="#approved" class="tab-btn">Approved</li>
					                </ul>

                                    <div class="tabs-content" >
                                    	<!-- Tab Active tab-->
                						<div class="tab active-tab" id="pending">
                                            <div class="comments-area">
				                                <!--comment-->
				                                <article class="message-box">
				                                    <div class="thumb-box">
				                                        <figure class="thumb"><img src="images/resource/review-thumb-1.jpg" alt=""></figure>
				                                        <a href="#" class="reply-btn">Reply Now</a>
				                                    </div>
				                                    <div class="content-box">
				                                        <div class="name">Monija Moro</div>
				                                        <span class="date"><i class="la la-calendar"></i> 8:42 PM 1/28/2017</span>
				                                        <div class="text">Accusantium aut, consequatur, culpa dolorum est facilis illo magnam numquam officia omnis qui recusandae sit, tempora ullam unde velit!</div>
				                                    </div>
				                                </article>

				                                <!--comment-->
				                                <article class="message-box">
				                                    <div class="thumb-box">
				                                        <figure class="thumb"><img src="images/resource/review-thumb-2.jpg" alt=""></figure>
				                                        <a href="#" class="reply-btn">Reply Now</a>
				                                    </div>
				                                    <div class="content-box">
				                                        <div class="name">Mibano Rests</div>
				                                        <span class="date"><i class="la la-calendar"></i> 8:42 PM 1/28/2017</span>
				                                        <div class="text">Accusantium aut, consequatur, culpa dolorum est facilis illo magnam numquam officia omnis qui recusandae sit, tempora ullam unde velit!</div>
				                                    </div>
				                                </article>

				                                <!--comment-->
				                                <article class="message-box">
				                                    <div class="thumb-box">
				                                        <figure class="thumb"><img src="images/resource/review-thumb-3.jpg" alt=""></figure>
				                                        <a href="#" class="reply-btn">Reply Now</a>
				                                    </div>
				                                    <div class="content-box">
				                                        <div class="name">Cojari Barna</div>
				                                        <span class="date"><i class="la la-calendar"></i> 8:42 PM 1/28/2017</span>
				                                        <div class="text">Accusantium aut, consequatur, culpa dolorum est facilis illo magnam numquam officia omnis qui recusandae sit, tempora ullam unde velit!</div>
				                                    </div>
				                                </article>
					                        </div>
                                        </div>

                                    	<!-- Tab -->
                                        <div class="tab" id="approved">
                                            <div class="comments-area">
				                                <!--comment-->
				                                <article class="message-box">
				                                    <div class="thumb-box">
				                                        <figure class="thumb"><img src="images/resource/review-thumb-1.jpg" alt=""></figure>
				                                        <a href="#" class="reply-btn">Reply Now</a>
				                                    </div>
				                                    <div class="content-box">
				                                        <div class="name">Monija Moro</div>
				                                        <span class="date"><i class="la la-calendar"></i> 8:42 PM 1/28/2017</span>
				                                        <div class="text">Accusantium aut, consequatur, culpa dolorum est facilis illo magnam numquam officia omnis qui recusandae sit, tempora ullam unde velit!</div>
				                                    </div>
				                                </article>

				                                <!--comment-->
				                                <article class="message-box">
				                                    <div class="thumb-box">
				                                        <figure class="thumb"><img src="images/resource/review-thumb-2.jpg" alt=""></figure>
				                                        <a href="#" class="reply-btn">Reply Now</a>
				                                    </div>
				                                    <div class="content-box">
				                                        <div class="name">Mibano Rests</div>
				                                        <span class="date"><i class="la la-calendar"></i> 8:42 PM 1/28/2017</span>
				                                        <div class="text">Accusantium aut, consequatur, culpa dolorum est facilis illo magnam numquam officia omnis qui recusandae sit, tempora ullam unde velit!</div>
				                                    </div>
				                                </article>

				                                <!--comment-->
				                                <article class="message-box">
				                                    <div class="thumb-box">
				                                        <figure class="thumb"><img src="images/resource/review-thumb-3.jpg" alt=""></figure>
				                                        <a href="#" class="reply-btn">Reply Now</a>
				                                    </div>
				                                    <div class="content-box">
				                                        <div class="name">Cojari Barna</div>
				                                        <span class="date"><i class="la la-calendar"></i> 8:42 PM 1/28/2017</span>
				                                        <div class="text">Accusantium aut, consequatur, culpa dolorum est facilis illo magnam numquam officia omnis qui recusandae sit, tempora ullam unde velit!</div>
				                                    </div>
				                                </article>
					                        </div>
                                        </div>
                                    </div>
                                </div>
	                    	</div>
	                    </div>
	                </div>
	            </div>
	            <p class="copyright-text">© 2019 <a href="#">Mastermind</a> All right reserved.</p>
	        </div>
	    </div>
	</div>

</div>
    
<script src="js/jquery.js"></script> 
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/wow.js"></script>
<script src="js/dropzone.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
</body>

<!-- Mirrored from expert-themes.com/html/willies/admin/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Dec 2018 11:39:13 GMT -->
</html>