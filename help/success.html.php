<!DOCTYPE HTML>

<html lang="en">

	<!--
		Author: Steven Galvin

		Date: 05/14/2020

		Purpose: Help Page for Ace in the Hole
	-->

	<head>

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

		<script src="../scripts/jquery.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js"></script>
	</head>

	<body>

        <?php include '../includes/nav.html.php'; ?>

 		<?php include '../includes/header.html.php'; ?>

		<!-- Main Content -->
		 
		<main>

            <section>

				<h3>Form Submitted</h3>
				
				<p>Thank you for reaching out to us. Your input is valuable to us and we will reach out to you as soon as we can.</p>
                
                <ul>
                    Our records show you submitted the following:
                    <li>Name: <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></li>
                    <li>Email: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></li>
                    <li>Role: <?php echo htmlspecialchars($role, ENT_QUOTES, 'UTF-8'); ?></li>
                    <li>Question or Comment: <?php echo htmlspecialchars($comment, ENT_QUOTES, 'UTF-8'); ?></li>
                </ul>

			</section>

		</main>

		<?php include '../includes/footer.html.php'; ?>

	</body>
	<script src="../scripts/scripts.js" type="module"></script>
</html>

