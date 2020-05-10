<?php get_header(); ?>

<div class="container mt-5 mb-5 pt-2 pb-2">
  <div class="row">
    <div class="col-md-12">
      <h2 class="tax-title"><?php echo get_the_title($post->ID); ?> </h2>
      <?php echo get_the_post_thumbnail(get_the_ID(), 'large'); ?>
      <figure class="project-term">
      <?php $projet_terms = get_field('servico_prestado', get_the_ID());
      foreach ($projet_terms as $key => $term) : ?>
        <img src="<?php echo get_field('shape', $term); ?>" alt="<?php echo $term->name; ?>">
      <?php endforeach; ?>
      </figure>
    </div>
    <div class="row">
      <div class="col-md-12 content">
      <?php
        echo aplly_filters('the_content', get_the_content(get_the_ID()));
      ?>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
