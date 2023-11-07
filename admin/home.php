
<?php include("head.php");
include("connect.php")
?>
<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">

            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="home.php">Home</a></li>
              <li><i class="fa fa-bars"></i>Home</li>
            </ol>
          </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
           <a href="index.php"> <div class="info-box dark-bg" style="background-color: #ff2d55;">
              <i class="fa fa-shopping-cart"></i>
              <div class="count">1
 </div>
              <div class="title">Logout</div>
            </div> </a>
         
          </div> 
     
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
           <a href="viewproduct.php"> <div class="info-box dark-bg" style="background-color: #ff2d55;">
              <i class="fa fa-shopping-cart"></i>
              <div class="count"><?php $a=mysqli_query($con,"select count(tutor_id) from tutor_reg") ;
            
              
               $c= mysqli_fetch_array($a) ;
                echo $c[0]; 
              
               
               ?>  </div>
              <div class="title">Tutors</div>
            </div> </a>
         
          </div> 
      <!--     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg" style="background-color: #459a0d">
              <i class="fa fa-shopping-cart"></i>
              <div class="count"><?php $a=mysqli_query($con,"select count(cart_id) from cart") ;
            
              
               $c= mysqli_fetch_array($a) ;
                echo $c[0]; 
              
               
               ?>  </div>
              <div class="title">Cart</div>
            </div>
         
          </div> --> 
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <a href="company.php">    <div class="info-box dark-bg" style="background-color: #271498db;">
              <i class="icon_desktop"></i>
              <div class="count"><?php $a=mysqli_query($con,"select count(sub_id) from subjects") ;
            
              
               $c= mysqli_fetch_array($a) ;
                echo $c[0]; 
              
               
               ?>  </div>
              <div class="title">Subjects</div>
            </div>  </a>
         
          </div> 
           <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <a href="reguser.php">        <div class="info-box dark-bg" style="background-color: #e2901a;">
              <i class="fa fa-group"></i>
              <div class="count"><?php $a=mysqli_query($con,"select count(us_id) from user") ;
            
              
               $c= mysqli_fetch_array($a) ;
                echo $c[0]; 
              
               
               ?>  </div>
              <div class="title">Registered Users</div>
            </div>  </a>
         
          </div> 
           <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
         <a href="contactdetails.php">   <div class="info-box dark-bg" style="background-color: #dc117a;">
              <i class="fa fa-envelope-o"></i>
              <div class="count"><?php $a=mysqli_query($con,"select count(cust_id) from contact_tb") ;
            
              
               $c= mysqli_fetch_array($a) ;
                echo $c[0]; 
              
               
               ?>  </div>
              <div class="title">Enquiries</div>
            </div>
         </a>
          </div> 




             <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-cubes"></i>
              <div class="count"><?php $a=mysqli_query($con,"select count(ca_id) from category") ;
            
              
               $c= mysqli_fetch_array($a) ;
                echo $c[0]; 
              
               
               ?>  </div>
              <div class="title">Category</div>
            </div>
         
          </div>



            

<!--             

             <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <a href="purchase.php" >   <div class="info-box dark-bg">
              <i class="fa fa-cubes"></i>
              <div class="count"><?php $a=mysqli_query($con,"select count(pur_id) from purchase") ;
            
              
               $c= mysqli_fetch_array($a) ;
                echo $c[0]; 
              
               
               ?>  </div>
              <div class="title">Purchase</div>
            </div>  </a>
         
          </div> -->
            

             </div>



           
<?php include("foot.php");?>