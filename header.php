<!DOCTYPE html>
<html <?php language_attributes(); ?>> <!-- Carrega os atributos de língua da página -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Carrega todas as nossas funções, folhas de estilo e scripts functions.php -->
    <?php  wp_head(); ?>

    <!-- Favicon e touchicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri().'/assets/img/favicon16x16.png'?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri().'/assets/img/favcion32x32.png'?>">
</head>

<body>
    <section id="topo">
        <div id="waterMark" class="slide-in-blurred-top"></div>
        <div id="textBox" class="slide-in-left" style="animation-delay: .5s">
            <h1 class="title txtDarkBlue"><?php echo get_theme_mod('set_titulo_home'); ?></h1>
            <div class="separator"></div>
            <p class="paragraph mb-5"><?php echo get_theme_mod('set_texto_empresa'); ?></p>
            <div class="text-center text-md-left"><a class="btn button scrollSlow" role="button" href="#quemsomos">SAIBA MAIS</a></div>
        </div>
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
                          'theme_location'    => 'main_menu',
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