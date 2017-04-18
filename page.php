<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <section id="main" class="wrap default" role="document">
    <?php get_template_part('templates/content', 'page'); ?>
  </section>
<?php endwhile; ?>
