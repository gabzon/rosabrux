<?php

/**
* Add theme support for infinite scroll.
*
* @uses add_theme_support
* @return void
*/

function infinity_scroll_loop(){
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format());
        } // end while
    } // end if
}

function rosabrux_infinite_scroll_init() {
    add_theme_support( 'infinite-scroll', array(
            'type'      => 'scroll',
            'container' => 'content',
            'render'    => infinity_scroll_loop
        ));
}
add_action( 'after_setup_theme', 'rosabrux_infinite_scroll_init' );

/**
* Settings page on the Appearance menu
*/
add_filter('piklist_admin_pages', 'piklist_theme_setting_pages');
  function piklist_theme_setting_pages($pages)
  {
     $pages[] = array(
      'page_title' => __('Custom Settings')
      ,'menu_title' => __('Settings', 'piklist')
      ,'sub_menu' => 'themes.php' //Under Appearance menu
      ,'capability' => 'manage_options'
      ,'menu_slug' => 'custom_settings'
      ,'setting' => 'my_theme_settings'
      ,'single_line' => true
      ,'default_tab' => 'Basic'
      ,'save_text' => 'Save Settings'
    );

    return $pages;
  }
