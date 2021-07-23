<?php

    global $delay;
    global $ordem;

    if ($ordem < 10) {
      $prefix = '0';
    } else {
      $prefix = '';
    }

 ?>

<!-- Conteúdo do Faq -->
<div class="pergunta">
      <div class="enunciado">
        <span class="numero"><?php echo $prefix.$ordem ?></span>
        <span class="textoEnunciado"><?php echo the_title(); ?></span>
      </div>
      <div class="resposta">
          <?php echo rwmb_meta( 'unifarm-txtResposta' ); ?>
      </div>
  </div>
