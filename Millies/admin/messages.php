<?php 



	include '../db_connect.php';

	session_start();
	if (isset($_SESSION['id']) || isset($_SESSION['email'])) {
		$id = $_SESSION['id'];
		$email = $_SESSION['email'];
	}else{
		header('location:../index.php');
	}

	$sql = 'SELECT * FROM `appointment` WHERE `agent_id` = 1';
	$query = $conn->query($sql);
	$num = $query->num_rows;
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from expert-themes.com/html/willies/admin/messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Dec 2018 11:41:10 GMT -->
<head>
<meta charset="utf-8">
<title>Millies - Real Estate | Messages</title>
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

    <!-- Main Header-->
    <header class="main-header">
        <div class="main-box clearfix">
        	<!-- Logo Box -->
            <div class="logo-box">
                <div class="logo"><a href="../index.php"><img src="images/logo-small.png" alt="" title=""></a></div>
            </div>

            <!-- Upper Right-->
            <div class="upper-right">
                <ul class="clearfix">
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
	            <li class="active"><a href="messages.php"><i class="pe-7s-mail"></i> Messages <span class="tag"><?php echo $num;?></span></a></li>
	            <li><a href="my-properties.php"><i class="pe-7s-diamond"></i>My Properties</a></li>
	            <li><a href="favorited-properties.php"><i class="pe-7s-like2"></i>Favorited Properties</a></li>
	            <li><a href="submit-property.php"><i class="pe-7s-up-arrow"></i>Submit Property</a></li>
	            <li><a href="my-profile.php"><i class="pe-7s-user"></i>My Profile</a></li>
	            <li><a href="../index-2.php"><i class="pe-7s-back-2"></i>Logout</a></li>
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
	                        <div class="col-md-6 col-sm-12"><h4>Messages</h4></div>
	                        <div class="col-md-6 col-sm-12">
	                            <div class="breadcrumb-nav">
	                                <ul>
	                                    <li><a href="../index-2.html">Index</a></li>
	                                    <li><a href="dashboard.html">Dashboard</a></li>
	                                    <li class="active">Messages</li>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                
	                <div class="row">
	                    <div class="column col-lg-12">
	                    	<div class="messages-box">
	                    		<div class="title"><h3>Messages List</h3></div><br>
	                    		<div class="inner-box">
	                                <!--comment-->
	                                <?php 

	                                	$sql = 'SELECT * FROM `appointment` WHERE `agent_id` = 1';
	                                	$query = $conn->query($sql);
	                                	while ($result = $query->fetch_assoc()):
	                                		$name = $result['name'];
	                                		$time = $result['date'];
	                                		$messages = $result['message'];
	                                		$email = $result['email'];
	                                		$phone = $result['phone'];
	                                	

	                                ?>
		                                <article class="message-box">
		                                    <div class="content-box">
		                                        <div class="name"><?php echo $name;?></div>
		                                        <span class="date"><i class="la la-calendar"></i> <?php echo $time; ?></span>
		                                        <span class="date"><i class="la la-mail-reply"></i> <?php echo $email; ?></span>
		                                        <span class="date"><i class="la la-phone"></i> <?php echo $phone; ?></span>
		                                        
		                                        <div class="text"><?php echo $message;?></div>
		                                    </div>
		                                </article>
	                            	<?php endwhile;?>
	                    		</div>
	                    	</div>
	                    </div>
	                </div>
	            </div>
	            <div class="copyright-text">© 2019 <a href="#">Mastermind</a> All right reserved.</div>
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

<!-- Mirrored from expert-themes.com/html/willies/admin/messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Dec 2018 11:41:10 GMT -->
</html>