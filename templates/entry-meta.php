<time class="updated" datetime="<?= get_post_time('c', true); ?>"><small class="text-muted"><?= get_the_date(); ?></small></time>
<p class="byline author vcard card-text"><small class="text-muted"><?= __('By', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></small></p>
