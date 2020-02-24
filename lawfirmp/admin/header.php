<?php 
session_start();
include('../dbconn.php');    
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>D & D RJ SERVICES ADMIN PANEL</title> 
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="assets/materialize/css/materialize.min.css" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark" href="dashbord.php"><strong>DOCSADDA PANEL</strong></a>
				
		<div id="sideNav" href=""><i class="material-icons dp48"></i></div>
            </div>

            <ul class="nav navbar-top-links navbar-right"> 
				<li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i> <b>
                <?php  
                    if(isset($_SESSION["admin_name"])) {
                        echo $_SESSION["admin_name"];
                    }
                ?>
                </b> <i class="material-icons right"></i></a></li>
            </ul>
        </nav>
		<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
<li><a href="#"><i class="fa fa-user fa-fw"></i> My Profile</a>
</li>
<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
</li> 
<li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
</li>
</ul>	   <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu waves-effect waves-dark" href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="banners.php" class="waves-effect waves-dark"><i class="fa fa-fw fa-file"></i> Banners</a>
                    </li>
                    <li>
                     <a href="#" class="waves-effect waves-dark"><i class="fa fa-sitemap"></i> Menus<span class="fa arrow"></span></a>
                     <ul class="nav nav-second-level">
                        <li>
                           <a href="menu.php">Main Menu</a>
                        </li>
                        <li>
                           <a href="submenu.php">Sub Menu</a>
                        </li>
                     </ul>
                  </li>
                    <li>
                        <a href="testimonials.php" class="waves-effect waves-dark"><i class="fa fa-fw fa-file"></i> Testimonials</a>
                    </li>
                  <li>
                        <a href="services.php" class="waves-effect waves-dark"><i class="fa fa-fw fa-file"></i> Services</a>
                    </li>
                     <li>
                        <a href="aboutus.php" class="waves-effect waves-dark"><i class="fa fa-fw fa-file"></i> About Us</a>
                    </li>
                    <li>
                        <a href="empty.php" class="waves-effect waves-dark"><i class="fa fa-fw fa-file"></i> Empty Page</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->