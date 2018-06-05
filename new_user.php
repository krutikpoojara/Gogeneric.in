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
				<?php include("header.php"); ?>

				<!-- Content -->
				<section class="content">

					<h1 class="section-title">Register Here</h1>

					<!-- Newsletter form -->
					<div id="newsletter" class="form-wrap" align="center">
						<form action="new_user_code.php" method="post">
                        <div class="one-half">
                        	<p class="form-field">
								<input type="text" name="name" id="name" placeholder="Enter Full Name" />
							</p>
                            <p class="form-field">
								<input type="text" name="email" id="email" value="" placeholder="Enter Your email" />
							</p>
                            <p class="form-field">
								<input type="password" name="pass" id="pass" placeholder="Eneter Password" />
							</p>
                             <p class="form-field">
								<input type="password" name="repass" id="repass" placeholder="Re-Eneter Password" />
							</p>
                        </div>
                        <div class="one-half">
                        	<p class="form-field">
								<input type="text" name="mobile" id="mobile" placeholder="Eneter Mobile Number" />
							</p>
                            <p class="form-field">
								<input type="text" name="add" id="add" placeholder="Eneter Full Address" />
							</p>
                            <p class="form-field">
								<input type="text" name="city" id="city" placeholder="Eneter City" />
                        	</p>
                            <p class="form-field">
								<input type="text" name="dist" id="dist" placeholder="Eneter District" />
							</p>
                            
                        </div>
						<p class="form-submit">
								<input type="submit" name="newsletter_submit"  value="Register" />
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