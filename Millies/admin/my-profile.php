<?php 
	
	include '../db_connect.php';
	session_start();
	if (isset($_SESSION['id']) || isset($_SESSION['email'])) {
		$id = $_SESSION['id'];
		$email = $_SESSION['email'];
	}else{
		header('location:../index.php');
	}

	$sql = 'SELECT * FROM agent WHERE Id = '$id'';
	$query = $conn->query($sql);
	while ($result = $query->fetch_assoc()) {
		$id = $result['Id'];
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
	}

	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);

		return $data;
	}

	$name_err = $bio_err = $image_err = $phone_err = $email_err = $facebook_err = 
	$cpassword = $npassword = $cnpassword = $cpassword_err = $npassword_err = 
	$cnpassword_err = $twitter_err = $google_err = $pinterest_err = '';

	if (isset($_POST['Update_profile'])) {
		if (!empty($_POST['name'])) {
			$name = test_input($_POST['name']);
			if (!preg_match('/^[a-zA-Z]*$/', $name)) {
				$name_err = "only white spaces and alphabet are allowed";
			}
		}else{
			$name_err = "fill in your name";
		}

		if (!empty($_POST['phone'])) {
			$phone = test_input($_POST['phone']);
		}else{
			$phone_err = "fill in your name";
		}

		if (!empty($_POST['email'])) {
			$email = test_input($_POST['email']);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$email_err = "Enter a valid email address";
			}
		}else{
			$email_err = "Fill in your email address";
		}

		if (!empty($_POST['bio'])) {
			$bio = test_input($_POST['bio']);
			if (!preg_match('/^[a-zA-Z]*$/', $bio)) {
				$bio_err = "only white spaces and alphabet are allowed";
			}
		}else{
			$bio_err = "fill in your bio";
		}

		if (!empty($_FILES['image'])) {
			$file_name = $_FILES['image']['name'];
			$file_size = $_FILES['image']['size'];
			$file_type = $_FILES['image']['type'];
			$file_tmp = $_FILES['image']['tmp_name'];

			$file_ext = strtolower(end(implode('.', $file_name)));
			$upload_path = 'images/resource/'.$file_name;

			$extension = array('jpg','png','jpeg');

			if (in_array($file_ext, $extension) === false) {
				$image_err = "extension not allowed";
			}

			if ($file_size > 2097152) {
				$image_err = "file size must not be more than 2 mb";
			}

			if (empty($image_err) === true) {
				move_uploaded_file($file_tmp, $upload_path);
			}

		}

		$sql = "UPDATE `agent` set `name` = '$name', `pix` = '$upload_path', `bio` = '$bio', `phone` = '$phone', `email` = '$email'";
		$query = $conn->query($sql);
		if (!$query) {
			header('location:../404.php');
		}

	}

	if (isset($_POST['update_password'])) {
		if (!empty($_POST['cpassword'])) {
			$cpassword = test_input($_POST['cpassword']);
			
		}else{
			$cpassword_err = "fill in your current password";
		}

		if (!empty($_POST['npassword'])) {
			$npassword = test_input($_POST['npassword']);
		}else{
			$npassword_err = "fill in your new password";
		}

		if (!empty($_POST['cnpassword'])) {
			$cnpassword = test_input($_POST['cnpassword']);
		}else{
			$cnpassword_err = "fill in your new password";
		}

		if ($cpassword != $password) {
			$cpassword_err = "your current password is wrong";
		}elseif ($npassword != $cnpassword) {
			$cnpassword_err = "your new password does not rythme";
		}else{
			$sql = "UPDATE `agent` set `password` = '$cnpassword'";
			$query = $conn->query($sql);
			if (!$query) {
				header('location:../404.php');
			}
		}

	}


	if (isset($_POST['Update_profile'])) {
		if (!empty($_POST['facebook'])) {
			$facebook = test_input($_POST['facebook']);
			if (!preg_match('/^[a-zA-Z]*$/', $facebook)) {
				$facebook_err = "only white spaces and alphabet are allowed";
			}
		}else{
			$facebook_err = "fill in your facebook username";
		}


		if (!empty($_POST['twitter'])) {
			$twitter = test_input($_POST['twitter']);
			if (!preg_match('/^[a-zA-Z]*$/', $twitter)) {
				$twitter_err = "only white spaces and alphabet are allowed";
			}
		}else{
			$twitter_err = "fill in your twitter username";
		}


		if (!empty($_POST['pinterest'])) {
			$pinterest = test_input($_POST['pinterest']);
			if (!preg_match('/^[a-zA-Z]*$/', $pinterest)) {
				$pinterest_err = "only white spaces and alphabet are allowed";
			}
		}else{
			$pinterest_err = "fill in your pinterest username";
		}

		if (!empty($_POST['google'])) {
			$google = test_input($_POST['google']);
			if (!preg_match('/^[a-zA-Z]*$/', $google)) {
				$google_err = "only white spaces and alphabet are allowed";
			}
		}else{
			$google_err = "fill in your google username";
		}

		$sql = "UPDATE `agent` set `facebook` = '$facebook', `twitter` = '$twitter', `pinterest` = '$pinterest', `google-plus` = '$google'";
		$query = $conn->query($sql);
		if (!$query) {
			header('location:../404.php');
		}

	}

