<?php include 'header.php'; ?>
<?php include 'connect.php'; ?>

	<div class="page-banner">           			
        <div class="hvrbox">
            <img src="images/video-bg.png" alt="Mountains" class="hvrbox-layer_bottom">
            <div class="hvrbox-layer_top">
                <div class="container">
                    <div class="overlay-text text-left">						
                        <h3>Visual Basic Essential Training</h3>
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Visual Basic Essential Training</li>
                          </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>	                     
    </div>
    
    <div class="course-single-body">
   <?php
$pid=$_GET["pid"];
$sqlproduct=mysqli_query($con,"select * from tutor_reg t,subjects s,category c where s.sub_id=t.tutor_subjects and c.ca_id=s.ca_id and t.tutor_id=$pid ");
$numproduct=mysqli_num_rows($sqlproduct);
for($i=0;$i<$numproduct;$i++)
{
$rowproduct=mysqli_fetch_array($sqlproduct);
$ppid=$rowproduct["tutor_id"];
$sub_name=$rowproduct["sub_name"];
$sub_id=$rowproduct["sub_id"];
 $_SESSION["sub_id"]=$sub_id;
                    ?>
		<div class="container">
			<div class="course-info-1x course-info-2x">	
				<div class="row">	
					<div class="col-md-4">
						<div class="course-info-left">
							<div class="media">
							  <img src="<?php echo 'admin/'.$rowproduct["tutor_img"]; ?>" alt="Image">
							  <div class="media-body">
							  	<h3><?php echo $rowproduct["tutor_name"];?></h3>
								<p><?php echo $rowproduct["sub_name"];?></p>
							  </div>
							</div>						
						</div>
					</div>	
					<div class="col-md-3">
						<div class="course-info-middle">
							
							<h4><?php echo $rowproduct["ca_name"];?></h4>						
						</div>
					</div>
					<div class="col-md-2">
						<div class="course-info-left">
							<div class="media">
							  <div class="media-body">
							  	<h4>Course Duration</h4>
								<p><?php echo $rowproduct["sub_duration"];?> Weeks</p>
							  </div>
							</div>						
						</div>
					</div>
					<div class="col-md-3">
						<div class="course-info-right">
							<h3>₹<?php echo $rowproduct["tutor_price"];?></h3>
<?php if(isset($_SESSION["loginid"]))
{
$uid=$_SESSION["loginid"];
$ppid=$rowproduct["tutor_id"];

?>
						
<a href="booknow.php?pid=<?php  echo $rowproduct['tutor_id']; ?>" class="btn-small">Buy Now</a>
 <?php    } else { ?>
 	<a href="booknow.php?pid=<?php  echo $rowproduct['tutor_id']; ?>" class="btn-small">Book Nowaa</a>
<?php } ?>
						</div>
					</div>				

				</div>
			</div>
		</div>
<?php } ?>
		<div class="container">	
			<div class="course-details-1x">
				<div class="row">
					<div class="col-md-8">
						<div class="course-details-left">
							<div class="course-video">
								<a href="https://www.youtube.com/watch?v=Rps6Pb4a4K0" class="btn-circle video"><i class="fas fa-play"></i></a>
								<h3>Preview Course</h3>
							</div>
						

							<div class="course-menu-nav">
								<ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
								  <li class="nav-item">
								    <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true"> <i class="far fa-file-alt"></i>  Course Details</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" id="curriculum-tab" data-toggle="tab" href="#curriculum" role="tab" aria-controls="curriculum" aria-selected="false"><i class="fas fa-cube"></i> Tutor Details</a>
								  </li>

								</ul>
								<div class="tab-content course-menu-tab" id="myTabContent">
								  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
								  	<div class="learning-system">
									  	<h4>Category</h4>
									  	<p><?php echo $rowproduct["ca_name"];?></p>
										<ul>
											<li>
												<div class="single-way">
													<h4>Subject</h4>
													<p><?php echo $rowproduct["sub_name"];?></p>	
												</div>
											</li>
											<li>
												<div class="single-way">
													<h4>Duration</h4>
													<p><?php echo $rowproduct["sub_duration"];?></p>	
												</div>
											</li>
										</ul>
									</div>
									<div class="requirements">
										<h4>Requirements</h4>
										<ul>
											<li><i class="fas fa-check"></i> Understand what visual learning is for and how it is used.</li>
											<li><i class="fas fa-check"></i> Need knowledge of photoshop and basic knowledge of indesign.</li>
											<li><i class="fas fa-check"></i> Preferable to have experience with PS, Sketch, Indesign and  Adobe XD.</li>
											<li><i class="fas fa-check"></i> Preferable to understand word embeddings.</li>										
										</ul>
									</div>
								  	<div class="price">
								  		<h5><span>₹<?php echo $rowproduct["tutor_price"];?></span></h5>							  		
