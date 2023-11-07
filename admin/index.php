<?php
SESSION_START();
$_SESSION["ad_id"]='';
UNSET($_SESSION["ad_id"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <!-- <link rel="shortcut icon" href="img/logo-01.png"> -->

  <title></title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

</head>

<body class="login-img3-body">
  <div class="container">
    <form class="login-form" action="" method="post">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <button class="btn btn-primary btn-lg btn-block" name="submit1" type="submit">Login</button>
      </div>
    </form>
  </div>

</body>
</html>


<?php 
include("connect.php");

if (isset($_POST["submit1"]))
{
  $username=mysqli_real_escape_string($con,$_POST["username"]);
  $password=mysqli_real_escape_string($con,$_POST["password"]);
  $ins=("select * from admin where ad_username='$username' and ad_password='$password' ");
 $res= $con->query("$ins");
 if($res->num_rows>0)
 {
  $show=$res->fetch_assoc();
  
  $_SESSION["ad_id"]=$show["ad_id"];
  
/*
$sel=$con->query("select pr_id,exp_dte from product");
while($show=$sel->fetch_assoc())
{

$dd=date('y-m-d');
echo $dd."today";
$days_ago=date('y-m-d',strtotime('+4 days',strtotime($dd)));
echo $days_ago."agodate<br>";

$fd=date_create($show['exp_dte']);
echo $show['exp_dte']."exdate<br>";

$pid=$show["pr_id"];
                                                    //$td=date_create($show['to_date']);

                                                    $cofd=date_format($fd,"Y/m/d");
                                                    //$cotd=date_format($td,"Y/m/d");

                                                    $checkfromdate=strtotime($cofd);  //
                                                    $checknowdate=strtotime($days_ago); 
                                                    	echo $checkfromdate."/".$checknowdate;
                                                    if($checkfromdate < $checknowdate)
{
	$upd=$con->query("update product set outofstoke=1 where pr_id=$pid");
	//echo"☺expired☺<br>";
}
else{
	
	//echo "pro avile<br>";
}

}
*/
header("Location:home.php");
 }
 else
 {
  echo "<script>alert(' incorrect password/username ')</script>";
 }
}
?>
