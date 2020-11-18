<?php

function addStyling()
{
    wp_enqueue_style('css-file', get_theme_file_uri('/style.css'));
    wp_enqueue_script('js-file', get_theme_file_uri('/js/scripts.js'), null, '1.0', true);
    wp_localize_script('js-file', 'metaData', array(
        'root_url' => get_site_url()
    ));
}

function configureWordpressFeatures()
{
    add_theme_support('title-tag');
    register_nav_menu('header-menu', 'Header Menu');
    register_nav_menu('footer-menu', 'Footer Menu');
    show_admin_bar(false);
}

function addFavicon()
{
    ?>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/resources/assets/images/Asset 12.png'; ?>"/>
    <?php
}

function addFaviconAdmin() {
    ?>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/resources/assets/images/Asset 12.png'; ?>"/>
    <?php
}

add_action('wp_head', 'addFavicon');
add_action( 'admin_head', 'addFaviconAdmin' );
add_action('wp_enqueue_scripts', 'addStyling');
add_action('after_setup_theme', 'configureWordpressFeatures');
