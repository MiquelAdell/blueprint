<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container-fluid">
    <h1 class="brand">
        <div class="holder">
          <a href="<?= esc_url(home_url('/')); ?>">
            <span class="fit-text-holder"><?php bloginfo('name'); ?></span>
          </a>
        </div>
        <div class="clearfix"></div>
    </h1>
  </div>

  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
