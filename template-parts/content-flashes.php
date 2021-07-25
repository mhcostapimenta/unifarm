<?php

    global $delay;

 ?>
 
<!-- Conteúdo do Diferencial -->
<div class="col-12 col-sm-6 col-lg-3 cardFlashes animate" data-effect="puff-in-top" style="animation-delay: <?php echo $delay ?>s">
    <div class="boxCardFlashes">
        <div>
            <h2><?php echo the_title(); ?></h2>
            <h1><?php echo rwmb_meta( 'unifarm-nomeDiferencial' ); ?></h1>
        </div>
        <p><?php echo rwmb_meta( 'unifarm-txtDiferencial' ); ?></p>
    </div>
    <a href="#">
        <div class="boxCardBack"></div>
    </a>
</div>
