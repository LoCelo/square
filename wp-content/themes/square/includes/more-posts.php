<?php

$args = array(
  'post_type' => 'projetos',
  'post_status' => 'publish',
  'posts_per_page' => '4',
  'orderby' => 'menu_order',
  'order' => 'ASC',
  'paged' => $_GET['page'],
);

$projetos = new WP_Query($args);

if ($projetos->have_posts()):?>

      <div class="row projects-tax" data-page="<?php echo $projetos->query['paged']; ?>" data-max-page="<?php echo $projetos->max_num_pages; ?>">
        <?php
          while ( $projetos->have_posts() ) : $projetos->the_post(); ?>

          <div class="col-md-6 project-wrapper">
            <a href="<?php echo get_the_permalink(get_the_ID()); ?>">
              <figure class="thumb">
                <?php echo get_the_post_thumbnail(get_the_ID()); ?>
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
endwhile; ?>
  </div>
<?php  endif;
  ?>
