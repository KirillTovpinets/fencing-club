<?php

  add_theme_support( 'custom-logo' );

  wp_enqueue_script(
    'main',
    get_template_directory_uri() . '/js/main.js',
    array(),
      '1.0.0',
    array(
      'strategy'  => 'defer',
    )
  );
?>
