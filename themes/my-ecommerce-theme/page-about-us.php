<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/listing.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/about-us.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<?php get_header(); ?>
<section class="about-us-section container">

<section class="container back-section">
    <div class="back-btn">
        <a href="<?php echo home_url(); ?>"><i class="fas fa-chevron-right"></i> Go Back</a>
    </div>
</section>


<section class="about-us-section2 container">
    <div class="about-us-content">
        <div class="about-us-text">
            <h2>
                About Us 
            </h2>
            <h5>
                WHY DID WE START THIS BUSINESS?
            </h5>
            <p>
                Our journey began with a deep love for Korean beauty and a mission to make authentic, high-quality products easier for everyone to access. We saw how hard it was for customers to find real, trustworthy skincare, so we created a place where quality, transparency, and reliability come first. By partnering directly with Korean brands, we aim to bridge the gap between Korea’s most-loved products and customers who deserve skincare they can truly depend on.
            </p>
        </div>

        <div class="about-us-pic">
            <img src="<?php echo get_template_directory_uri() . '/asset/images/about -image.jpg'; ?>" alt="" />
        </div>
    </div>
</section>

 <section class="about-us-section2 container">
        <div class="about-us-content2">
            <h2>
                Our Mission
            </h2>
            <p>
                Our mission is to deliver authentic Korean beauty products that people can trust and feel confident using. We aim to make high-quality skincare accessible to everyone by offering safe, verified, and effective items sourced directly from Korea.
                <br>
                <br>
                Through transparency, customer care, and a dedication to quality, we strive to help you achieve healthier, happier skin—one product at a time.
            </p>
        </div>
        <div class="about-us-content2">
            <h2>
                Our Vision
            </h2>
            <p>
                Our vission is to deliver authentic Korean beauty products that people can trust and feel confident using. We aim to make high-quality skincare accessible to everyone by offering safe, verified, and effective items sourced directly from Korea.
                <br>
                <br>
                Through transparency, customer care, and a dedication to quality, we strive to help you achieve healthier, happier skin—one product at a time.            </p>
            
        </div>
        
    </section>
    
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