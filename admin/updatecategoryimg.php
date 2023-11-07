
<?php 
//echo "aaaa".$_FILES['picpath']['name']."ssss";
include 'connect.php';

  $target_dir = "category/";
$productid=$_POST['hid2'];
//echo $productid; 
  $target_file3 = $target_dir . basename($_FILES["picpath"]["name"]);
  $pr_photo3=basename($_FILES["picpath"]["name"]);
  $imageFileType3 = pathinfo($target_file3,PATHINFO_EXTENSION);
  $ph3=rand(1111,9999);
  $ph3=md5($ph3);
  $filepath3=$target_dir. $ph3 .".".$imageFileType3;
  if(move_uploaded_file($_FILES["picpath"]["tmp_name"], $filepath3))
  {
  	
  		$ins1=$con->query("update category set ca_image='$filepath3' where ca_id=$productid ");
  		if($ins1==true){echo "image update successfully";}
  	}


  		


  
else{ echo "Error in Image Update"; }
// echo $_POST['hid1']."ddd".$_POST['hid2'];

 ?>