<?php include 'header.php' ?>
<?php include 'connect.php' ?>
<style type="text/css">
	input[type="submit"] {
    display: inline-block;
    background: #02b3e4;
    font-size: 14px;
    font-weight: 800;
    padding: 10px 28px;
    border-radius: 3px;
    text-transform: capitalize;
    color: #fff;

}
</style>
<div class="page-banner">           			
        <div class="hvrbox">
            <img src="images/video-bg.png" alt="Mountains" class="hvrbox-layer_bottom">
            <div class="hvrbox-layer_top">
                <div class="container">
                    <div class="overlay-text text-left">						
                        <h3>Contact</h3>
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Conatct</li>
                          </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>	                     
    </div>
 
	<div class="contact-us-1x">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-left">
						<h2>Get in touch</h2>
					</div>	
				</div>
				<div class="col-md-7">
					<div class="contact-form">
						<form accept="" method="POST">
							<div class="row">
								<div class="col-md-12">	
									<div class="single-input">																  
										<div class="form-group">
											<input type="text" name="cust_name" class="form-control" required placeholder="Name*" aria-label="Name">				    										    						    
										</div>
									</div>
								</div>	
								<div class="col-md-12">
									<div class="single-input">																  
										<div class="form-group">							    
										    <input type="email" name="cust_email" class="form-control" placeholder="Email*" required>							    
										</div>
								  	</div>
								</div>  
								<div class="col-md-12">
									<div class="single-input">																  
										<div class="form-group">							    
										    <input type="text" name="cust_phno" class="form-control" placeholder="Phone no*" required>							    
										</div>
								  	</div>
								</div>  		
								<div class="col-md-12">	
									<div class="single-input">							  
										<div class="form-group">										
											<textarea class="form-control" name="cust_message" placeholder="Message*" rows="5" required></textarea>
										</div>
									</div>
								</div>
								<div class="col-md-12">										
<input type="submit" name="sbt1" name="Submit Now">							
									<!-- <a href="#" class="btn-small"> Submit Now </a>								 -->
								</div>
							</div>

						</form>
					</div>
				</div>
				<div class="col-md-4 offset-md-1">
					<div class="contact-address">
						<ul>
                       		<li>
								<div class="media">
									<img src="images/location.png" alt="Mountains">
								  <div class="media-body">
									Angamaly,Ernakulam
								  </div>
								</div>
                       		</li>
                       		<li>
								<div class="media">
									<img src="images/phone.png" alt="Mountains">
								  <div class="media-body">
									+91 1234567890<br>+91 1234567890
								  </div>
								</div>
                       		</li>
                       		<li>
								<div class="media">
									<img src="images/message.png" alt="Mountains">
								  <div class="media-body">
									onlinetutor@gmail.com
								  </div>
								</div>
                       		</li>													
						</ul>

						<div class="footer-social-link">
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

	<?php 
if(isset($_POST["sbt1"]))
	{
		$cust_name=$_POST["cust_name"];
		$cust_phno=$_POST["cust_phno"];
		$cust_email=$_POST["cust_email"];	
		$cust_message=$_POST["cust_message"];	

		$sql=mysqli_query($con,"insert into contact_tb(cust_name,cust_phno,cust_email,cust_message) values('$cust_name',$cust_phno,'$cust_email','$cust_message');");
		if($sql)
		{
			echo "<script>alert('We Will Contact U Soon');</script>";
		}
	}



		?>
<?php include 'footer.php';?>