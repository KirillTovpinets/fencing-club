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
  add_action( 'admin_menu', 'add_address_link_field_to_general_admin_page' );
  add_action( 'admin_menu', 'add_phone_link_field_to_general_admin_page' );
  add_action( 'admin_menu', 'add_email_link_field_to_general_admin_page' );

  function add_address_link_field_to_general_admin_page(){
    $option = 'club-address';
    register_option_function($option, 'Club Address');
  }
  function add_phone_link_field_to_general_admin_page(){
    $option = 'club-phone';
    register_option_function($option, 'Club Phone');
  }
  function add_email_link_field_to_general_admin_page(){
    $option = 'club-email';
    register_option_function($option, 'Club Email');
  }

  function add_facebook_link_field_to_general_admin_page() {
    $facebook_link = 'facebook-group-link';

    register_option_function($facebook_link, 'Facebook Link');
  }

  function add_instagram_link_field_to_general_admin_page() {

    $instagram_link = 'instagram-group-link';

    register_option_function($instagram_link, 'Intagram Link');
  }

  function register_option_function($option_name, $label) {
    // register the option
    register_setting( 'general', $option_name );

    $setting_id = $option_name . '_setting-id';
    // add a field
    add_settings_field(
      $setting_id,
      $label,
      'setting_callback_function',
      'general',
      'default',
      [
        'id'          => $setting_id,
        'option_name' => $option_name
      ]
    );
  }

function setting_callback_function( $val ) {

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
