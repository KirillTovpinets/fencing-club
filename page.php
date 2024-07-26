<?php
/* Template Name: Inner Page */
/* Template Post Type: post */
?>
<?php get_header(); ?>

<header class="fencing-header fencing-page-header d-flex align-items-center justify-content-center flex-column gap-4" style="background-image: url('<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : (bloginfo('template_url') . "/images/backgrounds/1-min.png"); ?>')">
    <h1 class="text-center fencing-header-title animate">
      <span class="d-block text-uppercase"><?php echo get_the_title(); ?></span>
    </h1>
</header>
<main class="fencing-page-content">
  <section class="fencing-section-devider">
    <img class="fencing-devider mt-5 position-absolute bottom-0 z-3" src="<?php bloginfo('template_url');?>/images/section-devider-min.png" alt="section devider image">
  </section>
    <?php echo the_content(); ?>
</main>


<?php get_footer(); ?>
