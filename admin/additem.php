<?php include("head.php");
include("connect.php");

$ca_id="";
 $sub_name="";
 $sub_duration="";
if(isset($_GET['sub_id']))
{


 $id=$_GET['sub_id'];

$result=$con->query("select* from subjects where sub_id = $id");

if ($result->num_rows>0)
  {

     
    while($f=$result->fetch_assoc())
  { 
    $ca_id=$f["ca_id"];
 $sub_name=$f["sub_name"];
 $sub_duration=$f["sub_duration"];
    
  
  }
  }
}


?>



<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">

            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="home.php">Home</a></li>
              <li><i class="fa fa-bars"></i>Add Subject</li>
            </ol>
          </div>
        </div>


<section class="panel">
              <header class="panel-heading">
                Add Subject Details
              </header>
              <div class="panel-body">
                <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                  
                  <div class="form-group">
                    <label  class="col-lg-2 control-label"> Subject Name</label>
                    <div class="col-lg-4">
                      <input type="text" name="sub_name" value="<?php echo $sub_name;  ?>" class="form-control" placeholder="Enter Subject Name" required>
                    </div>
                    
                  </div>
                  <div class="form-group">
                    <label  class="col-lg-2 control-label">Suject Duration</label>
                    <div class="col-lg-4">
                      <input type="text" name="sub_duration" value="<?php echo $sub_duration;  ?>" class="form-control" placeholder="Enter Price" required>
                    </div>
                    
                  </div>


                    <div class="form-group">
                    <label  class="col-lg-2 control-label">Category</label>
                    <div class="col-lg-4">
                      <select name="pr_category" class="form-control m-bot15" required>
                                                <option value="" default>Select Category</option>


                      	<?php
                      	$sql=mysqli_query($con,"select * from category");
                      	$num=mysqli_num_rows($sql);
                      	while($row=mysqli_fetch_array($sql))
                      	{

                          if($ca_id==$row['ca_id'])
                          {
                        ?>
                        <option value='<?php echo $row["ca_id"];?>' selected><?php echo $row["ca_name"];?></option>
<?php } else{ ?>
                      	
                      	<option value="<?PHP ECHO $row['ca_id'];?>"> <?php echo $row["ca_name"];?> </option>
                      <?php } } ?>
                      </select>
                    </div>

                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <?php if(!isset($_GET['sub_id'])){?>
                      <button type="submit" name="add" class="btn btn-danger">Add item</button>
                    <?php }else{ ?>
                                            <button type="submit" name="update" class="btn btn-danger">update item</button>
                                          <?php } ?>

                    </div>
                  </div>
                </form>

<?php
if(isset($_POST["add"]))
{
  //echo "dddd";
	$sub_name=$_POST["sub_name"];
  $sub_duration=$_POST["sub_duration"];
	//$pr_name_mal=$_POST["pr_name_mal"];
	$pr_category=$_POST["pr_category"];

	$ins=mysqli_query($con,"insert into subjects(ca_id,sub_name,sub_duration) values($pr_category,'$sub_name',$sub_duration) ");
//echo "insert into product(pr_name,pr_name_mal,pr_category,pr_photo1,pr_photo2,pr_photo3,pr_details,pr_health_tips) values('$pr_name','$pr_name_mal','$pr_category','$pr_photo1','$pr_photo2','$pr_photo3','$pr_details','$pr_health_tips') ";
	if($ins==true)
	{
		echo "<script>alert('Subcategory Add  Successfully');
    location.href='additem.php';
    </script>";
	}
	else
	{
		echo "Entered Wrong input".$con->error;
	// }  
  }
}
?>
            </div>
        </section>


<div class="col-sm-6">
  <form action="" method="post">
            <section class="panel">
              <header class="panel-heading">
                Subject Details
              </header>
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Category</th>
                    <th>Subject Name</th>
                    <th>Price</th>
                    
                    <th>Edit</th>
                    <!-- <th>Delete</th> -->
                  </tr>
                </thead>
<?php
$sel=mysqli_query($con,"select * from category,subjects where subjects.ca_id=category.ca_id");
$num=mysqli_num_rows($sel);
for($i=0;$i<$num;$i++)
{
  $row=mysqli_fetch_array($sel);
?>

                <tbody>
           <tr>
            <td><?php echo $i; ?></td>
            <td> <?php echo $row["ca_name"];  ?></td>
            <td> <?php echo $row["sub_name"];  ?></td>
             <td> <?php echo $row["sub_duration"];  ?></td>
            <td><a href="?sub_id=<?php echo $row["sub_id"]; ?>" title="Edit <?php echo $row["ca_name"]; ?>"><img src="img/Edit-icon.png" width="30px"></a></td>

            <!-- <td><a href="?todelid=<?php echo $row["ca_id"]; ?>" onclick="return confirm('Are you sure you want to Delete?')" title="Delete <?php echo $row["ca_name"]; ?>"> <img src="img/remove.png" width="30px"></a></td> -->
           </tr>
          
      <?php 
      // if(isset($_GET["todelid"]))
      //     {
      //       $to_del_id=$_GET["todelid"];
      //       mysqli_query($con,"delete from category where ca_id='$to_del_id'");
      //     echo "<script>location.href='addcategory.php'; </script>";
      //     }

} ?>


<?php 
  
  if (isset($_POST["update"])) 
{
  //echo "<script> document.getElementById('addcat').disabled = true;  </scripte>";
  $sub_name=$_POST["sub_name"];
  $sub_duration=$_POST["sub_duration"];
  //$pr_name_mal=$_POST["pr_name_mal"];
  $pr_category=$_POST["pr_category"];
  
 

  $ins22="update subjects set sub_name='$sub_name',ca_id='$pr_category',sub_duration=$sub_duration where sub_id=$id";
  if ($con->query($ins22) === TRUE) 
      {
        //echo "Updated Successfully";
        echo "<script> alert('Updated Successfully');
        location.href='additem.php'; </script>";
      } 

  }
  ?>
            </tbody>
              </table>
              </form>
            </section>
          </div>



<?php include("foot.php");?>

<script>  
      $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#item_table tr').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide();  
                     }  
                });  
           }  
      });  
 </script>  