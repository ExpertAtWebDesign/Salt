<section id="page-title"
  <?php if( has_post_thumbnail() ) {?>
    style="background-image: url(<?php the_post_thumbnail_url(); ?>);"
  <?php } ?>
 >

  <div class='intro-overlay'>
      <div class='tagline' data-0="top: 50%; opacity: .7;" data-400="top:40%; opacity: .2;">
          <h1><?php wp_title(''); ?></h1>
      </div>
  </div>

</section>
