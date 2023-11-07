<?php include("head.php");
include("connect.php");

  $tutor_name="";
  $tutor_subjects="";
  $tutor_date="";
  $tutor_phno="";
  $tutor_qualification="";
  $tutor_email="";
  $tutor_details="";
    $tutor_price="";
  if(isset($_GET["product_edit"]))
  {
    $id=$_GET["product_edit"];
    $sqlcate_edit=("select * from tutor_reg,subjects where subjects.sub_id=tutor_reg.tutor_subjects and tutor_id=$id ");
          
          $result = $con->query($sqlcate_edit);
                  if ($result->num_rows > 0) 
                    { 
                    while($rowproduct=$result->fetch_assoc())
                    {
               echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
  $tutor_name=$rowproduct["tutor_name"];
  $tutor_subjects=$rowproduct["tutor_subjects"];
  $tutor_date=$rowproduct["tutor_date"];
  $tutor_phno=$rowproduct["tutor_phno"];
  $tutor_qualification=$rowproduct["tutor_qualification"];
  $tutor_email=$rowproduct["tutor_email"];
  $tutor_details=$rowproduct['tutor_details'];
  $tutor_price=$rowproduct['tutor_price'];

  }}
}
  ?>


<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">

            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="home.php">Home</a></li>
              <li><i class="fa fa-bars"></i>Update Faculty</li>
            </ol>
          </div>
        </div>

<section class="panel">
              <header class="panel-heading">
                Update faculty Details
              </header>
              <div class="panel-body">
                <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">


                  <div class="form-group">
                    <label  class="col-lg-2 control-label">Tutor Name</label>
                    <div class="col-lg-4">
                      <input type="text" name="tutor_name" class="form-control" placeholder="Enter Faculty Name" value="<?php echo $tutor_name;  ?>">
                    </div>
                    
                     <label  class="col-lg-2 control-label">Subject</label>
                    <div class="col-lg-4">
                      <select name="tutor_subjects" class="form-control m-bot15" required>
                                                <option value="" default>select iteam</option>

                        <?php
                        $sql=mysqli_query($con,"select * from subjects");
                        $num=mysqli_num_rows($sql);
                        while($row=mysqli_fetch_array($sql))
                        {
                        
                         if($tutor_subjects==$row["sub_id"])
                          {?>
                        <option selected value="<?PHP ECHO $row['sub_id'];?>"> <?php echo $row["sub_name"];?> </option>
                      
                      <?php } else
                      {?>
                        <option value="<?PHP ECHO $row['sub_id'];?>"> <?php echo $row["sub_name"];?> </option>
                    <?php  } } ?>
                      </select>
                    </div>


                  </div>

                   
          
                    
                   <div class="form-group">
                   <label  class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-4">
                      <input type="text" name="tutor_email" class="form-control" placeholder="Enter Email" required value="<?php echo $tutor_email;  ?>">
                    </div>
                    <label  class="col-lg-2 control-label">date</label>
                    <div class="col-lg-4">
                      <input type="date" name="tutor_date" class="form-control" placeholder="" value="<?php echo $tutor_date;  ?>">
                    </div>
                  </div>
 <div class="form-group">
                    <label  class="col-lg-2 control-label">Phone no</label>
                    <div class="col-lg-2">
                      <input type="text" name="tutor_phno" class="form-control" placeholder="Enter Phone Number" required value="<?php echo $tutor_phno;  ?>">
                    </div>
                    <label  class="col-lg-2 control-label">Qualification</label>
                    <div class="col-lg-2">
                      <input type="text" name="tutor_qualification" class="form-control" placeholder="Enter Qualification" value="<?php echo $tutor_qualification;  ?>">
                    </div>

                    <label  class="col-lg-2 control-label">Price</label>
                    <div class="col-lg-2">
                      <input type="text" name="tutor_price" class="form-control" placeholder="Enter Qualification" value="<?php echo $tutor_price;  ?>">
                    </div>
                  </div>

                  

              <div class="col-lg-12">
                <section class="panel">
                  <header class="panel-heading">
                    Discription
                  </header>
                  <div class="panel-body">
                    <div class="form">

                        <div class="form-group">
                          <label class="control-label col-sm-2">Discription</label>
                          <div class="col-sm-8">
                            <textarea  class="form-control ckeditor" name="tutor_details" rows="6"><?php echo $tutor_details; ?></textarea>
                          </div>
                        </div>

                    </div>
                  </div>
                </section>
              </div>
             
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button type="submit" name="update" class="btn btn-danger">Update Product</button>


                    </div>
                    <!-- <a href="editproduct.php">View Details</a> -->
                  </div>
                </form>

<?php
if(isset($_POST["update"]))
{

  $tutor_name=$_POST["tutor_name"];
  $tutor_subjects=$_POST["tutor_subjects"];
  $tutor_date=$_POST["tutor_date"];
  $tutor_phno=$_POST["tutor_phno"];
  $tutor_qualification=$_POST["tutor_qualification"];
  $tutor_email=$_POST["tutor_email"];
  $tutor_price=$_POST["tutor_price"];

	$tutor_details= mysqli_real_escape_string($con, $_POST['tutor_details']);
	//$pr_health_tips= mysqli_real_escape_string($con, $_POST["pr_health_tips"]);
  if($tutor_details=="")
  {
    echo "<script>alert('product Details can not be empty▬▬▬▬');</script>";
  }else
  {

	$ins=mysqli_query($con,"update tutor_reg set tutor_name='$tutor_name',tutor_subjects=$tutor_subjects,tutor_date='$tutor_date',tutor_phno=$tutor_phno,tutor_qualification='$tutor_qualification',tutor_email='$tutor_email',tutor_price=$tutor_price where tutor_id=$id");


	if($ins==true)
	{
		echo "<script>alert('Faculty Update  Successfully');
    location.href='viewtutor.php';
    </script>";
	}
	else
	{
		echo "Entered Wrong input".$con->error;
	}  }
}
?>
            </div>
        </section>
<?php include("foot.php");?>

