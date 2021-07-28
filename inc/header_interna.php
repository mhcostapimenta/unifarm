<section id="topoInterno">
    <nav class="navbar navbar-light navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="<?php  echo get_bloginfo('url') ?>">
            <img src="<?php echo get_template_directory_uri().'/assets/img/logoUnifarm.svg'?>">
          </a>
          <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navcol-1">

                  <!-- Carrega o Menu de Navegação -->
                  <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'main_menu_interno',
                        'depth'             => 1,
                        'container'         => false,
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'navcol-1',
                        'menu_class'        => 'nav navbar-nav ml-auto mainNavigation',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                  ?>

                  <ul class="nav navbar-nav ml-auto" id="navRedes">
                      <li class="nav-item" role="presentation">
                        <a class="nav-link active" href="<?php echo get_theme_mod('set_url_facebook'); ?>" target="_blank">
                          <i class="fab fa-facebook"></i>
                        </a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a class="nav-link" href="<?php echo get_theme_mod('set_url_instagram'); ?>" target="_blank">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a class="nav-link" href="<?php echo get_theme_mod('set_url_twitter'); ?>" target="_blank">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                  </ul>
        </div>
        </div>
    </nav>
</section>