
<?php 
//echo "aaaa".$_FILES['picpath']['name']."ssss";
include 'connect.php';

  $target_dir = "product/";
$productid=$_POST['hid2'];

$productpos=$_POST['hid1'];
//echo $productid; 
  $target_file3 = $target_dir . basename($_FILES["picpath"]["name"]);
  $pr_photo3=basename($_FILES["picpath"]["name"]);
  $imageFileType3 = pathinfo($target_file3,PATHINFO_EXTENSION);
  // $ph3=rand(33333,99999);
  $ph3=date("Ymd").time();
  $ph3=md5(md5($ph3));
  $filepath3=$target_dir. $ph3 .".".$imageFileType3;
  if(move_uploaded_file($_FILES["picpath"]["tmp_name"], $filepath3))
  {
  	if($productpos==1){
      $ins1=$con->query("update tutor_reg set tutor_img='$filepath3' where tutor_id=$productid ");
    }
    // if($productpos==2)
    // {
    //   $ins1=$con->query("update tutor_reg set pr_img2='$filepath3' where pr_id=$productid ");
    // }
  		
  		if($ins1==true){echo "image update successfully";}
  	}


  		


  
else{ echo "Error in Image Update"; }
// echo $_POST['hid1']."ddd".$_POST['hid2'];

 ?>