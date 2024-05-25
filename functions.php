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



// Img request