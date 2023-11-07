<?php include'header.php'; ?>
<?php include'connect.php'; 
if(!isset($_SESSION["loginid"]))
{
  echo "<script> location.href='index.php'; </script>";
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
                        <h3>Sign In</h3>
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Update Password</li>
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
					<div class="col-md-8">
						<div class="sign-in-form">
							<h3>Update Password</h3>
							<form action="" method="POST">
								<div class="row">
									<div class="col-md-12">	
										<div class="single-input">
											<i class="fas fa-key"></i>																  
											<div class="form-group">
												<input type="password" name="current" class="form-control" aria-label="Name" placeholder="Current Password*****************">				    										    						    
											</div>
										</div>
									</div>	
									<div class="col-md-12">
										<div class="single-input">
											<i class="fas fa-key"></i>																  
											<div class="form-group">							    
											    <input type="password" class="form-control" name="ppass" placeholder="New Password *****************">							    
											</div>
									  	</div>
									</div>  	
								<div class="col-md-12">
										<div class="single-input">
											<i class="fas fa-key"></i>																  
											<div class="form-group">							    
											    <input type="password" class="form-control" name="ccpass" placeholder="Confirm Password*****************">							    
											</div>
									  	</div>
									</div> 	
									<div class="col-md-12">
										<div class="sign-in-btn">																
											
											<!-- <a href="#" class="btn-small"> Sign In </a> -->
											<input type="submit" name="sbt1" value="Update Password">
											
												
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

<?php include'footer.php' ?>  
<?php

     if(isset($_POST['sbt1']))
     {
     	$us_id=$_SESSION["loginid"];
     	$cpas=md5($_POST['current']);
     	
      $newpass=md5($_POST['ppass']);
       $copass=md5($_POST['ccpass']);

    $sel=$con->query("select us_password from user WHERE us_id=$us_id");
    $tbpass=$sel->fetch_assoc();
    $che= $tbpass['us_password'];
     
    
       if($che==$cpas)
       {
          if($copass==$newpass)
          {

            $updatepass=$con->query("update user set us_password='$newpass' where us_id='$us_id' ");

            if($updatepass===true)
            {
            	echo "<script>alert('Password Updated Successfully');
            	location.href='logout.php'; </script>";
            
            }
          }
          else
          {
          	echo "<script>alert('Confirm Password is Not Match');</script>";
            
          }


       }
       else
       {
       		echo "<script>alert('Password Not Match');</script>";
             

       }


 

   }
   ?>
        
