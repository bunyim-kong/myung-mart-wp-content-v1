<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
<?php get_header(); ?>

<!-- hero-section -->
<section class="hero-section">
     <img src="<?php echo get_template_directory_uri() . '/asset/images/hero-section.png'; ?>" alt="" />

        <div class="hero-text">
            <h1>Discover Your Glow with Premium <br>
                Korean Skincare</h1>

            <input type="text" placeholder="Search for products..." />

            <a href="<?php echo home_url('/products'); ?>" class="shop-now-btn">Shop Now <i class="fas fa-arrow-right"></i></a>
        </div>
</section>

<!-- category-section -->
<section class="container category-section">
    <h1>Find What Your Skin Needs</h1>

    <div class="category-content">
        <div class="category-item">
            <img src="<?php echo get_template_directory_uri() . '/asset/images/category-1.png'; ?>" alt="" />
            <h1>Skincare</h1>
        </div>

        <div class="category-item">
            <img src="<?php echo get_template_directory_uri() . '/asset/images/category-2.png'; ?>" alt="" />
            <h1>Lotion</h1>
        </div>

        <div class="category-item">
            <img src="<?php echo get_template_directory_uri() . '/asset/images/category-3.png'; ?>" alt="" />
            <h1>Scrub</h1>
        </div>

        <div class="category-item">
            <img src="<?php echo get_template_directory_uri() . '/asset/images/category-4.png'; ?>" alt="" />
            <h1>Make-up</h1>
        </div>

        <div class="category-item">
            <img src="<?php echo get_template_directory_uri() . '/asset/images/category-6.webp'; ?>" alt="" />
            <h1>Shampoo</h1>
        </div>

        <div class="category-item">
            <img src="<?php echo get_template_directory_uri() . '/asset/images/category-5.png'; ?>" alt="" />
            <h1>Perfume</h1>
        </div>
    </div>
</section>

<!-- feature-section -->
<section class="container feature-section">
    <h1>Our Best Features</h1>

    <div class="feature-content">
        
    </div>
</section>