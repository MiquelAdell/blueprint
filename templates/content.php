<article <?php post_class(); ?>>

  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php get_template_part('templates/entry-meta'); ?>
  </header>

  <div class="row">

      <?php  $args = array(
                  'post_parent'    => $post->ID,
                  'post_type'      => 'attachment',
                  'numberposts'    => -1, // show all
                  'post_status'    => 'any',
                  'post_mime_type' => 'image',
                  'orderby'        => 'menu_order',
                  'order'           => 'ASC'
             );

      $images = get_posts($args);
      $textCss = "col-sm-6 col-sm-offset-3";
      if($images) {
          $textCss = "col-sm-6";
        ?>
        <div class="images col-sm-3 images-column">
          <?php foreach($images as $image) { ?>
            <img src="<?php echo wp_get_attachment_url($image->ID); ?>" alt="<?php echo $image->post_excerpt; ?>"></img>
          <?php } ?>
        </div>
      <?php } ?>



    <div class="entry-summary text-center <?=$textCss?> ">
      <?php the_excerpt(); ?>
    </div>
  </div>
</article>
