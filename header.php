<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
<?php wp_head(); ?>
</head>
<body>
  <nav class="navbar navbar-transparent fixed-top">
  <div class="container-fluid">
    <?php
    if ( function_exists( 'the_custom_logo' ) ) {
      the_custom_logo();
    } ?>

    <div class="d-flex justify-content-end align-items-center" id="navbarSupportedContent">
      <div class="d-flex align-items-center gap-3 me-3">
      <span class="dashicons dashicons-facebook"></span>
      <span class="dashicons dashicons-instagram"></span>
      <span class="dashicons dashicons-twitter"></span>
      </div>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="bi bi-list fs-1"></i>
    </button>
      </div>
  </div>
</nav>
