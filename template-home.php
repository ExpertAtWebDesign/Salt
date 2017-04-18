<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'intro'); ?>
  <section id="main" class="wrap home" role="document">
    <?php get_template_part('templates/content', 'page'); ?>
  </section>
<?php endwhile; ?>
