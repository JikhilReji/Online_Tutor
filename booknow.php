 <?php include 'header.php';
include 'connect.php'; ?>

<?php  
//session_start();
if(!isset($_SESSION["loginid"]))
{
    $_SESSION["shoppage"]="sh";
    if(isset($_SESSION["shoppage"]))
    {
            echo "<script> location.href='signin.php'; </script>";

    }
}
else{
    $userid=$_SESSION["loginid"];
     $sub_id=$_SESSION['sub_id'];
if(isset($_GET['pid']))
{
    $proid=$_GET['pid'];

    
$ins=$con->query("insert into buynow(us_id,sub_id,tutor_id
) values($userid,$sub_id,$proid)");

if($ins)
{
    //echo "<script> location.href='cart.php?proid='+$proid; </script>";
    echo " <script>alert('Successfully booked');</script>";
    echo "<script> location.href='index.php' </script>";
}else{echo "s".$con->error;}
}

}
?>




<?php include 'footer.php'; ?>