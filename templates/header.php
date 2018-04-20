<header class="site-header">
<div class="container-fluid">
    <div class="left">
        cta
    </div>
    <div class="center-panel">
        <a class="navbar-brand" href="#">
        <?php if(get_field('logo', 'options')): ?>
          <img src="<?php the_field('logo', 'options'); ?>" alt="<?php bloginfo('name'); ?>" />
        <?php else:
          echo bloginfo('name');
          endif; ?>  
        </a>
    </div>
    <div class="right">
       <ul class="header-cta">
          <li><?php echo do_shortcode('[phone]'); ?></li>
          <li><a href="<?php get_field('header_cta_link', 'options'); ?>" class="btn btn-primary"><?php the_field('header_cta_text', 'options'); ?></a>
        </ul>
    </div>

</div>

</header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <button class="navbar-toggler justify-content-end" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav_content" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  
  <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary_navigation',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse justify-content-center',
                'container_id'      => 'nav_content',
                'menu_class'        => 'navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
    ?>
  </div>
</nav>