<header class="banner">
  <div class="container-fluid">
    <h1 class="brand">
        <div class="holder">
          <a href="<?= esc_url(home_url('/')); ?>">
            <span class="fit-text-holder"><?php bloginfo('name'); ?></span>
          </a>
        </div>
        <div class="clearfix"></div>
    </h1>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
