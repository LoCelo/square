<?php

// -----------------------------------------
// semplice
// admin/atts/modules/button.php
// -----------------------------------------

$button = array(
	'options' => array(
		'title'  	 => 'Options',
		'hide-title' => true,
		'break'		 => '1,2,2,2,2',
		'label' => array(
			'data-input-type'	=> 'input-text',
			'title'		 	=> 'Label',
			'size'		 	=> 'span4',
			'placeholder'	=> 'Semplice Button',
			'default'		=> 'Semplice Button',
			'class'			=> 'editor-listen',
			'data-handler'	=> 'button',
		),
		'width' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Width',
			'size'		 => 'span2',
			'class'			=> 'editor-listen',
			'data-handler'	=> 'default',
			'data-target'=> '.is-content',
			'default' 	 => 'auto',
			'select-box-values' => array(
				'auto'		 => 'Auto',
				'grid-width' => 'Grid Width',
			),
		),
		'align' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Align',
			'size'		 => 'span2',
			'class'			=> 'editor-listen',
			'data-handler'	=> 'default',
			'data-target'=> '.ce-button',
			'default' 	 => 'center',
			'select-box-values' => array(
				'center'		=> 'Center',
				'left'			=> 'Left',
				'right'			=> 'Right',
			),
		),
		'font_family' => array(
			'data-input-type' => 'select-fonts',
			'title'		 		=> 'Font Family',
			'size'		 		=> 'span2',
			'class'			=> 'editor-listen',
			'data-handler'	=> 'button',
			'data-target'		=> '.is-content a',
			'default' 	 		=> 'none',
			'select-box-values' => $fonts,
		),
		'font-size' => array(
			'data-style-option' => true,
			'title'			=> 'Font Size',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.is-content a',
			'default'		=> 16,
			'min'			=> 6,
			'max'			=> 999,
			'class'			=> 'editor-listen',
			'data-handler'	=> 'default',
			'data-has-unit'	=> true,
		),
		'color' => array(
			'data-style-option' => true,
			'title'			=> 'Text Color',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.is-content a',
			'default'		=> '#000000',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
		),
		'letter-spacing' => array(
			'data-style-option' => true,
			'title'			=> 'Letter Spacing',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.is-content a',
			'default'		=> 0,
			'min'			=> 0,
			'max'			=> 9999,
			'class'			=> 'editor-listen',
			'data-handler'	=> 'default',
			'data-divider'  => 10,
			'data-has-unit'	=> true,
			'data-negative' => true,
			'help'			=> 'This value increments the letter spacing in 0.1px steps. <br /><br /><b>Example:</b> 10 = 1px. <br /><br /><b>Note:</b><br />You will see the letter spacing also added to the last char on the right while editing. For the frontend this will get compensated with a negative margin to correctly align your button label.',
		),
		'border-width' => array(
			'data-style-option' => true,
			'title'			=> 'Border Width',
			'help'			=> 'This will overwrite the border width option in the [Styles] tab of your button if set.',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.is-content',
			'default'		=> 0,
			'min'			=> 0,
			'max'			=> 999,
			'class'			=> 'editor-listen',
			'data-handler'	=> 'default',
			'data-has-unit'	=> true,
		),
		'border-radius' => array(
			'data-style-option' => true,
			'title'			=> 'Border Radius',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.is-content, .is-content a',
			'default'		=> 0,
			'min'			=> 0,
			'max'			=> 999,
			'class'			=> 'editor-listen',
			'data-handler'	=> 'default',
			'data-has-unit'	=> true,
		),
		'border-color' => array(
			'title'			=> 'Border Color',
			'help'			=> 'This will overwrite the border color option in the [Styles] tab of your button if set.',
			'data-style-option' => true,
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.is-content',
			'default'		=> 'transparent',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
		),
		'background-color' => array(
			'title'			=> 'BG Color',
			'data-style-option' => true,
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.is-content',
			'default'		=> '#ffd300',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
		),
	),
	'padding' => array(
		'title' => 'Paddings',
		'data-hide-mobile' => true,
		'padding-top' => array(
			'data-style-option' => true,
			'title'			=> 'Top',
			'size'			=> 'span1',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.is-content a',
			'default'		=> 16,
			'min'			=> 0,
			'max'			=> 999,
			'class'			=> 'editor-listen',
			'data-handler'	=> 'default',
			'data-has-unit'	=> true,
		),
		'padding-right' => array(
			'data-style-option' => true,
			'title'			=> 'Right',
			'size'			=> 'span1',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.is-content a',
			'default'		=> 16,
			'min'			=> 0,
			'max'			=> 999,
			'class'			=> 'editor-listen',
			'data-handler'	=> 'default',
			'data-has-unit'	=> true,	
		),
		'padding-bottom' => array(
			'data-style-option' => true,
			'title'			=> 'Bottom',
			'size'			=> 'span1',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.is-content a',
			'default'		=> 16,
			'min'			=> 0,
			'max'			=> 999,
			'class'			=> 'editor-listen',
			'data-handler'	=> 'default',
			'data-has-unit'	=> true,	
		),
		'padding-left' => array(
			'data-style-option' => true,
			'title'			=> 'Left',
			'size'			=> 'span1',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.is-content a',
			'default'		=> 16,
			'min'			=> 0,
			'max'			=> 999,
			'class'			=> 'editor-listen',
			'data-handler'	=> 'default',
			'data-has-unit'	=> true,	
		),
	),
	'mouseover' => array(
		'title'  	 => 'Mouseover',
		'break'		 => '2,2',
		'help'		 => 'To avoid editing problems the button mouseover is not animated in the editor.',
		'data-hide-mobile' => true,
		'hover-color' => array(
			'title'			=> 'Text Color',
			'data-hover-option' => true,
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.is-content a',
			'default'		=> '#000000',
			'class'			=> 'color-picker admin-listen-handler listen-hover',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'buttonHover',
		),
		'hover-background-color' => array(
			'title'			=> 'BG Color',
			'data-hover-option' => true,
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.is-content',
			'default'		=> '#ffe152',
			'class'			=> 'color-picker admin-listen-handler listen-hover',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'buttonHover',
		),
		'hover-border-color' => array(
			'title'			=> 'Border Color',
			'data-hover-option' => true,
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.is-content',
			'default'		=> 'transparent',
			'class'			=> 'color-picker admin-listen-handler listen-hover',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'buttonHover',
		),
		'hover-letter-spacing' => array(
			'data-hover-option' => true,
			'title'			=> 'Letter Spacing',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.is-content a',
			'default'		=> 0,
			'min'			=> 0,
			'max'			=> 999,
			'class'			=> 'editor-listen',
			'data-handler'	=> 'buttonHover',
			'data-has-unit'	=> true,
			'data-divider'  => 10,
			'data-negative' => true,
			'help'			=> 'This value increments the letter spacing in 0.1px steps. <br /><br /><b>Example:</b> 10 = 1px',
			'data-range-slider' => 'buttonHover',
		),
		'box_shadow_opacity' => array(
			'title'			=> 'Box Shadow Opacity',
			'size'			=> 'span4',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 100,
			'min'			=> 0,
			'max'			=> 100,
			'class'			=> 'editor-listen',
			'data-handler'	=> 'default',
			'help'			=> 'Please note that this only defines the opacity of your shadow for the mouseover. In order to add a shadow please click on the tab <b>[ Styles ]</b> in this popup window<br /><br />There is no preview for the box shadow hover.',
		),
	),
	'button-link' => array(
		'title'  	 => 'Button Link',
		'break'		 => '1,1,1,1,1,1',
		'data-hide-mobile' => true,
		'link_type' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Type',
			'size'		 => 'span4',
			'class'			=> 'editor-listen',
			'data-handler'	=> 'save',
			'default' 	 => 'url',
			'data-visibility-switch' 	=> true,
			'data-visibility-values' 	=> 'url,email,page,project,post',
			'data-visibility-prefix'	=> 'ov-btn-link',
			'select-box-values' => array(
				'url' 		 => 'Url or E-Mail',
				'page'		 => 'Page',
				'project'	 => 'Project',
				'post'		 => 'Blog post',
			),
		),
		'link' => array(
			'data-input-type'	=> 'input-text',
			'title'		 	=> 'Link or E-Mail',
			'size'		 	=> 'span4',
			'placeholder'	=> 'https://www.semplice.com',
			'default'		=> '',
			'class'			=> 'editor-listen',
			'data-handler'	=> 'save',
			'style-class'	=> 'ov-btn-link-url',
		),
		'link_page' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Link to page',
			'size'		 => 'span4',
			'class'			=> 'editor-listen',
			'data-handler'	=> 'save',
			'default' 	 => '',
			'select-box-values' => semplice_get_post_dropdown('page'),
			'style-class'	=> 'ov-btn-link-page',
		),
		'link_project' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Link to project',
			'size'		 => 'span4',
			'class'			=> 'editor-listen',
			'data-handler'	=> 'save',
			'default' 	 => '',
			'select-box-values' => semplice_get_post_dropdown('project'),
			'style-class'	=> 'ov-btn-link-project',
		),
		'link_post' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Link to blog post',
			'size'		 => 'span4',
			'class'			=> 'editor-listen',
			'data-handler'	=> 'save',
			'default' 	 => '',
			'select-box-values' => semplice_get_post_dropdown('post'),
			'style-class'	=> 'ov-btn-link-post',
		),
		'link_target' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Target',
			'size'		 => 'span4',
			'class'			=> 'editor-listen',
			'data-handler'	=> 'save',
			'default' 	 => 'new',
			'select-box-values' => array(
				'new'	 => 'New Tab',
				'same'	 => 'Same Tab',
			),
		),
	),
);
?>