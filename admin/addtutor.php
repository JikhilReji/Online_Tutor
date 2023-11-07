<?php include("head.php");
include("connect.php");?>

<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">

            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="home.php">Home</a></li>
              <li><i class="fa fa-bars"></i>Add Faculty</li>
            </ol>
          </div>
        </div>


<section class="panel">
              <header class="panel-heading">
                Add Faculty Details
              </header>
              <div class="panel-body">
                <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label  class="col-lg-2 control-label">Faculty Name</label>
                    <div class="col-lg-4">
                      <input type="text" name="tutor_name" class="form-control" placeholder="Enter Faculty Name" required onchange="labdis()">
                    </div>
                    
                     <label  class="col-lg-2 control-label">Subject</label>
                    <div class="col-lg-4">
                      <select name="tutor_subjects" class="form-control m-bot15" required>
                                                <option value="" default>select Subject</option>

                        <?php
                        $sql=mysqli_query($con,"select * from subjects");
                        $num=mysqli_num_rows($sql);
                        while($row=mysqli_fetch_array($sql))
                        {
                        ?>
                        <option value="<?PHP ECHO $row['sub_id'];?>"> <?php echo $row["sub_name"];?> </option>
                      <?php } ?>
                      </select>
                    </div>


                  </div>


                   <div class="form-group">
                    <label  class="col-lg-2 control-label">Image</label>
                    <div class="col-lg-4">
                      <input type="file" name="tutor_img" class="form-control" placeholder="Image1" required>
                    </div>
                    <label  class="col-lg-2 control-label">date</label>
                    <div class="col-lg-4">
                      <input type="date" name="tutor_date" class="form-control" placeholder="" >
                    </div>
                  </div>

                   <div class="form-group">
                    <label  class="col-lg-2 control-label">Phone no</label>
                    <div class="col-lg-4">
                      <input type="text" name="tutor_phno" class="form-control" placeholder="Enter Phone Number" required>
                    </div>
                    <label  class="col-lg-2 control-label">Qualification</label>
                    <div class="col-lg-4">
                      <input type="text" name="tutor_qualification" class="form-control" placeholder="Enter Qualification" >
                    </div>
                  </div>

                   <div class="form-group">
                    <label  class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-4">
                      <input type="text" name="tutor_email" class="form-control" placeholder="Enter Email" required>
                     
                    </div>
                     <label  class="col-lg-2 control-label">Price</label>
                    <div class="col-lg-4">
                      <input type="text" name="tutor_price" class="form-control" placeholder="Enter Price" required>
                    </div>
                  </div>
              <div class="col-lg-12">
                <section class="panel">
                  <header class="panel-heading">
                    Details
                  </header>
                  <div class="panel-body">
                    <div class="form">

                        <div class="form-group">
                          <label class="control-label col-sm-2">Details</label>
                          <div class="col-sm-8">
                            <textarea  class="form-control ckeditor"  name="tutor_details" rows="6"></textarea>
                          </div>
                        </div>

                    </div>
                  </div>
                </section>
              </div>
             
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button type="submit" name="add" class="btn btn-danger">Add Product</button>


                    </div>
                    <!-- <a href="editproduct.php">View Details</a> -->
                  </div>
                </form>

<?php
if(isset($_POST["add"]))
{
  //echo "dddd";
	$tutor_name=$_POST["tutor_name"];
  $tutor_subjects=$_POST["tutor_subjects"];
  $tutor_date=$_POST["tutor_date"];
  $tutor_phno=$_POST["tutor_phno"];
  $tutor_qualification=$_POST["tutor_qualification"];
  $tutor_email=$_POST["tutor_email"];
    $tutor_price=$_POST["tutor_price"];

  $target_dir = "product/";
  $target_file = $target_dir . basename($_FILES["tutor_img"]["name"]);
  $tutor_img=basename($_FILES["tutor_img"]["name"]);
  $imageFileType1 = pathinfo($target_file,PATHINFO_EXTENSION);
  $ph1=rand(1111,9999);
  $ph1=md5($ph1);
  $filepath1=$target_dir. $ph1 .".".$imageFileType1;
  move_uploaded_file($_FILES["tutor_img"]["tmp_name"], $filepath1);


  

	$tutor_details= mysqli_real_escape_string($con, $_POST['tutor_details']);
	//$pr_health_tips= mysqli_real_escape_string($con, $_POST["pr_health_tips"]);
  if($tutor_details=="")
  {
    echo "<script>alert('Faculty Details can not be empty▬▬▬▬');</script>";
  }else
  {

	$ins=mysqli_query($con,"insert into tutor_reg(tutor_name,tutor_subjects,tutor_date,tutor_phno,tutor_img,tutor_qualification,tutor_details,tutor_email,tutor_price) values('$tutor_name',$tutor_subjects,'$tutor_date',$tutor_phno,'$filepath1','$tutor_qualification','$tutor_details','$tutor_email',$tutor_price) ");
//echo "insert into product(pr_name,pr_name_mal,pr_category,pr_photo1,pr_photo2,pr_photo3,pr_details,pr_health_tips) values('$pr_name','$pr_name_mal','$pr_category','$pr_photo1','$pr_photo2','$pr_photo3','$pr_details','$pr_health_tips') ";
	if($ins==true)
	{
		echo "<script>alert('Faculty Add  Successfully');
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
