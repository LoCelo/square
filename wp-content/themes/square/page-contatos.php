<?php /* Template Name: Página Contatos */

$background_color = get_field('background_color', $post->ID);
get_header();

$text = get_field('hero_text', $post->ID);
$hero_text = strip_tags($text);
include('partials/hero.php');
?>

      <div class="container-fluid hero-images">
			  <div class="row">
			    <div class="col-md-4">
			      <img src="<?php echo get_field('img_left', $post->ID); ?>" alt="hero_1">
			    </div>
					<div class="col-md-8">
						 <img src="<?php echo get_field('right_image', $post->ID); ?>" alt="hero_2">
					</div>
			  </div>
			</div>

      <div class="container-fluid contatos content" style="color: white; background-color: <?php echo $background_color; ?>">
        <div class="row">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <?php echo get_field('first_row', $post->ID); ?>
              </div>
              <div class="col-md-4">
                <?php echo get_field('second_row', $post->ID); ?>
              </div>
              <div class="col-md-4">
                <?php echo get_field('third_row', $post->ID); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php get_footer(); ?>
<?php get_footer(); ?>
