<?php include("head.php");
include("connect.php");

 $ca_name="";
if(isset($_GET['ca_id']))
{


 $id=$_GET['ca_id'];

$result=$con->query("select* from category where ca_id = $id");

if ($result->num_rows>0)
  {

     
    while($f=$result->fetch_assoc())
  { 
    $ca_name=$f["ca_name"];
 
    
  
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
              <li><i class="fa fa-bars"></i>Add Category</li>
            </ol>
          </div>
        </div>

         <section class="panel">
              <header class="panel-heading">
                 Add Category
              </header>
              <div class="panel-body">
                <form class="form-horizontal" role="form" action="" method="post">
                  <div class="form-group">
                    <label  class="col-lg-2 control-label">Category Name</label>
                    <div class="col-lg-8">
                      <input type="text" value="<?php echo $ca_name; ?>" name="ca_name" class="form-control input-lg m-bot15" placeholder="Enter Category Name" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <?php if(!isset($_GET['ca_id'])){?>
                      <button type="submit" name="add" id="addcat" class="btn btn-danger">Add Category</button> <?php  } else{ ?>
                      <button type="submit" name="update" class="btn btn-danger">Update Category</button>
                    <?php } ?>
                    </div>
                  </div>
                </form>
              

<?php
if(isset($_POST["add"]))
{
	$ca_name=$_POST["ca_name"];
	$ins=mysqli_query($con,"insert into category(ca_name) values('$ca_name')");
	if($ins==true)
	{
    echo "<script>alert('Successfully Inserted');</script>";
	}
	else
	{
     echo "<script>alert('Entered Wrong Input');</script>";
	}
}

?>
</div>
 </section>
<div class="col-sm-6">
	<form action="" method="post">
            <section class="panel">

                <div align="center">  
                     <input type="text" name="search" id="search" placeholder="Search Here........." class="form-control" />  
                </div>
<br>
              <header class="panel-heading">
                Category Details
              </header>

              <table class="table" id="cat_table">
                <thead>
                  <tr>
                  	<th>#</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <!-- <th>Delete</th> -->
                  </tr>
                </thead>
<?php
$sel=mysqli_query($con,"select * from category");
$num=mysqli_num_rows($sel);
for($i=0;$i<$num;$i++)
{
	$row=mysqli_fetch_array($sel);
?>

                <tbody>
           <tr>
           	<td><?php echo $i; ?></td>
           	<td> <?php echo $row["ca_name"];  ?></td>
             <td>
            <a  title="Edit image" onclick="dismodel('<?php echo $row["ca_id"]; ?>')">

              <img width="30px" height="30px" src="<?php echo $row["ca_image"];  ?>"> </a></td>
           	<td><a href="?ca_id=<?php echo $row["ca_id"]; ?>" title="Edit <?php echo $row["ca_name"]; ?>"><img src="img/Edit-icon.png" width="30px"></a></td>
           </tr>
          
      <?php } ?>


<?php 
  
  if (isset($_POST["update"])) 
{
  $ca_name=$_POST["ca_name"];
 
  
  if(isset($_GET['ca_id']))
{
  $id=$_GET['ca_id'];
  $ins22="update category set ca_name='$ca_name' where ca_id='$id'";
  if ($con->query($ins22) === TRUE) 
      {
        echo "<script>alert('Updated Successfully');</script>";
        echo "<script>location.href='addcategory.php'; </script>";
      } 
}
  }
  ?>
            </tbody>
              </table>
              </form>
            </section>
          </div>

           <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Change Image</h4>
                      </div>
                      <div class="modal-body">
                         <DIV ID="imdis"></DIV>
                         <form method="post" action="updatecategoryimg.php" name="imgform" id="imgform" enctype="multipart/form-data">
                      Select: <input type="file" name="picpath" id="picpath" required="" />
                        <input type="hidden" id="hid1" name="hid1" >
                      <input type="hidden" id="hid2" name="hid2"  >

                      </div>
                      <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <!-- <button class="btn btn-success" type="button">Save changes</button> -->
                     <input type="submit" name="subimg" class="btn btn-success">
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
<?php include("foot.php");?>


<script>  
      $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#cat_table tr').each(function(){  
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

 <script type="text/javascript">
  function dismodel(id)
  {
    // var po=posi;
    // var i=id;
// alert(posi+id);
$('#myModal1').modal('show');
//document.getElementByID('hid1').value=posi;
//document.getElementByID('hid2').value=id;
//$('#hid1').val(posi);
$('#hid2').val(id);
  }




$("#imgform").submit(function  (ev) {
  // body...
  ev.preventDefault();
  var picpath= $("#picpath").val().replace(/\\/g, '/').replace(/.*\//, '')
 // alert($("#picpath").val());
 // alert(picpath);
 
 var imgpos=$("#hid1").val();
 var proid=$("#hid2").val(); 
// alert(imgpos);
$.ajax({

    method:"POST",
    url:"updatecategoryimg.php",
    // data:{passvar : selepass},
    data:new FormData(this),
   // data:{picpos:imgpos,idpro:proid,imgpath:picpath},
   contentType: false,     
cache: false,             
processData:false,
    datatype:"text",
    success:function(result)
    {
      alert(result);
     location.href="addcategory.php";
    }
  });

});

  </script> 