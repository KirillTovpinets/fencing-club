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

  add_action( 'admin_menu', 'add_option_field_to_general_admin_page' );

  function add_option_field_to_general_admin_page() {

	$option_name = 'my_option';

	// register the option
	register_setting( 'general', $option_name );

	// add a field
	add_settings_field(
		'myprefix_setting-id',
		'Option Name',
		'myprefix_setting_callback_function',
		'general',
		'default',
		[
			'id'          => 'myprefix_setting-id',
			'option_name' => 'my_option'
		]
	);
}

function myprefix_setting_callback_function( $val ) {

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
?>
