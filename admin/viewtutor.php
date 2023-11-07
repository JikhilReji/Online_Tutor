
<?php include("head.php");
include("connect.php");
?>
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="home.php">Home</a></li>
              <li><i class="icon_documents_alt"></i>Pages</li>
              <li><i class="fa fa-user-md"></i>Profile</li>
            </ol>
          </div>
        </div>
<?php
$sel=$con->query("select * from subjects,category,tutor_reg where category.ca_id=subjects.ca_id and subjects.sub_id=tutor_reg.tutor_subjects");
while($row=$sel->fetch_assoc())
                      { ?>
        <div class="row">
          <!-- profile-widget -->
          <div class="col-lg-10">
            <div class="profile-widget profile-widget-info">
              <div class="panel-body">
                <div class="col-lg-2 col-sm-2">
                  <h4><?php echo $row['tutor_name'];  ?></h4>
                  <div class="follow-ava">
                    <a  title="Edit image" onclick="dismodel('<?php echo $row["tutor_id"]; ?>',1)"><img height="100px" width="100px" src="<?php echo $row["tutor_img"];  ?>" /></a>
                  </div>
                  <h6>Tutor</h6>
                </div>
                <div class="col-lg-4 col-sm-4 follow-info">
                  <p><?php echo $row['tutor_details'];  ?></p>
                  <p><?php echo $row['tutor_email'];  ?></p>
                  <p><i class="fa fa-phone"><?php echo $row["tutor_phno"]; ?></i></p>
                  <h6>
                                    <span><i class="icon_clock_alt"></i><?php echo $row['tutor_price'];  ?></span>
                                    <span><i class="icon_calendar"></i><?php echo $row['tutor_date'];  ?></span>
                                    <span><i class="icon_pin_alt"></i><?php echo "Nimit"  ?></span>
                                </h6>
                </div>
                <div class="col-lg-2 col-sm-6 follow-info weather-category">
                  <ul>
                    <li class="active">

                      <i class="fa fa-comments fa-2x"> </i><br> <?php echo "Subject <br>".$row["sub_name"]; ?>
                    </li>

                  </ul>
                </div>
                <div class="col-lg-2 col-sm-6 follow-info weather-category">
                  <ul>
                    <li class="active">

                      <i class="fa fa-phone fa-2x"> </i><br> <?php echo  "Phone <br>".$row["tutor_phno"]; ?>
                    </li>

                  </ul>
                </div>
                <div class="col-lg-2 col-sm-6 follow-info weather-category">
                  <ul>
                    <li class="active">

                      <i class="fa fa-tachometer fa-2x"> </i><br> <?php echo  "Qualification <br>".$row["tutor_qualification"]; ?>
                    </li>

                  </ul>
                </div>
              </div>
            </div>
          </div>


        <!-- page start-->

          <div class="col-lg-10">
            <section class="panel">
              <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">

<li><a href="update_tutor.php?product_edit=<?php echo $row["tutor_id"]; ?>" title="Edit <?php echo $row["tutor_name"]; ?>"><i class="icon-user"></i>Edit</a></li>
<li></li>
<li></li>
<li><a style="color: red;" href="?prdel=<?php echo $row["tutor_id"]; ?>" title="Edit <?php echo $row["tutor_name"]; ?>" onclick="return confirm('Are u sure?');" title="Remove this Faculty"><i class="icon-user"></i>Delete</a></li>

                </ul>
              </header>
            </section>
          </div>
        </div>
<?php } ?>
        <!-- page end-->
      </section>
    </section>
          <?php   
if(isset($_GET['prdel']))
{
    $carid=$_GET['prdel'];
    $cdel=$con->query("delete from tutor_reg where tutor_id=$carid ");
    if($cdel)
    {
        echo "<script> location.href='viewtutor.php'; </script>";
    }
}


?> 
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Change Image</h4>
                      </div>
                      <div class="modal-body">
                         <DIV ID="imdis"></DIV>
                         <form method="post"  name="imgform" id="imgform" enctype="multipart/form-data">
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


  function dismodel(id,pos)
  {
    // var po=posi;
    // var i=id;
// alert(posi+id);
$('#myModal1').modal('show');
//document.getElementByID('hid1').value=posi;
//document.getElementByID('hid2').value=id;
$('#hid1').val(pos);
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
    url:"upd_tutorimg.php",
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
     location.href="viewtutor.php";
    }
  });

});

function lightbg_clr() {
  $('#qu').val("");
  $('#textbox-clr').text("");
  $('#search-layer').css({"width":"auto","height":"auto"});
  $('#livesearch').css({"display":"none"}); 
  $("#qu").focus();
 };
 
function fx(str)
{
var s1=document.getElementById("qu").value;
var xmlhttp;
if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
  document.getElementById("search-layer").style.width="auto";
  document.getElementById("search-layer").style.height="auto";
  document.getElementById("livesearch").style.display="block";
  $('#textbox-clr').text("");
    return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
  document.getElementById("search-layer").style.width="100%";
  document.getElementById("search-layer").style.height="100%";
  document.getElementById("livesearch").style.display="block";
  $('#textbox-clr').text("X");
    }
  }
xmlhttp.open("GET","call_ajax.php?n="+s1,true);
xmlhttp.send(); 
}
 </script>  



