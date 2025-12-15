<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
<?php get_header(); ?>

<section class="hero-section">
     <img src="<?php echo get_template_directory_uri() . '/images/hero-section.png'; ?>" alt="" />

        <div class="hero-text">
            <h1>Discover Your Glow with Premium <br>
                Korean Skincare</h1>

            <input type="text" placeholder="Search for products..." />

            <a href="<?php echo home_url('/products'); ?>" class="shop-now-btn">Shop Now <i class="fas fa-arrow-right"></i></a>
        </div>
</section>