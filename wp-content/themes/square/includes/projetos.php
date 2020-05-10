<?php

register_post_type( 'projetos',
    array(
      'labels' => array(
        'name' => 'Projetos',
        'singular_name' => 'Projetos',
        'add_new' => 'Novo projeto',
        'add_new_item' => 'Adicionar projeto',
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-images-alt',
      'rewrite' => array('slug' => 'projeto'),
      'supports' => array('title', 'thumbnail', 'editor', 'page-attributes')
    )
);

$args = array(
  'hierarchical' => true,
  'label' => 'Serviços',
  'singular_name' => 'Serviço',
  "query_var" => true
);

register_taxonomy('servico', 'projetos', $args);

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5e9b35b498e58',
	'title' => 'Descrição do Serviço',
	'fields' => array(
    array(
			'key' => 'field_5ea9f798f3799',
			'label' => 'Title Color',
			'name' => 'title_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'black',
		),
		array(
			'key' => 'field_5e9b35bd0ce82',
			'label' => 'Descrição',
			'name' => 'descricao',
      'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 0,
			'delay' => 0,
		),
		array(
			'key' => 'field_5e9b3b2b70414',
			'label' => 'Shape',
			'name' => 'shape',
			'type' => 'image',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'taxonomy',
				'operator' => '==',
				'value' => 'servico',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5e9b3a9a99e6f',
	'title' => 'Projeto',
	'fields' => array(
		array(
			'key' => 'field_5e9b3a9ff386e',
			'label' => 'Serviço Prestado',
			'name' => 'servico_prestado',
			'type' => 'taxonomy',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'taxonomy' => 'servico',
			'field_type' => 'multi_select',
			'allow_null' => 0,
			'add_term' => 1,
			'save_terms' => 1,
			'load_terms' => 0,
			'return_format' => 'object',
			'multiple' => 0,
		),
    array(
			'key' => 'field_5eaef51723b50',
			'label' => 'Cliente',
			'name' => 'client',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'projetos',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'page_attributes',
	),
	'active' => true,
	'description' => '',
));

endif;


?>