?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from expert-themes.com/html/willies/admin/my-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Dec 2018 11:41:10 GMT -->
<head>
<meta charset="utf-8">
<title>Willies - Real Estate | My Profile</title>
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
	            <li><a href="messages.php"><i class="pe-7s-mail"></i> Messages <span class="tag">6</span></a></li>
	            <li><a href="my-properties.php"><i class="pe-7s-diamond"></i>My Properties</a></li>
	            <li><a href="my-invoices.php"><i class="pe-7s-note2"></i>My Invoices</a></li>
	            <li><a href="favorited-properties.php"><i class="pe-7s-like2"></i>Favorited Properties</a></li>
	            <li><a href="submit-property.php"><i class="pe-7s-up-arrow"></i>Submit Property</a></li>
	            <li class="active"><a href="my-profile.php"><i class="pe-7s-user"></i>My Profile</a></li>
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
	                        <div class="col-md-6 col-sm-12"><h4>Submit Property</h4></div>
	                        <div class="col-md-6 col-sm-12">
	                            <div class="breadcrumb-nav">
	                                <ul>
	                                    <li><a href="../index.php">Index</a></li>
	                                    <li><a href="dashboard.php">Dashboard</a></li>
	                                    <li class="active">Submit Property</li>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="column col-lg-12">
	                    	<div class="properties-box">
	                    		<div class="inner-container">
	                    			<div class="title"><h3>Profile Details</h3></div>
	                    			<div class="profile-form">
                    					<div class="row">
	                    					<div class="col-lg-4 col-md-12 col-sm-12">
				                    		<form method="post" action="<?php echo htmlspecialchars($_SESSION['PHP_SELF']);?>">
	                    						<!-- Edit profile photo -->
		                                        <div class="edit-profile-photo">
		                                            <img src="<?php echo '../'.$pix;?>" alt="profile-photo">
		                                            <div class="change-photo-btn">
		                                                <div class="photoUpload">
		                                                    <span><i class="la la-cloud-upload"></i></span>
		                                                    <input type="file" name="image" class="upload">
					                                        <span class="err"><?php echo $image_err;?></span>
		                                                </div>
		                                            </div>
		                                        </div>
	                    					</div>

	                    					<div class="col-lg-8 col-md-12 col-sm-12">
					                                <div class="row">
					                                	<!-- Form Group -->
					                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
					                                        <label>Your Name</label>
					                                        <input type="text" name="name" value="<?php echo $name;?>" placeholder="John Doe" required>
					                                        <span class="err"><?php echo $name_err;?></span>
					                                    </div>

					                                    <!-- Form Group -->
					                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
					                                        <label>Phone #</label>
					                                        <input type="text" name="phone" value="<?php echo $phone_number;?>" placeholder="Phone" required>
					                                        <span class="err"><?php echo $phone_err;?></span>
					                                    </div>

					                                    <!-- Form Group -->
					                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
					                                        <label>Your Email</label>
					                                        <input type="email" name="email" value="<?php echo $email;?>" placeholder="Your Email" required>
					                                        <span class="err"><?php echo $email_err;?></span>
					                                    </div>

					                                    <!-- Form Group -->
					                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
					                                        <label>About You</label>
					                                        <textarea name="bio" value="<?php echo $bio;?>" placeholder="Personal Info"></textarea>
					                                        <span class="err"><?php echo $bio_err;?></span>
					                                    </div>

					                                    <!-- Form Group -->
					                                    <div class="form-group text-right col-lg-12 col-md-12 col-sm-12">
					                                    	<input name="Update_profile" type="submit" class="theme-btn btn-style-one">
					                                    </div>
					                                </div>
	                    					</div>
                    						</form>
	                    				</div>
			                        </div>
	                    		</div>
	                    	</div>
	                    </div>

	                    <div class="column col-lg-6 col-md-12">
	                    	<div class="properties-box">
	                    		<div class="inner-container">
	                    			<div class="title"><h3>Change Password</h3></div>
	                    			<div class="profile-form">
		                    			<form method="post" action="<?php echo htmlspecialchars($_SESSION['PHP_SELF']);?>">
			                                <div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                        <label>Current Password</label>
			                                        <input type="password" name="cpassword" placeholder="Current Password" required>
					                                <span class="err"><?php echo $cpassword_err;?></span>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                        <label>New Password</label>
			                                        <input type="password" name="npassword" placeholder="New Password" required>
			                                        <span class="err"><?php echo $npassword_err;?></span>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                        <label>Confirm New Password</label>
			                                        <input type="password" name="cnpassword" placeholder="Confirm New Password" required>
			                                        <span class="err"><?php echo $cnpassword_err;?></span>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                    	<input type="submit" name="update_password" class="theme-btn btn-style-one" value="Update Password">
			                                    </div>
			                                </div>
            							</form>
			                        </div>
	                    		</div>
	                    	</div>
	                    </div>

	                    <div class="column col-lg-6 col-md-12">
	                    	<div class="properties-box">
	                    		<div class="inner-container">
	                    			<div class="title"><h3>Socials Links</h3></div>
	                    			<div class="profile-form">
		                    			<form method="post" action="<?php echo htmlspecialchars($_SESSION['PHP_SELF']);?>">
			                                <div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                        <label><i class="la la-facebook"></i>Facebook</label>
			                                        <input type="text" name="facebook"  value="<?php echo $facebook;?>" placeholder="Facebook" required>
			                                        <span class="err"><?php echo $facebook_err;?></span>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                        <label><i class="la la-twitter"></i>Twitter</label>
			                                        <input type="text" name="twitter" value="<?php echo $twitter;?>" placeholder="Twitter" required>
			                                        <span class="err"><?php echo $twitter_err;?></span>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                        <label><i class="la la-instagram"></i>Pinterest</label>
			                                        <input type="text" name="pinterest" value="<?php echo $pinterest;?>" placeholder="Instagram" required>
			                                        <span class="err"><?php echo $pinterest_err;?></span>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                        <label><i class="la la-instagram"></i>Google-plus</label>
			                                        <input type="text" name="google" value="<?php echo $google;?>" placeholder="Instagram" required>
			                                        <span class="err"><?php echo $google_err;?></span>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                    	<input type="submit" value="Save Changes" name="save_changes" class="theme-btn btn-style-one">
			                                    </div>
			                                </div>
            							</form>
			                        </div>
	                    		</div>
	                    	</div>
	                    </div>
	                </div>
	            </div>
	            <p class="copyright-text">© 2018 <a href="#">Expert Themes</a> All right reserved.</p>
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

<!-- Mirrored from expert-themes.com/html/willies/admin/my-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Dec 2018 11:41:11 GMT -->
</html>