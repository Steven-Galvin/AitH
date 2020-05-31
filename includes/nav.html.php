<?php define('SITE_ROOT', '/cas222/AitH/'); ?>

<nav>
    <div>
        <h1>Ace in the Hole</h1>
        <p>Multisport Events<p>
    </div>

    <!-- I'm using Jonathan Suh's Hambuger Menu here. His twitter handle is @jonsuh -->

    <button class="hamburger hamburger--squeeze" type="button">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>

    <!-- These are the menu items for mobile only, they stay hidden until the hamburger menu is clicked -->

    <section id="menu-items" class="hidden">
        <a href="<?php echo SITE_ROOT; ?>">Home</a>
        <a href="<?php echo SITE_ROOT; ?>/about">About</a>
        <a href="<?php echo SITE_ROOT; ?>/registration">Registration</a>
        <a href="<?php echo SITE_ROOT; ?>/help">Help</a>
    </section>
</nav>