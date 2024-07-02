<?php
/* Template Name: Program Page */
/* Template Post Type: mp-event */
?>
<?php get_header(); ?>

<header class="fencing-header fencing-page-header d-flex align-items-center justify-content-center flex-column gap-4" style="background-image: url('<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : (bloginfo('template_url') . "/images/backgrounds/3.png"); ?>')">
    <h1 class="text-center fencing-header-title">
      <span class="d-block"><?php echo get_the_title(); ?></span>
    </h1>
</header>
<main class="fencing-page-content">
<img class="fencing-devider" src="<?php bloginfo('template_url');?>/images/section-devider.png" alt="">
    <?php echo the_content(); ?>
    <section class="fencing-section">
      <h4 class="fencing-section-title fw-bold text-primary text-center">Schedule</h4>
      <div class="container">
      <div class="accordion" id="accordionExample">
        <?php $result = getWeekDays(); ?>
        <?php $currentPageId = get_the_ID(); ?>
        <?php if ( $result->have_posts()) : ?>
          <?php while ( $result->have_posts() ) : $result->the_post(); ?>
            <?php $events = getAllEvents(get_the_ID(), $currentPageId); ?>
            <?php if ( !empty($events) ): ?>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed fw-bold fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo get_the_ID(); ?>" aria-expanded="false" aria-controls="collapse<?php echo get_the_ID(); ?>">
                    <?php the_title(); ?>
                  </button>
                </h2>
                <div id="collapse<?php echo get_the_ID(); ?>" class="accordion-collapse collapse <?php if (get_post_field('menu_order', get_the_ID()) == '1'): echo 'show'; endif;?>" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                      <?php foreach($events as $slot):  ?>
                        <div class="d-flex gap-3 align-items-center schedule-item">
                          <?php if ($slot->program == 'Individual lessons'): ?>
                            <i class="bi bi-person fs-1"></i>
                          <?php else: ?>
                            <i class="bi bi-people fs-1"></i>
                          <?php endif; ?>
                          <div class="schedule-item">
                            <span class="d-block"><?php echo $slot->description; ?></span>
                              <span class="fw-bold fs-3">
                                <?php echo $slot->event_start . ' - ' . $slot->event_end; ?>
                              </span> <span class="fs-3 mx-2">|</span> <span class="fw-bold fs-4">
                                <?php echo $slot->program; ?>
                              </span>
                          </div>
                      </div>
                      <?php endforeach; ?>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php else: ?>
          <p>No events found</p>
        <?php endif; wp_reset_postdata(); ?>
      </div>
      </div>
</section>
</main>


<?php get_footer(); ?>
