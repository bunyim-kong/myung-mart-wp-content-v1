<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/detail-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/product.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/listing.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">


<?php get_header(); ?>
<?php 
$price = get_post_meta(get_the_ID(), '_price', true); 
$stock = get_post_meta(get_the_ID(), '_stock', true); 
?>

<section class="container back-section">
    <div class="back-btn">
        <a href="<?php echo site_url('/products'); ?>"><i class="fas fa-chevron-right"></i> Go Back</a>
    </div>
</section>

<section class="container product-detail-section">
    <div class="product-detail-page">
        <div class="product-detail-image">
           <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>" alt="<?php the_title_attribute(); ?>">
        </div>

        <div class="product-info">
            <span class="product-badge">Korean Product</span>

            <h1 class="product-title"><?php the_title(); ?></h1>

            <div class="product-meta">
                <span class="product-price">$<?php echo $price; ?>,00</span>
                <span class="product-stock"><?php echo $stock; ?> in stock</span>
            </div>

            <!-- Static Description -->
            <p class="product-description">
               Experience the ultimate in Korean skincare with our meticulously crafted products, designed to bring out the healthiest, 
               most radiant version of your skin. Each formula is infused with premium, high-quality ingredients that work in harmony to 
               deeply hydrate, nourish, and revitalize your complexion. Rich in antioxidants and natural extracts, our skincare solutions help 
               brighten dull skin, reduce the appearance of fine lines, and restore your skin’s natural elasticity. Ideal for daily use, they provide 
               gentle yet effective care, leaving your skin feeling soft, smooth, and refreshed. Unlock the secret to a luminous, youthful glow and 
               embrace a skincare routine that pampers your skin while delivering visible results. Perfect for anyone seeking long-lasting hydration, 
               a radiant complexion, and the confidence that comes with healthy, glowing skin.

               <br><br>

               With regular use, you’ll notice your skin becoming visibly more vibrant, even-toned, and resilient. Our products are thoughtfully designed
               to penetrate deeply, targeting both surface-level concerns and underlying signs of stress and fatigue. From the first application, your 
               skin will feel nourished and revitalized, with a subtle, healthy glow that intensifies over time.
            </p>

            <div class="product-quantity">
                <button class="qty-btn minus">−</button>
                <input type="number" value="1" min="1" />
                <button class="qty-btn plus">+</button>
            </div>

            <div class="products-button">
                <a class="button-cart" href="">Add to cart</a>
                <a class="button-detail" href="<?php echo home_url('payment'); ?>">Check out <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="container testimonial-section-detail">
    <h2 class="testimonial-title-detail">What Our Customers Say</h2>

    <div class="testimonial-wrapper">
        <div class="testimonial-card">
            <p class="testimonial-text">
                “I’ve been using these Korean skincare products for a month, and my skin has never felt better. Smooth, hydrated, and glowing!”
            </p>
            <div class="testimonial-user">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/images/user-1.jpg" alt="User">
                <div>
                    <h4>Senku Ishigami</h4>
                    <span>Verified Customer</span>
                </div>
            </div>
        </div>

        <div class="testimonial-card">
            <p class="testimonial-text">
                “The quality is amazing and the results are real. Definitely worth every penny. I will keep buying again.”
            </p>
            <div class="testimonial-user">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/images/user-2.jpg" alt="User">
                <div>
                    <h4>Gen Asagiri</h4>
                    <span>Skincare Enthusiast</span>
                </div>
            </div>
        </div>

        <div class="testimonial-card">
            <p class="testimonial-text">
                “Fast delivery, beautiful packaging, and the products work perfectly for sensitive skin like mine.”
            </p>
            <div class="testimonial-user">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/images/user-3.jpg" alt="User">
                <div>
                    <h4>Suikaa</h4>
                    <span>Loyal Customer</span>
                </div>
            </div>
        </div>
    </div>

    <div class="button-content">
        <a href="<?php echo home_url('/testimonial'); ?>">See More <i class="fas fa-arrow-right"></i></a>
    </div>
</section>

<section class="container">
    <div class="related-section">
        <h1>Related to</h1>

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
    </div>
</section>


<?php get_footer(); ?>