<?php
// PHP Script to calculate the relative root path
// This means this header works whether it's called from index.php or client/signup.php
if (!defined('ABS_PATH')) {
    // Determine the root depth
    $depth = substr_count($_SERVER['PHP_SELF'], '/') - 1;
    define('ABS_PATH', str_repeat('../', $depth));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Super Visual Salon - Korean Beauty Salon'; ?></title>
    
    <link rel="icon" type="image/png" href="<?php echo ABS_PATH; ?>images/svs-icon.png">

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;1,400&family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo ABS_PATH; ?>assets/css/main.css"> <link rel="stylesheet" href="<?php echo ABS_PATH; ?>assets/css/auth.css"> </head>
<body>

<header class="site-header">
    
    <div class="top-auth-bar">
        <div class="container auth-flex">
            <a href="<?php echo ABS_PATH; ?>index.php" class="brand-link">
                <img src="<?php echo ABS_PATH; ?>images/svs-icon.png" alt="SVS Logo" class="brand-logo">
                <span class="brand-name serif-heading">SUPER VISUAL SALON</span>
            </a>

            <nav class="auth-nav">
                <a href="<?php echo ABS_PATH; ?>client/client-signup.php" class="auth-link">Sign Up</a>
                <a href="<?php echo ABS_PATH; ?>client/client-login.php" class="auth-link">Log In</a>
            </nav>
        </div>
    </div>

    <nav class="main-nav-bar">
        <div class="container nav-flex">
            <?php $current_page = basename($_SERVER['PHP_SELF']); ?>
            
            <a href="<?php echo ABS_PATH; ?>index.php" class="nav-item <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a>
            <a href="#" class="nav-item">About</a>
            <a href="#" class="nav-item">Services</a>
            <a href="#" class="nav-item">Stylists</a>
            <a href="#" class="nav-item">Reviews</a>
        </div>
    </nav>

</header>

<style>
/* --- site-header.css (Add to assets/css/main.css) --- */

.site-header {
    width: 100%;
}

/* === Top Auth Bar === */
.top-auth-bar {
    background-color: var(--clr-charcoal);
    color: var(--clr-white);
    padding: 15px 0;
}

.auth-flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.brand-link {
    display: flex;
    align-items: center;
    gap: 15px;
}

.brand-logo {
    height: 40px; /* Adjust based on your actual logo */
}

.brand-name {
    font-size: 20px;
    letter-spacing: 2px;
    color: var(--clr-gold); /* Using gold from variables */
}

.auth-nav {
    display: flex;
    gap: 25px;
}

.auth-link {
    font-size: 13px;
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 1px;
    opacity: 0.8;
}

.auth-link:hover {
    opacity: 1;
    color: var(--clr-gold);
}

/* === Main Nav Bar (The Bar) === */
.main-nav-bar {
    background-color: var(--clr-taupe); /* Using variable for that taupe bar */
    border-bottom: 1px solid rgba(0,0,0,0.05);
}

.nav-flex {
    display: flex;
    justify-content: flex-start; /* Aligned to the left, as requested */
    gap: 40px; /* Space between items */
    padding-top: 20px;
    padding-bottom: 20px;
}

.nav-item {
    font-size: 15px;
    font-weight: 400;
    text-transform: capitalize;
    letter-spacing: 1px;
    color: var(--clr-charcoal);
    padding: 5px 0;
    position: relative; /* For the active state underline */
}

.nav-item:hover, .nav-item.active {
    color: var(--clr-cream);
}

/* The soft professional underline for active state */
.nav-item.active::after {
    content: '';
    position: absolute;
    bottom: -3px;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: var(--clr-cream);
    border-radius: 2px;
}
</style>