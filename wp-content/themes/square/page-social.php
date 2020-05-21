<?php /* Template Name: Página Social */

$background_color = get_field('background_color', $post->ID);

get_header();

$text = get_field('hero_text', $post->ID);
$hero_text = strip_tags($text);
include('partials/hero.php');

$posts = get_posts([
  'post_type' => 'post',
  'pots_status' => 'publish',
  'posts_per_page' => 16,
  'orderby' => 'menu_order',
  'order' => 'ASC',
]);
?>


        <div class="container <?php if(!empty(get_field('feed_shortcode', $post->ID))): echo 'feed'; else: echo 'posts'; endif; ?> content">
            <div class="row">
              <div class="col-md-12 mb-5 text-center">
                <h3 class="tax-title">Our posts</h3>
              </div>
            </div>
            <?php if (!empty(get_field('feed_shortcode', $post->ID))):
              echo get_field('feed_shortcode', $post->ID);
            else: ?>
              <?php
                foreach ($posts as $key => $square_post): ?>
                  <div class="row post mt-5 mb-5">
                    <div class="col-md-4 single-thumb">
                      <figure class="thumb">
                        <?php echo get_the_post_thumbnail($square_post); ?>
                      </figure>
                    </div>
                    <div class="col-md-8">
                      <a href="<?php echo get_permalink($square_post); ?>">
                        <h3><?php echo get_the_title($square_post); ?></h3>
                        <p class="excerpt"><?php echo get_the_excerpt($square_post); ?></p>
                      </a>
                      <a href="<?php echo get_permalink($square_post); ?>">Ver mais</a>
                    </div>

                  </div>
              <?php
                endforeach;
              endif;
              ?>
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
        <?php include 'partials/newsletter.php'; ?>
<?php get_footer(); ?>
