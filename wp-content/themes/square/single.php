<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="tax-title"><?php echo get_the_title($post->ID); ?> </h2>
      <figure class="single-thumb">
        <?php echo get_the_post_thumbnail(get_the_ID()); ?>
      </figure>
    </div>
    <div class="row">
      <div class="col-md-12 content">
      <?php
        echo apply_filters('the_content', get_the_content(get_the_ID()));
      ?>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