<?php if(isset($_SESSION["loginid"]))
{
$uid=$_SESSION["loginid"];
$ppid=$rowproduct["tutor_id"];

?>
						
<a href="booknow.php?pid=<?php  echo $rowproduct['tutor_id']; ?>" class="btn-small">Buy Now</a>
 <?php    } else { ?>
 	<a href="booknow.php?pid=<?php  echo $rowproduct['tutor_id']; ?>" class="btn-small">Book Nowaa</a>
<?php } ?>
								  	</div>

								  </div>
								  <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
									<div class="learning-system">
									  	<h4>Tutor Name</h4>
									  	<p><?php echo $rowproduct["tutor_name"];?></p>
										<ul>
											<li>
												<div class="single-way">
													<h4>Email</h4>
													<p><?php echo $rowproduct["tutor_email"];?></p>	
												</div>
											</li>
											<li>
												<div class="single-way">
													<h4>Phone number</h4>
													<p><?php echo $rowproduct["tutor_email"];?></p>	
												</div>
											</li>
											<li>
												<div class="single-way">
													<h4>Subject</h4>
													<p><?php echo $rowproduct["sub_name"];?></p>	
												</div>
											</li>
											<li>
												<div class="single-way">
													<h4>Qualification</h4>
													<p><?php echo $rowproduct["tutor_qualification"];?> </p>	
												</div>
											</li>
											<li>
												<div class="single-way">
													<h4>Category</h4>
													<p><?php echo $rowproduct["ca_name"];?> </p>	
												</div>
											</li>
										</ul>
									</div>

									<div class="description">
								  		<h4>Description</h4>
								  		<p><?php echo $rowproduct["tutor_details"];?></p>
								  	</div>								  	
								  </div>
								  

								</div>
							</div>

						</div>
					</div>				
					<div class="col-md-4">
						<div class="course-details-sidebar">
							<div class="course-feature">
								<h2>Course Features</h2>
								<ul>

									<li><i class="far fa-file"></i> Lectures <span>
									<?php $a=mysqli_query($con,"select count(tutor_id) from tutor_reg") ;
            
              
               $c= mysqli_fetch_array($a) ;
                echo $c[0]; 
              
               
               ?>  </span></li>
									<li><i class="far fa-clock"></i> Duration <span> <?php echo $rowproduct["sub_duration"];?> </span></li>
									<li><i class="far fa-user"></i> Students <span> <?php $a=mysqli_query($con,"select count(us_id) from user") ;
            
              
               $c= mysqli_fetch_array($a) ;
                echo $c[0]; ?> </span></li>
									<li><i class="fas fa-certificate"></i> Certificate  <span> Yes </span></li>
									<li><i class="far fa-lightbulb"></i> Skill  <span> Beginner </span></li>
									<li><i class="far fa-bookmark"></i> Category   <span> <?php echo $rowproduct["ca_name"];?> </span></li>
								</ul>
							</div>
							<div class="footer-social-link">
								<h2>Share via</h2>
								<ul>
									<li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>	
									<li><a href="#"> <i class="fab fa-instagram"></i> </a></li>		
									<li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
									<li><a href="#"> <i class="fab fa-google-plus-g"></i> </a></li>
								</ul>					
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
<div class="event-speakers best-instructor">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-middle">
						<h2>Related Courses</h2>
					</div>	
				</div>

				<div class="col-md-12">
					<div class="ddoctors-slider">
						<div class="row">
<?php
$sel=mysqli_query($con,"SELECT * FROM tutor_reg,subjects,category where subjects.sub_id=tutor_reg.tutor_subjects and category.ca_id=subjects.ca_id and tutor_reg.tutor_subjects=$sub_id limit 4");
$num=mysqli_num_rows($sel);
for($i=0;$i<$num;$i++)
{
	$row=mysqli_fetch_array($sel);
?>

							<div class="col-md-3">
								<div class="single-speaker">
									<div class="hvrbox">
										<img src="<?php echo 'admin/'.$row["tutor_img"]; ?>" alt="slide 1" class="hvrbox-layer_bottom">
										<div class="hvrbox-layer_top hvrbox-text">
											<div class="hvrbox-text">							
				                              <a href="tutors_details.php?pid=<?php echo $row["tutor_id"]; ?>" class="btn-small">View More</a>
											</div>
										</div>
									</div>
									<div class="speaker-details">						
										<h2><?php echo $row["tutor_name"];  ?></h2>					  
										<p><?php echo $row["sub_name"];  ?></p>
									</div>										  
									
								</div> 
							</div>
<?php } ?>
						</div>		
					</div>
				</div>	
			</div>
		</div>
	</div>

	</div>

	<div class="cta-1x">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="cta-content">
						<h3>Ready to Begin?</h3>
						<p>Find subjects you're passionate about by browsing our online course categories. Start <br> learning with top courses Built With Industry Experts.</p>
						<a href="#" class="btn-small">Start Teaching</a>
						<a href="#" class="btn-small">Start Learning</a>
					</div>
				</div>					
			</div>
		</div>
	</div>
<?php include 'footer.php'; ?>