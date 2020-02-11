<?php 
	
	include '../db_connect.php';
	session_start();
	if (isset($_SESSION['id']) || isset($_SESSION['email'])) {
		$id = $_SESSION['id'];
		$email = $_SESSION['email'];
	}else{
		header('location:../index.php');
	}

	$title = $title_err = $area = $area_err = $kitchen_err = $bathroom_err = $bedroom_err = $image1_err = $image2_err = $image3_err = $image4_err = $description = $description_err = $price = $price_err = $location = $location_err = $type_err = $state_err = $status_err = "";

	$sql = 'SELECT * FROM `agent` WHERE Id = $id';
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

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		
		if (!empty($_POST['title'])) {
			$title = test_input($_POST['title']);
			if (!preg_match('/^[a-zA-Z]*$/', $title)) {
				$title_err = "Only alphabet and whitespaces are allowed";
			}
		}else{
			$title_err = "Enter the title of the property";
		}

		if (isset($_POST['type']) && !empty($_POST['type'])) {
			$type = $_POST['type'];
		}else{
			$type_err = "Select the property type";
		}
		
		if (isset($_POST['state']) && !empty($_POST['state'])) {
			$state = $_POST['state'];
		}else{
			$state_err = "Select the property state";
		}
		
		if (isset($_POST['status']) && !empty($_POST['status'])) {
			$status = $_POST['status'];
		}else{
			$status_err = "Select the property status";
		}
		
		if (!empty($_POST['area'])) {
			$area = test_input($area);
		}else{
			$area_err = "Enter the size of the property";
		}
		
		if (isset($_POST['kitchen']) && !empty($_POST['kitchen'])) {
			$kitchen = $_POST['kitchen'];
		}else{
			$kitchen_err = "Select the number of kitchen";
		}
		
		if (isset($_POST['bedroom']) && !empty($_POST['bedroom'])) {
			$bedroom = $_POST['bedroom'];
		}else{
			$bedroom_err = "Select the number of bedroom";
		}
		
		if (isset($_POST['bathroom']) && !empty($_POST['bathroom'])) {
			$bathroom = $_POST['bathroom'];
		}else{
			$bathroom_err = "Select the number of bathroom";
		}

		if (isset($_FILES['image1'])) {
			$tmp_name1 = $_FILES['image1']['tmp_name'];
			$size1 = $_FILES['image1']['size'];
			$type1 = $_FILES['image1']['type'];
			$name1 = $_FILES['image1']['name'];

			$file_ext1 = strtolower(end(implode('.', $name1)));
			$upload_path1 = 'images/properties/'.$name1;
			$extension1 = array('jpg','jpeg','png');

			if (!in_array($file_ext1, $extension1)) {
				$image1_err = 'extension is not valid';
			}else if ($size1 > 2097152) {
				$image1_err = 'file is too large';
			}else{
				move_uploaded_file($tmp_name1, $upload_path1);
			}
		}else{
			$image1_err = 'Please insert an image';
		}

		if (isset($_FILES['image2'])) {
			$name2 = $_FILES['image2']['name'];
			$size2 = $_FILES['image2']['size'];
			$tmp_name2 = $_FILES['image2']['tmp_name'];
			$type = $_FILES['image2']['type'];

			$upload_path2 = 'images/properties/'.$name2;
			$extension2 = array('png', 'jpeg', 'jpg');
			$file_ext2 = strtolower(end(implode('.', $name2)));

			if (!in_array($file_ext2, $extension2)) {
				$image2_err = 'extension is not valid';
			} else if ($size2 > 2097152) {
				$image2_err = 'file is too large';
			} else{
				move_uploaded_file($tmp_name2, $upload_path2);
			}
		}else{
			$image2_err = 'Please insert an image';
		}

		if (isset($_FILES['image3'])) {
			$name3 = $_FILES['image3']['name'];
			$size3 = $_FILES['image3']['size'];
			$tmp_name3 = $_FILES['image3']['tmp_name'];
			$type3 = $_FILES['image3']['type'];

			$upload_path2 = 'images/properties/'.$name3;
			$extension3 = array('png', 'jpeg', 'jpg');
			$file_ext3 = strtolower(end(implode('.', $name3)));

			if (!in_array($file_ext3, $extension3)) {
				$image3_err = 'extension is not valid';
			} else if ($size3 > 2097152) {
				$image3_err = 'file is too large';
			} else{
				move_uploaded_file($tmp_name3, $upload_path3);
			}
		}else{
			$image3_err = 'Please insert an image';
		}

		if (isset($_FILES['image4'])) {
			$name4 = $_FILES['image4']['name'];
			$size4 = $_FILES['image4']['size'];
			$tmp_name4 = $_FILES['image4']['tmp_name'];
			$type4 = $_FILES['image4']['type'];

			$upload_path4 = 'images/properties/'.$name4;
			$extension4 = array('png', 'jpeg', 'jpg');
			$file_ext4 = strtolower(end(implode('.', $name4)));

			if (!in_array($file_ext4, $extension4)) {
				$image4_err = 'extension is not valid';
			} else if ($size4 > 2097152) {
				$image4_err = 'file is too large';
			} else{
				move_uploaded_file($tmp_name4, $upload_path4);
			}
		}else{
			$image4_err = 'Please insert an image';
		}

		if (!empty($_POST['description'])) {
			$description = test_input($_POST['description']);
			if (!preg_match('/^[a-zA-Z]*$/', $description)) {
				$description_err = "Only alphabet and whitespaces are allowed";
			}
		}else{
			$description_err = "Enter the title of the property";
		}

		if (!empty($_POST['location'])) {
			$location = test_input($_POST['location']);
			if (!preg_match('/^[a-zA-Z]*$/', $location)) {
				$location_err = "Only alphabet and whitespaces are allowed";
			}
		}else{
			$location_err = "Enter the location of the property";
		}

		if (isset($_POST['price']) && !empty($_POST['price'])) {
			$price = $_POST['price'];
		}else{
			$price_err = "Input the property price";
		}

		if (isset($_POST['air_conditioning'])) {
			$air_conditioning = 1;
		}else{
			$air_conditioning = 0;
		}

		if (isset($_POST['alarm_system'])) {
			$alarm_system = 1;
		}else{
			$alarm_system = 0;
		}

		if (isset($_POST['bedding'])) {
			$bedding = 1;
		}else{
			$bedding = 0;
		}

		if (isset($_POST['dishwasher'])) {
			$dishwasher = 1;
		}else{
			$dishwasher = 0;
		}

		if (isset($_POST['elevator'])) {
			$elevator = 1;
		}else{
			$elevator = 0;
		}

		if (isset($_POST['garden'])) {
			$garden = 1;
		}else{
			$garden = 0;
		}

		if (isset($_POST['gym'])) {
			$gym = 1;
		}else{
			$gym = 0;
		}

		if (isset($_POST['heating_system'])) {
			$heating_system = 1;
		}else{
			$heating_system = 0;
		}

		if (isset($_POST['hot_tub'])) {
			$hot_tub = 1;
		}else{
			$hot_tub = 0;
		}

		if (isset($_POST['microwave'])) {
			$microwave = 1;
		}else{
			$microwave = 0;
		}

		if (isset($_POST['oven'])) {
			$oven = 1;
		}else{
			$oven = 0;
		}

		if (isset($_POST['parking'])) {
			$parking = 1;
		}else{
			$parking = 0;
		}

		if (isset($_POST['pool'])) {
			$pool = 1;
		}else{
			$pool = 0;
		}

		$Isql = "INSERT INTO `property`(`Id`, `title`, `agent`, `agent_id`, `state`, `date`, `address`, `type`, `garage`, `bedroom`, `bathroom`, `size`, `sell_type`, `description`, `price`, `image1`, `image2`, `image3`, `image4`, `AirCondition`, `AlarmSystem`, `Bedding`, `DishWasher`, `Elevator`, `Garden`, `Gym`, `HeatingSystem`, `HotTub`, `Microware`, `Oven`, `Parking`, `Pool`) VALUES ('','$title','$name','$id','$state',NOW(),'$location','$type','$garage.??','$bedroom','$bathroom',$area,'$status','$description','$price','$upload_path1','$upload_path2','$upload_path3','$upload_path4','$air_conditioning','$alarm_system','$bedding','$dishwasher','$elevator','$garden','$gym','$heating_system','$hot_tub','$microwave','$oven','$parking','$pool')";
		$Iquery = $conn->query($Isql);
		if ($Iquery) {
			header('location:dashboard.php')
		}

	}
