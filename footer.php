<?php
    if (is_front_page()) { // Se for, carregar o menu da Home

    // Footer da página Home
    $menu = 'footer_menu';

    } else { // Se for qualquer outra página

    // Topo da página Home
    $menu = 'footer_menu_interno';

    }
?>

<section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 mb-3 mb-md-0">
                  <img src="<?php echo get_template_directory_uri().'/assets/img/logoUnifarmWhite.svg'?>">
                </div>
                <div class="col-12 col-md-4 mb-3 mb-md-0">

                    <!-- Carrega o menu do Footer -->                
                    <?php
                            wp_nav_menu( array(
                                'theme_location'    => $menu,
                                'depth'             => 1,
                                'container'         => false,
                                'container_class'   => '',
                                'container_id'      => '',
                                'menu_class'        => '',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            ) );
                    ?>

                </div>
                <div class="col-12 col-md-4">
                    <div class="socialLinks">
                        <div class="socialIcon"><a href="<?php echo get_theme_mod('set_url_facebook'); ?>"  target="_blank"><i class="fab fa-facebook"></i></a></div>
                        <div class="socialIcon"><a href="<?php echo get_theme_mod('set_url_instagram'); ?>"  target="_blank"><i class="fab fa-instagram"></i></a></div>
                        <div class="socialIcon"><a href="<?php echo get_theme_mod('set_url_twitter'); ?>"  target="_blank"><i class="fab fa-twitter"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footerBase"><span class="mb-3 mb-sm-0">Copyright (c) 2021 - Todos os direitos reservados à UNIFARM</span><span><a href="http://localhost/unifarm/privacidade/">Política de privacidade</a></span></div>
    </section>
    
    <a class="cd-top" href="#"></a>

    <!-- Carrega todas as funções do Footer e scripts functions.php -->
    <?php  wp_footer(); ?> 

</body>

</html>