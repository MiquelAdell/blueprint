<article <?php post_class(); ?>>

    <header>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-summary">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2">
        <?php the_excerpt(); ?>
      </div>
  </div>
</article>
