<?php

function child_theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}
add_action('wp_enqueue_scripts', 'child_theme_enqueue_styles');

function show_product_categories($atts) {
    $categories = get_categories(array(
        'taxonomy' => 'product_cat',
        'orderby' => 'name',
        'number' => $atts['number_of_categories'] ? $atts['number_of_categories'] : 1,
        'parent' => $atts['parent_category_id'],
        'order'   => 'ASC'
    ));

    foreach($categories as $category) {
        echo "<div class='category_title'><h2>". $category->name ."</h2> <a href=". get_term_link($category->slug, 'product_cat') .">Ver mais</a></div>";
        echo do_shortcode('[products limit="3" category="'. $category->slug .'" columns="3" orderby="date" order="desc"]');
    }
}

add_shortcode('show_products', 'show_product_categories');