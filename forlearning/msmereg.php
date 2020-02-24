<?php
	include ("header.php");
?>

	<aside id="colorlib-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_1.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner desc">
		   					<h2 class="heading-section">MSME Registration,Need Help?</h2>
		   					<p class="colorlib-lead">Designed with love by the fine folks at <a href="#" target="_blank">Lawfirm</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	<br>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<center>
				<h4 class="headings">MSME/SSI Registration</h4>
			</center>
			<ul class="list">
				The Micro, Small and Medium Enterprises are considered as a very significant piece of India’s legacy economic model and a part of the critical supply chain for products and services. This sector is the job creator as well as play a crucial role in providing large-scale employment and industrialization of rural and backward areas. In 2015-2016, according to the National Sample Survey (NSS) 73rd round, there were around 633.8 lakh unincorporated non-agriculture enterprises in the country which are dealing in different economic activities providing employment to 11.10 crore workers.
			</ul>
			<ul class="list">
				Although getting MSME online registration is not mandatory but it is always suggested to small and medium enterprises to get it done it provides a variety of benefits. Benefits such as rate of interest charged would be very less, tax subsidies, capital investment subsidies and much other support from the government sector.
			</ul>
			<ul class="list">
				lawfirm can help your business obtain MSME Registration online to avail a host of benefits. MSME online registration or SSI online registration can be done through LegalRaasta in Delhi NCR, Mumbai, Bengaluru, Chennai & all other Indian cities.
			</ul>
		</div>
		<div class="col-md-6">
			<center><h4 class="headings">Send A Message</h4></center>
			<form action="mail.php" method="post">
				<div class="row form-group">
					<div class="col-md-6">
						<!-- <label for="fname">First Name</label> -->
						<input type="text" name="fname" class="form-control" placeholder="Your firstname">

					</div>
					<div class="col-md-6">
						<!-- <label for="lname">Last Name</label> -->
						<input type="text" name="lname" class="form-control" placeholder="Your lastname">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<!-- <label for="email">Email</label> -->
						<input type="text" name="email" class="form-control" placeholder="Your email address">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<!-- <label for="subject">Subject</label> -->
						<input type="text" name="subject" class="form-control" placeholder="Your subject of this message">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<!-- <label for="message">Message</label> -->
						<textarea name="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
					</div>
				</div>
				<div class="form-group">
					<input type="submit" name="send" value="Send Message" class="btn btn-primary">
				</div>

			</form>		
		</div>
	</div>
</div>
<?php
	include ("footer.php");
?>