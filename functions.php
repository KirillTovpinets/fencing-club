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

  add_action( 'admin_menu', 'add_instagram_link_field_to_general_admin_page' );
  add_action( 'admin_menu', 'add_facebook_link_field_to_general_admin_page' );

  function add_facebook_link_field_to_general_admin_page() {
    $facebook_link = 'facebook-group-link';
    register_setting( 'general', $facebook_link );

    // add a field
    add_settings_field(
      'facebook_setting-id',
      'Facebook Link',
      'instagram_setting_callback_function',
      'general',
      'default',
      [
        'id'          => 'facebook_setting-id',
        'option_name' => 'facebook-group-link'
      ]
    );
  }

  function add_instagram_link_field_to_general_admin_page() {

    $instagram_link = 'instagram-group-link';


    // register the option
    register_setting( 'general', $instagram_link );

    // add a field
    add_settings_field(
      'intagram_setting-id',
      'Instagram Link',
      'instagram_setting_callback_function',
      'general',
      'default',
      [
        'id'          => 'intagram_setting-id',
        'option_name' => 'instagram-group-link'
      ]
    );
  }

function instagram_setting_callback_function( $val ) {

	$id = $val['id'];
	$option_name = $val['option_name'];
	?>
	<input
		type="text"
		name="<?= $option_name ?>"
		id="<?= $id ?>"
		value="<?= esc_attr( get_option( $option_name ) ) ?>"
	/>
	<?php
}
