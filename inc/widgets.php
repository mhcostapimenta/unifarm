<?php

// Dispara o Hook com os Widgets
add_action( 'widgets_init', 'unifarm_widgets');

// Funções que registram as Sidbars no Wordpress
function unifarm_widgets(){

	register_sidebar(
		array(
			'name' => 'Formulário de Pré-Cadastro',
			'id' => 'form-precadastro',
			'description' => 'Formulário de Pré-Cadastro',
			'before_widget' => '',
			'after_widget' => '',
			'before-title' => '<h2>',
			'after-title' => '</h2>'
		)
	);

	register_sidebar(
		array(
			'name' => 'Logos Apoio',
			'id' => 'logos-apoio',
			'description' => 'Logos da Sessão Apoio',
			'before_widget' => '',
			'after_widget' => '',
			'before-title' => '<h2>',
			'after-title' => '</h2>'
		)
	);

	register_sidebar(
		array(
			'name' => 'Formulário de Contato',
			'id' => 'form-contato',
			'description' => 'Formulário de Contato',
			'before_widget' => '',
			'after_widget' => '',
			'before-title' => '<h2>',
			'after-title' => '</h2>'
		)
	);

};