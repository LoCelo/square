<?php

// -----------------------------------------
// semplice
// admin/atts/modules/mailchimp.php
// -----------------------------------------

$mailchimp = array(
	'mailchimp_gdpr' => array(
		'title'  	 => 'Notice',
		'break'		 => '1',
		'data-hide-mobile' => true,
		'show_options' => array(
			'data-input-type' => 'notice',
			'hide-title' => true,
			'size'		 => 'span4',
			'class'     	=> 'ep-notice',
			'data-handler'  => 'mailchimp',
			'default'    => 'EU citizens: Since the embed code for GPDR compliant forms is different for every user, these forms are not supported.',
			'notice-type'=> 'warning',
		),
	),
	'options_switch' => array(
		'title'  	 => 'Show options for',
		'break'		 => '1',
		'help'	     => 'Change this value to switch between the options for the form, the input fields and the submit button.',
		'data-hide-mobile' => true,
		'show_options' => array(
			'data-input-type' => 'select-box',
			'hide-title' => true,
			'size'		 => 'span4',
			'class'     	=> 'editor-listen',
			'data-handler'  => 'mailchimp',
			'data-visibility-switch' 	=> true,
			'data-visibility-values' 	=> 'form,input,submit',
			'data-visibility-prefix'	=> 'ov-mailchimp',
			'default' 	 => 'form',
			'select-box-values' => array(
				'form'	 => 'Form',
				'input'  => 'Input Fields',
				'submit' => 'Submit',
			),
		),
	),
	'options' => array(
		'title'  	 => 'Form Options',
		'break'		 => '1,2,2',
		'style-class'	=> 'ov-mailchimp-form',
		'data-hide-mobile' => true,
		'form_action_url' => array(
			'data-input-type'	=> 'input-text',
			'title'		 	=> 'Form Action Url',
			'size'		 	=> 'span4',
			'placeholder'	=> 'Form Action Url',
			'default'		=> '',
			'class'     	=> 'editor-listen',
			'data-handler'  => 'save',
			'help'			=> 'Please <a href="https://semplicelabs.desk.com/customer/en/portal/articles/2175294-get-a-mailchimp-form-action-url" target="_blank">look at our tutorial</a> on how to get your mailchimp form action url.'
		),
		'fname' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'First Name',
			'size'		 => 'span2',
			'class'     	=> 'editor-listen',
			'data-handler'  => 'default',
			'data-target'=> '.mailchimp-newsletter',
			'default' 	 => 'visible',
			'select-box-values' => array(
				'enabled'	 => 'Enabled',
				'disabled' 	 => 'Disabled',
			),
		),
		'alignment' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Alignment',
			'size'		 => 'span2',
			'class'     	=> 'editor-listen',
			'data-handler'  => 'default',
			'data-target'=> '.mailchimp-newsletter',
			'help'	     => 'Only works if your layout is horizontal and your form is not bigger (width) than your column.',
			'default' 	 => 'left',
			'select-box-values' => array(
				'left'	 => 'Left',
				'center' => 'Center',
				'right'	 => 'Right'
			),
		),
		'layout' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Layout',
			'size'		 => 'span2',
			'class'     	=> 'editor-listen',
			'data-handler'  => 'mailchimp',
			'data-target'=> '.mailchimp-newsletter',
			'default' 	 => 'horizontal',
			'select-box-values' => array(
				'horizontal' => 'Horizontal',
				'vertical' => 'Vertical',
			),
		),
		'spacing' => array(
			'help'			=> 'This defines the spacing between the input fields.',
			'title'			=> 'Spacing',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 0,
			'min'			=> 0,
			'max'			=> 9999,
			'class'     	=> 'editor-listen',
			'data-handler'  => 'mailchimp',
			'data-has-unit'	=> true,
			'data-range-slider' => 'mailchimp',
		),
		'placeholder_name' => array(
			'data-input-type'	=> 'input-text',
			'title'		 	=> 'Placeholder Name',
			'size'		 	=> 'span2',
			'placeholder'	=> 'First Name',
			'default'		=> '',
			'data-target'	=> '#mce-FNAME',
			'class'     	=> 'editor-listen',
			'data-handler'  => 'mailchimp',
		),
		'placeholder_email' => array(
			'data-input-type'	=> 'input-text',
			'title'		 	=> 'Placeholder E-Mail',
			'size'		 	=> 'span2',
			'placeholder'	=> 'E-Mail Address',
			'default'		=> '',
			'data-target'	=> '#mce-EMAIL',
			'class'     	=> 'editor-listen',
			'data-handler'  => 'mailchimp',
		),
	),
	'input' => array(
		'title'  	 => 'Colors',
		'break'		 => '3,2,2',
		'style-class'	=> 'ov-mailchimp-input',
		'data-hide-mobile' => true,
		'input_color' => array(
			'data-css-attribute' => 'color',
			'title'			=> 'Text',
			'help'			=> 'Not previewed since there is a only the placeholder in the preview but no real user input.',
			'size'			=> 'span1',
			'data-input-type'	=> 'color',
			'data-target'	=> '.mailchimp-input',
			'default'		=> '#000000',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'mailchimp',
		),
		'input_bg_color' => array(
			'data-css-attribute' => 'background-color',
			'title'			=> 'BG',
			'size'			=> 'span1',
			'data-input-type'	=> 'color',
			'data-target'	=> '.mailchimp-input',
			'default'		=> '#f0f0f0',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'mailchimp',
		),
		'input_holder_color' => array(
			'title'			=> 'Placeholder',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.mailchimp-input',
			'default'		=> '#aaaaaa',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'mailchimp',
		),
		'input_width' => array(
			'data-css-attribute' => 'width',
			'title'			=> 'Width',
			'size'			=> 'span2',
			'help'			=> 'The width is ignored if your layout is vertical. Please resize your column to adjust the width.',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.mailchimp-input',
			'default'		=> 230,
			'min'			=> 30,
			'max'			=> 999,
			'class'     	=> 'editor-listen',
			'data-handler'  => 'mailchimp',
			'data-has-unit'	=> true,
			'data-range-slider' => 'mailchimp',
		),
		'input_text_align' => array(
			'data-css-attribute' => 'text-align',
			'data-input-type' => 'select-box',
			'title'		 => 'Text Align',
			'size'		 => 'span2',
			'class'     	=> 'editor-listen',
			'data-handler'  => 'mailchimp',
			'data-target'=> '.mailchimp-input',
			'default' 	 => 'left',
			'select-box-values' => array(
				'left' 	 => 'Left',
				'center' => 'Center',
				'right'	 => 'Right',
			),
		),
		'input_font_family' => array(
			'data-input-type' => 'select-fonts',
			'title'		 		=> 'Font Family',
			'size'		 		=> 'span2',
			'class'     	=> 'editor-listen',
			'data-handler'  => 'mailchimp',
			'default' 	 		=> 'none',
			'data-target'		=> '.mailchimp-input',
			'select-box-values' => $fonts,
		),
		'input_font_size' => array(
			'data-css-attribute' => 'font-size',
			'title'			=> 'Font Size',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.mailchimp-input',
			'default'		=> 18,
			'min'			=> 6,
			'max'			=> 999,
			'class'     	=> 'editor-listen',
			'data-handler'  => 'mailchimp',
			'data-has-unit'	=> true,
			'data-range-slider' => 'mailchimp',
		),
		'input_padding_ver' => array(
			'data-css-attribute' => 'font-size',
			'title'			=> 'Padding Vertical',
			'help'			=> 'If your layout is horizontal, the padding for the input fields and the submit button will be matching in size so they always have the same height.',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.mailchimp-input',
			'default'		=> 20,
			'min'			=> 0,
			'max'			=> 999,
			'class'     	=> 'editor-listen',
			'data-handler'  => 'mailchimp',
			'data-has-unit'	=> true,
			'data-range-slider' => 'mailchimp',
		),
		'input_padding_hor' => array(
			'data-css-attribute' => 'font-size',
			'title'			=> 'Padding Horizontal',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.mailchimp-input',
			'default'		=> 30,
			'min'			=> 0,
			'max'			=> 999,
			'class'     	=> 'editor-listen',
			'data-handler'  => 'mailchimp',
			'data-has-unit'	=> true,
			'data-range-slider' => 'mailchimp',
		),
	),
	'border' => array(
		'title'  	 => 'Border',
		'break'		 => '3',
		'style-class'	=> 'ov-mailchimp-input',
		'input_border_width' => array(
			'data-css-attribute' => 'border-width',
			'title'			=> 'Width',
			'size'			=> 'span1',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.mailchimp-input',
			'default'		=> 0,
			'min'			=> 0,
			'max'			=> 999,
			'class'     	=> 'editor-listen',
			'data-handler'  => 'mailchimp',
			'data-has-unit'	=> true,
			'data-range-slider' => 'mailchimp',
		),
		'input_border_color' => array(
			'data-css-attribute' => 'border-color',
			'title'			=> 'Color',
			'size'			=> 'span1',
			'data-input-type'	=> 'color',
			'data-target'	=> '.mailchimp-input',
			'default'		=> '#000000',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'mailchimp',
		),
		'input_border_radius' => array(
			'data-css-attribute' => 'border-radius',
			'title'			=> 'Radius',
			'size'			=> 'span1',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> '.mailchimp-input',
			'default'		=> 0,
			'min'			=> 0,
			'max'			=> 999,
			'class'     	=> 'editor-listen',
			'data-handler'  => 'mailchimp',
			'data-has-unit'	=> true,
			'data-range-slider' => 'mailchimp',
		),
	),
	'mouseover' => array(
		'title'  	 => 'Mouseover & Focus',
		'break'		 => '2,2',
		'style-class'	=> 'ov-mailchimp-input',
		'input_holder_mouseover_color' => array(
			'title'			=> 'Placeholder Color',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.mailchimp-input',
			'default'		=> '#666666',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'mailchimp',
		),
		'input_mouseover_color' => array(
			'data-css-attribute' => 'color',
			'title'			=> 'Text Color',
			'help'			=> 'Not previewed since there is a only the placeholder in the preview but no real user input.',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.mailchimp-input',
			'default'		=> '#000000',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'mailchimp',
		),
		'input_bg_mouseover_color' => array(
			'data-css-attribute' => 'background-color',
			'title'			=> 'Background',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.mailchimp-input',
			'default'		=> '#e9e9e9',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'mailchimp',
		),
		'input_border_mouseover_color' => array(
			'data-css-attribute' => 'border-color',
			'title'			=> 'Border',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.mailchimp-input',
			'default'		=> 'transparent',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'mailchimp',
		),
	),
	'submit' => array(
		'title'  	 => 'Submit Button',
		'break'		 => '2,2,2,2',
		'style-class'	=> 'ov-mailchimp-submit',
		'submit_label' => array(
			'data-input-type'	=> 'input-text',
			'title'		 	=> 'Label',
			'size'		 	=> 'span2',
			'placeholder'	=> 'Submit button label',
			'default'		=> 'Subscribe',
			'class'     	=> 'editor-listen',
			'data-handler'  => 'mailchimp',
		),
		'submit_color' => array(
			'data-css-attribute' => 'color',
			'title'			=> 'Text Color',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> 'button',
			'default'		=> '#000000',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'mailchimp',
		),
		'submit_font_family' => array(
			'data-input-type' => 'select-fonts',
			'title'		 		=> 'Font Family',
			'size'		 		=> 'span2',
			'class'     	=> 'editor-listen',
			'data-handler'  => 'mailchimp',
			'default' 	 		=> 'none',
			'data-target'		=> 'button',
			'select-box-values' => $fonts,
		),
		'submit_font_size' => array(
			'data-css-attribute' => 'font-size',
			'title'			=> 'Font Size',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> 'button',
			'default'		=> 18,
			'min'			=> 6,
			'max'			=> 999,
			'class'     	=> 'editor-listen',
			'data-handler'  => 'mailchimp',
			'data-has-unit'	=> true,
			'data-range-slider' => 'mailchimp',
		),
		'submit_letter_spacing' => array(
			'data-css-attribute' => 'letter-spacing',
			'title'			=> 'Letter Spacing',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> 'button',
			'default'		=> 0,
			'min'			=> 0,
			'max'			=> 999,
			'data-negative' => true,
			'class'     	=> 'editor-listen',
			'data-handler'  => 'mailchimp',
			'data-has-unit'	=> true,
			'data-divider' => 10,
			'data-range-slider' => 'mailchimp',
		),
		'submit_bg_color' => array(
			'data-css-attribute' => 'background-color',
			'title'			=> 'Background',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> 'button',
			'default'		=> '#ffd300',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'mailchimp',
		),
		'submit_padding_ver' => array(
			'data-css-attribute' => 'font-size',
			'title'			=> 'Padding Vertical',
			'help'			=> 'If your layout is horizontal, the padding for the input fields and the submit button will be matching in size so they always have the same height.',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> 'button',
			'default'		=> 20,
			'min'			=> 0,
			'max'			=> 999,
			'class'     	=> 'editor-listen',
			'data-handler'  => 'mailchimp',
			'data-has-unit'	=> true,
			'data-range-slider' => 'mailchimp',
		),
		'submit_padding_hor' => array(
			'data-css-attribute' => 'font-size',
			'title'			=> 'Padding Horizontal',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> 'button',
			'default'		=> 30,
			'min'			=> 0,
			'max'			=> 999,
			'class'     	=> 'editor-listen',
			'data-handler'  => 'mailchimp',
			'data-has-unit'	=> true,
			'data-range-slider' => 'mailchimp',
		),
	),
	'border_submit' => array(
		'title'  	 => 'Border',
		'break'		 => '3',
		'style-class'	=> 'ov-mailchimp-submit',
		'submit_border_width' => array(
			'data-css-attribute' => 'border-width',
			'title'			=> 'Width',
			'size'			=> 'span1',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> 'button',
			'default'		=> 0,
			'min'			=> 0,
			'max'			=> 999,
			'class'     	=> 'editor-listen',
			'data-handler'  => 'mailchimp',
			'data-has-unit'	=> true,
			'data-range-slider' => 'mailchimp',
		),
		'submit_border_color' => array(
			'data-css-attribute' => 'border-color',
			'title'			=> 'Color',
			'size'			=> 'span1',
			'data-input-type'	=> 'color',
			'data-target'	=> 'button',
			'default'		=> '#000000',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'mailchimp',
		),
		'submit_border_radius' => array(
			'data-css-attribute' => 'border-radius',
			'title'			=> 'Radius',
			'size'			=> 'span1',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> 'button',
			'default'		=> 0,
			'min'			=> 0,
			'max'			=> 999,
			'class'     	=> 'editor-listen',
			'data-handler'  => 'mailchimp',
			'data-has-unit'	=> true,
			'data-range-slider' => 'mailchimp',
		),
	),
	'mouseover_submit' => array(
		'title'  	 => 'Mouseover',
		'break'		 => '2,2',
		'style-class'	=> 'ov-mailchimp-submit',
		'submit_mouseover_color' => array(
			'data-css-attribute' => 'color',
			'title'			=> 'Text Color',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> 'button',
			'default'		=> '#000000',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'mailchimp',
		),
		'submit_mouseover_letter_spacing' => array(
			'data-css-attribute' => 'letter-spacing',
			'title'			=> 'Letter Spacing',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'data-target'	=> 'button',
			'default'		=> 0,
			'min'			=> 0,
			'max'			=> 999,
			'data-negative' => true,
			'class'     	=> 'editor-listen',
			'data-handler'  => 'mailchimp',
			'data-has-unit'	=> true,
			'data-divider' => 10,
			'data-range-slider' => 'mailchimp',
		),
		'submit_bg_mouseover_color' => array(
			'data-css-attribute' => 'background-color',
			'title'			=> 'Background',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> 'button',
			'default'		=> '#ffe152',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'mailchimp',
		),
		'submit_border_mouseover_color' => array(
			'data-css-attribute' => 'border-color',
			'title'			=> 'Border',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> 'button',
			'default'		=> '#000000',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'mailchimp',
		),
	),
);

?>