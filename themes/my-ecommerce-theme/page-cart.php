<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/listing.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/product.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/cart.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/detail-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

<?php get_header(); ?>

<section class="container back-section">
    <div class="back-btn">
        <a href="<?php echo home_url(); ?>"><i class="fas fa-chevron-right"></i> Go Back</a>
    </div>
</section>

<section class="container cart-page">
    <h1 class="cart-title">Your Shopping Cart</h1>

    <div class="cart-wrapper">
        <!-- Products Summary -->
        <div class="cart-products">
            <div class="cart-item">
                <div class="cart-item-image">
                    <img src="<?php echo get_template_directory_uri() . '/asset/products/perfume/perfume-1.webp'; ?>">
                </div>
                <div class="cart-item-info">
                    <h2>Water Desire Eau De Parfum</h2>
                    <span class="cart-item-price">$12,00</span>

                    <div class="product-quantity">
                        <button class="qty-btn minus">−</button>
                        <input type="number" value="1" min="1" />
                        <button class="qty-btn plus">+</button>
                    </div>

                    <span class="cart-item-total">Total: $12,00</span>
                </div>
                <div class="cart-item-remove">
                    <button class="remove-btn"><i class="fas fa-times"></i></button>
                </div>
            </div>

            <div class="cart-item">
                <div class="cart-item-image">
                    <img src="<?php echo get_template_directory_uri() . '/asset/products/perfume/perfume-3.webp'; ?>">
                </div>
                <div class="cart-item-info">
                    <h2>Seductive Black Eau De Parfum</h2>
                    <span class="cart-item-price">$23,00</span>

                    <div class="product-quantity">
                        <button class="qty-btn minus">−</button>
                        <input type="number" value="1" min="1" />
                        <button class="qty-btn plus">+</button>
                    </div>

                    <span class="cart-item-total">Total: $23,00</span>
                </div>
                <div class="cart-item-remove">
                    <button class="remove-btn"><i class="fas fa-times"></i></button>
                </div>
            </div>
        </div>

        <!-- Payment Summary -->
        <div class="cart-payment">
            <h2>Order Summary</h2>
            <div class="payment-details">
                <div class="payment-row">
                    <span>Subtotal</span>
                    <span>$35,00</span>
                </div>
                <div class="payment-row">
                    <span>Shipping</span>
                    <span>$5,00</span>
                </div>
                <div class="payment-row total">
                    <span>Total</span>
                    <span>$40,00</span>
                </div>
            </div>
            <a href="<?php echo home_url('payment'); ?>" class="checkout-btn">Proceed to Checkout</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>


