<?php
	session_start();
	include("connection.php");
?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>GoGeneric | Home</title>
	<?php include("head.php"); ?>
</head>
<body>
	<?php include("top.php"); ?>
	<div class="wrap">

		<!-- Main -->
		<div id="main">
			<div class="inner">

				<!-- Header -->
                <br><br><br><br>
				<?php include("header.php"); ?>

				<!-- Content -->
				<section class="content">

					
                    
                    <!-- Newsletter form -->
					<div id="newsletter" class="form-wrap">
						<form action="search.php" method="get" enctype="multipart/form-data">
							<p class="form-field">
								<label for="newsletter_email" class="screen-reader-text">Please Enter KeyWord Of Generic Medicine</label>
								<input type="text" name="search"  placeholder="Search Generic Medicine Name" style="width:450px !important"/>
							
								<input type="submit" name="Search" value="Search" />
							</p>
						</form>
					</div>

					<!-- Social links -->
					<?php include("social.php"); ?>

				</section>

				<!-- Modal page toggle -->
				<div class="modal-toggle">
					<span class="modal-note">Read More</span>
					<a href="#" id="modal-open" class="icon icon-plus"><span class="screen-reader-text">Open</span></a>
				</div>

			</div>
		</div>

		<!-- Modal page: About Us -->
		<div id="modal">
			<div class="inner">

				<!-- Modal toggle -->
				<div class="modal-toggle">
					<a href="#" id="modal-close" class="icon icon-cross"><span class="screen-reader-text">Close</span></a>
				</div>

				<!-- Content -->
				<section class="content">
					
					<h1 class="section-title">About Go Generic</h1>
					
					<!-- Columns -->
					<div class="row">
						<div class="one-half">
							<p>We have built this website for social cause. here you can find generic medicine name which are equivelent to branded medicines. but less costly then branded medicines.</p>
							
						</div>
						<div class="one-half">
							<h2><i class="icon icon-phone"></i>Phone</h2>
							<p>Phone: (02752) 22 777 3 <br />Mobile: (+91) 90 33333 549<br />Mobile: (+91) 9687693200</p>
							<h2><i class="icon icon-mail"></i>Email</h2>
							<p>we@gogeneric.in<br />we@inforaam.com</p>
							<h2><i class="icon icon-address"></i>Address</h2>
							<p>6-Prashant Chamber, Above Raj Hotel, Surendranagar.</p>
						</div>
					</div>

				</section>

			</div>
		</div>

	</div>

	<!-- Background overlay -->
	<div class="body-bg"></div>

	<!-- Loading... -->
	<div id="preload">
		<div id="preload-content">
			<div class="preload-spinner">
				<span class="bounce1"></span>
				<span class="bounce2"></span>
				<span class="bounce3"></span>
			</div>
			<div class="preload-text">Loading...</div>
		</div>
	</div>

	<!-- Included JS Files -->
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script type="text/javascript" src="js/demo-settings2.js"></script>
</body>
</html>