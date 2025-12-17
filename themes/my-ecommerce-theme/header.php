<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head><?php wp_head(); ?></head>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
<body <?php body_class(); ?>>
<header>
    <nav class="navbar">
        <div class="nav-logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri() . '/asset/images/logo.png'; ?>" alt="<?php bloginfo('name'); ?>" />
            </a>
        </div>

        <div class="nav-links">
            <ul>
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <li><a href="<?php echo home_url('#category'); ?>">Category</a></li>
                <li><a href="<?php echo home_url('/products'); ?>">Products</a></li>
                <li><a href="<?php echo home_url('/about-us'); ?>">About us</a></li>
                <li><a href="<?php echo home_url('/contact'); ?>">Contacts</a></li>
            </ul>
        </div>

        <div class="nav-btn">
            <a  href="<?php echo home_url('cart'); ?>"><i class="material-symbols-outlined">shopping_bag</i></a>
            <a onclick="toggleTheme(); return false;" href="#"><i class="material-symbols-outlined">dark_mode</i></a>
            <a href="#"><i class="material-symbols-outlined">person</i></a>
        </div>

        <!-- menu for mobile -->
        <div class="mobile-nav">
            <div class="nav-hamburger" onclick="toggleMobileMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <!-- mobile Menu -->
        <div class="mobile-menu">
            <div class="mobile-content">
                <div class="mobile-btn">
                    <a href="<?php echo home_url('cart'); ?>"><i class="material-symbols-outlined">shopping_bag</i></a>
                </div>

                <div class="mobile-menu-header">
                    <span class="close-menu" onclick="toggleMobileMenu()"><i class="material-symbols-outlined">close</i></span>
                </div>
            </div>

            <ul>
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <li><a href="<?php echo home_url('#category'); ?>">Category</a></li>
                <li><a href="<?php echo home_url('/products'); ?>">Products</a></li>
                <li><a href="<?php echo home_url('/about-us'); ?>">About us</a></li>
                <li><a href="<?php echo home_url('/contact'); ?>">Contacts</a></li>
            </ul>

            <div class="mobile-btn extra">
                <a onclick="toggleTheme(); return false;" href="#"><i class="material-symbols-outlined">dark_mode</i></a>
                <a href="#"><i class="material-symbols-outlined">person</i></a>
            </div>
        </div>
    </nav>

    <!-- dark mode -->
    <script>
        function toggleTheme() {
        document.body.classList.toggle("dark-mode");

        if (document.body.classList.contains("dark-mode")) {
            localStorage.setItem("mode", "dark-mode");
        } else {
            localStorage.setItem("mode", "light-mode");
        }
        }

        // Save the theme
        if (localStorage.getItem("mode") === "dark-mode") {
        document.body.classList.add("dark-mode");
        }

        // mobile menu toggle
        function toggleMobileMenu() {
            document.querySelector('.mobile-menu').classList.toggle('open');
        }
    </script>
</header>
<main>