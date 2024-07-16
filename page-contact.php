<?php
/* Template Name: Contact Page */
?>
<?php get_header(); ?>

<header class="fencing-header fencing-page-header d-flex align-items-center justify-content-center flex-column gap-4" style="background-image: url('<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : (bloginfo('template_url') . "/images/backgrounds/1-min.png"); ?>')">
    <h1 class="text-center fencing-header-title animate">
      <span class="d-block"><?php echo get_the_title(); ?></span>
    </h1>
    <img class="fencing-devider mt-5 position-absolute bottom-0 z-3" src="<?php bloginfo('template_url');?>/images/section-devider-min.png" alt="">
</header>
<main class="fencing-page-content">
    <?php echo the_content(); ?>


    <section class="fencing-section">
      <div class="fencing-contact-info animate animate__delay-1s">
        <h2 class="header text-uppercase">Contact Us</h2>
        <p class="description">
        Eminence Fencing Academy is proud to be one of the best fencing competition venues in Chicago
        northern suburbs
        </p>
        <div class="row mt-3">
          <div class="col-lg-4">
          <i class="bi bi-geo-alt fs-3"></i>
          <h5 class="mb-4">Location</h5>
          <p><?php echo get_option('club-address'); ?></p>
          <p>
            <a href="<?php echo get_option('club-direction-link'); ?>" target="_blank" class="text-decoration-none">
              <i class="bi bi-geo-alt"></i> Get Direction
            </a>
          </p>
          </div>
            <div class="col-lg-4">
          <i class="bi bi-clock fs-3"></i>
          <h5 class="mb-4">Hours</h5>
          <?php $hours = getWorkingHours(); ?>
              <?php foreach($hours as $day): ?>
                <p style="font-size: 0.75rem"><?php echo substr($day->work_day, 0, 3) . ".: " . $day->work_start . ' - ' . $day->work_end; ?></p>
              <?php endforeach; ?>
          </div>
            <div class="col-lg-4">
          <i class="bi bi-share fs-3"></i>
          <h5 class="mb-4">Social</h5>
          <p>
            <a href="<?php echo get_option('facebook-group-link'); ?>"><i class="bi bi-facebook"></i> Facebook</a>
          </p>
          <p>
        <a href="<?php echo get_option('instagram-group-link'); ?>"><i class="bi bi-instagram"></i> Instagram</a>
          </p>
          </div>
        </div>
        </div>
        <div id="google-map" class="animate">
        </div>
      </section>
</main>


<?php get_footer(); ?>
