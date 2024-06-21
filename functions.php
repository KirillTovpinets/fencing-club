<?php

  add_theme_support( 'custom-logo' );
  add_theme_support('post-thumbnails');

  wp_enqueue_script(
    'main',
    get_template_directory_uri() . '/js/main.js',
    array(),
      '1.0.0',
    array(
      'strategy'  => 'defer',
    )
  );

  add_settings_field( 'myprefix_setting-id',
	'This is the setting title',
 	'myprefix_setting_callback_function',
	'general',
	'myprefix_settings-section-name',
	array( 'label_for' => 'myprefix_setting-id' ) );
?>
