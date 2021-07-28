<!-- Carrega o cabeçalho -->
<?php get_header(); ?>

<!-- Loop do Wordpress -->
<?php

    // Se houver algum conteúdo
    if (have_posts()) :

        // Enquanto houver posts, mostre-os para gente
        while (have_posts() ) : the_post();

        // Carrega a URL da imagem fullsize
	      $img_url = get_the_post_thumbnail_url(get_the_ID());

?>

<section id="content">
    <div class="row">
        <div class="col-12 col-lg-6 col-xl-5 order-2 order-lg-1 col-esq">
            <img class="img-fluid" src="<?php echo $img_url ?>" loading="lazy">
        </div>
        <div class="col order-1 order-lg-2">
            <div>
                <h2 class="subtitle txtGreen">POLÍTICA DE PRIVACIDADE</h2>
                <h1 class="title txtDarkBlue"><?php the_title(); ?></h1>
            </div>
            <div class="boxText">

                <!-- Conteúdo -->
                <?php the_content(); ?>

            </div>

        </div>
    </div>
</section>

<?php
  endwhile;

  else:
?>
<!-- Fim Loop do Wordpress -->

<!-- Caso não haja conteúdo na página mostrar mensagem -->
<p>Nada a ser mostrado - Nothing to show'</p>

<?php 
  endif;
?>

<!-- Carrega o footer -->
<?php get_footer(); ?> 