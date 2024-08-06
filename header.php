<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="canonical" href="<?php echo get_permalink(); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Eminence Fencing Academy offers fencing classes for all ages and abilities. Join us to learn the art of fencing with expert instructors.">
<meta name="robots" content="index, follow">
<meta property="og:title" content="Eminence Fencing Academy - fencing in Chicago">
<meta property="og:description" content="Join our fencing classes for all ages and abilities. Expert instructors and a welcoming environment.">
<meta property="og:image" content="https://eminencefa.com/wp-content/uploads/2024/07/eminence_logo_srcg_20240712_6.jpg">
<meta property="og:url" content="https://www.eminencefa.com">
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Eminence - Fencing in Chicago" />
<meta property="og:locale" content="en_US" />
<meta itemprop="name" content="Eminence Fencing Academy - fencing in Chicago">
<meta itemprop="description" content="Join our fencing classes for all ages and abilities. Expert instructors and a welcoming environment.">
<meta itemprop="image" content="https://eminencefa.com/wp-content/uploads/2024/07/eminence_logo_srcg_20240712_6.jpg">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@eminencefa">
<meta name="twitter:title" content="Eminence Fencing Academy - fencing in Chicago">
<meta name="twitter:description" content="Join our fencing classes for all ages and abilities. Expert instructors and a welcoming environment.">
<meta name="twitter:image" content="https://eminencefa.com/wp-content/uploads/2024/07/eminence_logo_srcg_20240712_6.jpg">
<meta name="twitter:creator" content="@eminencefa">
<meta name="twitter:domain" content="https://www.eminencefa.com">
<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>?version=1.0" type="text/css" />
<?php wp_head(); ?>
</head>
<body class="bg-black">
  <nav class="navbar navbar-transparent fixed-top">
  <div class="container-fluid">
    <?php if ( function_exists( 'the_custom_logo' ) ): ?>
      <div class="navbar-brand d-flex align-items-center">
      <?php the_custom_logo(); ?>
        <div class="d-flex flex-column ms-3">
        <span class="text-primary text-uppercase text-white eminence-title">Eminence</span>
        <span class="text-primary text-uppercase text-white eminence-subtitle">Fencing academy</span>
        </div>
      </div>
    <?php endif ?>

    <div class="d-flex justify-content-end align-items-center" id="navbarSupportedContent">
      <div class="d-flex align-items-center gap-3 me-3">
        <a href="<?php echo get_option('facebook-group-link'); ?>" aria-label="link to eminence facebook group">
          <i class="bi bi-facebook fs-3"></i>
        </a>
        <a href="<?php echo get_option('instagram-group-link'); ?>" aria-label="link to eminence instagram account">
          <i class="bi bi-instagram fs-3"></i>
        </a>
      </div>
      <button class="navbar-toggler border-0" id="menu-toggler" type="button">
        <i class="bi bi-list fs-1"></i>
    </button>
      </div>
  </div>
</nav>
<div class="fencing-menu" id="fencing-main-menu">
      <button class="navbar-toggler border-0" id="menu-toggler-close" type="button" aria-label="toggler">
        <i class="bi bi-x"></i>
      </button>
  <div class="container">
    <div class="d-flex justify-content-center align-items-center">
    <?php wp_nav_menu(array(
        // 'menu'				=> "", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
        'menu_class'		=> "navbar-nav fencing-main-nav", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
        // 'menu_id'			=> "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
         'container'			=> "ul", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
        // 'container_class'	=> "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
        // 'container_id'		=> "", // (string) The ID that is applied to the container.
        // 'fallback_cb'		=> "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
        // 'before'			=> "", // (string) Text before the link markup.
        // 'after'				=> "", // (string) Text after the link markup.
        // 'link_before'		=> "", // (string) Text before the link text.
        // 'link_after'		=> "", // (string) Text after the link text.
        // 'echo'				=> "", // (bool) Whether to echo the menu or return it. Default true.
        // 'depth'				=> "", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
        // 'walker'			=> "", // (object) Instance of a custom walker class.
        // 'theme_location'	=> "", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
        // 'items_wrap'		=> "", // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
        // 'item_spacing'		=> "", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
      )); ?>
      </div>
  </div>
</div>