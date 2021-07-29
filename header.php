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

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','<?php echo get_theme_mod('set_googletagmanager'); ?>');</script>
    <!-- End Google Tag Manager -->


</head>

<body <?php body_class(); ?> > <!-- Carrega as classes do body -->

  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo get_theme_mod('set_googletagmanager'); ?>"
  height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Detecta se a página carregada é a front page -->
  <?php
    if (is_front_page()) { // Se for, carregar o header da Home

      // Topo da página Home
      require get_template_directory(). '/inc/header_home.php';

    } else if (is_404()) { // Se for a página 404

      // Topo da página Home
      require get_template_directory(). '/inc/header_404.php';

    } else { // Se for qualquer outra página

      // Topo da página Home
      require get_template_directory(). '/inc/header_interna.php';

    }

  ?>