//no garage
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);

		return $data;
	}

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from expert-themes.com/html/willies/admin/submit-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Dec 2018 11:30:35 GMT -->
<head>
<meta charset="utf-8">
<title>Millies - Real Estate | Submit Property</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/plugins/summernote.css"/>
  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/dropzone.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>

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
	                        <div class="col-md-6 col-sm-12"><h4>Submit Property</h4></div>
	                        <div class="col-md-6 col-sm-12">
	                            <div class="breadcrumb-nav">
	                                <ul>
	                                    <li><a href="../index.php">Index</a></li>
	                                    <li class="active"><a href="dashboard.php">Dashboard</a></li>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    	<div class="properties-box">
	                    		<div class="inner-container">
	                    			<div class="property-submit-form">
			                            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
			                            	<div class="title"><h3>Basic Info</h3></div>
			                                <div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label>Property Title</label>
			                                        <input type="text" name="title" value="<?php echo $title;?>" placeholder="Property Title" required>
			                                        <span class="err"><?php echo $title_err?></span>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label>Property Type</label>
			                                        <select class="custom-select-box" name="type">
		                                                <option value="">Property Type</option>
		                                                <option value="Resturant">Resturant</option>
		                                                <option value="Estate">Estate</option>
		                                                <option value="Villa">Villa</option>
		                                                <option value="Apartments">Apartments</option>
		                                            </select>
			                                        <span class="err"><?php echo $type_err?></span>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label>State</label>
			                                        <select class="custom-select-box" name="state">
		                                                <option value="">State</option>
		                                                <option value="Lagos">Lagos</option>
		                                                <option value="Abuja">Abuja</option>
		                                                <option value="Kano">Kano</option>
		                                                <option value="Delta">Delta</option>
		                                                <option value="Rivers">Rivers</option>
		                                            </select>
			                                        <span class="err"><?php echo $state_err?></span>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <label>Status</label>
			                                        <select class="custom-select-box" name="status">
			                                            <option value="">Status</option>
			                                            <option value="Rent">Rent</option>
			                                            <option value="Sale">Sale</option>
			                                        </select>
			                                        <span class="err"><?php echo $status_err?></span>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <div class="range-slider-one clearfix">
			                                            <label>Area (in sqFt)</label>
			                                         	<input type="number" name="area" value="<?php echo $area;?>" placeholder="SqFt" required>
			                                        	<span class="err"><?php echo $area_err?></span>
			                                        </div>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <div class="range-slider-one clearfix">
			                                            <label>Kitchen</label>
			                                         	<select class="custom-select-box" name="kitchen">
				                                            <option value="">Kitchen</option>
				                                            <option value="1">01 Kitchen</option>
				                                            <option value="2">02 Kitchen</option>
				                                            <option value="3">03 Kitchen</option>
				                                            <option value="4">04 Kitchen</option>
				                                            <option value="5">05 Kitchen</option>
				                                        </select>
			                                        	<span class="err"><?php echo $kitchen_err?></span>
			                                        </div>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <div class="range-slider-one clearfix">
			                                            <label>Bed Room</label>
			                                         	<select class="custom-select-box" name="bedroom">
				                                            <option value="">Bed Room</option>
				                                            <option value="1">01 Bed Room</option>
				                                            <option value="2">02 Bed Room</option>
				                                            <option value="3">03 Bed Room</option>
				                                            <option value="4">04 Bed Room</option>
				                                            <option value="5">05 Bed Room</option>
				                                        </select>
			                                        	<span class="err"><?php echo $bedroom_err?></span>
			                                        </div>
			                                    </div>

			                                    <!-- Form Group -->
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
			                                        <div class="range-slider-one clearfix">
			                                            <label>Bathroom</label>
			                                         	<select class="custom-select-box" name="bathroom">
				                                            <option value="">Bathroom</option>
				                                            <option value="1">01 Bathroom</option>
				                                            <option value="2">02 Bathroom</option>
				                                            <option value="3">03 Bathroom</option>
				                                            <option value="4">04 Bathroom</option>
				                                            <option value="5">05 Bathroom</option>
				                                        </select>
			                                        	<span class="err"><?php echo $bathroom_err?></span>
			                                        </div>
			                                    </div>
			                                </div>

			                                <div class="title"><h3>Property Gallery</h3></div>
			                                <div class="row">
			                                						

											<div class="col-lg-12">
						                        <div class="input-group">
						                        <input type="file" name="image1" class="hidden"/>
						                        <input type="text" class="form-control fileupload-v1-path" placeholder="First image..." disabled>
						                        <span class="input-group-btn">
						                            <button class="btn fileupload-v1-btn" type="button"><i class="fa fa-folder"></i> Choose File</button>
						                        </span>
						                        </div>
			                                    <span class="err"><?php echo $image1_err?></span>
                        					</div><br><br><br>						

											<div class="col-lg-12">
						                        <div class="input-group">
						                        <input type="file" name="image2" class="hidden"/>
						                        <input type="text" class="form-control fileupload-v1-path" placeholder="Second image..." disabled>
						                        <span class="input-group-btn">
						                            <button class="btn fileupload-v1-btn" type="button"><i class="fa fa-folder"></i> Choose File</button>
						                        </span>
						                        </div>
			                                    <span class="err"><?php echo $image2_err?></span>
                        					</div><br><br><br>						

											<div class="col-lg-12">
						                        <div class="input-group">
						                        <input type="file" name="image3" class="hidden"/>
						                        <input type="text" class="form-control fileupload-v1-path" placeholder="Third image..." disabled>
						                        <span class="input-group-btn">
						                            <button class="btn fileupload-v1-btn" type="button"><i class="fa fa-folder"></i> Choose File</button>
						                        </span>
						                        </div>
			                                    <span class="err"><?php echo $image3_err?></span>
                        					</div><br><br><br>						

											<div class="col-lg-12">
						                        <div class="input-group">
						                        <input type="file" name="image4" class="hidden"/>
						                        <input type="text" class="form-control fileupload-v1-path" placeholder="Fourth image..." disabled>
						                        <span class="input-group-btn">
						                            <button class="btn fileupload-v1-btn" type="button"><i class="fa fa-folder"></i> Choose File</button>
						                        </span>
						                        </div>
			                                    <span class="err"><?php echo $image4_err?></span>
                        					</div>   
				                                

			                                </div>

			                                <div class="title"><h3>Detailed Information</h3></div>
			                                <div class="row">
			                                	<!-- Form Group -->
			                                    <div class="form-group col-lg-12">
			                                    	<div class="col-md-12 padding-0">
					                                	<textarea class="summernote" name="description" placeholder="Description..."></textarea>
			                                    		<span class="err"><?php echo $description_err?></span>
					                                </div>
			                                    </div>

			                                    <div class="form-group col-lg-12">
			                                    	<div class="col-md-12 padding-0">
					                                	<input type="text" class="txtinput form-control border-bottom box-shadow-none" placeholder="Location" value="<?php echo $location;?>" />
			                                    		<span class="err"><?php echo $location_err?></span>
					                                </div>
			                                    </div>

			                                    <div class="form-group col-lg-12">
			                                    	<div class="col-md-12 padding-0">
					                                	<input type="number" class="txtinput form-control border-bottom box-shadow-none" placeholder="Price" value="<?php echo $price;?>" />
			                                    		<span class="err"><?php echo $price_err?></span>
					                                </div>
			                                    </div>
			                                </div>

			                                <div class="title"><h3>Features (optional)</h3></div>
			                                <div class="row">
			                                	<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="air_conditioning" value="Air Conditioning" id="service-1"> 
					                                    <label for="service-1">Air Conditioning</label>
					                                </div>
					                            </div>

					                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="alarm_system" value="Alarm System" name="shipping-option" id="service-2"> 
					                                    <label for="service-2">Alarm System</label>
					                                </div>
					                            </div>

					                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="bedding" value="Bedding" id="service-3"> 
					                                    <label for="service-3">Bedding</label>
					                                </div>
					                            </div>

					                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="dishwasher" value="Dishwasher" id="service-4"> 
					                                    <label for="service-4">Dishwasher</label>
					                                </div>
					                            </div>

					                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="elevator" value="Elevator" id="service-6"> 
					                                    <label for="service-6">Elevator</label>
					                                </div>
					                            </div>

					                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="garden" value="Garden" id="service-5"> 
					                                    <label for="service-5">Garden</label>
					                                </div>
					                            </div>

					                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="gym" value="Gym" id="service-7"> 
					                                    <label for="service-7">Gym</label>
					                                </div>
					                            </div>

					                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="heating_system" value="Heating system" id="service-8"> 
					                                    <label for="service-8">Heating system</label>
					                                </div>
					                            </div>

					                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="hot_tub" value="Hot Tub" id="service-10"> 
					                                    <label for="service-10">Hot Tub</label>
					                                </div>
					                            </div>

					                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="microwave" value="Microwave" id="service-11"> 
					                                    <label for="service-11">Microwave</label>
					                                </div>
					                            </div>

					                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="oven" value="Oven" id="service-13"> 
					                                    <label for="service-13">Oven</label>
					                                </div>
					                            </div>

					                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="parking" value="Parking" id="service-12"> 
					                                    <label for="service-12">Parking</label>
					                                </div>
					                            </div>

					                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
					                                <div class="check-box">
					                                    <input type="checkbox" name="pool" value="Pool" id="service-9"> 
					                                    <label for="service-9">Pool</label>
					                                </div>
					                            </div>
			                                </div>
			                                    <div class="form-group col-lg-3 col-md-6 col-sm-12 text-right">
			                                    	<button type="submit" class="theme-btn btn-style-one"> Submit Property</button>
			                                    </div>
			                            </form>
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
<script src="js/script.js"></script><!-- start: Javascript -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>


<!-- plugins -->
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/dropzone.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>


<!-- custom -->
<script src="asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
	(function(jQuery){
           $('input').iCheck({
              checkboxClass: 'icheckbox_flat-red',
              radioClass: 'iradio_flat-red'
            });

              $('.summernote').summernote({
                height: 750
              });
        })(jQuery);
  });
</script>
</body>

<!-- Mirrored from expert-themes.com/html/willies/admin/submit-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Dec 2018 11:31:39 GMT -->
</html>