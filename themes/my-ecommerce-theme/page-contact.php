<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

<?php get_header(); ?>

<section class="container back-section">
    <div class="back-btn">
        <a href="<?php echo home_url(); ?>"><i class="fas fa-chevron-right"></i> Go Back</a>
    </div>
</section>


<section class="container contact-section">
    <h2>Let’s get in touch!</h2>

    <div class="contact-cols">
        <div class="form">
            <form class="contact-form">
                <label>Name*</label>
                <input type="text" placeholder="Your full name" required />

                <label>Email*</label>
                <input type="email" placeholder="Your Email" required />

                <label>Message*</label>
                <textarea placeholder="Your Words..." required></textarea>

                <button type="submit">Send</button>
            </form>
        </div>

        <div class="map">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18..."
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>


<section class="nothing"></section>

<?php get_footer(); ?>
