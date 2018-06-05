<?php
require("web-keeper/core/config.php");
require("web-keeper/core/guard.php");
guard($ddos_guard, $bot_guard, $default['email'], $notif);
?>
<?php
	session_start();
	include("connection.php");
?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>GoGeneric | User Home</title>
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
						<form action="home_code.php" method="post" enctype="multipart/form-data">
							<p class="form-field">
								<label for="newsletter_email" class="screen-reader-text">Please Enter KeyWord Of Generic Medicine</label>
								<input type="file" name="file"  placeholder="photo of prescription" style="width:450px !important;margin-left:55px !important"/>
							</p>
                            <p class="form-field">
								<textarea name="desc" cols="51" style="margin-left:55px !important"></textarea>
							</p>
                            <p class="form-field">
								<input type="submit" name="Search" value="submit" style="margin-left:250px !important" />
							</p>
						</form>
					</div>

					<!-- Social links -->
					<?php include("social.php"); ?>

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