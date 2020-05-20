<?php /* Template Name: Página Serviços */


get_header();
?>

<style media="screen">

.all-services {
  padding: 85px;
}

.all-services a img {
    opacity: 0.85;
    filter: grayscale(0);
  }

  .service-all-shape:nth-child(1) img,
  .service-all-shape:nth-child(4) img{
    width: 55%;
  }

  .service-all-shape:nth-child(1), .service-all-shape:nth-child(3) {
    margin-left: unset;
  }

  .service-all-shape.col-md-6.shape-1 {
      right: -10%;
      margin-top: -6%;
  }

.service-all-shape.col-md-6.shape-2 {
    right: -25%;
    margin-top: -19%;
}

.service-all-shape.col-md-12.text-center.shape-3 {
    margin-top: -29%;
    right: -22%;
}

  .service-all-shape:nth-child(2) img,
  .service-all-shape:nth-child(3) img{
    width: 110%;
  }

  .service-all-shape:nth-child(2) img {
    width: 110%;
  }

  .service-all-shape:nth-child(4) img {
    width: 65%;
  }

  .service-all-shape.col-md-12.text-center.shape-0 {
    left: -5%;
    margin-bottom: -11%;
}

  .service-all-shape a h3 {
    font-family: textBold;
    font-size: 37px;
    text-align: left !important;
  }

  .service-all-shape a:hover h3 {
    color: white !important;
  }

  .service-all-shape.col-md-12.text-center.shape-0 a h3 {
    margin-top: 10%;
    margin-left: 35%;
  }

  .service-all-shape.shape-1 a h3 {
    margin-top: 54%;
  }

  .service-all-shape.shape-3 a h3 {
    margin-top: 33%;
    margin-left: 44%;
  }

  .service-all-shape.shape-2 a h3 {
    margin-top: 43%;
    margin-left: 43%;
  }

  @media only screen  and (max-width : 1000px) {
    .service-all-shape a h3 {
      font-size: 27px !important;
    }

  }

</style>

<?php
include 'partials/hero.php';

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
    foreach ($servicos as $key => $servico) :

        if($key == 1 || $key == 2):
          $class = 'col-md-6 shape-' . $key;
        else:
          $class = 'col-md-12 text-center shape-' . $key;
        endif;
      ?>

      <div class="service-all-shape <?php echo $class; ?>">
        <a href="<?php echo home_url() . '/servico/' . $servico->slug;?> ">
          <h3 style="color: <?php echo get_field('title_color', $servico); ?>"><?php echo get_field('display_title', $servico); ?></h3>
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

            <div class="col-md-6 project-wrapper mt-3 mb-3">
              <a href="<?php echo get_the_permalink(get_the_ID()); ?>">
                <figure class="thumb">
                  <?php echo get_the_post_thumbnail(get_the_ID(), 'projetos_thumb'); ?>
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
