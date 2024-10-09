<?php 

//functions.php

add_action( 'wp_enqueue_scripts', 'enqueue_theme_style' );

function enqueue_theme_style() {

//Theme stylesheets 
wp_enqueue_style( 'style', get_stylesheet_directory_uri().'/css/style.css' );
//wp_enqueue_style( 'stylesheet', get_stylesheet_directory_uri().'/css/stylesheet.css' );

//Theme stylesheets
wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.css' );

//Scripts Files
//wp_enqueue_script( 'owl', get_stylesheet_directory_uri().'/js/jquery-3.1.1.min.js' );
wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri().'/js/bootstrap.min.js' ); 
}


function remove_default_sidebar(){
	unregister_sidebar('sidebar-1');
	unregister_sidebar('sidebar-2');
}
add_action('widgets_init','remove_default_sidebar',11);


function arphabet_widgets_init() {
	
	register_sidebar( array(
		'name'          => 'Header Top Content',
		'id'            => 'header-top-content',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => 'Header Mobile Info',
		'id'            => 'header-mobile-info',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Header Logo',
		'id'            => 'header-logo',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Header Search Button',
		'id'            => 'header-search-button',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Header Button',
		'id'            => 'header-button',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	
	register_sidebar( array(
		'name'          => 'Footer Logo',
		'id'            => 'footer-logo',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Footer Contact Details',
		'id'            => 'footer-contact-details',
		'before_widget' => '<div class="">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Stock Candy Navigation',
		'id'            => 'stock-candy-navigation',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
	) );

	register_sidebar( array(
		'name'          => 'Custom Capabilities Navigation',
		'id'            => 'custom-capabilities-navigation',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
	) );

	register_sidebar( array(
		'name'          => 'Footer About Navigation',
		'id'            => 'footer-about-navigation',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
	) );

	register_sidebar( array(
		'name'          => 'Footer Button And Image',
		'id'            => 'footer-button-and-image',
		'before_widget' => '<li>',
		'after_widget'  => '</li>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Copyright Text',
		'id'            => 'copyright-text',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => 'Products Sidebar',
		'id'            => 'product-sidebar',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => 'Shop Banner Content',
		'id'            => 'shop-banner-content',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

/*
function register_custom_post_types() {
register_post_type( 'our-team',
		array(
			'labels'       => array(
				'name'       => __( 'Our Team' ),
				'add_new_item' => __('Add New Member'),
			),
			'public'       => true,
			'hierarchical' => true,
			'has_archive'  => true,
			'supports'     => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt',
			)
		)
	);
	$args = array(
        'label'        => __( 'Member Type', 'textdomain' ),
        'public'       => true,
        'rewrite'      => false,
        'hierarchical' => true
    );
     	
    register_taxonomy( 'member-type', 'our-team', $args );

	register_post_type( 'faqs',
		array(
			'labels'       => array(
				'name'       => __( 'FAQs' ),
				'add_new_item' => __('Add New FAQ'),
			),
			'public'       => true,
			'hierarchical' => true,
			'has_archive'  => true,
			'supports'     => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt',
			)
		)
	);	
	
	register_post_type( 'programs',
		array(
			'labels'       => array(
				'name'       => __( 'Programs' ),
				'add_new_item' => __('Add New program'),
			),
			'public'       => true,
			'hierarchical' => true,
			'has_archive'  => true,
			'supports'     => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt',
			)
		)
	);
	
	register_post_type( 'events',
		array(
			'labels'       => array(
				'name'       => __( 'Events' ),
				'add_new_item' => __('Add New Event'),
			),
			'public'       => true,
			'hierarchical' => true,
			'has_archive'  => true,
			'supports'     => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt',
			)
		)
	);

	register_post_type( 'volunteer',
		array(
			'labels'       => array(
				'name'       => __( 'Volunteer' ),
				'add_new_item' => __('Add New Volunteer'),
			),
			'public'       => true,
			'hierarchical' => true,
			'has_archive'  => true,
			'supports'     => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt',
			)
		)
	);	


	$labels = array(
		'name'               => _x( 'Resources', 'post type general name' ),
		'singular_name'      => _x( 'Resource', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'Resources' ),
		'add_new_item'       => __( 'Add New Resources' ),
		'edit_item'          => __( 'Edit Resources' ),
		'new_item'           => __( 'New Resources' ),
		'all_items'          => __( 'All Resources' ),
		'view_item'          => __( 'View Resources' ),
		'search_items'       => __( 'Search Resources' ),
		'not_found'          => __( 'No Resources found' ),
		'not_found_in_trash' => __( 'No Resources found in the Trash' ), 
		'parent_item_coleon'  => '',
		'menu_name'          => 'Resources'
	  );
	
	  $args = array(
		'labels'        => $labels,
		'description'   => 'Holds Service Care and Service Care specific data',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'comments' ),
		'has_archive'   => true,
	  );
	
	  register_post_type( 'Resources', $args ); 

}
 add_action( 'init', 'register_custom_post_types', 0 );
*/

/**
 * @snippet       Add Custom Field to Product Variations - WooCommerce
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 4.6
 * @community     https://businessbloomer.com/club/
 */
 
// -----------------------------------------
// 1. Add custom field input @ Product Data > Variations > Single Variation
 
add_action( 'woocommerce_variation_options_pricing', 'bbloomer_add_custom_field_to_variations', 10, 3 );
 
function bbloomer_add_custom_field_to_variations( $loop, $variation_data, $variation ) {
   woocommerce_wp_text_input( array(
'id' => 'custom_field[' . $loop . ']',
'class' => 'short',
'label' => __( 'Custom Field', 'woocommerce' ),
'value' => get_post_meta( $variation->ID, 'custom_field', true )
   ) );
}
 
// -----------------------------------------
// 2. Save custom field on product variation save
 
add_action( 'woocommerce_save_product_variation', 'bbloomer_save_custom_field_variations', 10, 2 );
 
function bbloomer_save_custom_field_variations( $variation_id, $i ) {
   $custom_field = $_POST['custom_field'][$i];
   if ( isset( $custom_field ) ) update_post_meta( $variation_id, 'custom_field', esc_attr( $custom_field ) );
}
 
// -----------------------------------------
// 3. Store custom field value into variation data
 
add_filter( 'woocommerce_available_variation', 'bbloomer_add_custom_field_variation_data' );
 
function bbloomer_add_custom_field_variation_data( $variations ) {
   $variations['custom_field'] = '<div class="woocommerce_custom_field"><strong>Case Qty:</strong> <span>' . get_post_meta( $variations[ 'variation_id' ], 'custom_field', true ) . '</span></div>';
   return $variations;
}

add_filter( 'woocommerce_get_price_html', 'cw_change_product_price_display' );
add_filter( 'woocommerce_cart_item_price', 'cw_change_product_price_display' );
function cw_change_product_price_display( $price ) {
    // Your additional text in a translatable string
    $text = __('<strong>Price: </strong>');

    // returning the text before the price
    return $text . ' ' . $price;
}

add_action( 'woocommerce_single_product_summary', 'move_single_product_title', 1 );
function move_single_product_title(){
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 ); 
    add_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 15 );
}




/*
add_action( 'woocommerce_after_add_to_cart_form', 'product_enquiry_custom_form' );
function product_enquiry_custom_form() {

    global $product, $post;

    // Set HERE your Contact Form 7 shortcode:
    $contact_form_shortcode = '[contact-form-7 id="e45ff0e" title="Contact form 1"]';

    // Compatibility with WC +3
    $product_id = method_exists( $product, 'get_id' ) ? $product->get_id() : $product->id;
    $product_title = $post->post_title;

    // The email subject for the "Subject Field"
    $email_subject = __( 'Enquire about', 'woocommerce' ) . ' ' . $product_title;

    foreach($product->get_available_variations() as $variation){
        $variation_id = $variation['variation_id'];
        foreach($variation['attributes'] as $key => $value){
            $key = ucfirst( str_replace( 'attribute_pa_', '', $key ) );
            $variations_attributes[$variation_id][$key] = $value;
        }
    }

    ## CSS INJECTED RULES ## (You can also remove this and add the CSS to the style.css file of your theme)
    ?>
    <style>
        .wpcf7-form-control-wrap.your-product{ opacity:0;width:0px;height:0px;overflow: hidden;display:block;margin:0;padding:0;}
    </style>

    <?php

    // Displaying the title for the form (optional)
    // echo '<h3>'.$email_subject.'</h3><br>';
    echo '<div class="enquiry-form">' . do_shortcode( $contact_form_shortcode ) . '</div>';

    ## THE JQUERY SCRIPT ##
    ?>
    <script>
        jQuery(document).ready(function($) {

            // Displaying the subject in the subject field
            $('.product_name').val('<?php echo $email_subject; ?>');

            // Listen for changes in variation select fields
            $('input[name="variation_id"]').change(function() {
                var variationId = $(this).val();
                if (variationId !== '') {
                    var attributes = <?php echo json_encode($variations_attributes); ?>;
                    var variationAttributes = attributes[variationId];
                    var attributesString = '';
                    for (var key in variationAttributes) {
                        attributesString += key + ': ' + variationAttributes[key] + ', ';
                    }
                    $('.product_details').val('Product <?php echo $product_title; ?> (ID <?php echo $product_id; ?>): ' + attributesString);
                }
            });

        });
    </script>
    <?php
}




add_action( 'woocommerce_after_add_to_cart_form', 'product_enquiry_custom_form' );
function product_enquiry_custom_form() {

    global $product, $post;

    // Set HERE your Contact Form 7 shortcode:
    $contact_form_shortcode = '[contact-form-7 id="e45ff0e" title="Contact form 1"]';

    // Compatibility with WC +3
    $product_id = method_exists( $product, 'get_id' ) ? $product->get_id() : $product->id;
    $product_title = $post->post_title;

    // The email subject for the "Subject Field"
    $email_subject = __( 'Enquire about', 'woocommerce' ) . ' ' . $product_title;

    foreach($product->get_available_variations() as $variation){
        $variation_id = $variation['variation_id'];
        foreach($variation['attributes'] as $key => $value){
            $key = ucfirst( str_replace( 'attribute_pa_', '', $key ) );
            $variations_attributes[$variation_id][$key] = $value;
        }
        // Add price to variations attributes
        $variations_attributes[$variation_id]['Price'] = $variation['display_price'];
    }

    ## CSS INJECTED RULES ## (You can also remove this and add the CSS to the style.css file of your theme)
    ?>
    <style>
        .wpcf7-form-control-wrap.your-product{ opacity:0;width:0px;height:0px;overflow: hidden;display:block;margin:0;padding:0;}
    </style>

    <?php

    // Displaying the title for the form (optional)
    // echo '<h3>'.$email_subject.'</h3><br>';
    echo '<div class="enquiry-form">' . do_shortcode( $contact_form_shortcode ) . '</div>';

    ## THE JQUERY SCRIPT ##
    ?>
    <script>
        jQuery(document).ready(function($) {

            // Displaying the subject in the subject field
            $('.product_name').val('<?php echo $email_subject; ?>');

            // Listen for changes in variation select fields
            $('input[name="variation_id"]').change(function() {
                var variationId = $(this).val();
                if (variationId !== '') {
                    var attributes = <?php echo json_encode($variations_attributes); ?>;
                    var variationAttributes = attributes[variationId];
                    var attributesString = '';
                    for (var key in variationAttributes) {
                        attributesString += key + ': ' + variationAttributes[key] + ', ';
                    }
                    $('.product_details').val('Product <?php echo $product_title; ?> (ID <?php echo $product_id; ?>): ' + attributesString);
                }
            });

        });
    </script>
    <?php
}


add_action( 'woocommerce_after_add_to_cart_form', 'product_enquiry_custom_form' );
function product_enquiry_custom_form() {

    global $product, $post;

    // Set HERE your Contact Form 7 shortcode:
    $contact_form_shortcode = '[contact-form-7 id="e45ff0e" title="Contact form 1"]';

    // Compatibility with WC +3
    $product_id = method_exists( $product, 'get_id' ) ? $product->get_id() : $product->id;
    $product_title = $post->post_title;

    // The email subject for the "Subject Field"
    $email_subject = __( 'Enquire about', 'woocommerce' ) . ' ' . $product_title;

    foreach($product->get_available_variations() as $variation){
        $variation_id = $variation['variation_id'];
        foreach($variation['attributes'] as $key => $value){
            $key = ucfirst( str_replace( 'attribute_pa_', '', $key ) );
            $variations_attributes[$variation_id][$key] = $value;
        }
        // Add price to variations attributes
        $variations_attributes[$variation_id]['Price'] = $variation['display_price'];
    }

    ## CSS INJECTED RULES ## (You can also remove this and add the CSS to the style.css file of your theme)
    ?>
    <style>
        .wpcf7-form-control-wrap.your-product{ opacity:0;width:0px;height:0px;overflow: hidden;display:block;margin:0;padding:0;}
    </style>

    <?php

    // Displaying the title for the form (optional)
    // echo '<h3>'.$email_subject.'</h3><br>';
    echo '<div class="enquiry-form">' . do_shortcode( $contact_form_shortcode ) . '</div>';

    ## THE JQUERY SCRIPT ##
    ?>
    <script>
        jQuery(document).ready(function($) {

            // Displaying the subject in the subject field
            $('.product_name').val('<?php echo $email_subject; ?>');

            // Listen for changes in variation select fields
            $('input[name="variation_id"]').change(function() {
                var variationId = $(this).val();
                if (variationId !== '') {
                    var attributes = <?php echo json_encode($variations_attributes); ?>;
                    var variationAttributes = attributes[variationId];
                    var attributesString = '';
                    for (var key in variationAttributes) {
                        attributesString += key + ': ' + variationAttributes[key] + ', ';
                    }
                    $('.product_details').val('Product <?php echo $product_title; ?> (ID <?php echo $product_id; ?>): ' + attributesString);
                }
            });

        });
    </script>
    <?php
}


// Add this code to your theme's functions.php file or a custom plugin

add_action( 'woocommerce_before_single_product', 'display_cart_product_data' );

function display_cart_product_data() {
    global $woocommerce;

    // Check if the query parameter indicating a new product addition is present
    if ( isset( $_GET['added-to-cart'] ) ) {
        return; // If the parameter is present, do not display cart data
    }

    // Get cart content
    $cart_items = $woocommerce->cart->get_cart();

    // Check if cart is not empty
    if ( !empty($cart_items) ) {
        // Loop through each item in the cart
        foreach ( $cart_items as $cart_item_key => $cart_item ) {
            // Get product data
            $product_id = $cart_item['product_id'];
            $product_name = $cart_item['data']->get_name();
            $product_price = $cart_item['data']->get_price();
            $product_quantity = $cart_item['quantity'];
			$total_price = $product_quantity * $product_price;
            
            // Display the data
           // echo "<p>Product Name: $product_name</p>";
           // echo "<p>Product Price: $product_price</p>";
           // echo "<p>Quantity: $product_quantity</p>";
            echo "<p>Total Price: $total_price</p>";
        }
    } else {
        echo "<p>No items in the cart</p>";
    }
}

*/


/**
 * @snippet       Add "Quantity:" before Add to Cart Button - WooCommerce
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @testedwith    WooCommerce 8
 * @community     https://businessbloomer.com/club/
 */
 
add_action( 'woocommerce_before_add_to_cart_quantity', 'bbloomer_echo_qty_front_add_cart' );
 
function bbloomer_echo_qty_front_add_cart() {
   global $product;
   if ( $product->get_min_purchase_quantity() == $product->get_max_purchase_quantity() ) return;
   echo '<div class="qty">Number of Cases: </div>'; 
}


// Add SKU after the short description in WooCommerce product pages
add_action('woocommerce_single_product_summary', 'display_sku_after_short_description', 21);

function display_sku_after_short_description() {
    global $product;

    // Check if the product has an SKU
    if ($product->get_sku()) {
        echo '<div class="product-sku">';
        echo '<strong>Item Number: </strong>' . $product->get_sku();
        echo '</div>';
    }
}

function remove_wp_block_library_css(){
wp_dequeue_style( 'wp-block-library' );
wp_dequeue_style( 'wp-block-library-theme' );
wp_dequeue_style( 'wc-block-style' ); // REMOVE WOOCOMMERCE BLOCK CSS
wp_dequeue_style( 'global-styles' ); // REMOVE THEME.JSON
}
add_action( 'wp_enqueue_scripts', 'remove_wp_block_library_css', 100 ); 

function remove_image_zoom_support() {
    remove_theme_support( 'wc-product-gallery-zoom' );
}
add_action( 'wp', 'remove_image_zoom_support', 100 );
?>
