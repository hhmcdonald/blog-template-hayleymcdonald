<?php
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
    register_sidebar( array(
        'name' => ('First Widget'),
        'id' => 'first-widget',
        'description' => 'Widget for our sidebar on pages',
        'before_widget' => '<div class="widget-sidebar bio">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        ));
    register_sidebar( array(
        'name' => ('Second Widget'),
        'id' => 'second-widget',
        'description' => 'Widget for our sidebar on pages',
        'before_widget' => '<div class="widget-sidebar tags">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        ));
    register_sidebar( array(
        'name' => ('Third Widget'),
        'id' => 'third-widget',
        'description' => 'Widget for our sidebar on pages',
        'before_widget' => '<div class="widget-sidebar archive">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        ));
}

add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu --------------- */

add_theme_support('menus');

?>
