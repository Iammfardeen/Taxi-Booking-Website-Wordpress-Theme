<?php
/**
 * NCR Travel Company Theme Functions
 *
 * @package ncr-travel
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// ============================================================
// THEME SETUP
// ============================================================
function ncr_theme_setup() {
    load_theme_textdomain( 'ncr-travel', get_template_directory() . '/languages' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form','comment-form','comment-list','gallery','caption','style','script' ) );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );

    // Elementor support
    add_theme_support( 'elementor' );

    // Register nav menus
    register_nav_menus( array(
        'primary'   => __( 'Primary Navigation', 'ncr-travel' ),
        'footer-1'  => __( 'Footer Routes', 'ncr-travel' ),
        'footer-2'  => __( 'Footer Cab Types', 'ncr-travel' ),
        'footer-3'  => __( 'Footer Quick Links', 'ncr-travel' ),
    ) );

    // Post thumbnail sizes
    add_image_size( 'ncr-blog-thumb',  800, 450, true );
    add_image_size( 'ncr-blog-medium', 400, 250, true );
    add_image_size( 'ncr-fleet-thumb', 600, 350, true );
}
add_action( 'after_setup_theme', 'ncr_theme_setup' );

// ============================================================
// ENQUEUE SCRIPTS & STYLES
// ============================================================
function ncr_scripts() {
    // Google Fonts
    wp_enqueue_style( 'ncr-google-fonts',
        'https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,400&display=swap',
        array(), null );

    // Main stylesheet
    wp_enqueue_style( 'ncr-style', get_stylesheet_uri(), array( 'ncr-google-fonts' ), '1.0.0' );

    // Main JS
    wp_enqueue_script( 'ncr-main', get_template_directory_uri() . '/assets/js/main.js',
        array(), '1.0.0', true );

    // Localise PHP data for JS
    wp_localize_script( 'ncr-main', 'ncrData', array(
        'ajaxUrl'    => admin_url( 'admin-ajax.php' ),
        'nonce'      => wp_create_nonce( 'ncr_form_nonce' ),
        'phone'      => esc_attr( get_theme_mod( 'ncr_phone', '+919818545508' ) ),
        'whatsapp'   => esc_attr( get_theme_mod( 'ncr_whatsapp', '919818545508' ) ),
    ) );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'ncr_scripts' );

// ============================================================
// CUSTOMIZER SETTINGS
// ============================================================
function ncr_customizer( $wp_customize ) {

    // ---- Business Info Panel ----
    $wp_customize->add_panel( 'ncr_business', array(
        'title'    => __( 'Business Info', 'ncr-travel' ),
        'priority' => 30,
    ) );

    // Section: Contact Details
    $wp_customize->add_section( 'ncr_contact', array(
        'title' => __( 'Contact Details', 'ncr-travel' ),
        'panel' => 'ncr_business',
    ) );

    $fields = array(
        'ncr_phone'     => array( 'label' => 'Phone Number',    'default' => '+91-9818545508' ),
        'ncr_whatsapp'  => array( 'label' => 'WhatsApp Number (digits only)', 'default' => '919818545508' ),
        'ncr_email'     => array( 'label' => 'Email Address',   'default' => 'ncrtravelco@gmail.com' ),
        'ncr_address'   => array( 'label' => 'Address',         'default' => 'Okhla, Delhi, India - 110025' ),
        'ncr_instagram' => array( 'label' => 'Instagram URL',   'default' => '#' ),
    );

    foreach ( $fields as $id => $args ) {
        $wp_customize->add_setting( $id, array( 'default' => $args['default'], 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'refresh' ) );
        $wp_customize->add_control( $id, array( 'label' => $args['label'], 'section' => 'ncr_contact', 'type' => 'text' ) );
    }

    // Section: Hero Content
    $wp_customize->add_section( 'ncr_hero', array(
        'title' => __( 'Hero Section', 'ncr-travel' ),
        'panel' => 'ncr_business',
    ) );

    $hero_fields = array(
        'ncr_hero_title'   => array( 'label' => 'Hero Title',       'default' => 'Your Journey, Our Responsibility' ),
        'ncr_hero_desc'    => array( 'label' => 'Hero Description',  'default' => 'Premium outstation cab booking from Delhi. AC cabs, experienced drivers, no hidden charges.' ),
        'ncr_stat_1_num'   => array( 'label' => 'Stat 1 Number',    'default' => '2000+' ),
        'ncr_stat_1_label' => array( 'label' => 'Stat 1 Label',     'default' => 'Happy Customers' ),
        'ncr_stat_2_num'   => array( 'label' => 'Stat 2 Number',    'default' => '150+' ),
        'ncr_stat_2_label' => array( 'label' => 'Stat 2 Label',     'default' => 'Routes Covered' ),
        'ncr_stat_3_num'   => array( 'label' => 'Stat 3 Number',    'default' => '24/7' ),
        'ncr_stat_3_label' => array( 'label' => 'Stat 3 Label',     'default' => 'Support Available' ),
    );

    foreach ( $hero_fields as $id => $args ) {
        $wp_customize->add_setting( $id, array( 'default' => $args['default'], 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'refresh' ) );
        $wp_customize->add_control( $id, array( 'label' => $args['label'], 'section' => 'ncr_hero', 'type' => 'text' ) );
    }
}
add_action( 'customize_register', 'ncr_customizer' );

// ============================================================
// WIDGET AREAS
// ============================================================
function ncr_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'ncr-travel' ),
        'id'            => 'sidebar-blog',
        'description'   => __( 'Add widgets here to appear in the blog sidebar.', 'ncr-travel' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Widget Area', 'ncr-travel' ),
        'id'            => 'footer-widgets',
        'description'   => __( 'Widgets in this area appear in the footer.', 'ncr-travel' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'ncr_widgets_init' );

// ============================================================
// CUSTOM POST TYPES
// ============================================================
function ncr_register_post_types() {

    // Routes CPT
    register_post_type( 'ncr_route', array(
        'labels'      => array(
            'name'          => __( 'Routes', 'ncr-travel' ),
            'singular_name' => __( 'Route', 'ncr-travel' ),
            'add_new'       => __( 'Add New Route', 'ncr-travel' ),
            'add_new_item'  => __( 'Add New Route', 'ncr-travel' ),
            'edit_item'     => __( 'Edit Route', 'ncr-travel' ),
        ),
        'public'      => true,
        'has_archive' => true,
        'menu_icon'   => 'dashicons-location-alt',
        'supports'    => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'show_in_rest'=> true,
        'rewrite'     => array( 'slug' => 'routes' ),
    ) );

    // Fleet CPT
    register_post_type( 'ncr_fleet', array(
        'labels'      => array(
            'name'          => __( 'Fleet', 'ncr-travel' ),
            'singular_name' => __( 'Cab', 'ncr-travel' ),
            'add_new'       => __( 'Add New Cab', 'ncr-travel' ),
        ),
        'public'      => true,
        'has_archive' => true,
        'menu_icon'   => 'dashicons-car',
        'supports'    => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'show_in_rest'=> true,
        'rewrite'     => array( 'slug' => 'fleet' ),
    ) );

    // Testimonials CPT
    register_post_type( 'ncr_testimonial', array(
        'labels'      => array(
            'name'          => __( 'Testimonials', 'ncr-travel' ),
            'singular_name' => __( 'Testimonial', 'ncr-travel' ),
            'add_new'       => __( 'Add Testimonial', 'ncr-travel' ),
        ),
        'public'      => false,
        'show_ui'     => true,
        'menu_icon'   => 'dashicons-format-quote',
        'supports'    => array( 'title', 'editor', 'custom-fields' ),
        'show_in_rest'=> true,
    ) );
}
add_action( 'init', 'ncr_register_post_types' );

// ============================================================
// AJAX FORM HANDLER
// ============================================================
function ncr_handle_form() {
    check_ajax_referer( 'ncr_form_nonce', 'nonce' );
    $name    = sanitize_text_field( $_POST['name'] ?? '' );
    $phone   = sanitize_text_field( $_POST['phone'] ?? '' );
    $from    = sanitize_text_field( $_POST['from'] ?? '' );
    $to      = sanitize_text_field( $_POST['to'] ?? '' );
    $date    = sanitize_text_field( $_POST['date'] ?? '' );
    $cab     = sanitize_text_field( $_POST['cab'] ?? '' );
    $message = sanitize_textarea_field( $_POST['message'] ?? '' );

    // Send notification email to admin
    $admin_email = get_option('admin_email');
    $to_email    = get_theme_mod('ncr_email', 'ncrtravelco@gmail.com');
    $subject     = "New Cab Enquiry from $name – NCR Travel Company";
    $body  = "Name: $name\n";
    $body .= "Phone: $phone\n";
    $body .= "From: $from\n";
    $body .= "To: $to\n";
    $body .= "Date: $date\n";
    $body .= "Cab Type: $cab\n";
    $body .= "Message: $message\n";

    wp_mail( $to_email, $subject, $body );

    wp_send_json_success( array( 'message' => 'Enquiry received! We\'ll call you within 15 minutes.' ) );
}
add_action( 'wp_ajax_ncr_form',        'ncr_handle_form' );
add_action( 'wp_ajax_nopriv_ncr_form', 'ncr_handle_form' );

// ============================================================
// ELEMENTOR SUPPORT
// ============================================================
function ncr_elementor_support() {
    // Ensure Elementor can use full width on all pages
    add_theme_support( 'elementor' );
}
add_action( 'after_setup_theme', 'ncr_elementor_support' );

// Remove Elementor's default margins
add_filter( 'elementor/frontend/the_content', function( $content ) {
    return $content;
} );

// ============================================================
// CUSTOM EXCERPT LENGTH
// ============================================================
function ncr_excerpt_length( $length ) { return 25; }
add_filter( 'excerpt_length', 'ncr_excerpt_length' );
function ncr_excerpt_more( $more ) { return '...'; }
add_filter( 'excerpt_more', 'ncr_excerpt_more' );

// ============================================================
// HELPER: Get theme mod with fallback
// ============================================================
function ncr_get( $key, $default = '' ) {
    return esc_html( get_theme_mod( $key, $default ) );
}
function ncr_phone_link() {
    $phone = get_theme_mod( 'ncr_phone', '+91-9818545508' );
    return 'tel:' . preg_replace( '/[^0-9+]/', '', $phone );
}
function ncr_wa_link( $text = '' ) {
    $wa = get_theme_mod( 'ncr_whatsapp', '919818545508' );
    $msg = $text ? urlencode( $text ) : '';
    return 'https://wa.me/' . $wa . ( $msg ? '?text=' . $msg : '' );
}
