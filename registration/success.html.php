<!DOCTYPE HTML>

<html lang="en">

	<!--
		Author: Steven Galvin

		Date: 05/14/2020

		Purpose: Help Page for Ace in the Hole
	-->

	<head>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-168243744-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-168243744-1');
		</script>


		<meta charset="UTF-8">

		<title>Ace in the Hole: Help Center</title>

		<meta name="author" content="Steven Galvin">

		<meta name="description" content="This is the help page for Ace in the Hole. FAQ, contact form, and other helpful information can be found here.">

		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">

		<link rel="stylesheet" href="../styles/normalize.css">

		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Noto+Serif&display=swap" rel="stylesheet">

		<!-- Link to hamburger stylesheet by Jonathan Suh -->

		<link href="../dist/hamburgers.css" rel="stylesheet">

		<link rel="stylesheet/less" type="text/css" href="../styles/styles.less">

		<link rel="stylesheet/less" type="text/css" href="../styles/success.less">

		<script src="../scripts/jquery.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js"></script>
	</head>

	<body>

        <?php include '../includes/nav.html.php'; ?>

 		<?php include '../includes/header.html.php'; ?>

		<!-- Main Content -->
		 
		<main>

            <section class="success-section">

				<h3>Form Submitted</h3>
				
				<p>Thank you, <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>, for getting registered with our events! Please check out the <a href="<?php echo SITE_ROOT; ?>/help">Help Center</a> for more information.</p>
                
                <ul>
                    Our records show you submitted the following:
                    <li>Name: <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></li>
                    <li>Age: <?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?></li>
                    <li>Email: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></li>
                    <li>Role: <?php echo htmlspecialchars($role, ENT_QUOTES, 'UTF-8'); ?></li>
                    <li>Emergency Contact Name: <?php echo htmlspecialchars($emergencyContactName, ENT_QUOTES, 'UTF-8'); ?></li>
                    <li>Emergency Contact Number: <?php echo htmlspecialchars($emergencyContactNumber, ENT_QUOTES, 'UTF-8'); ?></li>
                    <li>Gender Identity: <?php echo htmlspecialchars($identity, ENT_QUOTES, 'UTF-8'); ?></li>
                    <li>Saturday Events Registered For: <?php echo htmlspecialchars($satEvents, ENT_QUOTES, 'UTF-8'); ?></li>
                    <li>Sunday Events Registered For: <?php echo htmlspecialchars($sunEvents, ENT_QUOTES, 'UTF-8'); ?></li>
                    <li>Special Accommodations: <?php echo htmlspecialchars($accommodation, ENT_QUOTES, 'UTF-8'); ?></li>
				</ul>
				
				<button class="main-button" onclick="location.href='<?php echo SITE_ROOT; ?>';">Return to Home Page</button>
			</section>

		</main>

		<?php include '../includes/footer.html.php'; ?>

	</body>
	<script src="../scripts/scripts.js" type="module"></script>
</html>

