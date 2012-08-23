<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 *
 * WARNING: Please do not edit this file in any way
 *
 * load the theme function files
 */

 
if ( function_exists ('register_sidebar')) { 
/* Register the widget columns */
  // Area content home top
  register_sidebar( array(
      'name'          => 'Content home top',
      'id'            => 'content-home-top',
      'description'   => 'The content home top block.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widgettitle">',
      'after_title'   => '</h3>'
    )
  );

  // Area content home top
  register_sidebar( array(
      'name'          => 'Content home bottom',
      'id'            => 'home-widget-bottom',
      'description'   => 'The content home bottom block.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widgettitle">',
      'after_title'   => '</h3>'
    )
  );
  
 
  
}