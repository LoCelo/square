<?php

// -----------------------------------------
// semplice
// admin/atts/modules/advancedportfoliogrid.php
// -----------------------------------------

$advancedportfoliogrid = array(
	// hidden options switch, will be controlled by the preset popup
	'options_switch' => array(
		'title'  	 => 'Grid Preset',
		'break'		 => '1',
		'help'	     => 'Note that the options will adjust to the selected grid.',
		'style-class'=> 'hidden',
		'preset' => array(
			'data-input-type' => 'select-box',
			'hide-title' => true,
			'size'		 => 'span4',
			'class'     	=> 'editor-listen hidden apg-preset-select',
			'data-handler'  => 'save',
			'data-visibility-switch' 	=> true,
			'data-visibility-values' 	=> 'horizontal-fullscreen,text',
			'data-visibility-prefix'	=> 'ov-apg',
			'default' 	 => 'horizontal_fullscreen',
			'select-box-values' => array(
				'horizontal-fullscreen'	 => 'Horizontal Fullscreen',
				'text' 				 	 => 'Text Grid',
			),
		),
	),
	'preset' => array(
		'title'  	 => 'Preset',
		'break'		 => '1',
		'help'	     => 'Note that the options will adjust to the selected grid.',
		'data-hide-mobile' => true,
		'select_preset' => array(
			'data-input-type' 	=> 'button',
			'title'		 		=> 'Grid Preset',
			'hide-title'		=> true,
			'button-title'		=> 'Select Grid Preset',
			'size'		 		=> 'span4',
			'class'				=> 'semplice-button white-button expand-options',
			'data-expand-options' => 'apg-preset',
		),
	),
	'manage_posts' => array(
		'title'  	 => 'Content',
		'break'		 => '1',
		'help'	     => 'All changes you make here will only apply to this grid and will not be changed globally.',
		'data-hide-mobile' => true,
		'posts' => array(
			'data-input-type' 	=> 'button',
			'title'		 		=> 'Content',
			'hide-title'		=> true,
			'button-title'		=> 'Add Pages / Projects',
			'size'		 		=> 'span4',
			'class'				=> 'semplice-button white-button expand-options',
			'data-expand-options' => 'posts',
		),
	),
	'hor_full_size_options' => array(
		'title'  	 => 'Options',
		'break'		 => '2',
		'style-class'	=> 'ov-apg-horizontal-fullscreen',
		'data-hide-mobile' => true,
		'hor_full_width' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Images per Row',
			'size'		 => 'span2',
			'class'      	=> 'editor-listen',
			'data-handler' 	=> 'apg',
			'data-target'=> '.is-content',
			'default' 	 => '6',
			'select-box-values' => array(
				'12' => '1 Image',
				'6' => '2 Images',
				'4' => '3 Images',
				'3' => '4 Images',
			),
		),
		'hor_full_object_fit' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Image Size',
			'size'		 => 'span2',
			'class'      	=> 'editor-listen',
			'data-handler' 	=> 'apg',
			'data-target'=> '.is-content',
			'default' 	 => 'cover',
			'select-box-values' => array(
				'cover' 	=> 'Cover',
				'inside' 	=> 'Original',
			),
		),
	),
	'hor_full_transition_options' => array(
		'title'  	 => 'Options',
		'break'		 => '2',
		'style-class'	=> 'ov-apg-horizontal-fullscreen',
		'hide-title' => true,
		'hor_full_transition' => array(
			'data-input-type' => 'switch',
			'switch-type'	=> 'twoway',
			'title'		 => 'Custom Page Transition',
			'size'		 => 'span4',
			'class'      	=> 'editor-listen',
			'data-handler' 	=> 'apg',
			'default' 	 => 'disabled',
			'help'  => 'Note: To use transitions, you must enable page transitions in \'Customize › Page Transitions\'.<br /><br />This option will enable a custom page transition made specifically for this grid. Tip: For the best results, the grid should start straight on top as the first content on your page. To achieve this, click \'Branding\' in the top bar and set \'Display content\' to \'Straight on top\'.',
			'switch-values' => array(
				'disabled'	 => 'Disabled',
				'enabled'	 => 'Enabled',
			),
		),
	),
	'hor_full_title_options' 	=> get_title_options('title-options', 'hor_full_', $fonts, 42, 20),
	'hor_full_title_formatting' => get_title_options('title-formatting', 'hor_full_', $fonts, 42, 20),
	'hor_full_type_formatting'  => get_title_options('type-formatting', 'hor_full_', $fonts, 42, 20),
	'hor_full_arrow_options' => array(
		'title'  	 => 'Arrow Options',
		'break'		 => '2,2,2',
		'style-class'	=> 'ov-apg-horizontal-fullscreen',
		'data-hide-mobile' => true,
		'hor_full_arrow' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Shape',
			'size'		 => 'span2',
			'class'      	=> 'editor-listen',
			'data-handler' 	=> 'apg',
			'data-visibility-switch' 	=> true,
			'data-visibility-values' 	=> 'default,alternative,custom',
			'data-visibility-prefix'	=> 'ov-apg-hor-full-arrow',
			'default' 	 => 'default',
			'select-box-values' => array(
				'default' 		=> 'Default',
				'alternative' 	=> 'Alternative',
				'custom'		=> 'Custom',
			),
		),
		'hor_full_arrow_custom' => array(
			'title'				=> 'Custom Shape',
			'help'				=> 'Set a custom shape by add your SVG path string. To make our sizing work make sure to draw the left arrow (right will be just mirrored) on a 100x100 canvas.<br /><br /><b>Help:</b><br />Once you edit your SVG in a text editor you have to copy and paste the \'d\' attribute of your path string. <a href="https://developer.mozilla.org/en-US/docs/Web/SVG/Attribute/d" target="_blank">More Details.</a>',
			'size'				=> 'span2',
			'data-input-type'	=> 'input-text',
			'default'			=> '',
			'class'				=> 'editor-listen',
			'placeholder'		=> 'SVG path string',
			'data-handler' 		=> 'apg',
			'style-class'		=> 'ov-apg-hor-full-arrow-custom',
		),
		'hor_full_arrow_color' => array(
			'data-css-attribute' => 'fill',
			'title'			=> 'Color',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.flickity-button-icon path',
			'default'		=> '#ffffff',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'apg',
		),
		'hor_full_arrow_size' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Size',
			'size'		 => 'span2',
			'class'      	=> 'editor-listen',
			'data-handler' 	=> 'apg',
			'default' 	 => 'small',
			'select-box-values' => array(
				'small' 		=> 'Small',
				'medium' 		=> 'Medium',
				'large' 		=> 'Large',
				'insane' 		=> 'Insane',
			),
		),
		'hor_full_arrow_bg_color' => array(
			'data-css-attribute' => 'background-color',
			'title'			=> 'Background',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.flickity-button',
			'default'		=> '#000000',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'apg',
		),
		'hor_full_arrow_bg_opacity' => array(
			'title'			=> 'BG Opacity',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' => 'range-slider',
			'default'		=> 0,
			'min'			=> 0,
			'max'			=> 100,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'data-range-slider' => 'apg',
		),
	),
	'hor_full_bg_options' => array(
		'title'  	 => 'Background',
		'break'		 => '2',
		'style-class'	=> 'ov-apg-horizontal-fullscreen',
		'help' 			=> 'This is only visible if you set \'Image Size\' to \'Original\'.',
		'data-hide-mobile' => true,
		'hor_full_bg_even' => array(
			'data-css-attribute' => 'background-color',
			'title'			=> 'BG Even',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.even',
			'default'		=> '#000000',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'apg',
		),
		'hor_full_bg_odd' => array(
			'data-css-attribute' => 'background-color',
			'title'			=> 'BG Odd',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.odd',
			'default'		=> '#cccccc',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'apg',
		),
	),
	'hor_full_mouseover_options' => array(
		'title'  	 => 'Mouseover Effect',
		'break'		 => '1,2,2,1',
		'style-class'	=> 'ov-apg-horizontal-fullscreen',
		'help' 			=> 'Please note that there is no preview for these mouseover effects.',
		'data-hide-mobile' => true,
		'hor_full_hover' => array(
			'data-input-type' => 'select-box',
			'hide-title' => true,
			'size'		 => 'span4',
			'class'     	=> 'editor-listen',
			'data-handler'  => 'save',
			'data-visibility-switch' 	=> true,
			'data-visibility-values' 	=> 'scale-opacity,dim-down,border,none',
			'data-visibility-prefix'	=> 'ov-apg-hor-full-mouseover',
			'default' 	 => 'scale-opacity',
			'select-box-values' => array(
				'scale-opacity' => 'Scale hovered, dim down rest',
				'dim-down'		=> 'Dim down hovered',
				'border'	 => 'Border',
				'none'		 => 'None',
			),
		),
		'hor_full_hover_so_opacity' => array(
			'title'			=> 'Opacity',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' => 'range-slider',
			'default'		=> 40,
			'min'			=> 0,
			'max'			=> 100,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'data-range-slider' => 'apg',
			'data-target'		=> 'no-preview',
			'style-class'	=> 'ov-apg-hor-full-mouseover-scale-opacity'
		),
		'hor_full_hover_so_scale' => array(
			'title'			=> 'Scale in %',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' => 'range-slider',
			'default'		=> 7,
			'min'			=> 0,
			'max'			=> 70,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'data-range-slider' => 'apg',
			'data-target'		=> 'no-preview',
			'style-class'	=> 'ov-apg-hor-full-mouseover-scale-opacity'
		),
		'hor_full_hover_border_width' => array(
			'title'			=> 'Border Width',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' => 'range-slider',
			'default'		=> 15,
			'min'			=> 0,
			'max'			=> 9999,
			'data-has-unit'	=> true,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'data-range-slider' => 'apg',
			'data-target'		=> 'no-preview',
			'style-class'	=> 'ov-apg-hor-full-mouseover-border'
		),
		'hor_full_hover_border_color' => array(
			'title'			=> 'Border Color',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> 'no-preview',
			'default'		=> '#ffffff',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'apg',
			'style-class'	=> 'ov-apg-hor-full-mouseover-border'
		),
		'hor_full_hover_dimdown_opacity' => array(
			'title'			=> 'Opacity',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' => 'range-slider',
			'default'		=> 40,
			'min'			=> 0,
			'max'			=> 100,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'data-range-slider' => 'apg',
			'data-target'		=> 'no-preview',
			'style-class'	=> 'ov-apg-hor-full-mouseover-dim-down'
		),
		'hor_full_hover_title_fade' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Title Fade In / out',
			'size'		 => 'span4',
			'class'      	=> 'editor-listen',
			'data-handler' 	=> 'apg',
			'help'  => 'If you want to fade in the title on mouseover, set the \'Title Visibility\' under Title Options to \'Hidden\'. If you want to hide the title on hover, set the \'Title Visibility\' to something other than \'Hidden\'.',
			'default' 	 => 'none',
			'select-box-values' => array(
				'none'				=> 'None',
				'fadein' 		  	=> 'Fade in only',
				'fadein-top' 		=> 'Fade in + move from top',
				'fadein-right' 		=> 'Fade in + move from right',
				'fadein-bottom' 	=> 'Fade in + move from bottom',
				'fadein-left' 		=> 'Fade in + move from left',
				'fadeout' 		  	=> 'Fade out only',
				'fadeout-top' 		=> 'Fade out + move to top',
				'fadeout-right' 	=> 'Fade out + move to right',
				'fadeout-bottom' 	=> 'Fade out + move to bottom',
				'fadeout-left' 		=> 'Fade out + move to left',
			),
		),
	),
	// mobile options
	'hor_full_responsive_lg' => get_apg_responsive('hor-full', 'lg'),
	'hor_full_responsive_md' => get_apg_responsive('hor-full', 'md'),
	'hor_full_responsive_sm' => get_apg_responsive('hor-full', 'sm'),
	'hor_full_responsive_xs' => get_apg_responsive('hor-full', 'xs'),
	'text_title_options' 	=> get_title_options('title-options-text', 'text_', $fonts, 90, 20),
	'text_title_formatting' => get_title_options('title-formatting', 'text_', $fonts, 90, 20),
	'text_seperator_formatting' => array(
		'title'  	 => 'Seperator Formatting',
		'break'		 => '1,2',
		'style-class'=> 'ov-apg-text',
		'data-hide-mobile' => true,
		'text_seperator' => array(
			'title'				=> 'Seperator',
			'help'				=> 'Leave this input empty if you don\'t want a separator at all.<br /><br />Note: Separators are only visible for the horizontal Text Grid direction.',
			'size'				=> 'span4',
			'data-input-type'	=> 'input-text',
			'default'			=> '/',
			'class'				=> 'editor-listen',
			'placeholder'		=> 'Seperator',
			'data-handler' 		=> 'apg',
		),
		'text_seperator_color' => array(
			'title'				=> 'Color',
			'data-style-option' => true,
			'size'				=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'		=> '.spacer',
			'default'			=> 'transparent',
			'class'				=> 'color-picker admin-listen-handler',
			'data-handler' 		=> 'colorPicker',
			'data-picker'		=> 'apg',
			'data-target'		=> '.apg-text-seperator',
			'data-css-attribute'=> 'color',
		),
		'text_seperator_font_family' => array(
			'data-input-type' => 'select-fonts',
			'title'		 		=> 'Font Family',
			'size'		 		=> 'span2',
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'default' 	 		=> 'bold',
			'select-box-values' => $fonts,
		),
	),
	'text_mouseover_options' => array(
		'title'  	 => 'Mouseover Options',
		'break'		 => '2,2,2',
		'style-class'=> 'ov-apg-text',
		'data-hide-mobile' => true,
		'text_hover_image_mode' => array(
			'data-input-type'   => 'select-box',
			'title'		 		=> 'Image mode',
			'size'		 		=> 'span2',
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'default' 	 		=> 'bold',
			'select-box-values' => array(
				'cover'			 => 'Cover',
				'original' 		 => 'Original (centered)',
				'original_mouse' => 'Original (Stick to mouse)',
			),
		),
		'text_hover_image_width' => array(
			'data-input-type'   => 'select-box',
			'title'		 		=> 'Max Image Width',
			'help'				=> 'Define the maximum image width in percent related to the viewport. If you set 60% for example, your image will be never bigger than 60% of your browser window.',
			'size'		 		=> 'span2',
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'default' 	 		=> '60',
			'select-box-values' => array(
				'40'	=> '40% of Viewport',
				'50'	=> '50% of Viewport',
				'60'	=> '60% of Viewport',
				'70'	=> '70% of Viewport',
				'80'	=> '80% of Viewport',
				'90'	=> '90% of Viewport',
				'100'	=> '100% of Viewport',
			),
		),
		'text_hover_effect' => array(
			'data-input-type'   => 'select-box',
			'title'		 		=> 'Mouseover Effect',
			'size'		 		=> 'span2',
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'default' 	 		=> 'fade',
			'help'				=> 'If a fade option is selected, the hovered title will remain at 100% opacity on mouseover while all other images and/or titles fade to your defined opacity.',
			'select-box-values' => array(
				'fade_both'	  	=> 'Fade Image and Title',
				'fade_image'	=> 'Fade Image Only',
				'fade_title'	=> 'Fade Title Only',
				'none'		 	=> 'None',
			),
		),
		'text_hover_title_opacity' => array(
			'title'			=> 'Title Opacity',
			'help'			=> 'Define the opacity of your non-hovered titles.',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' => 'range-slider',
			'default'		=> 20,
			'min'			=> 0,
			'max'			=> 100,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'data-range-slider' => 'apg',
			'data-target'=> 'no-preview',
			//'responsive'	=> true,
		),
		'text_hover_title_mask' => array(
			'data-input-type' => 'switch',
			'switch-type'	=> 'twoway',
			'title'		 => 'Title Mask',
			'size'		 => 'span2',
			'class'      	=> 'editor-listen',
			'data-handler' 	=> 'apg',
			'default' 	 => 'disabled',
			'help'  => 'This option will override the mouseover effect option and only works if you set \'Image Size\' to \'Original (Stick to Mouse)\' and the \'Direction\' to \'Column\'.<br /><br />Once applied, the title will change color only where it overlaps the image. The rest of the title will remain its original link color.',
			'switch-values' => array(
				'disabled'	 => 'Hidden',
				'enabled'	 => 'Visible',
			),
		),
		'text_hover_title_mask_color' => array(
			'title'				=> 'Title Mask Color',
			'help'				=> 'Define the color for the part of the title that\'s above the image.',
			'data-style-option' => true,
			'size'				=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'		=> '.spacer',
			'default'			=> '#ffffff',
			'class'				=> 'color-picker admin-listen-handler',
			'data-handler' 		=> 'colorPicker',
			'data-picker'		=> 'apg',
		),
	),
	'text_full_responsive_lg' => get_apg_responsive('text', 'lg'),
	'text_full_responsive_md' => get_apg_responsive('text', 'md'),
	'text_full_responsive_sm' => get_apg_responsive('text', 'sm'),
	'text_full_responsive_xs' => get_apg_responsive('text', 'xs'),
);

?>