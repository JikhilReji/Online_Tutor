<?php include 'header.php'; ?>
<?php include 'connect.php'; ?>
<style type="text/css">
  .abc{
  background:white; 
  box-shadow:0px 0px 8px 2px #333; 
  position:fixed; 
  z-index:99999;  

  left:0px;
  }
  #search-layer{
  position:absolute; 
  background:rgba(255,255,255,0.5); 
  z-index:9; 
  left:0px; 
  top:0px;
  }
/***********************************/
#livesearch{
  z-index:9999; 
  background:white;
  max-height:260px;
  overflow:auto; 
  width:92%;
  box-shadow:0px 2px 4px #444; 
  margin-left:4.2%;
  }
/***********************************/
.live-outer{
  width:100%; 
  height:80px;
  border-bottom:1px solid #ccc; 
  background:#fff;
  }
.live-outer:hover{
  background:#F3F3F3;
  }
.live-im{
  float:left;
  width:10%; 
  height:44px;
  }
.live-im img{
  width:100%; 
  height:100%;
  }
.live-product-det{
  float:left; 
  width:90%; 
  height:50px;
  }
.live-product-name{
  width:25%; 
  height:50px; 
  margin-top:4px;
  }
.live-product-name p{
  margin:0px;
  color:#333;
  text-shadow: 1px 1px 1px #DDDDDD;
  font-size:17px;
  }
.live-product-price{
  width:0%;
  height:25px;
  }
.live-product-price-text{
  float:left; 
  width:50%;
  }
.live-product-price-text p{
  margin:0px;
  font-size:16px;
  }
.link-p-colr{
  color:#333;
  }
</style>
	<div class="main-banner course-list-banner">           			
        <div class="hvrbox">
            <img src="images/banner-1.png" alt="Mountains" class="hvrbox-layer_bottom">
            <div class="hvrbox-layer_top">
                <div class="container">
                    <div class="overlay-text text-center">						
                        <h3><b>50+</b> Online Tutors & Video Tutorials!</h3>
                        <div class="col-md-8 offset-md-2">
							
							<form action="" method="GET">
								<div class="srbox">
									<div class="input-group">
							  <input class="form-control" type="text" onKeyUp="fx(this.value)" autocomplete="off" name="qu" id="qu" tabindex="1" placeholder="Search Subjects">
							  <div class="input-group-append">
							    <button class="btn btn-search" type="submit" tabindex="2"><i class="fas fa-search"></i></button>
							    <div id="livesearch" class="abc"></div>
							  </div>
							</div>
							</form>
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
						<a href="tutors.php" class="btn-small">Find Teachers</a>
						<a href="tutors.php" class="btn-small">Start Learning</a>
					</div>
				</div>					
			</div>
		</div>
	</div>
<?php include 'footer.php'; ?>