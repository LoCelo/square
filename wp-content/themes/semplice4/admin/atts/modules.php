<?php

// -----------------------------------------
// semplice
// admin/atts/modules.php
// -----------------------------------------

// modules list
$modules = array('paragraph', 'mailchimp', 'button', 'image', 'gallery', 'oembed', 'spacer', 'video', 'portfoliogrid', 'advancedportfoliogrid', 'instagram', 'dribbble', 'gallerygrid', 'code');

// include files
foreach ($modules as $module) {
	require get_template_directory() . '/admin/atts/modules/' . $module . '.php';
}

// modules array
$module_options = array(

	// paragraph
	'paragraph' => $paragraph,

	// mailchimp
	'mailchimp' => $mailchimp,

	// button module
	'button' => $button,

	// image module
	'image' => $image,

	// gallery
	'gallery' => $gallery,

	// oembed module
	'oembed' => $oembed,

	// spacer module
	'spacer' => $spacer,

	// video module
	'video' => $video,

	// portfolio grid
	'portfoliogrid' => $portfoliogrid,

	// advanced portfolio grid
	'advancedportfoliogrid' => $advancedportfoliogrid,

	// instagram
	'instagram' => $instagram,

	// dribbble
	'dribbble' => $dribbble,

	// gallery grid
	'gallerygrid' => $gallerygrid,

	// code module
	'code' => $code,

	// share module
	'share' => array(
		'options' => get_share_module_options($fonts, false),
	),
);

?>