<?php /* Template Name: Página Serviços */


get_header();

$servicos = get_terms(array(
  'taxonomy' => 'servico',
  'hide_empty' => false,
));

$paged = ( get_query_var('paged') ? get_query_var('paged') : 1 );

$args = array(
  'post_type' => 'projetos',
  'posts_per_page' => '4',
  'post_status' => 'publish',
  'orderby' => 'menu_order',
  'order' => 'ASC',
  'paged' => $paged,
);

$projetos = new WP_Query($args);

?>

<div class="container services">
  <div class="row">
    <div class="col-md-12 text-center mt-5 mb-5">
      <h2 class="tax-title">These are <span class="red">our Services</span></h2>
    </div>
  </div>
  <div class="row all-services">
<?php
    foreach ($servicos as $key => $servico) : ?>
      <div class="col-md-6 service-all-shape">
        <a href="<?php echo home_url() . '/servico/' . $servico->slug;?> ">
          <h3><?php echo $servico->name; ?></h3>
          <img src="<?php echo get_field('shape', $servico); ?>" alt="">
        </a>
      </div>

  <?php  endforeach; ?>
  </div>
  </div>
  <div class="container projects">
  <?php
    if ($projetos->have_posts()):

        if ($projetos->max_num_pages > 1):
          $load_more = true;
        else:
          $load_more = false;
        endif; ?>

        <div class="row projects-tax" data-page="<?php echo $projetos->query['paged']; ?>" data-max-page="<?php echo $projetos->max_num_pages; ?>">
          <div class="col-md-12 text-center mt-5 mb-5">
            <h2 class="tax-title">Our <span class="red">Portfolio</span></h2>
          </div>
          <?php
            while ( $projetos->have_posts() ) : $projetos->the_post(); ?>

            <div class="col-md-6 project-wrapper">
              <a href="<?php echo get_the_permalink(get_the_ID()); ?>">
                <figure class="thumb">
                  <?php echo get_the_post_thumbnail(get_the_ID(), 'medium_large'); ?>
                </figure>
                <strong><?php echo get_field('client', get_the_ID()); ?></strong>
                <h3><?php echo get_the_title(get_the_ID()); ?></h3>
                <figure class="project-term">
                <?php $projet_terms = get_field('servico_prestado', get_the_ID());
                foreach ($projet_terms as $key => $term) : ?>
                  <img src="<?php echo get_field('shape', $term); ?>" alt="<?php echo $term->name; ?>">
                <?php endforeach; ?>
                </figure>
              </a>
            </div>

    <?php
      endwhile;
      ?>
        </div>
        <?php
    endif;
    ?>
  </div>
  <?php if(!empty($load_more)): ?>
  <div class="container">
    <div class="row more-button">
      <div class="col-md-12 text-center">
        <div class="load-more"><img src="<?php echo get_template_directory_uri() . '/assets/img/load_more.svg'; ?>" alt="" width="30" /></div>
      </div>
    </div>
  </div>
<?php endif; ?>
  </div>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets/js/projects.js'; ?>"></script>
<?php get_footer(); ?>
