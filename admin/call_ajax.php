<?php
include('connect.php');
$s1=$_REQUEST["n"];
$sql=mysqli_query($con,"select * from product where pr_name like '%".$s1."%'");
$s="";
while($row=mysqli_fetch_array($sql))
{
	$s=$s."
	<a class='link-p-colr' href='updateproduct.php?product_edit=".$row['pr_id']."'>
		<div class='live-outer'>
            	<div class='live-im'>
                	<img src='".$row['pr_img2']."'/>
                </div>
                <div class='live-product-det'>
                	<div class='live-product-name'>
                    	<p>".$row['pr_name']."</p>
                    </div>
                    <div class='live-product-price'>
						<div class='live-product-price-text'><p>Rs.".number_format($row['price'])."</p></div>
                    </div>
                </div>
            </div>
	</a>
	"	;
}
echo $s;
?>