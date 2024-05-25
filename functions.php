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
    $components = [
        '02' => 'secao',
        '03' => 'secao',
        '04' => 'secao',
        '05' => 'secao',
        '06' => 'secao',
        '07' => 'secao',
        '08' => 'secao'
    ];

    get_header();

    foreach($components as $name => $slug){
        $path .= $slug;
        get_template_part($path, $name);
    }

    get_footer();

});


// Links CSS/JS



// Img request