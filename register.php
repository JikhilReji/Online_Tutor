<?php include 'header.php' ?>
<?php include 'connect.php'; ?>
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
                        <h3>Sign Up</h3>
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
                          </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>	                     
    </div>
 
	<div class="sign-in-1x">
		<div class="container">
			<div class="form-container">
				<div class="row">
					<div class="col-md-6">
						<div class="sign-in-form">
							<h3>Sign Up</h3>
							<form action="" method="post"> 
								<div class="row">
									<div class="col-md-6">	
										<div class="single-input">
											<i class="far fa-user"></i>															  
											<div class="form-group">
												<input type="text" class="form-control" placeholder="First Name" name="us_name" aria-label="Name" required>				    										    						    
											</div>
										</div>
									</div>	
									<div class="col-md-6">	
										<div class="single-input">
											<i class="far fa-user"></i>													  
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Last Name" name="us_lname" aria-label="Name" required>				    										    						    
											</div>
										</div>
									</div>	
									<div class="col-md-6">	
										<div class="single-input">
											<i class="fas fa-phone"></i>																  
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Phone" name="us_phno" aria-label="Name" required>				    										    						    
											</div>
										</div>
									</div>	
									<div class="col-md-6">	
										<div class="single-input">
											<i class="fas fa-envelope"></i>																  
											<div class="form-group">
												<input type="email" class="form-control" placeholder="E-mail" name="us_email" aria-label="Name" required>				    										    						    
											</div>
										</div>
									</div>	
									
									<div class="col-md-6">
										<div class="single-input">
											<i class="fas fa-key"></i>																  
											<div class="form-group">							    
											    <input type="password" class="form-control" name="us_password" placeholder="Password" required>							    
											</div>
									  	</div>
									</div> 									
									<div class="col-md-6">
										<div class="single-input">
											<i class="fas fa-key"></i>																  
											<div class="form-group">							    
											    <input type="password" class="form-control" name="cpswd" placeholder="Confirm Password" required>							    
											</div>
									  	</div>
									</div> 		
									<div class="col-md-12">
										<div class="sign-in-btn sign-up-btn">																						
											
											<input type="submit" value="Signup" name="signup" class="btn-small">
											<!-- <a href="#" class="btn-small"> </a> -->
											<h4>Already have an account? <a href="signin.php"> Sign In here!</a></h4>	
										</div>								
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-6">
						<div class="sign-in-right sign-up-right">
							<a href="https://www.youtube.com/watch?v=Rps6Pb4a4K0" class="btn-circle video"><i class="fas fa-play"></i></a>
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

<?php

if(isset($_POST["signup"]))
{
  // echo $_SESSION["shoppage"];

  $us_name=mysqli_real_escape_string($con,$_POST["us_name"]);
  $us_lname=mysqli_real_escape_string($con,$_POST["us_lname"]);
  $us_phno=mysqli_real_escape_string($con,$_POST["us_phno"]);
  $us_email=mysqli_real_escape_string($con,$_POST["us_email"]);
  $us_password=mysqli_real_escape_string($con,md5($_POST["us_password"]));
  $cpswd=mysqli_real_escape_string($con,md5($_POST["cpswd"]));
  
  $sql_sign=$con->query("select * from user where us_email='$us_email'");
        
        if($sql_sign->num_rows>0)
        { 
			
      echo " <script>alert('Try another EmailId $us_email ready exist');</script>";
       }
  
    else
    {
      if($cpswd!=$us_password)
  {?>
    <script type="text/javascript">swal({text: "Password Not Match!!",});</script>
  <?php }
  else{
    $ins="insert into user(us_name,us_phno,us_email,us_password,us_lname) values('$us_name',$us_phno,'$us_email','$us_password','$us_lname')";
  $sql=mysqli_query($con,$ins);
echo $sql;
if($sql)
{?>
  <script type="text/javascript">swal({text: "Successfully registered",});</script>

<?php
  echo "<script>location.href='signin.php';</script>";
 }
}
}
} 
?>