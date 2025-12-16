<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/listing.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/product.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

<?php get_header(); ?>

<section class="container back-section">
    <div class="back-btn">
        <a href="<?php echo home_url(); ?>"><i class="fas fa-chevron-right"></i> Go Back</a>
    </div>
</section>

<section class="container listing-section">
    <div class="filter">
        <button class="filter-btn active" data-filter="all">All</button>
        <button class="filter-btn" data-filter="skincare">Skincare</button>
        <button class="filter-btn" data-filter="makeup">Make-up</button>
        <button class="filter-btn" data-filter="lotion">Lotion</button>
        <button class="filter-btn" data-filter="scrub">Scrub</button>
        <button class="filter-btn" data-filter="shampoo">Shampoo</button>
        <button class="filter-btn" data-filter="perfume">Perfume</button>
    </div>


    <div class="listing-content">
        <div class="feature-content">
            <?php
            $query = new WP_Query([
                'post_type' => 'product',
                'posts_per_page' => 18,
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
    </div>

    <div class="pagination">
        <button class="page-btn prev">« Prev</button>
        <button class="page-btn active">1</button>
        <button class="page-btn">2</button>
        <button class="page-btn">3</button>
        <button class="page-btn next">Next »</button>
    </div>

    
</section>

<?php get_footer(); ?>