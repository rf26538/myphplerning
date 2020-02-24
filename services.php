<?php
	include ("header.php");
	$id = $_GET['id'];
	$sql = "SELECT * FROM services_content WHERE services_id=".$id." AND status=1";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
?>

	<aside id="colorlib-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_1.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner desc">
		   					<h2 class="heading-section">Services</h2>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	<br>
	<div class="container">

		<center><h2 class="headings"><?= $result['header']?></h2></center>
		<ul class="list">
			<?= $result['des']?>
		</ul>
	</div>
		<div id="colorlib-practice">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="flaticon-courthouse"></i>
						</span>
						<div class="desc">
							<h3><a href="treg.php">TRADEMARK REGISTRATION</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-3 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="flaticon-padlock"></i>
						</span>
						<div class="desc">
							<h3><a href="#">TRADEMARK OBJECTION</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-3 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="flaticon-folder"></i>
						</span>
						<div class="desc">
							<h3><a href="trademark.php">TRADEMARK OPOOSITION</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-3 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="flaticon-folder"></i>
						</span>
						<div class="desc">
							<h3><a href="fssai.php">TRADEMARK RENEWAL</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-3 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="flaticon-handcuffs"></i>
						</span>
						<div class="desc">
							<h3><a href="iecode.php">COPYRIGHT REGISTRATION</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-3 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="flaticon-handcuffs"></i>
						</span>
						<div class="desc">
							<h3><a href="gstreturn.php">DESIGN REGISTRATION</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-3 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="flaticon-libra"></i>
						</span>
						<div class="desc">
							<h3><a href="tdsreturn.php">PROVISNAL PATENT</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-3 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="flaticon-libra"></i>
						</span>
						<div class="desc">
							<h3><a href="itreturn.php">PATENT REGISTRATION</a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
	include ("footer.php");
?>