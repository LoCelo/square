<?php /* Template Name: Homepage */


$background_color = get_field('background_color', $post->ID);

?>

<?php
get_header();

include('partials/hero.php');


        $video = get_field('video', $post->ID);
      ?>

  		<section class="video-home" >
  		  <div class="container-fluid">
  		    <div class="row">
  		      <div class="col-md-12">
  		       <?php echo wp_video_shortcode(array('src' => $video, 'autoplay' => false, 'width' => '1400', 'controls' => true, 'poster' => get_field('video_poster', $post->ID))); ?>
  		      </div>
  		    </div>
  		  </div>
  		</section>

  		<?php $about = get_field('about_text', $post->ID); ?>

  		<section class="about-home content">
  		<div class="container">
  		  <div class="row">
  		    <div class="col-md-12 text-center">
  		      <?php echo $about; ?>
  		    </div>
  		  </div>
  		</div>
  		</section>

      <?php

  		$args = array(
        'post_type' => 'testemunhos',
        'posts_per_page' => 12,
        'orderby' => 'menu_order',
        'order' => 'ASC',
      );

      $testemunhos = get_posts($args); ?>

  	<section class="testemunhos-home">
  		<div class="container">
  		  <div class="row">
  		    <div class="col-md-12 text-center">
  		      <div class="slider">
              <div class="testemunhos-wrapper text-left">
              <?php
              $first_slide = array_slice($testemunhos, 0, 6);

                foreach ($first_slide as $key => $testemunho) {

            			$descr = get_field('descricao', $testemunho->ID);
            			$thumb = get_the_post_thumbnail($testemunho->ID);
            			$title = get_field('destaque', $testemunho->ID);
            			$test_id = $testemunho->ID; ?>

            			<div class="testemunho text-left">
            				<figure>
            					<?php echo $thumb; ?>
            				</figure>
            				<h3><?php echo $title; ?></h3>
            				<div class="content-testemunho toggle-<?php echo $test_id; ?>"><?php echo $descr; ?></div>
            				<p class="read-more read-more-toggle-<?php echo $test_id; ?>" data-toggle="toggle-<?php echo $test_id; ?>"> Ver mais </p>
            				<p class="read-less read-less-toggle-<?php echo $test_id; ?>" data-toggle="toggle-<?php echo $test_id; ?>"> Ver menos </p>
            			</div>

            		<?php } ?>
              </div>
              <div class="testemunhos-wrapper text-left">
              <?php
              $second_slide = array_slice($testemunhos, 6, 6);

                foreach ($second_slide as $key => $testemunho) {

                  $descr = get_field('descricao', $testemunho->ID);
                  $thumb = get_the_post_thumbnail($testemunho->ID);
                  $title = get_field('destaque', $testemunho->ID);
                  $test_id = $testemunho->ID; ?>

                  <div class="testemunho text-left">
                    <figure>
                      <?php echo $thumb; ?>
                    </figure>
                    <h3><?php echo $title; ?></h3>
                    <div class="content-testemunho toggle-<?php echo $test_id; ?>"><?php echo $descr; ?></div>
                    <p class="read-more read-more-toggle-<?php echo $test_id; ?>" data-toggle="toggle-<?php echo $test_id; ?>"> Ver mais </p>
                    <p class="read-less read-less-toggle-<?php echo $test_id; ?>" data-toggle="toggle-<?php echo $test_id; ?>"> Ver menos </p>
                  </div>

                <?php } ?>
              </div>
  		      </div>
  		    </div>
  		  </div>
  		</div>
  		</section>

      <section class="testemunhos-home-mobile">
    		<div class="container">
    		  <div class="row">
    		    <div class="col-md-12 text-center">
    		      <div class="slider-mobile">
                <?php

                  foreach ($testemunhos as $key => $testemunho) {

              			$descr = get_field('descricao', $testemunho->ID);
              			$thumb = get_the_post_thumbnail($testemunho->ID);
              			$title = get_field('destaque', $testemunho->ID);
              			$test_id = $testemunho->ID; ?>

              			<div class="text-left testemunho-mobile">
              				<figure>
              					<?php echo $thumb; ?>
              				</figure>
              				<h3><?php echo $title; ?></h3>
              				<div class="content-testemunho toggle-<?php echo $test_id; ?>"><?php echo $descr; ?></div>
              				<p class="read-more read-more-toggle-<?php echo $test_id; ?>" data-toggle="toggle-<?php echo $test_id; ?>"> Ver mais </p>
              				<p class="read-less read-less-toggle-<?php echo $test_id; ?>" data-toggle="toggle-<?php echo $test_id; ?>"> Ver menos </p>
              			</div>

              		<?php } ?>
    		      </div>
    		    </div>
    		  </div>
    		</div>
    		</section>




<?php
get_footer();
?>


<script>
jQuery( document ).ready(function() {
jQuery('.slider').slick({
  dots: false,
  arrows: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

jQuery('.slider-mobile').slick({arrows: true});


});

</script>
<script>

jQuery(".read-more").click(function() {
  var button = jQuery(this);
  var target = button.attr('data-toggle');
  readMore(target);
  button.animate({
    height: 'hide'
  });
  jQuery(".read-less-"+target).animate({
    height: 'show'
  });
});

jQuery(".read-less").click(function() {
  var button = jQuery(this);
  var target = button.attr('data-toggle');
  readLess(target);
  button.animate({
    height: 'hide'
  });
  jQuery(".read-more-"+target).animate({
    height: 'show'
  });
});

function readMore(target){
  jQuery("."+target).animate({
    height: 'show'
  });
}

function readLess(target){
  jQuery("."+target).animate({
    height: 'hide'
  });
}


</script>
