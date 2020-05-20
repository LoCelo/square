<?php


$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

$projetos = get_posts([
  'post_type' => 'projetos',
  'post_status' => 'publish',
  'posts_per_page' => 14,
  'orderby' => 'menu_order',
  'order' => 'ASC',
  'tax_query' => array(
    array(
      'taxonomy' => $term->taxonomy,
      'field' => 'slug',
      'terms' => $term->slug,
    ),
  ),
]); ?>

<?php get_header() ?>

<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <h2 class="tax-title"> These are our <span class="red"> Services </span></h2>
    </div>
  </div>
</div>
<div class="container info-tax-container">
<div class="row">
  <div class="col-md-6">
    <div class="service-details">
      <h2 style="color: <?php echo get_field('title_color', $term); ?>">
        <img src="<?php echo get_field('shape', $term); ?>" alt="" class="shape-mobile">
        <?php echo get_field('display_title', $term); ?></h2>
      <p><?php echo get_field('descricao', $term); ?></p>
    </div>
  </div>
</div>
<div class="row projects-tax mt-5 pb-5">
  <div class="col-md-12 mt-5 mb-5">
    <h3 class="text-center"> Our Work </h3>
  </div>
    <?php
    if (!empty($projetos)) :
      foreach ($projetos as $key => $projeto) : ?>

      <div class="col-md-6 project-wrapper">
        <a href="<?php echo get_the_permalink($projeto->ID); ?>">
          <figure class="thumb">
            <?php echo get_the_post_thumbnail($projeto->ID, 'projetos-thumb'); ?>
          </figure>
          <strong><?php echo get_field('client', $projeto->ID); ?></strong>
          <h3><?php echo get_the_title($projeto->ID); ?></h3>
        </a>
      </div>

    <?php   endforeach;
    else:
    endif;
    ?>
</div>
</div>
<div class="container-fluid tax-img-wrapper">
  <div class="row">
    <div class="col-md-12">
      <figure class="service-shape">
        <?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
        <img src="<?php echo get_field('shape', $term); ?>" alt="">
      </figure>

    </div>
  </div>
</div>



<?php get_footer(); ?>
