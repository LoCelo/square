<?php

// -----------------------------------------
// semplice
// /includes/helper.php
// -----------------------------------------

// include helpers


// -----------------------------------------
// show content
// -----------------------------------------

function semplice_child_show_content($id, $what) {

	// globals
	global $semplice_content;
	global $admin_api;

	// if password required show form instead of content (only on pages and projects)
	if($what != 'posts' && $what != 'taxonomy' && post_password_required()) {
		// get frontend mode
		$frontend_mode = semplice_get_mode('frontend_mode');
		// set spa
		$spa = false;
		// check if frontend mode is dynamic
		if($frontend_mode == 'dynamic') {
			$spa = true;
		}
		$semplice_content['html'] = get_the_password_form();
	}

	$template = is_page_template('page-home.php');
	$template_equipa = is_page_template('page-equipa.php');
	echo $template_equipa;
	$uotput = '';

	if ($template === true) {
		$video = get_field('video', $post->ID);

		$output .= '<section class="video-home" >
		  <div class="container-fluid">
		    <div class="row">
		      <div class="col-md-12">
		        <video width="400" controls autoplay="autoplay" loop="loop">
		          <source src="'. $video .'" type="video/mp4">
		        </video>
		      </div>
		    </div>
		  </div>
		</section>';

		$about = get_field('about_text', $post->ID);

		$output .= '<section class="about-home">
		<div class="container">
		  <div class="row">
		    <div class="col-md-12 text-center">
		      '. $about .'
		    </div>
		  </div>
		</div>
		</section>';

		$args = array(
      'post_type' => 'testemunhos',
      'posts_per_page' => 18,
      'orderby' => 'date',
      'order' => 'DESC',
    );

    $testemunhos = get_posts($args);

		$testem = '';

		foreach ($testemunhos as $key => $testemunho) {

			$descr = get_field('descricao', $testemunho->ID);
			$thumb = get_the_post_thumbnail($testemunho->ID);
			$title = get_the_title($testemunho->ID);
			$test_id = $testemunho->ID;

			$testem .='<div class="testemunho text-left">
				<figure>
					'. $thumb .'
				</figure>
				<h3>'. $title .'</h3>
				<div class="content-testemunho toggle-'. $test_id .'">'. $descr .'</div>
				<p class="read-more read-more-toggle-'. $test_id .'" data-toggle="toggle-'. $test_id .'"> Ver mais </p>
				<p class="read-less read-less-toggle-'. $test_id .'" data-toggle="toggle-'. $test_id .'"> Ver menos </p>
			</div>';

			}

		$output .= '
		<section class="testemunhos-home">
		<div class="container">
		  <div class="row">
		    <div class="col-md-12 text-center">
		      <div class="slider">
		        '.$testem.'
		      </div>
		    </div>
		  </div>
		</div>
		</section>';


	}elseif($template_equipa === true){

		var_dump('meh');
		$args = array(
		  'post_type' => 'equipa',
		  'post_status' => 'publish',
		  'posts_per_page' => -1,
		  'orderby' => 'menu_order',
		  'order' => 'ASC'
		);

		$equipa = get_posts($args);
		$photos = '';

		foreach ($equipa as $key => $membro) {
			$slug = $membro->post_name;
			$thumbnail = get_the_post_thumbnail($membro->ID);

			$photos .=
			'<li class="nav-item">
				<a class="nav-link active" id="'.$slug.'-tab" data-toggle="tab" href="'.$slug.'" role="tab" aria-controls="'.$slug.'" >
					'. $thumbnail .'
				</a>
			</li>';
		}

		$tabs = '';

		foreach ($equipa as $key => $membro_content) {
					$slug = $membro_content->post_name;
					$nome = get_the_title($membro_content->ID);
					$cargo = get_field('cargo', $membro_content->ID);
					$content = apply_filters('the_content', get_the_content($membro_content->ID));
					if($key == 0): $active = 'active'; else: $active = ''; endif;

				$tab .= '<div class="tab-pane fade show '. $active .'" role="tabpanel" aria-labelledby="'.$lug.'">
					'. $nome .'
					<br/>
					'. $cargo .'
					<br/>
					'. $content .'
				</div>';
			}

			$output =
			'<div class="container">
			  <div class="row">
			    <div class="col-8">
			      <ul class="nav nav-tabs" id="myTab" role="tablist">
							'. $photos .'
			      </ul>
			    </div>
			    <div class="col-4">
			      <div class="tab-content" id="myTabContent">
			        '. $tab .'
			      </div>
			    </div>
			  </div>
			</div>';
	}

	$text = get_field('hero_text', $post->ID);
	$hero_text = strip_tags($text);
	$hero_background = get_field('background_color', $post->ID);


	// echo content
	echo '
		<div id="content-holder" data-active-post="' . $id . '">
			' . $admin_api->customize['navigations']->get('html', false, false, false) . '
			<div id="content-' . $id . '" class="content-container active-content ' . semplice_hide_on_init($id) . '">
				<div class="transition-wrap">
					<div class="sections">
					<div class="hero-page hero" style="background-color:'. $hero_background .'" data-text="'. $hero_text .'">
					<div class="container">
					<div class="row">
						<div class="column" data-xl-width="12" data-md-width="11" data-sm-width="12" data-xs-width="12">
								<div class="d-flex" style="flex-wrap: wrap">
								<p class="header-sub-title" id="word"></p><p class="header-sub-title blink">|</p>
								</div
						</div>
					</div>
				</div>
			</div>
						' . $semplice_content['html'] . '
						'. $output .'
					</div>
				</div>
			</div>
		</div>
	';
}

// ----------------------------------------
// get template
// ----------------------------------------

