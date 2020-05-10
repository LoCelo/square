<?php

register_post_type( 'equipa',
    array(
      'labels' => array(
        'name' => 'Equipa',
        'singular_name' => 'Equipa',
        'add_new' => 'Novo membro',
        'add_new_item' => 'Adicionar membro',
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-buddicons-buddypress-logo',
      'rewrite' => array('slug' => 'equipa'),
      'supports' => array('title', 'page-attributes')
    )
);

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5e9b353d5581f',
	'title' => 'Equipa',
	'fields' => array(
    array(
  			'key' => 'field_5eb78a9fcceaf',
  			'label' => 'First Photo',
  			'name' => 'first_photo',
  			'type' => 'image',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array(
  				'width' => '50',
  				'class' => '',
  				'id' => '',
  			),
  			'return_format' => 'id',
  			'preview_size' => 'medium_large',
  			'library' => 'all',
  			'min_width' => '',
  			'min_height' => '',
  			'min_size' => '',
  			'max_width' => '',
  			'max_height' => '',
  			'max_size' => '',
  			'mime_types' => '',
  		),
  		array(
  			'key' => 'field_5eb78a16c426d',
  			'label' => 'Second photo',
  			'name' => 'second_photo',
  			'type' => 'image',
  			'instructions' => '',
  			'required' => 0,
  			'conditional_logic' => 0,
  			'wrapper' => array(
  				'width' => '50',
  				'class' => '',
  				'id' => '',
  			),
  			'return_format' => 'id',
  			'preview_size' => 'medium_large',
  			'library' => 'all',
  			'min_width' => '',
  			'min_height' => '',
  			'min_size' => '',
  			'max_width' => '',
  			'max_height' => '',
  			'max_size' => '',
  			'mime_types' => '',
  		),
		array(
			'key' => 'field_5e9b355142a97',
			'label' => 'Cargo',
			'name' => 'cargo',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5e9b356142a98',
			'label' => 'Descrição',
			'name' => 'descricao',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
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
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'equipa',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
		1 => 'categories',
	),
	'active' => true,
	'description' => '',
));

endif;


?>
