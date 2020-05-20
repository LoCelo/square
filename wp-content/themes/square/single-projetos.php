<?php get_header(); ?>

<div class="container mt-5 mb-5 pt-2 pb-2">
  <div class="row">
    <div class="col-md-12">
        <figure class="single-thumb">
            <?php echo get_the_post_thumbnail(get_the_ID(), 'large'); ?>
        </figure>
        <strong><?php echo get_field('client', get_the_ID()); ?></strong>
        <h2 class="tax-title"><?php echo get_the_title($post->ID); ?> </h2>
        <figure class="project-term">
        <?php $projet_terms = get_field('servico_prestado', get_the_ID());
        foreach ($projet_terms as $key => $term) : ?>
          <a href="<?php echo home_url() .'/servico/'. $term->slug; ?>">
            <img src="<?php echo get_field('shape', $term); ?>" alt="<?php echo $term->name; ?>">
          </a>
        <?php endforeach; ?>
        </figure>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 content single-content">
      <?php
        echo apply_filters('the_content', get_the_content(get_the_ID()));
      ?>
      </div>
    </div>
</div>


<?php get_footer(); ?>
