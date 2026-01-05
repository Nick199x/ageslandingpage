<?php
/**
 * AGES Theme Functions
 */

// Theme setup
function ages_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    
    register_nav_menu( 'primary', __( 'Primary Menu', 'ages-theme' ) );
}
add_action( 'after_setup_theme', 'ages_theme_setup' );

// Enqueue styles and scripts
function ages_enqueue_scripts() {
    // Tailwind CSS
    wp_enqueue_script( 'tailwind', 'https://cdn.tailwindcss.com', array(), null, false );
    
    // Tailwind config inline
    wp_add_inline_script( 'tailwind', "
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#620d0f',
                        secondary: '#A1353A',
                        accent: '#D4AF37',
                        neutral: '#f3f4f6',
                    },
                    fontFamily: {
                        sans: ['Roboto', 'sans-serif'],
                        heading: ['Montserrat', 'sans-serif'],
                    },
                },
            },
        }
    " );
    
    // Lucide Icons
    wp_enqueue_script( 'lucide-icons', 'https://unpkg.com/lucide@latest', array(), null, false );
    
    // Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Roboto:wght@400;500;700&display=swap', array(), null );
    
    // Theme stylesheet
    wp_enqueue_style( 'ages-style', get_stylesheet_uri(), array( 'google-fonts' ), wp_get_theme()->get( 'Version' ) );
    
    // Custom scripts
    wp_enqueue_script( 'ages-custom', get_template_directory_uri() . '/assets/js/custom.js', array( 'lucide-icons' ), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'ages_enqueue_scripts' );

// Register custom post types
function ages_register_post_types() {
    // Services Post Type
    register_post_type( 'service', array(
        'labels' => array(
            'name' => __( 'Services', 'ages-theme' ),
            'singular_name' => __( 'Service', 'ages-theme' ),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-hammer',
    ) );
    
    // Projects Post Type
    register_post_type( 'project', array(
        'labels' => array(
            'name' => __( 'Projects', 'ages-theme' ),
            'singular_name' => __( 'Project', 'ages-theme' ),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-image-alt',
    ) );
}
add_action( 'init', 'ages_register_post_types' );

// Register custom taxonomies
function ages_register_taxonomies() {
    // Service Categories
    register_taxonomy( 'service_category', 'service', array(
        'labels' => array(
            'name' => __( 'Service Categories', 'ages-theme' ),
            'singular_name' => __( 'Service Category', 'ages-theme' ),
        ),
        'public' => true,
        'show_in_rest' => true,
    ) );
    
    // Project Categories
    register_taxonomy( 'project_category', 'project', array(
        'labels' => array(
            'name' => __( 'Project Categories', 'ages-theme' ),
            'singular_name' => __( 'Project Category', 'ages-theme' ),
        ),
        'public' => true,
        'show_in_rest' => true,
    ) );
}
add_action( 'init', 'ages_register_taxonomies' );

// Initialize Lucide icons on frontend
function ages_init_lucide_icons() {
    wp_add_inline_script( 'lucide-icons', 'document.addEventListener("DOMContentLoaded", function() { if (typeof lucide !== "undefined") { lucide.createIcons(); } });' );
}
add_action( 'wp_footer', 'ages_init_lucide_icons' );

// Custom theme options (if using ACF, you can add more here)
function ages_get_theme_option( $option, $default = '' ) {
    return get_option( 'ages_' . $option, $default );
}
