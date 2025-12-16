<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

<?php get_header(); ?>

<section class="container contact-section">
     <h2>Let’s get in touch!</h2>

    <div class="contact-box">

        <form class="contact-form">
            <label>Name*</label>
            <input type="text" placeholder="Your full name" required />

            <label style="margin-top: 20px;">Email*</label>
            <input type="email" placeholder="Your Email" required />

            <label style="margin-top: 20px;">Message*</label>
            <textarea placeholder="Your Words..." required></textarea>

            <button type="submit">Send</button>
        </form>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1954.556692466692!2d104.88286748849661!3d11.543723425120339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310950549f27fc1b%3A0x65c2d5b055de0d9d!2sPSE%20-%20Pour%20un%20Sourire%20d&#39;Enfant!5e0!3m2!1sen!2sus!4v1765867693811!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    </div>

  <div class="social">
        <span>
            <i class="fab fa-instagram"></i>
        </span>
        <span>
            <i class="fab fa-facebook-f"></i>
        </span>
        <span>
            <i class="fab fa-twitter"></i>
        </span>
        <span>
            <i class="fab fa-youtube"></i>
        </span>
  </div>
</section>

<section class="nothing"></section>
<?php get_footer(); ?>