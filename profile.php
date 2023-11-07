<?php include 'header.php' ?>
<?php include 'connect.php'; 
if(!isset($_SESSION["loginid"]))
{
	echo "<script> location.href='index.php'; </script>";
}

?>

<?php
	
	$us_name="";
	$us_lname="";
	$us_phno="";
	$us_email="";
	$uid="";
	if(isset($_GET['us_id']))
{


 $id=$_GET['us_id'];

$result=$con->query("select* from user where us_id = $id");

if ($result->num_rows>0)
  {

     
    while($f=$result->fetch_assoc())
  { 
    $us_name=$f["us_name"];
    $us_lname=$f["us_lname"];
 	$us_phno=$f["us_phno"];
 	$us_email=$f["us_email"];
    
  
  }
  }
}
?>
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
                            <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
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
					<div class="col-md-12">
						<div class="sign-in-form">
							<h3>Edit Profile</h3>
							<form action="" method="post"> 
								<div class="row">
									<div class="col-md-6">	
										<div class="single-input">
											<i class="far fa-user"></i>															  
											<div class="form-group">
												<input type="text" class="form-control" placeholder="First Name" name="us_name" aria-label="Name" required value="<?php echo $us_name; ?>">				    										    						    
											</div>
										</div>
									</div>	
									<div class="col-md-6">	
										<div class="single-input">
											<i class="far fa-user"></i>													  
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Last Name" name="us_lname" aria-label="Name" required value="<?php echo $us_lname; ?>">				    										    						    
											</div>
										</div>
									</div>	
									<div class="col-md-6">	
										<div class="single-input">
											<i class="fas fa-phone"></i>																  
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Phone" name="us_phno" aria-label="Name" required value="<?php echo $us_phno; ?>">				    										    						    
											</div>
										</div>
									</div>	
									<div class="col-md-6">	
										<div class="single-input">
											<i class="fas fa-envelope"></i>																  
											<div class="form-group">
												<input type="email" class="form-control" placeholder="E-mail" name="us_email" aria-label="Name" required value="<?php echo $us_email; ?>">				    										    						    
											</div>
										</div>
									</div>	
											
									<div class="col-md-12">
										<div class="sign-in-btn sign-up-btn">																						
											
											<input type="submit" value="Update" name="signup" class="btn-small">
											<!-- <a href="#" class="btn-small"> </a> -->
								
										</div>								
									</div>
								</div>
							</form>
						</div>
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
$us_id=$_SESSION["loginid"];
  $us_name=mysqli_real_escape_string($con,$_POST["us_name"]);
  $us_lname=mysqli_real_escape_string($con,$_POST["us_lname"]);
  $us_phno=mysqli_real_escape_string($con,$_POST["us_phno"]);
  $us_email=mysqli_real_escape_string($con,$_POST["us_email"]);
  
		  if(isset($_GET['us_id']))
{					
	        $sql=mysqli_query($con,"update user set us_name='$us_name',us_phno=$us_phno,us_email='$us_email',us_lname='$us_lname' where us_id='$us_id' ");
	        if($sql)
	        {
	        	echo "<script>alert('Successss You need to Login Again');
	        	location.href='logout.php';
	        	</script>";
	        }
		
}
} 
?>