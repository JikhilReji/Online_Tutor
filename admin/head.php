<?php
session_start(); 
include("connect.php");
$ID=$_SESSION["ad_id"];
if($ID=="")
{
  header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">

  <title>Tutor</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

</head>

<body>
  
  <section id="container" class="">
    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>
      <a href="home.php" class="logo">Tutor <span class="lite">Admin</span></a>
      <div class="nav search-row" id="top_menu">
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <!-- <input class="form-control" placeholder="Search" type="text"> -->
            </form>
          </li>
        </ul>
      </div>
<form action="" method="post">
      <div class="top-nav notification-row">
        <ul class="nav pull-right top-menu">
                  
          

          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username">Admin</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>


              <li>
                <a>
                 <button class="btn btn-primary btn-lg btn-block" name="logout" type="submit">Logout</button>
                  <?php
                  if (isset($_POST["logout"]))
                  {
                    
                    header("location:index.php");
                  }
                  ?>
                </a>

              </li>
              </li>
            </ul>
      </div>
      </form>
    </header>
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <ul class="sidebar-menu">

           <li class="">
            <a class="" href="home.php">
                          <i class="icon_house_alt"></i>
                          <span>Home</span>
                      </a>
          </li>

   <li class="">
            <a class="" href="changepassword.php">
                          <i class="icon_house_alt"></i>
                          <span>Change Password</span>
                      </a>
          </li>

                <li><a class="" href="addcategory.php"><i class="icon_house_alt"></i><span>Add Category</span></a></li>

                 <li><a class="" href="additem.php"><i class="icon_house_alt"></i><span>Add Subject</span></a></li>

 <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Tutor</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              
              <li><a class="" href="addtutor.php">Add Tutor</a></li>
              <li><a class="" href="viewtutor.php">View Tutor</a></li>
            </ul>
          </li>
<!--            <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Add Company</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              
              <li><a class="" href="company.php">Add Company</a></li>
              <li><a class="" href="dealer.php">Add Delear</a></li>
            </ul>
          </li> -->

           <li class="">
            <a class="" href="reguser.php">
                          <i class="icon_house_alt"></i>
                          <span>Registered User</span>
                      </a>
          </li>

           <li class="">
            <a class="" href="contactdetails.php">
                          <i class="icon_house_alt"></i>
                          <span>Enquiries</span>
                      </a>
          </li>
           <li class="">
            <a class="" href="booking.php">
                          <i class="icon_house_alt"></i>
                          <span>Booking Details</span>
                      </a>
          </li>


        </ul>
      </div>
    </aside>
    