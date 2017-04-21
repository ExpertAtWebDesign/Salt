<article <?php post_class('card'); ?>>
  <div class="article-header card-header">
    <h2 class="entry-title card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </div>
  <div class="entry-summary card-block">
    <?php the_excerpt(); ?>
  </div>
  <div class="card-footer">
    <a href="<?php the_permalink(); ?>" class="card-link">Read Article</a>
  </div>
</article>
