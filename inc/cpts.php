<?php

  // 1. https://generatewp.com/
	// - Registrar os CTPs (https://generatewp.com/post-type/)
	// - Registrar no argumento supports quais meta boxex padrão irão aparecer
	// - Registrar as Taxonomias (https://generatewp.com/taxonomy/)
	// - Obs.: Cuidado com os slugs dos CTPs e suas respectivas Taxonomias
	// 2. Site para criação de Metabox: https://metabox.io/
	// - Instalar Plugin Meta Box
	// - Ir no Gerador online do Meta Box (link dentro do plugin)
	// - Criar os campos personalizados de cada um dos CTPs
	// - Copiar a parte do array de cada campo ou caso precise abrir uma nova metabox,
	// - Copiar também o array relativo a metabox nova
	// - Registrar todos os campos de uma única vez
	// - Validar os campos (https://docs.metabox.io/validation/)
	// - Incluir logo abaixo dos campos de cada metabox os arrays Validation e Messages

// Registra CTP Soluções
function unifarm_flashes() {

	$labels = array(
		'name'                  => _x( 'Flashes', 'Post Type General Name', 'unifarm' ),
		'singular_name'         => _x( 'Flash', 'Post Type Singular Name', 'unifarm' ),
		'menu_name'             => __( 'Flashes', 'unifarm' ),
		'name_admin_bar'        => __( 'Flash', 'unifarm' ),
		'archives'              => __( 'Arquivos do Item', 'unifarm' ),
		'attributes'            => __( 'Atributos do Item', 'unifarm' ),
		'parent_item_colon'     => __( 'Item Pai:', 'unifarm' ),
		'all_items'             => __( 'Todos os Items', 'unifarm' ),
		'add_new_item'          => __( 'Adicionar Novo Flash', 'unifarm' ),
		'add_new'               => __( 'Adicionar Novo', 'unifarm' ),
		'new_item'              => __( 'Novo Item', 'unifarm' ),
		'edit_item'             => __( 'Editar Item', 'unifarm' ),
		'update_item'           => __( 'Atualizar Item', 'unifarm' ),
		'view_item'             => __( 'Ver Item', 'unifarm' ),
		'view_items'            => __( 'Ver Itens', 'unifarm' ),
		'search_items'          => __( 'Procurar Item', 'unifarm' ),
		'not_found'             => __( 'Não encontrado', 'unifarm' ),
		'not_found_in_trash'    => __( 'Não encontrado na Lixeira', 'unifarm' ),
		'featured_image'        => __( 'Imagem Destacada', 'unifarm' ),
		'set_featured_image'    => __( 'Configurar imagem destacada', 'unifarm' ),
		'remove_featured_image' => __( 'Remover imagem destacada', 'unifarm' ),
		'use_featured_image'    => __( 'Usar como imagem destacada', 'unifarm' ),
		'insert_into_item'      => __( 'Inserir no item', 'unifarm' ),
		'uploaded_to_this_item' => __( 'Enviado para este item', 'unifarm' ),
		'items_list'            => __( 'Lista do item', 'unifarm' ),
		'items_list_navigation' => __( 'Navegação de lista dos itens', 'unifarm' ),
		'filter_items_list'     => __( 'Filtrar lista de itens', 'unifarm' ),
  );
  
	$args = array(
		'label'                 => __( 'Flashes', 'unifarm' ),
		'description'           => __( 'Informações sobre os flashes', 'unifarm' ),
		'labels'                => $labels,
		'supports'              => array( 'title'),
		'taxonomies'            => array( '' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'Flashes', $args );

}

add_action( 'init', 'unifarm_flashes', 0 );

// Registra CTP FAQs
function unifarm_FAQs() {

	$labels = array(
		'name'                  => _x( 'FAQs', 'Post Type General Name', 'unifarm' ),
		'singular_name'         => _x( 'FAQ', 'Post Type Singular Name', 'unifarm' ),
		'menu_name'             => __( 'FAQs', 'unifarm' ),
		'name_admin_bar'        => __( 'FAQ', 'unifarm' ),
		'archives'              => __( 'Arquivos do Item', 'unifarm' ),
		'attributes'            => __( 'Atributos do Item', 'unifarm' ),
		'parent_item_colon'     => __( 'Item Pai:', 'unifarm' ),
		'all_items'             => __( 'Todos os Items', 'unifarm' ),
		'add_new_item'          => __( 'Adicionar Novo FAQ', 'unifarm' ),
		'add_new'               => __( 'Adicionar Novo', 'unifarm' ),
		'new_item'              => __( 'Novo Item', 'unifarm' ),
		'edit_item'             => __( 'Editar Item', 'unifarm' ),
		'update_item'           => __( 'Atualizar Item', 'unifarm' ),
		'view_item'             => __( 'Ver Item', 'unifarm' ),
		'view_items'            => __( 'Ver Itens', 'unifarm' ),
		'search_items'          => __( 'Procurar Item', 'unifarm' ),
		'not_found'             => __( 'Não encontrado', 'unifarm' ),
		'not_found_in_trash'    => __( 'Não encontrado na Lixeira', 'unifarm' ),
		'featured_image'        => __( 'Imagem Destacada', 'unifarm' ),
		'set_featured_image'    => __( 'Configurar imagem destacada', 'unifarm' ),
		'remove_featured_image' => __( 'Remover imagem destacada', 'unifarm' ),
		'use_featured_image'    => __( 'Usar como imagem destacada', 'unifarm' ),
		'insert_into_item'      => __( 'Inserir no item', 'unifarm' ),
		'uploaded_to_this_item' => __( 'Enviado para este item', 'unifarm' ),
		'items_list'            => __( 'Lista do item', 'unifarm' ),
		'items_list_navigation' => __( 'Navegação de lista dos itens', 'unifarm' ),
		'filter_items_list'     => __( 'Filtrar lista de itens', 'unifarm' ),
  );
  
	$args = array(
		'label'                 => __( 'FAQs', 'unifarm' ),
		'description'           => __( 'Informações sobre as FAQs', 'unifarm' ),
		'labels'                => $labels,
		'supports'              => array( 'title'),
		'taxonomies'            => array( '' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'FAQs', $args );

}

add_action( 'init', 'unifarm_FAQs', 0 );


// Registra campos personalizados
function unifarm_get_meta_box( $meta_boxes ) {
	$prefix = 'unifarm-';

	// Meta boxes Flahses
	$meta_boxes[] = array(
		'id' => 'flashes',
		'title' => esc_html__( 'Informações sobre os flashes', 'unifarm' ),
		'post_types' => array( 'Flashes' ),
		'context' => 'after_title',
		'priority' => 'default',
		'autosave' => 'true',
		'fields' => array(
			array(
				'id' => $prefix . 'nomeDiferencial',
				'type' => 'text',
        'name' => esc_html__( 'Nome do Diferencial', 'unifarm' ),
        'size' => 80,
				'placeholder' => esc_html__( 'Digite o nome do diferencial', 'unifarm' ),
      ),
			array(
				'id' => $prefix . 'txtDiferencial',
				'type' => 'textarea',
				'name' => esc_html__( 'Texto sobre o diferencial', 'unifarm' ),
				'placeholder' => esc_html__( 'Digite o texto do diferencial', 'unifarm' ),
				'rows' => 5,
				'cols' => 1,
			),
		),

    // Regras de validação dos campos dos Flashes
    'validation' => array( 
      'rules'  => array(
            'unifarm-nomeDiferencial' => array(
                'required'  => true,
                'maxlength' => 35,
          ),
					'unifarm-txtDiferencial' => array(
						'required'  => true,
						'maxlength' => 396,
					),
      ), 

    // Mensagens de erro dos campos dos Flashes
      'messages'  => array(
        'unifarm-nomeDiferencial' => array(
            'required'  => 'O nome do diferencial é obrigatório',
            'maxlength' => 'Tamanho máximo é de 35 caracteres',
        ),
				'unifarm-txtDiferencial' => array(
					'required'  => 'O texto do diferencial é obrigatório',
					'maxlength' => 'Tamanho máximo é de 395 caracteres',
				),
      )

		)

  );

	// Meta boxe do campo do Nome do Evento
	$meta_boxes[] = array(
		'id' => 'FAQs',
		'title' => esc_html__( 'Informações sobre as FAQs', 'unifarm' ),
		'post_types' => array( 'FAQs' ),
		'context' => 'after_title',
		'priority' => 'default',
		'autosave' => 'true',
		'fields' => array(
			array(
				'id' => $prefix . 'txtResposta',
				'type' => 'wysiwyg',
				'name' => esc_html__( 'Texto da resposta do FAQ', 'unifarm' ),
				'placeholder' => esc_html__( 'Digite o texto da resposta do FAQ', 'unifarm' ),
				'rows' => 5,
				'cols' => 1,
			),
		),

    // Regras de validação dos campos de Apresentações em Eventos
    'validation' => array( 
      'rules'  => array(
        'unifarm-txtResposta' => array(
          'required'  => true,
          'maxlength' => 1200,
        ),
      ), 

    // Mensagens de erro da validação dos campos das Apresentações em Eventos
      'messages'  => array(
        'unifarm-txtResposta' => array(
            'required'  => 'O texto da resposta do FAQ é obrigatório',
            'maxlength' => 'Tamanho máximo é de 700 caracteres',
        ),
      )

		)

  );
  
	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'unifarm_get_meta_box' );