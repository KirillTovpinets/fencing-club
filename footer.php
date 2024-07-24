<footer>
  <div class="container">
    <div class="row border p-5 rounded rounded-5 fencing-border">
      <div class="col-lg-4 col-md-6 border-end animate">
        <?php if ( function_exists( 'the_custom_logo' ) ): ?>
          <div class="d-flex flex-column align-items-center">
            <?php the_custom_logo(); ?>
              <div class="mt-3 d-flex flex-column align-items-center">
              <span class="text-primary text-uppercase text-white eminence-title"><?php echo get_bloginfo('name'); ?></span>
              <span class="text-primary text-uppercase text-white eminence-subtitle">Fencing academy</span>
              </div>
            </div>
          <?php endif ?>
      </div>
      <div class="col-lg-4 col-md-6 border-end animate animate__delay-1s">
        <h4 class="text-uppercase fw-bold mb-4">Club</h4>
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
      <div class="col-lg-4 col-md-6 container animate animate__delay-2s">
        <h4 class="text-uppercase fw-bold mb-4">Contact</h4>
        <p>
          <?php echo get_option('club-address'); ?><br>
          <span class="google-data"><a href="<?php echo get_option('club-direction-link'); ?>" target="_blank" class="fencing-contact-link"> <i class="bi bi-geo-alt"></i> Get Direction</a> <br></span>
          <span class="imap-data"><a href="<?php echo get_option('club-direction-link-imap'); ?>" target="_blank" class="fencing-contact-link"> <i class="bi bi-geo-alt"></i> Get Direction</a> <br></span>
          Tel. <a href="tel:+13127188617" class="fencing-contact-link"><?php echo get_option('club-phone'); ?></a> <br>
          Email: <a href="mailto:eminencefa@gmail.com" class="fencing-contact-link"><?php echo get_option('club-email'); ?></a>
        </p>
        <div class="d-flex gap-3 align-items-center fs-2">
          <a href="<?php echo get_option('facebook-group-link'); ?>" target="_blank">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="<?php echo get_option('instagram-group-link'); ?>" target="_blank">
            <i class="bi bi-instagram"></i>
          </a>
        </div>
      </div>
      <hr class="mt-5">
      <p class="text-secondary">© 2024 Eminence - Fencing Academy. All Rights Reserved</p>
    </div>
  </div>
</footer>
<div class="modal fade" id="comming-soon-dialog" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body d-flex justify-content-end p-4 text-white" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/grand opening.png');">
        <!-- close button -->
        <button type="button" class="btn-close text-white btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer justify-content-center" style="background-color: #333">
        <button type="button" id="close-dialog" class="btn text-white btn-outline-danger rounded-pill" id=" ">Awesome!</button>
      </div>
      <!-- <div class="modal-body">
        <img src="<?php echo get_template_directory_uri(); ?>/images/open-soon.png" alt="Coming Soon">
        <div class="modal-footer justify-content-end" style="background-color: #333333c7">
          <button type="button" class="btn btn-outline-warning rounded-pill">Awesome!</button>
        </div>
      </div> -->
    </div>
  </div>
</div>
<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script>
  (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
    key: "AIzaSyDKBHU8zZqROXgXpJ8YbYFmFhsNG5RSGCk",
    v: "weekly",
    // Use the 'v' parameter to indicate the version to use (weekly, beta, alpha, etc.).
    // Add other bootstrap parameters as needed, using camel case.
  });
</script>
</body>
</html>
