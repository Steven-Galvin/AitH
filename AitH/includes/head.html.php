<?php define('SITE_ROOT', '/cas222/AitH/'); ?>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src='https://www.googletagmanager.com/gtag/js?id=UA-168243744-1'></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-168243744-1');
    </script>

    <meta charset='UTF-8'>

    <title><?php echo $page_title; ?></title>

    <meta name='author' content='Steven Galvin'>

    <meta name='description' content='<?php echo $page_content; ?>'>

    <meta name='viewport' content='width=device-width, height=device-height, initial-scale=1'>

    <link rel='stylesheet' href='<?php echo $path_to_url; ?>styles/normalize.css'>

    <link href='https://fonts.googleapis.com/css2?family=Noto+Sans&family=Noto+Serif&display=swap' rel='stylesheet'>

    <!-- Link to hamburger stylesheet by Jonathan Suh -->

    <link href='<?php echo $path_to_url; ?>dist/hamburgers.css' rel='stylesheet'>

    <?php 
    
        foreach ($page_stylesheets as $stylesheet) {
            echo $stylesheet;
        }
    
    ?>

    <!-- Favicon Links -->

    <link rel='apple-touch-icon' sizes='180x180' href='<?php echo $path_to_url; ?>apple-touch-icon.png'>
    <link rel='icon' type='image/png' sizes='32x32' href='<?php echo $path_to_url; ?>favicon-32x32.png'>
    <link rel='icon' type='image/png' sizes='16x16' href='<?php echo $path_to_url; ?>favicon-16x16.png'>
    <link rel='manifest' href='<?php echo $path_to_url; ?>site.webmanifest'>
    <script src='<?php echo $path_to_url; ?>scripts/jquery.js'></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js'></script>
</head>