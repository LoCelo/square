<?php

$text = apply_filters( 'acf_the_content',  get_field('hero_text', $post->ID) );
$rewrite = get_field('rewrite_text');
$background_color = get_field('background_color', $post->ID);
$hero_color = get_field('hero_color', $post->ID);
$invert = get_field('invert_logo_color', $post->ID);

if (empty($rewrite)) {
  $finish_hero = '|';
}else {
  $finish_hero = '';
}

$hero_text = strip_tags($text);

?>
<div class="hero-wrapper container-fluid" style="background-color: <?php echo $background_color; ?>">
        <div class="row">
            <div class="container hero" data-text="<?php echo $hero_text . $finish_hero; ?>" data-rewrite="<?php echo strip_tags($rewrite) . '|';?>">
              <div class="row">
              <div class="output" id="output" style="color: <?php echo $hero_color; ?>">
                <h1 class="cursor"></h1>
                <p></p>
              </div>
              </div>
              <div class="row text-center">
                <div class="col-md-12 scroll-wrapper">
                  <span class="scroll <?php if($invert == 'yes'): echo 'invert'; else: ''; endif; ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/arrow_down.svg'; ?>" alt="scroll_icon" width="25"></span>
                </div>
              </div>
            </div>
        </div>
      </div>
