<!-- Carrega o cabeçalho -->
<?php get_header(); ?> 

<!-- SESSÃO QUEM SOMOS -->
<section id="quemsomos">
    <div class="row">
        <div class="col-12 col-lg-6 col-xl-5 order-2 order-lg-1 col-esq">
          <img class="img-fluid animate" src="<?php echo get_template_directory_uri().'/assets/img/quemSomosimg.png'?>" loading="lazy" data-effect="slide-in-left">
        </div>
        <div class="col order-1 order-lg-2 boxFlex">
            <div class="animate" data-effect="slide-in-right" style="animation-delay: 0">
                <h2 class="subtitle txtGreen">QUEM SOMOS</h2>
                <h1 class="title txtDarkBlue"><?php echo get_theme_mod('set_titulo_quemsomos'); ?></h1>
            </div>
            <div class="boxText animate" data-effect="slide-in-right" style="animation-delay: .5s">
                <p class="paragraph"><?php echo get_theme_mod('set_texto_quemsomos'); ?></p>
            </div>
            <div class="text-center text-lg-left mb-5 mb-lg-0 animate" data-effect="slide-in-right" style="animation-delay: .7s"><a class="btn button scrollSlow" role="button" href="#precadastro">QUERO FAZER PARTE</a></div>
        </div>
    </div>
</section>

<!-- SESSÃO PORQUE A UNIFARM ? -->
<section id="porqueaunifarm">
    <div class="container">
        <div class="animate" data-effect="scale-in-center">
            <h2 class="subtitle txtWhite">PORQUE A UNIFARM ?</h2>
            <h1 class="title txtWhite"><?php echo get_theme_mod('set_titulo_porqueaunifarm'); ?></h1>
        </div>
        <div class="row flashesRow">

            <!-- Aqui entra o loop Wordpress para mostrar os Flashes -->
            <?php

                $args = array(
                    'posts_per_page'=> -1,      // Mostrar quantidade padrão
                    'post_type' => 'Flashes',   // Tipo de post
                    'orderby' => 'title',		// Ordenar pelo titulo da Solução
                    'order' => 'ASC' 		    // Ordem Ascendente
                );

                $loop = new WP_Query( $args );

                if ( $loop->have_posts() ):

                    $delay = 0.5;
                    $interval = 0.25;

                    while ( $loop->have_posts() ): 
                        $loop->the_post();

                        // Carrega o template com os thumbs
                        get_template_part( 'template-parts/content', 'flashes'); 
                        
                    $delay = $delay + $interval;

                    endwhile;
                    wp_reset_postdata();
                    // Aqui termina o loop Wordpress

                else:
                ?>

                <p>Nada encontrado ainda ...</p>

                <?php
                // Fim do if do loop Wordpress
                endif;
            ?>

        </div>
    </div>
</section>

<!-- SESSÃO PRÉ-CADASTRO -->
<section id="precadastro">
    <div class="container">
        <div class="animate" data-effect="scale-in-center">
            <h2 class="subtitle txtGreen">QUERO FAZER PARTE DA UNIFARM</h2>
            <h1 class="title txtDarkBlue"><?php echo get_theme_mod('set_titulo_precadastro'); ?></h1>
        </div>

        <!-- Formulário de pré-cadastro -->
        <div class="animate" data-effect="scale-in-center" style="animation-delay: .5s">
          <!-- Carrega o Widget do Formulário de Pré-Cadastro -->
          <?php 
            if ( is_active_sidebar ('form-precadastro')) {
                dynamic_sidebar('form-precadastro');
                }
            ?>
        </div>
 
    </div>
</section>

<!-- SESSÃO FAQ -->
<section id="faq">
    <div class="container">
        <div class="animate" data-effect="scale-in-center">
            <h2 class="subtitle txtWhite">FAQ</h2>
            <h1 class="title txtWhite"><?php echo get_theme_mod('set_titulo_faq'); ?></h1>
        </div>
        <div class="animate" data-effect="scale-in-center" style="animation-delay: .5s">
            <div class="col">

              <!-- Aqui entra o loop Wordpress para mostrar os FAQs -->
              <?php

                  $args = array(
                      'posts_per_page'=> -1,        // Mostrar quantidade padrão
                      'post_type' => 'FAQs',        // Tipo de post
                      'orderby' => 'publish_date',  // Ordenar por data de publicação
                      'order' => 'DESC'             // Ordem decrescente
                  );

                  $loop = new WP_Query( $args );

                  if ( $loop->have_posts() ):

                      $delay = 0.5;
                      $interval = 0.25;
                      $ordem = 1;

                      while ( $loop->have_posts() ): 
                          $loop->the_post();

                          // Carrega o template com os thumbs
                          get_template_part( 'template-parts/content', 'faqs'); 
                          
                      $delay = $delay + $interval;
                      $ordem = $ordem + 1;

                      endwhile;
                      wp_reset_postdata();
                      // Aqui termina o loop Wordpress

                  else:
                  ?>

                  <p>Nada encontrado ainda ...</p>

                  <?php
                  // Fim do if do loop Wordpress
                  endif;
                  ?>

            </div>
        </div>
    </div>
</section>

<!-- SESSÃO APOIO -->
<?php

    // Captura o valor do checkbox Mostra/esconde Sessão APOIO
    $showApoio = get_theme_mod('set_checkbox_apoio');

    // Se estiver setado, mostra a sessão.
    if ( $showApoio == true ) {
    ?>
        <section id="apoio">
            <h1 class="title txtDarkBlue">APOIO</h1>
            <div class="row">
                <div class="col">
                    <div class="owl-carousel owl-theme owl-loaded">

                    <!-- Carrega o Widget os Logos -->
                    <?php 
                        if ( is_active_sidebar ('logos-apoio')) {
                            dynamic_sidebar('logos-apoio');
                            }
                    ?>            

                    </div>
                </div>
            </div>
        </section>

    <?php
    }
?>

<!-- SESSÃO CONTATO -->
<section id="contato">
    <div class="row">
        <div class="col mb-3 mb-lg-0">
            <div class="colEsq animate" data-effect="slide-in-left">
                <h2 class="subtitle txtGreen">CONTATO</h2>
                <h1 class="title txtDarkBlue"><?php echo get_theme_mod('set_titulo_contato'); ?></h1>

                <div class="animate" data-effect="slide-in-left" style="animation-delay: .5s">
                    <!-- Carrega o Widget do Formulário de Contato -->
                    <?php 
                        if ( is_active_sidebar ('form-contato')) {
                            dynamic_sidebar('form-contato');
                            }
                    ?>  
                </div>

            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-5 col-dir">
          <img class="img-fluid animate" data-effect="slide-in-right" style="animation-delay: .7s" src="<?php echo get_template_directory_uri().'/assets/img/contatoimg.png'?>" loading="lazy" data-effect="">
        </div>
    </div>
</section>

<!-- Carrega o footer -->
<?php get_footer(); ?> 