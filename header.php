<?php
include 'connect.php';
session_start();
?>
<!doctype html>
<html lang="en">
 
<head>
    <title>Online Tutor</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
    
	<!-- Favicon icon -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>	
	
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawsome -->
    <link href="fonts/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- Animate CSS-->
    <link href="css/animate.css" rel="stylesheet">
    <!-- menu CSS-->
    <link href="css/bootstrap-4-navbar.css" rel="stylesheet">
    <!-- menu CSS-->
    <link href="slick/slick.css" rel="stylesheet">
	<!-- Lightbox Gallery -->
    <link href="inc/lightbox/css/jquery.fancybox.css" rel="stylesheet">
    <!-- Preloader CSS-->
    <link href="css/fakeLoader.css" rel="stylesheet">
    <!-- Video popup CSS-->
    <link href="css/magnific-popup.css" rel="stylesheet">
    <!-- Main CSS -->
    <link href="style.css" rel="stylesheet">
    <!-- Color CSS --> 
    <link rel="stylesheet" href="color/color-switcher.css">     
	<!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">  

  </head>
  <body>
  
    <!-- Preloader -->
    <div id="fakeloader"></div>


	<div class="main-menu-1x">	
		<div class="container">
			<div class="row">
				<div class="col-md-12">		
					<div class="main-menu">		
						<nav class="navbar navbar-expand-lg navbar-light bg-light btco-hover-menu">
							<a class="navbar-brand" href="#">
								<img src="images/logo.png" class="d-inline-block align-top" alt="">						
							</a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						  </button>

						  <div class="collapse navbar-collapse" id="navbarSupportedContent">
						  
							<ul class="navbar-nav ml-auto main-menu-nav">

							  <li class="nav-item dropdown active">
									<a class="nav-link" href="index.php">
										Home <span class="sr-only">(current)</span>
									</a>

							  </li>

							  <li class="nav-item">
								<a class="nav-link" href="aboutus.php">About Us</a>
							  </li>
  								<li class="nav-item">
								<a class="nav-link" href="tutors.php">Find a Tutor</a>
							  </li>
							  	<li class="nav-item">
								<a class="nav-link" href="contact.php">Contact Us</a>
							  </li>
							  <?php if(isset($_SESSION["loginid"])){ ?>
							  <li class="nav-item dropdown">
									<a class="nav-link" href="blog.html" id="navbarDropdownMenuLink4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<?php echo  "Welcome &nbsp;".$_SESSION["unamee"] ; ?>
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink4">
										<li><?php 
						$us_id=$_SESSION["loginid"];
						$sql=mysqli_query($con,"select * from user where us_id=$us_id");
						$num=mysqli_num_rows($sql);
	               			 for($i=0;$i<$num;$i++)
							{
			        		$row1=mysqli_fetch_array($sql);
						?><a class="dropdown-item" href="profile.php?us_id=<?php echo $row1["us_id"]; ?>">Edit Profile</a></li>
										<li><a class="dropdown-item" href="changepswd.php?us_id=<?php echo $row1["us_id"]; ?>">Change Password</a></li><?php } ?>
									
										<li><a class="dropdown-item" href="logout.php">Logout</a></li>
									</ul>
							  </li>
							  <?php } ?>


<?php if(isset($_SESSION["loginid"])){ ?>
							  <li class="nav-item sign-in">
								<a class="nav-link" href="logout.php">Log Out</a>
							  </li>	
<?php } else { ?>
	<li class="nav-item sign-in">
								<a class="nav-link" href="signin.php">Sign In</a>
							  </li>	
<?php } ?>
							  <li class="nav-item">
								<a class="btn-small" href="#">Get Started</a>
							  </li>	

							</ul>					
							
						  </div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>