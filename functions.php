<?php
/**
 * Sikandar Theme - Functions File
 * Yahan theme ki saari PHP functionality hoti hai
 */

// =============================
// 1. THEME SETUP
// =============================
function sikandar_theme_setup() {
    // Theme ko different features support karna batao
    add_theme_support( 'title-tag' );           // <title> auto generate ho
    add_theme_support( 'post-thumbnails' );      // Featured images support
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'gallery',
    ));
    add_theme_support( 'custom-logo' );

    // Navigation menus register karo
    register_nav_menus( array(
        'primary-menu' => __( 'Primary Menu', 'sikandar-theme' ),
    ));
}
add_action( 'after_setup_theme', 'sikandar_theme_setup' );


// =============================
// 2. CSS & JS FILES LOAD KARO
// =============================
function sikandar_enqueue_scripts() {
    // Google Fonts - Inter
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );

    // Main CSS (style.css)
    wp_enqueue_style(
        'sikandar-style',
        get_stylesheet_uri(),
        array('google-fonts'),
        '1.0'
    );

    // Main JS
    wp_enqueue_script(
        'sikandar-script',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0',
        true  // Footer mein load karo (best practice)
    );
}
add_action( 'wp_enqueue_scripts', 'sikandar_enqueue_scripts' );


// =============================
// 3. CUSTOM POST TYPE: Projects
// =============================
function sikandar_register_post_types() {
    register_post_type( 'project', array(
        'labels' => array(
            'name'          => 'Projects',
            'singular_name' => 'Project',
            'add_new_item'  => 'Add New Project',
            'edit_item'     => 'Edit Project',
        ),
        'public'        => true,
        'has_archive'   => true,
        'show_in_rest'  => true,   // Gutenberg editor support
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'menu_icon'     => 'dashicons-portfolio',
        'rewrite'       => array( 'slug' => 'projects' ),
    ));
}
add_action( 'init', 'sikandar_register_post_types' );


// =============================
// 4. WIDGET AREAS
// =============================
function sikandar_widgets_init() {
    register_sidebar( array(
        'name'          => 'Footer Widget Area',
        'id'            => 'footer-1',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
}
add_action( 'widgets_init', 'sikandar_widgets_init' );


// =============================
// 5. SCROLL CLASS (Header JS helper)
// =============================
// JS file mein handle hoga - yahan sirf PHP functions hain
