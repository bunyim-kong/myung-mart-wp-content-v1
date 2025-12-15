<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/product.css">
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
            <a href=""><img src="<?php echo get_template_directory_uri() . '/asset/images/category-1.png'; ?>" alt="" /></a>
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
        <?php
        $query = new WP_Query([
            'post_type' => 'product',
            'posts_per_page' => 3,
        ]);
        ?>

        <div class="products">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="product">
                    <div class="product-image">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(''); ?>

                            <span class="stock-badge">
                                In Stock
                            </span>
                        </a>
                    </div>
                    
                    <div class="product-text">
                        <h2><?php the_title(); ?></h2>
                        <span><?php echo wp_trim_words(get_the_excerpt(),); ?></span>
                        <p>$<?php echo get_post_meta(get_the_ID(), '_price', true); ?>,00</p>
                    </div>

                    <div class="products-btn">
                        <a class="btn-cart" href="">Add to cart</a>
                        <a class="btn-detail" href="<?php the_permalink(); ?>">View Detail <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

        <?php wp_reset_postdata(); ?>
    </div>

    <div class="button-content">
        <a href="<?php echo home_url('/products'); ?>">See More <i class="fas fa-arrow-right"></i></a>
    </div>
</section>

<!-- discount-section -->
<section class="discount-section">
    <img src="<?php echo get_template_directory_uri() . '/asset/images/discount.png'; ?>" alt="" />
</section>

<!-- products-section -->
<section class="container feature-section">
    <h1>Discover Our Products</h1>

    <div class="feature-content">
        <?php
        $query = new WP_Query([
            'post_type' => 'product',
            'posts_per_page' => 6,
        ]);
        ?>

        <div class="products">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="product">
                    <div class="product-image">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(''); ?>

                            <span class="stock-badge">
                                In Stock
                            </span>
                        </a>
                    </div>
                    
                    <div class="product-text">
                        <h2><?php the_title(); ?></h2>
                        <span><?php echo wp_trim_words(get_the_excerpt(),); ?></span>
                        <p>$<?php echo get_post_meta(get_the_ID(), '_price', true); ?>,00</p>
                    </div>

                    <div class="products-btn">
                        <a class="btn-cart" href="">Add to cart</a>
                        <a class="btn-detail" href="<?php the_permalink(); ?>">View Detail <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

        <?php wp_reset_postdata(); ?>
    </div>

    <div class="button-content">
        <a href="<?php echo home_url('/products'); ?>">See More <i class="fas fa-arrow-right"></i></a>
    </div>
</section>


<!-- uniqueness-section -->
<section class="unique-section">
        <div class="unique-content">
            <div class="top-unique">
                <h1>Why you should choose us?</h1>
            </div>

            <div class="button-unique">
                <div class="image-side">
                    <img src="<?php echo get_template_directory_uri() . '/asset/images/unique.png'; ?>" alt="" />
                </div>

                <div class="text-side">
                    <h1>Premium Quality Products</h1>
                    <p>"Our products are sourced directly from trusted Korean brands, ensuring authenticity and safety. Each item comes from carefully selected sources, so you can trust in its quality and effectiveness. We take pride in bringing you skincare that truly delivers results and care for your skin."</p>

                    <a href="">Get to know more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
</section>


<!-- subscribe-section -->
<section class="subscribe-section">
    <div class="subscribe-content">
        <h1>Subscribe to our Newsletter</h1>
        <p>Sign up for our newsletter and be the first to know about the latest Korean <br>
         skincare trends, exclusive offers, and expert beauty tips.</p>

        <div class="subscribe-form">
            <input type="email" placeholder="Enter your email address" />
            <button type="submit">Subscribe</button>
        </div>
    </div>
</section>


<?php get_footer(); ?>
