<?php

// Theme functions here

add_action('after_setup_theme', function () {
    
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'header_menu' => 'Header Menu',
        'footer_menu' => 'Footer Menu',
        'menu_mobile' => 'Menu Mobile'
    ));
});


// Juntar Arquivos

add_action('get_components', function() {
    $path = "components/";
    $slug = "secao";
    $components = [
        '02',
        '03',
        '04',
        '05',
        '06',
        '07',
        '08'
    ];
    
    get_header();
    
    $path .= $slug;
    foreach($components as $name){
        get_template_part($path, $name);
    }

    get_footer();

});


// Links CSS/JS

add_action('get_theme_styles_css', function() {
    $path = get_template_directory_uri() . "/assets/css/";
    $nameStyle = [
        'index',
        'reset',
        'responsive-laptop',
        'responsive-tablet',
        'responsive-mobile'
    ];
    $deps = [];
    $version = false;
    $extension = ".css";

    foreach($nameStyle as $handle){
        $pathFile = $path . $handle . $extension;
        wp_enqueue_style($handle, $pathFile , $deps, $version, 'all');
    }

});

add_action('get_theme_styles_js', function() {
    $path = get_template_directory_uri() . "/assets/js/";
    $nameScript = [
        'app'
    ];
    $deps = [];
    $version = false;
    $extension = ".js";
    
    foreach($nameScript as $handle){
        $pathFile = $path . $handle . $extension;
        wp_enqueue_script($handle, $pathFile, $deps, $version, 'all');
    }
});

// Img url

add_action('url_image', function() {
    $url = get_template_directory_uri();
    $url .= "/assets/img";

    echo $url;
});