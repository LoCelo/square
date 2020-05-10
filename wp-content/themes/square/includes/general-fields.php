<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5e9b3175cb494',
	'title' => 'Hero',
	'fields' => array(
		array(
			'key' => 'field_5eb0053defee5',
			'label' => 'Invert Logo color',
			'name' => 'invert_logo_color',
			'type' => 'button_group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'yes' => 'Sim',
				'no' => 'Não',
			),
			'allow_null' => 0,
			'default_value' => 'no',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_5eb00400df905',
			'label' => 'Hero Color',
			'name' => 'hero_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#FFFFFF',
		),
		array(
			'key' => 'field_5eb004217667e',
			'label' => 'Highlight Color',
			'name' => 'highlight_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#F63C3B',
		),
		array(
			'key' => 'field_5e9b321113b96',
			'label' => 'Background Color',
			'name' => 'background_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'black',
		),
		array(
			'key' => 'field_5e9b317d8d756',
			'label' => 'Hero text',
			'name' => 'hero_text',
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
			'media_upload' => 1,
			'delay' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'page-contatos.php',
			),
		),
		array(
			array(
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'page-equipa.php',
			),
		),
		array(
			array(
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'page-home.php',
			),
		),
		array(
			array(
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'page-social.php',
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
	),
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5e9b32f512606',
	'title' => 'Hero Images',
	'fields' => array(
		array(
			'key' => 'field_5e9b32fb152de',
			'label' => 'Left Image',
			'name' => 'img_left',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
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
		array(
			'key' => 'field_5e9b331f152df',
			'label' => 'Right Image',
			'name' => 'right_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
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
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'page-contatos.php',
			),
		),
		array(
			array(
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'page-equipa.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;



if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5eaf2998a8f6e',
	'title' => 'Page Equipa',
	'fields' => array(
		array(
			'key' => 'field_5eaf280305419',
			'label' => 'Parceiros',
			'name' => 'parceiros',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Novo Parceiro',
			'sub_fields' => array(
				array(
					'key' => 'field_5eaf280a0541a',
					'label' => 'Parceiro',
					'name' => 'parceiro',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
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
				array(
					'key' => 'field_5eaf28240541b',
					'label' => 'Link',
					'name' => 'link',
					'type' => 'url',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'page-equipa.php',
			),
		),
	),
	'menu_order' => 2,
	'position' => 'acf_after_title',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
	),
	'active' => true,
	'description' => '',
));

endif;

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5eaf2cd647f56',
	'title' => 'Contactos',
	'fields' => array(
		array(
			'key' => 'field_5eaf2ce03e7a1',
			'label' => 'First Row',
			'name' => 'first_row',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5eaf2cf13e7a2',
			'label' => 'Second Row',
			'name' => 'second_row',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5eaf2cfe3e7a3',
			'label' => 'Third Row',
			'name' => 'third_row',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'page-contatos.php',
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
	),
	'active' => true,
	'description' => '',
));

endif;

?>
