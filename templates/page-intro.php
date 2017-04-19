<section id="intro">

  <div class='intro-overlay'>
      <div class='tagline' data-0="height: 90%; top: 50%; opacity: .6;" data-800="height: 70%; top: 40%; opacity: 0;" >
          <h1><?php echo get_post_meta( $post->ID, page_title, true ); ?></h1>
      </div>
  </div>
  <video poster="<?php if( has_post_thumbnail() ) { the_post_thumbnail_url('full'); } ?>" id='introVid'  playsinline autoplay muted loop>
      <source
      src='<?php
        if ( get_post_meta( $post->ID, video_src, true ) != null ) {
          echo get_post_meta( $post->ID, video_src, true );
        } else {
          echo "#";
        }
      ?>'
      type='video/mp4'>
  </video>

</section>
