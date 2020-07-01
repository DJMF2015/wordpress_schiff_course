<?php

function university_files() {
  wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'university_files');

function university_features(){
  // register_nav_menu('headerMenuLocation', 'Header Menu Location');
  // register_nav_menu('footerMenuLocationOne', 'Footer Menu Location One');
  // register_nav_menu('footerMenuLocationTwo', 'Footer Menu Location Two');
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'university_features');


function my_register_sidebars() {
  /* Register the  sidebar. */
  register_sidebar(
    array(
      'id'          =>  'sidebar-1',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ),
    array(
      'name'            => 'Sidebar Area',
      'description'   =>  'sidebar widget area'
    )
  );

  register_sidebar(
    array(
      'id'          =>  'sidebar-2',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ),
    array(
      'id' => 'footer-1',
      "name"=> 'Footer Area',

      'description' => 'Footer Widget area'
    )
  );
}

add_action( 'widgets_init', 'my_register_sidebars' );
