<?php

function unifarm_customize ( $wp_customize ){

	// DADOS DA EMPRESA
	$wp_customize->add_section(
		'sec_infos_empresa', array(
			'title' => 'Customizar a página Home',
			'description' => 'Customização das informações da página Home'
		)
  );

  // TÍTULO DA PÁGINA HOME
  $wp_customize->add_setting(
    'set_titulo_home', array(
      'type' => 'theme_mod',
      'default' => 'Aqui entra o título da chamada no topo da página home',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    )
  );

  $wp_customize->add_control(
    'set_titulo_home', array(
      'label' => 'Titulo Chamada no Topo',
      'description' => 'Título da chamada que entra no topo da página home',
      'section' => 'sec_infos_empresa',
      'type' => 'text'
    )
  );

  // TEXTO DA PÁGINA HOME
  $wp_customize->add_setting(
    'set_texto_empresa', array(
      'type' => 'theme_mod',
      'default' => 'Aqui entra o texto resumo que fala sobre a UNIFARM na página home',
      'sanitize_callback' => 'sanitize_text'
    )
  );

  function sanitize_text( $input ) {
    $allowed_html = array(
      'br' => array(),
    );
 
    return wp_kses( $input, $allowed_html );
 }

  $wp_customize->add_control(
    'set_texto_empresa', array(
      'label' => 'Resumo UNIFARM',
      'description' => 'Resumo sobre a UNIFARM',
      'section' => 'sec_infos_empresa',
      'type' => 'textarea'
    )
  );

  // FACEBOOK
  $wp_customize->add_setting(
    'set_url_facebook', array(
      'type' => 'theme_mod',
      'default' => 'Facebook da UNIFARM',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    )
  );

  $wp_customize->add_control(
    'set_url_facebook', array(
      'label' => 'Facebook da UNIFARM',
      'description' => 'Endereço do Facebook da UNIFARM',
      'section' => 'sec_infos_empresa',
      'type' => 'text'
    )
  );

  // INSTAGRAM
  $wp_customize->add_setting(
    'set_url_instagram', array(
      'type' => 'theme_mod',
      'default' => 'Instagram da UNIFARM',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    )
  );

  $wp_customize->add_control(
    'set_url_instagram', array(
      'label' => 'Instagram da UNIFARM',
      'description' => 'Endereço do Instagram da UNIFARM',
      'section' => 'sec_infos_empresa',
      'type' => 'text'
    )
  );

  // TWITTER
  $wp_customize->add_setting(
    'set_url_twitter', array(
      'type' => 'theme_mod',
      'default' => 'Twitter da UNIFARM',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    )
  );

  $wp_customize->add_control(
    'set_url_twitter', array(
      'label' => 'Twitter da UNIFARM',
      'description' => 'Endereço do Twitter da UNIFARM',
      'section' => 'sec_infos_empresa',
      'type' => 'text'
    )
  );

  // TÍTULO DA SESSÃO QUEM SOMOS
  $wp_customize->add_setting(
    'set_titulo_quemsomos', array(
      'type' => 'theme_mod',
      'default' => 'Aqui entra o título da sessão quem somos da página home',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    )
  );

  $wp_customize->add_control(
    'set_titulo_quemsomos', array(
      'label' => 'Titulo Sessão Quem Somos',
      'description' => 'Título da Sessão Quem Somos da página home',
      'section' => 'sec_infos_empresa',
      'type' => 'text'
    )
  );

  // TEXTO SESSÃO QUEM SOMOS
  $wp_customize->add_setting(
    'set_texto_quemsomos', array(
      'type' => 'theme_mod',
      'default' => 'Aqui entra o texto da sessão quem somos na página home',
      'sanitize_callback' => 'sanitize_text'
    )
  );

  $wp_customize->add_control(
    'set_texto_quemsomos', array(
      'label' => 'Texto Sessão Quem Somos',
      'description' => 'Texto Sessão Quem Somos',
      'section' => 'sec_infos_empresa',
      'type' => 'textarea'
    )
  );

  // TÍTULO DA SESSÃO PORQUE A UNIFARM?
  $wp_customize->add_setting(
    'set_titulo_porqueaunifarm', array(
      'type' => 'theme_mod',
      'default' => 'Aqui entra o título da sessão porque a unifarm? da página home',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    )
  );

  $wp_customize->add_control(
    'set_titulo_porqueaunifarm', array(
      'label' => 'Titulo Sessão Porque a Unifarm?',
      'description' => 'Título da Sessão Porque a Unifarm? da página home',
      'section' => 'sec_infos_empresa',
      'type' => 'text'
    )
  );

  // TÍTULO DA SESSÃO PRÉ-CADASTRO
  $wp_customize->add_setting(
    'set_titulo_precadastro', array(
      'type' => 'theme_mod',
      'default' => 'Aqui entra o título da sessão pré-cadastro da página home',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    )
  );

  $wp_customize->add_control(
    'set_titulo_precadastro', array(
      'label' => 'Titulo Sessão Pré-Cadastro',
      'description' => 'Título da Sessão Pré-Cadastro da página home',
      'section' => 'sec_infos_empresa',
      'type' => 'text'
    )
  );  

  // TÍTULO DA SESSÃO FAQ
  $wp_customize->add_setting(
    'set_titulo_faq', array(
      'type' => 'theme_mod',
      'default' => 'Aqui entra o título da sessão FAQ da página home',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    )
  );

  $wp_customize->add_control(
    'set_titulo_faq', array(
      'label' => 'Titulo Sessão FAQ',
      'description' => 'Título da Sessão FAQ da página home',
      'section' => 'sec_infos_empresa',
      'type' => 'text'
    )
  );  

  // TÍTULO DA SESSÃO CONTATO
  $wp_customize->add_setting(
    'set_titulo_contato', array(
      'type' => 'theme_mod',
      'default' => 'Aqui entra o título da sessão contato da página home',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    )
  );

  $wp_customize->add_control(
    'set_titulo_contato', array(
      'label' => 'Titulo Sessão Contato',
      'description' => 'Título da Sessão Contato da página home',
      'section' => 'sec_infos_empresa',
      'type' => 'text'
    )
  ); 

}

add_action( 'customize_register', 'unifarm_customize' );