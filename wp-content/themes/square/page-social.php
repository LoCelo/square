<?php /* Template Name: Página Social */

$background_color = get_field('background_color', $post->ID);

get_header();

$text = get_field('hero_text', $post->ID);
$hero_text = strip_tags($text);
include('partials/hero.php');
?>


        <div class="container feed content">
          <div class="row">
            <div class="col-md-12 feed-wrapper">
              <?php echo get_field('feed_shortcode', $post->ID); ?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center mb-5 mt-5">
              <h3 class="tax-title">Fan of our ecossystem and vibe? <br>
                <span class="red">Follow us</span></h3>
                <ul class="social-links">
                <?php
                $links = get_field('social_links', $post->ID);

                foreach ($links as $key => $social) { ?>

                  <li><a href="<?php echo $social['link'];?>" target="_blank" rel="noopener">
                    <img src="<?php echo $social['icon']; ?>" alt="icon_social" width="45">
                  </a></li>

              <?php  }
                ?>
              </ul>
            </div>
          </div>
        </div>
<?php get_footer(); ?>
