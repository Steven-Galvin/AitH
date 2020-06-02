<!DOCTYPE HTML>

<html lang="en">

	<!--
		Author: Steven Galvin

		Date: 05/14/2020

		Purpose: Success Page for Ace in the Hole Registration
	-->

	<?php 
		array_push($page_stylesheets, "<link rel='stylesheet/less' type='text/css' href='../styles/success.less'>");

		include '../includes/head.html.php'; 
	?>

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

