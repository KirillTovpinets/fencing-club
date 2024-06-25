<footer>
  <div class="container">
    <div class="row border p-5 rounded rounded-5 fencing-border">
      <div class="col-lg-3 col-md-6 border-end">
        <div class="d-flex flex-column align-items-center justify-content-center">
          <img class="mb-4" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo white.png" alt="logo">
        <p class="text-center">
          We bring the years, global experience, and stamina to guide our clients through new and often disruptive realities.
        </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 border-end">
        <h4 class="text-uppercase fw-bold mb-4">Newsletter</h4>

        <div class="input-group">
          <input type="text" class="form-control" placeholder="Your email">
          <button class="input-text-addon btn fencing-btn">Subscribe</button>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 border-end">
        <h4 class="text-uppercase fw-bold mb-4">Club</h4>
        <ul>
          <li><a href="#">About us</a></li>
          <li><a href="#">History</a></li>
          <li><a href="#">Programs</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6">
        <h4 class="text-uppercase fw-bold mb-4">Contact</h4>
        <p>
          <!-- 28457 Ballard Dr, unit c1, Lake Forest, IL 60045  -->
          <?php echo get_option('club-address'); ?><br>
          <!-- +13127188617 -->
          Tel. <a href="tel:+13127188617"><?php echo get_option('club-phone'); ?></a> <br>
          <!-- eminencefa@gmail.com -->
          Email: <a href="mailto:eminencefa@gmail.com"><?php echo get_option('club-email'); ?></a>
        </p>
        <div class="d-flex gap-3 align-items-center fs-2">
          <a href="<?php echo get_option('facebook-group-link'); ?>">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="<?php echo get_option('instagram-group-link'); ?>">
            <i class="bi bi-instagram"></i>
          </a>
        </div>
      </div>
      <hr class="mt-5">
      <p class="text-secondary">© 2024 Eminence - Fencing Academy. All Rights Reserved</p>
    </div>
  </div>
</footer>
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
