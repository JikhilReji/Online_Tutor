<?php include("head.php");
include("connect.php");?>

<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">

            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="home.php">Home</a></li>
              <li><i class="fa fa-bars"></i>Registerd Users</li>
            </ol>
          </div>
        </div>
  
   <section class="panel">
<div class="col-sm-12">
  <form action="" method="post">
            <section class="panel">
              <header class="panel-heading">
                Registerd Users Info
              </header>
              <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>

                    <th>Phone No</th>
                    <th>Email</th>
                   
                  </tr>
                </thead>

        <?php
          
          $sql=mysqli_query($con,"select * from user");
                  $num=mysqli_num_rows($sql);
                  for($i=0;$i<$num;$i++)
          {
              $row=mysqli_fetch_array($sql);
          ?>
          <tr>

            <td><?php echo $i; ?></td>
            <td><?php echo $row["us_name"]; ?></td>
     <!--        <td><?php echo $row["us_lname"]; ?></td> -->
            <td><?php echo $row["us_phno"]; ?></td>
            <td><?php echo $row["us_email"]; ?></td>
          
            
          </tr>
        <?php }?>




   
 
         </tbody>
       </table>
     </div>
     </section>
   </form></div>
</section>
  </section>
</section>
<?php include("foot.php");?>