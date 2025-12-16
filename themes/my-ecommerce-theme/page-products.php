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
        <button class="filter-btn active" data-category="all">All</button>
        <button class="filter-btn" data-category="skincare">Skincare</button>
        <button class="filter-btn" data-category="make-up">Make-up</button>
        <button class="filter-btn" data-category="lotion">Lotion</button>
        <button class="filter-btn" data-category="scrub">Scrub</button>
        <button class="filter-btn" data-category="shampoo">Shampoo</button>
        <button class="filter-btn" data-category="perfume">Perfume</button>
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
                <?php while ($query->have_posts()) : $query->the_post();

                    $terms = get_the_terms(get_the_ID(), 'product_category');
                    $category_slug = '';
                    if ($terms && !is_wp_error($terms)) {
                        $category_slug = $terms[0]->slug; // use first category only
                    }
                    ?>
                    <div class="product" data-category="<?php echo esc_attr($category_slug); ?>">

                        <div class="product-image">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                                <span class="stock-badge">In Stock</span>
                            </a>
                        </div>

                        <div class="product-text">
                            <h2><?php the_title(); ?></h2>
                            <span><?php echo wp_trim_words(get_the_excerpt(), 12); ?></span>
                            <p>$<?php echo get_post_meta(get_the_ID(), '_price', true); ?>.00</p>
                        </div>

                        <div class="products-btn">
                            <a class="btn-cart" href="#">Add to cart</a>
                            <a class="btn-detail" href="<?php the_permalink(); ?>">
                                View Detail <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
                </div>
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

</script>

<?php get_footer(); ?>