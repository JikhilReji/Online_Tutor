<?php include'header.php' ?>
<?php include'connect.php' ?>
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
                        <h3>Sign In</h3>
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sign In</li>
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
					<div class="col-md-4">
						<div class="sign-in-form">
							<h3>Sign In</h3>
							<form action="" method="POST">
								<div class="row">
									<div class="col-md-12">	
										<div class="single-input">
											<i class="fas fa-envelope"></i>																  
											<div class="form-group">
												<input type="text" name="us_email" class="form-control" placeholder="Username or e-mail" aria-label="Name">				    										    						    
											</div>
										</div>
									</div>	
									<div class="col-md-12">
										<div class="single-input">
											<i class="fas fa-key"></i>																  
											<div class="form-group">							    
											    <input type="password" class="form-control" name="us_password" placeholder="Password">							    
											</div>
									  	</div>
									</div>  		
									<div class="col-md-12">
										<div class="sign-in-btn">																
											
											<!-- <a href="#" class="btn-small"> Sign In </a> -->
											<input type="submit" name="login1">
											
											<h4>Don’t have an account? <a href="register.php"> Create one here!</a></h4>	
										</div>								
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-7 offset-md-1">
						<div class="sign-in-right">
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
<?php include'footer.php' ?>
<?php   
      if(isset($_POST['login1']))
         {  
        $us_email=mysqli_real_escape_string($con,$_POST["us_email"]);
        //$us_phno=mysqli_real_escape_string($con,$_POST["us_email"]);
        $us_password=mysqli_real_escape_string($con,md5($_POST["us_password"]));
  echo $us_email;      
        
        
           $numlogsqle=mysqli_query($con,"select * from user where us_email='$us_email' and us_password='$us_password' " );
            $numlog=mysqli_num_rows($numlogsqle);
           if($numlog!=0)
               {
             $rowlog=mysqli_fetch_array($numlogsqle);  
            $uid=$rowlog['us_id'];
            $uname=$rowlog['us_name'];
//echo $uname;
             $_SESSION["loginid"]=$uid;
             $_SESSION["unamee"]=$uname;
           
       // echo "<script>Swal.fire('Success', 'Login Successfully', 'success') </script>";
echo " <script>alert('Login Successfully');</script>";
              if(isset($_SESSION["shoppage"]))
              {
                echo "<script> location.href='tutors.php'; </script>";

              }
              else
              {
                echo "<script> location.href='index.php'; </script>";

              }

               }
           else
           {?>
echo " <script>alert('invalid Username or Password');</script>";

           <?php }


            


             }
        
             

?>