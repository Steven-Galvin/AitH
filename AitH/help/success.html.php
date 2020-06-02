<!DOCTYPE HTML>

<html lang="en">

	<!--
		Author: Steven Galvin

		Date: 05/14/2020

		Purpose: Success Page for Ace in the Hole Help Center
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
				
				<p>Thank you for reaching out to us, <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>. Your input is valuable to us and we will reach out to you as soon as we can.</p>
                
                <ul>
                    Our records show you submitted the following:
                    <li>Name: <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></li>
                    <li>Email: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></li>
                    <li>Role: <?php echo htmlspecialchars($role, ENT_QUOTES, 'UTF-8'); ?></li>
                    <li>Question or Comment: <?php echo htmlspecialchars($comment, ENT_QUOTES, 'UTF-8'); ?></li>
                </ul>

				<button class="main-button" onclick="location.href='<?php echo SITE_ROOT; ?>';">Return to Home Page</button>
			</section>

		</main>

		<?php include '../includes/footer.html.php'; ?>

	</body>
	<script src="../scripts/scripts.js" type="module"></script>
</html>

