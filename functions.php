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

  wp_enqueue_style('reesha-font', get_template_directory_uri() . '/fonts/reesha/MyWebfontsKit.css', array(), false, 'all');

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

function getAllEvents($dayId){
  
  global $wpdb;
  $timeFormat = '%h:%i %p';
  $query = $wpdb->get_results("SELECT TIME_FORMAT(wp_mp_timetable_data.event_start, '" . $timeFormat . "') as event_start,
                                      TIME_FORMAT(wp_mp_timetable_data.event_end, '" . $timeFormat ."') as event_end,
                                       mt_event.program FROM wp_mp_timetable_data 
                                      INNER JOIN (SELECT ID FROM wp_posts 
                                        WHERE wp_posts.post_type = 'mp-column' 
                                          AND wp_posts.ID = " . $dayId . ") AS mt_columns
                                       ON wp_mp_timetable_data.column_id = mt_columns.ID
                                      INNER JOIN (SELECT ID, post_title as program FROM wp_posts 
                                        WHERE wp_posts.post_type = 'mp-event') AS mt_event
                                       ON wp_mp_timetable_data.event_id = mt_event.ID", OBJECT);
  return $query;
}

function getWeekDays() {
  $args = array(
    'post_type' => 'mp-column',
    'posts_per_page' => -1,
    'orderby' => 'ID',
    'order' => 'ASC'
  );

  $query = new WP_Query($args);
  return $query;
}
