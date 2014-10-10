<div class="container-fluid">
  <div class="row">
    <div class="pre-header">
      <div class="nav-wrapper clearfix">
        <div class="navbar-header center-block">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blmd_logo.png" width="200" height="37"></a>
        </div> <!-- //end navbar -->
      </div><!-- //end wrapper -->
    </div>
  </div>
</div>

<header class="banner navbar navbar-default navbar-static-top navbar-collapse collapse" role="banner" data-spy="affix" data-offset-top="67">
  <div class="container">
    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>
