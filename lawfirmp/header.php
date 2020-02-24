<?php
	include('dbconn.php');
	$headsql = "SELECT * FROM `menu` WHERE status='1' ORDER BY menu_order ASC";
	$headstmt = $conn->prepare($headsql);
	$headstmt->execute();

	//sub menu
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Docs Adda</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>
	
	<div id="page">
	<nav class="colorlib-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div id="colorlib-logo"><a href="index.php">Docs<span>adda.</span></a></div>
					</div>
					<div class="col-md-10 text-right menu-1">
						<ul>
							<?php
								while($headrow = $headstmt->fetch(PDO::FETCH_ASSOC)){
									$menu_id = $headrow['id'];

									$subheadstmt = $conn->prepare("SELECT * FROM `sub_menu` WHERE menu_id='".$menu_id."' AND status='1'");
										$subheadstmt->execute();
							?>
							<li class="has-dropdown">
								<a href="<?=$headrow['menu_link']?>"><?=$headrow['menu_name']?></a>
								<ul class="dropdown">
									<?php
									while($subheadrow = $subheadstmt->fetch(PDO::FETCH_ASSOC)){
										$submenuid = $subheadrow['menu_id'];
										?>
									<li><a href="<?= $subheadrow['sub_menu_link'];?>"><?= $subheadrow['sub_menu_name'];?></a></li>
								<?php }?>
								</ul>
							</li>
							<?php
								}
							?>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>