<?php include 'head.php';?>


<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">

            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="home.php">Home</a></li>
              <li><i class="fa fa-bars"></i></li>
            </ol>
          </div>
        </div>
<div align="center" class="col-sm-6">  
                     <input type="text" name="search" id="search" placeholder="Search Here........." class="form-control" /> 
                     <button onclick="print()"  class="btn btn-danger" style="align-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button> 
                </div> <br><br><br><br><br><br>
        <div class="col-sm-12">
  <form action="" method="post">
  	    

            <section class="panel">
              <header class="panel-heading">
                item Details
              </header>
              <table class="table" id="print1">
                <thead>
                  <tr>
                    <th>#</th>
                    <!-- <th>User</th> -->
                    <th>Name</th>
					<th>PhoneNo</th>
					<th>Email</th>
          <th>Tutor Name</th>
						<th>Duration</th>
            <th>Course</th>
						<th>Amount</th>

                  </tr>
                </thead>
<?php
$sql=mysqli_query($con,"SELECT * from subjects,tutor_reg,buynow,category,user where category.ca_id=subjects.ca_id and subjects.sub_id=tutor_reg.tutor_subjects and buynow.us_id=user.us_id and tutor_reg.tutor_id=buynow.tutor_id ");
									$num=mysqli_num_rows($sql);
	                			    for($i=0;$i<$num;$i++)
								    {
			        			    $row=mysqli_fetch_array($sql);
									?>


                <tbody>
           <tr>
            <td><?php echo $i; ?></td>
            
            <td> <?php echo $row["us_name"];  ?></td>
            <td> <?php echo $row["us_phno"];  ?></td>
            <td> <?php echo $row["us_email"];  ?></td>

            <td> <?php echo $row["tutor_name"];  ?></td>
            <td> <?php echo $row["sub_duration"];  ?></td>
             <td> <?php echo $row["sub_name"];  ?></td>
            <td> <?php echo $row["tutor_price"];  ?></td>

<?php } ?>
         



            </tbody>
              </table>
              </form>
</section>
</section>
<?php include 'foot.php'; ?>


<script>  
      $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#print1 tr').each(function(){  
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

<script>
function print() {
    var divToPrint = document.getElementById('print1');
    var htmlToPrint = '' +
        '<style type="text/css">' +
        'table th, table td {' +
        'border:1px solid #000;' +
        'padding;0.5em;' +
        '}' +
        '</style>';
    htmlToPrint += divToPrint.outerHTML;
    newWin = window.open("");
    newWin.document.write(htmlToPrint);
    newWin.print();
    newWin.close();
}
</script>

