<?php include("head.php");
include("connect.php");?>

<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">

            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="home.php">Home</a></li>
              <li><i class="fa fa-bars"></i>Enquiry Details</li>
            </ol>
          </div>
        </div>
  
   <section class="panel">
<div class="col-sm-12">
  <form action="" method="post">
            <section class="panel">
              <header class="panel-heading">
                Enquiry Info
              </header>
              <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone No</th>
                    <th>Email</th>
                    <!-- <th>Place</th> -->
                    <th>Message</th>
                  </tr>
                </thead>

				<?php
			 		
					$sql=mysqli_query($con,"select * from contact_tb");
	                $num=mysqli_num_rows($sql);
	                for($i=0;$i<$num;$i++)
					{
			        $row=mysqli_fetch_array($sql);
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $row["cust_name"]; ?></td>
						<td><?php echo $row["cust_phno"]; ?></td>
						<td><?php echo $row["cust_email"]; ?></td>
						<!-- <td><?php //echo $row["place"]; ?></td> -->
						<td><?php echo $row["cust_message"]; ?></td>
						
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