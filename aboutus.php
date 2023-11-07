<?php include 'header.php'; ?>
<div class="page-banner">           			
        <div class="hvrbox">
            <img src="images/video-bg.png" alt="Mountains" class="hvrbox-layer_bottom">
            <div class="hvrbox-layer_top">
                <div class="container">
                    <div class="overlay-text text-left">						
                        <h3>About Us</h3>
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                          </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>	                     
    </div>

	<div class="about-us-2x">
		<div class="container">	
			<div class="row">	
				<div class="col-md-5">
					<div class="about-us-left">
						<h2>Coursecity Story</h2>
						<p>A conference is a meeting of people who "confer" about a topic. Conference types include: Convention (meeting), meeting of a, usually large.</p>
						<p>A conference is a meeting of people who "confer" about a topic. Conference types include: Convention (meeting), meeting of a, usually large.</p>
						<a href="#" class="btn-small"> Read More </a>
					</div>
				</div>
				<div class="col-md-6 offset-md-1">
					<div class="about-us-right with-video">
						<a href="https://www.youtube.com/watch?v=gwinFP8_qIM" class="btn-circle video"><i class="fas fa-play"></i></a>
					</div>
				</div>
			</div>			
		</div>
	</div>

	<div class="about-us-2x only-description">
		<div class="container">	
			<div class="row">	
				<div class="col-md-6 padding-right">
					<div class="about-us-left container-out-left">						
						<h2>Why coursecity <span>is the best?</span></h2>
						<p>A conference is a meeting of people who "confer" about a topic. Conference types include: Convention (meeting), meeting of a, usually large.</p>
						<p>A conference is a meeting of people who "confer" about a topic. Conference types include: Convention (meeting), meeting of a, usually large.</p>
					</div>
				</div>
				<div class="col-md-6 padding-left">
					<div class="about-us-left container-out-right">
						<h2>Coursecity <span> online courses </span></h2>
						<p>A conference is a meeting of people who "confer" about a topic. Conference types include: Convention (meeting), meeting of a, usually large.</p>
						<p>A conference is a meeting of people who "confer" about a topic. Conference types include: Convention (meeting), meeting of a, usually large.</p>
					</div>
				</div>
			</div>			
		</div>
	</div>

	<div class="about-us-2x about-differencs-2x">
		<div class="container">	
			<div class="row">	
				<div class="col-md-6 padding-right">
					<div class="about-us-left make-difference">
						<h2>What makes <span>difference?</span></h2>
						<p>A conference is a meeting of people who "confer" about a topic. Conference types include: Convention meeting, meeting of a, usually large.</p>
						<p>A conference is a meeting of people who "confer" about a topic. Conference types include: Convention meeting, meeting of a, usually large people who.</p>
						
					</div>
				</div>
				<div class="col-md-6 padding-left">
					<div class="about-us-right container-out">
						<img src="images/about-1.png" alt="Mountains">
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
						<h2>Our Best Instructor</h2>
						<p> The speaker bio is typically used in the programs at conferences, they may be used on the <br>  organization's website when promoting the event. </p>
					</div>	
				</div>

				<div class="col-md-12">
					<div class="ddoctors-slider">
						<div class="row">
<?php
$sel=mysqli_query($con,"SELECT * FROM tutor_reg,subjects,category where subjects.sub_id=tutor_reg.tutor_subjects and category.ca_id=subjects.ca_id");
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