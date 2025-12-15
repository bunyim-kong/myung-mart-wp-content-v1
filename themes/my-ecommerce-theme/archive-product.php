<?php get_header(); ?>
<h1>All Products</h1>
<<<<<<< HEAD

<div class="products">
    <?php while(have_posts()): the_post(); $price=get_post_meta(get_the_ID(),'_price',true); ?>
        <div class="product">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>

            <h2><?php the_title(); ?></h2>
            
            <p>$<?php echo $price; ?></p>
        </div>
    <?php endwhile; ?>
=======
<div class="products">
<?php while(have_posts()): the_post(); $price=get_post_meta(get_the_ID(),'_price',true); ?>
<div class="product">
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
<h2><?php the_title(); ?></h2>
<p>$<?php echo $price; ?></p>
</div>
<?php endwhile; ?>
>>>>>>> 737eda0 (test)
</div>
<?php get_footer(); ?>