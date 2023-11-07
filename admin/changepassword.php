<?php include("head.php");
include("connect.php");
?> 

<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">

            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="home.php">Home</a></li>
              <li><i class="fa fa-bars"></i>Change Admin Password</li>
            </ol>
          </div>
        </div>

 <div class="row">
          <div class="col-lg-6">
            <section class="panel">
              <header class="panel-heading">
                Change Admin Password
              </header>
              <div class="panel-body">
                
                	<form action="" method="POST" role="form">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Current Password</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your current password" name="current" required="">
                  </div>

                                 
                

                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter New Password" name="ppass" >
                  </div>
                 
                       <div class="form-group">
                    <label for="exampleInputPassword1">Conform Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Re-Enter Password" name="ccpass" >
                  </div>
             
                  <button type="submit" name="sub1" class="btn btn-primary">Submit</button>
                </form>

              </div>
            </section>
          </div>
        </div>
    </section>
</section>
     <?php

     if(isset($_POST['sub1']))
     {

     	$cpas=$_POST['current'];
     	
      $newpass=$_POST['ppass'];
       $copass=$_POST['ccpass'];

    $sel=$con->query("select ad_password from admin");
    $tbpass=$sel->fetch_assoc();
    $che= $tbpass['ad_password'];
     
    
       if($che==$cpas)
       {
          if($copass==$newpass)
          {

            $updatepass=$con->query("update admin set ad_password='$newpass'");

            if($updatepass===true)
            {
             echo '<button type="button" class="btn btn-primary btn-lg btn-block">Password Updated Successfully</button>';
            }
          }
          else
          {
            echo '<button type="button" class="btn btn-primary btn-lg btn-block" style="background-color:red;">Confirm Password is Not Match</button>';
          }


       }
       else
       {
              echo '<button type="button" class="btn btn-primary btn-lg btn-block" style="background-color:red;">Password Not Match</button>';

       }


 

   }
       include("foot.php");
     ?>
  