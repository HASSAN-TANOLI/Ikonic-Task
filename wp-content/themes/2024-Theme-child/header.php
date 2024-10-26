<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="header-container">
        <a href="http://ikonic-task.local/">
        <img class="site-logo" src="http://ikonic-task.local/wp-content/uploads/2024/10/Screenshot.png" alt="site-logo"/>
        </a>
        <div class="menu-icon" onclick="toggleMenu()">
            <!-- Hamburger Icon -->
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav class="primary-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'nav-menu', 
            ));
            ?>
        </nav>
    </div>
</header>

<script>
function toggleMenu() {
    const menu = document.querySelector('.primary-menu');
    menu.classList.toggle('show');
}
</script>

