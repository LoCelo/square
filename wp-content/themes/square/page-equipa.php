<?php /* Template Name: Página Equipa */


get_header();

$members = get_posts([
	'post_type' => 'equipa',
	'posts_per_page' => -1,
	'post_status' => 'publish',
	'orderby' => 'menu_order',
	'order' => 'ASC'
]);

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

<div class="container content equipa-content">
	<div class="row">
		<div class="col-md-12 text-center mt-5 mb-5">
			<h3 class="tax-title">This is our <span class="red">team</span></h3>
		</div>
		<div class="col-md-8">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<?php foreach ($members as $key => $member) :

					$name = $member->post_name;

					?>
					<li class="nav-item">
  			    <a class="nav-link <?php if ($key == 0): echo 'active'; else: echo ''; endif; ?>" id="<?php echo $name ?>-tab" data-toggle="tab" href="#<?php echo $name; ?>" role="tab" aria-controls="<?php echo $name; ?>" aria-selected="<?php if ($key == 0): echo 'active'; else: echo ''; endif; ?>"><?php echo $member->title; ?>
							<figure>
								<div class="paint">
								</div>
								<?php
								echo wp_get_attachment_image(get_field('first_photo', $member->ID), 'equipa', false, array('class' => 'first-photo'));

								if (!empty(get_field('second_photo', $member->ID))) :
									echo wp_get_attachment_image(get_field('second_photo', $member->ID), 'equipa', false, array('class' => 'second-photo'));
								else:
									echo wp_get_attachment_image(get_field('first_photo', $member->ID), 'equipa', false, array('class' => 'first-photo'));
								endif;
								?>

							</figure>
						</a>
  			  </li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="col-md-4">
			<div class="tab-content" id="myTabContent">
				<?php foreach ($members as $key => $member) : 	$name = $member->post_name; ?>
					<div class="tab-pane fade show <?php if ($key == 0): echo 'active'; else: echo ''; endif; ?>" id="<?php echo $name ?>" role="tabpanel" aria-labelledby="<?php echo $name ?>-tab">
						<h4 class="tax-title red"><?php echo get_the_title($member->ID); ?></h4>
						<p class="cargo"><?php echo get_field('cargo', $member->ID); ?></p>
						<?php echo get_field('descricao', $member->ID); ?>
					</div>
			<?php 	endforeach; ?>
			</div>
		</div>
	</div>
	<div class="row partners">
			<div class="col-md-12 text-center mt-5 mb-5">
					<h3 class="tax-title">This is our<span class="red"> partners </span></h3>
				</div>
				<div class="col-md-12 partners-wrapper">
					<?php
						$parceiros = get_field('parceiros', $post->ID);

						foreach ($parceiros as $key => $parceiro) : ?>
							<a href=<?php echo $parceiro['link']; ?> class="partner">
								<img src="<?php echo $parceiro['parceiro']; ?>" alt="partner" width="60">
							</a>
						<?php endforeach; ?>

				</div>
	</div>
</div>


<script>
jQuery(document).ready(function(){
var width = jQuery(window).width();
console.log(width);

if (width < 758) {

	jQuery('.nav-item').click(function() {
	    jQuery([document.documentElement, document.body]).animate({
	        scrollTop: jQuery(".tab-content").offset().top
	    }, 2000);
	});



}
})
</script>
<?php

get_footer();

 ?>