function semplice_child_get_template($template, $atts) {
	// template dir
	$template = array(
		'parent' => get_template_directory() . '/partials/' . $template . '.php',
		'child'  => get_stylesheet_directory() . '/partials/' . $template . '.php',
	);
	// make sure the file exists
	if(!file_exists($template['child']) && !file_exists($template['parent'])) {
		return '';
	}
	// use template from child theme if avilable
	$type = 'parent';
	if(file_exists($template['child'])) {
		$type = 'child';
	}
	// extract atts
	if(is_array($atts)) {
		extract($atts);
	}
	// buffer output
	ob_start();
		include $template[$type];
	return ob_get_clean();
}

// -----------------------------------------
// generate ram ids
// -----------------------------------------

function semplice_child_generate_ram_ids($ram, $is_encoded, $is_block) {

	// is encoded?
	if($is_encoded) {
		// decode ram
		$ram = json_decode($ram, true);
	}

	// output
	$output = $ram;

	// images array
	$images = '';
	$images_arr = array();
	$image_modules = array('image', 'gallerygrid', 'video', 'gallery');

	// change ids
	foreach ($ram['order'] as $section_id => $section) {
		// isset?
		if(isset($ram[$section_id]) && $section_id != 'cover') {
			// get background image and add to images_array
			$images .= semplice_get_background_image($ram[$section_id]['styles']['xl']);
			// create new seciton id
			$new_section_id = 'section_' . substr(md5(rand()), 0, 9);
			// add to array
			$output['order'][$new_section_id] = array();
			// add section content to the output
			$output[$new_section_id] = $ram[$section_id];
			// delete old id rom new ram
			unset($output[$section_id]);
			unset($output['order'][$section_id]);
			// new section to iterate through
			$section_iterate = array();
			// is old single row mode?
			if(isset($section['columns'])) {
				//move columns to a virtual row to make it compatible with the new multi row system
				$section_iterate['row_' . substr(md5(rand()), 0, 9)]['columns'] = $section['columns'];
			} else {
				$section_iterate = $section;
			}
			// iterate rows
			foreach($section_iterate as $row_id => $columns) {
				// new row id
				$new_row_id = 'row_' . substr(md5(rand()), 0, 9);
				// add row to ram
				$output['order'][$new_section_id][$new_row_id] = array(
					'columns' => array(),
				);
				// iterate columns
				foreach ($columns['columns'] as $column_id => $column_content) {
					// get background image and add to images_array
					$images .= semplice_get_background_image($ram[$column_id]['styles']['xl']);
					// create new id
					$new_column_id = 'column_' . substr(md5(rand()), 0, 9);
					// add content to array
					$output['order'][$new_section_id][$new_row_id]['columns'][$new_column_id] = array();
					// add section content to column
					$output[$new_column_id] = $ram[$column_id];
					// delete old id rom new ram
					unset($output[$column_id]);
					foreach ($column_content as $content_id) {
						// get background image and add to images_array
						$images .= semplice_get_background_image($ram[$content_id]['styles']['xl']);
						// get all images used in module
						if(in_array($ram[$content_id]['module'], $image_modules)) {
							$images .= semplice_get_used_images($ram[$content_id]);
						}
						// create new id
						$new_content_id = 'content_' . substr(md5(rand()), 0, 9);
						// add to array
						$output['order'][$new_section_id][$new_row_id]['columns'][$new_column_id][] = $new_content_id;
						// add section content to column
						$output[$new_content_id] = $ram[$content_id];
						// delete old id rom new ram
						unset($output[$content_id]);
					}
				}
			}
		}
	}

	// add images to output if block
	if(true === $is_block) {
		// check if images array is empty?
		if(!empty($images)) {
			// remove last , from string
			if(substr($images, -1) == ',') {
				$images = substr($images, 0, -1);
			}
			$images = explode(",", $images);
			// fetch all image urls in case they have chnaged (ex domain)
			foreach ($images as $image_id) {
				// get image
				$images_arr[$image_id] = semplice_get_image($image_id, 'full');
			}
		} else {
			$images_arr = 'noimages';
		}
		// add images array to ouptut
		$output['images'] = $images_arr;
	}

	// return
	return $output;
}

// -----------------------------------------
// get post settings
// -----------------------------------------

function semplice_child_generate_post_settings($settings, $post) {

	// check if row has page settings
	if(null !== $settings && is_array($settings)) {
		// always get the latest saved title and permalink to match wordpress
		$settings['meta']['post_title'] = $post->post_title;
		$settings['meta']['permalink'] = $post->post_name;
	} else {
		// define some post settings defaults
		$settings = array(
			'thumbnail' => array(
				'image' => '',
				'width'	=> '',
				'hover_visibility' => 'disabled',
			),
			'meta' => array(
				'post_title' 	=> $post->post_title,
				'permalink'  	=> $post->post_name,
			),
		);
	}

	// yoast seo settings
	$yoast = array('title', 'metadesc', 'opengraph-image', 'opengraph-title', 'opengraph-description', 'twitter-image', 'twitter-title', 'twitter-description', 'meta-robots-nofollow', 'meta-robots-noindex', 'canonical');
	$prefix = '_yoast_wpseo_';

	// get seo from db
	foreach ($yoast as $setting) {
		// get setting
		$setting = $prefix . $setting;
		// check if post meta is there
		$post_meta = get_post_meta($post->ID, $setting, true);
		if(!empty($post_meta)) {
			$settings['seo'][$setting] = get_post_meta($post->ID, $setting, true);
		} else {
			// is set still in semplice? delete it
			if(isset($settings['seo'][$setting])) {
				unset($settings['seo'][$setting]);
			}
		}
	}

	// still empty?
	if(!isset($settings['seo']) || empty($settings['seo'])) {
		$settings['seo'] = new stdClass();
	}

	return $settings;
}

?>
