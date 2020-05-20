<?php include 'partials/head.php';

$background_color = get_field('background_color', $post->ID);
$invert = get_field('invert_logo_color', $post->ID);

if ($background_color) {
  $color = $background_color;
}else{
  $color = '#EBECE6';
}

if($invert == 'yes'){
  $logo = '/assets/img/logo_invert.svg';
  $style = '.menu li.current_page_item a { color: black;}';
  $burger = 'invert';
}else{
  $logo = '/assets/img/logo.png';
  $burger = '';
}
?>

<header class="container-fluid <?php if(is_tax() || is_page_template('page-servicos.php')): echo 'tax-menu'; else: ''; endif; ?>" style="background-color: <?php echo $color; ?>">
  <div class="row">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <figure>
            <a href=<?php echo home_url(); ?> >
              <img src="<?php echo get_template_directory_uri() . $logo; ?>" alt="logo" width="87">
            </a>
          </figure>
        </div>
        <div class="col-md-8 main-menu-wrapper">
          <?php wp_nav_menu(array('menu' => 'main-menu' )); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="burger-button <?php echo $burger; ?>">
    <div id="nav-icon3" class="">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</header>
<body class="<?php if(is_tax() || is_page_template('page-servicos.php')): echo 'tax-page'; elseif($invert == 'yes' ): echo 'invert-body'; elseif(is_page(744)): echo 'menu-white';endif; ?>" >
