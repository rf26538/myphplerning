<?php
	include ("header.php");
	include('dbconn.php');
	$sql = "SELECT * FROM team WHERE status='1'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
?>
	<aside id="colorlib-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_1.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner desc">
		   					<h2 class="heading-section">Our Team</h2>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="colorlib-about">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center colorlib-heading">
					<h2>Our Attorneys</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
			    
			    <?php
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){?>
    				<div class="col-md-4 col-sm-4 text-center animate-box" data-animate-effect="fadeIn">
    					<div class="colorlib-staff">
    						<img src="images/<?= $row['image']?>" alt="<?= $row['name']?>">
    						<h3><?= $row['name']?></h3>
    						<strong class="role"><?= $row['post']?></strong>
    						<p><?= $row['des']?></p>
    						<ul class="colorlib-social-icons">
    							<li><a href="<?= $row['fb_link']?>"><i class="icon-facebook"></i></a></li>
    							<li><a href="#"><i class="icon-twitter"></i></a></li>
    							<li><a href="<?= $row['insta_link']?>"><i class="icon-instagram"></i></a></li>
    						</ul>
    					</div>
    				</div>
				<?php }?>
			</div>
		</div>
	</div>
<?php
	include ("footer.php");
?>