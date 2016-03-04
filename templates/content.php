<article <?php post_class(); ?>>

  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php get_template_part('templates/entry-meta'); ?>
  </header>

  <div class="row">

      <?php
      $text_css = "col-sm-6 col-sm-offset-3";
      $post_thumbnail = get_the_post_thumbnail(null,'large');
      if($post_thumbnail){
        $text_css = "col-sm-6";
        ?>
        <div class="images col-sm-3 images-column">
            <?=$post_thumbnail?>
        </div>
      <?php } ?>




    <div class="entry-summary text-center <?=$text_css?> ">
      <?php the_excerpt(); ?>
    </div>
  </div>
</article>
