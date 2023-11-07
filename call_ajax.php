<?php
include('connect.php');
$s1=$_REQUEST["n"];
$sql=mysqli_query($con,"SELECT * FROM tutor_reg,subjects where subjects.sub_id=tutor_reg.tutor_subjects and subjects.sub_name like '%".$s1."%'");
$s="";
while($row=mysqli_fetch_array($sql))
{
	$s=$s."
	<a class='link-p-colr' href='tutors_details.php?pid=".$row['tutor_id']."'>
		<div class='live-outer'>
            	<div class='live-im'>
                	<img src='admin/".$row['tutor_img']."'/ width='25px' height='25px'>
                </div>
                <div class='live-product-det'>
                	<div class='live-product-name'>
                    	".$row['tutor_name']."..........".$row['sub_name']."
                    </div>
                    <div class='live-product-price'>
						<div class='live-product-price-text'>Rs.".number_format($row['tutor_price'])."</div>
                    </div>
                </div>
            </div>
	</a>
	"	;
}
echo $s;
?>