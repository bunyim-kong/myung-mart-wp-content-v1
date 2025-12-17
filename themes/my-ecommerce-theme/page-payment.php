<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/payment.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/product.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/cart.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/listing.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

<?php get_header(); ?>

<section class="container back-section">
    <div class="back-btn">
        <a href="<?php echo home_url(); ?>"><i class="fas fa-chevron-right"></i> Go Back</a>
    </div>
</section>

<section class="container payment-page">
    <h1 class="payment-title">Payment Information</h1>

    <div class="payment-wrapper">
        <!-- Cash Information -->
        <div class="payment-form">
            <h2>Cash on Delivery</h2>
            <p class="payment-note">
                Please fill in your information. You will pay in cash when your order arrives.
            </p>

            <div class="form-group">
                <label>Full Name</label>
                <input type="text" placeholder="Enter your full name">
            </div>

            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" placeholder="Enter your phone number">
            </div>

            <div class="form-group">
                <label>Delivery Address</label>
                <textarea placeholder="Enter your delivery address"></textarea>
            </div>

            <div class="form-group">
                <label>Note (Optional)</label>
                <textarea placeholder="Any delivery note..."></textarea>
            </div>

            <button class="confirm-btn">Confirm Order</button>
        </div>

        <!-- Order Summary -->
        <div class="payment-summary">
            <h2>Order Summary</h2>

            <div class="summary-row">
                <span>Subtotal</span>
                <span>$165,00</span>
            </div>

            <div class="summary-row">
                <span>Shipping</span>
                <span>$5,00</span>
            </div>

            <div class="summary-row total">
                <span>Total</span>
                <span>$170,00</span>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
