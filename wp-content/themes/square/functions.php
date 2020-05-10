<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

function theme_js() {
    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), false );
    wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/assets/slick/slick.min.js', array('jquery'), false );
    wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/assets/js/theme.js', '', '', true);
    wp_enqueue_style('bootstrap-cs', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', '' , '' );
    wp_enqueue_style('hero-cs', get_stylesheet_directory_uri() . '/assets/css/hero.css', '' , '' );
        wp_enqueue_style('main-cs', get_stylesheet_directory_uri() . '/assets/css/main.css', '' , '' );
    wp_enqueue_style('slick-cs', get_stylesheet_directory_uri() . '/assets/slick/slick.css', '' , '' );

    $args = array(
    'adminAjax' => admin_url('admin-ajax.php'),
    'root' => get_template_directory_uri(),
  );
  wp_localize_script( 'main-js', 'square', $args );
}

add_action('wp_enqueue_scripts', 'theme_js');

add_theme_support( 'post-thumbnails' );
add_image_size('equipa', 290, 282, false);
add_image_size('thumb', 540, 360, true);

add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo() { ?>
<style type="text/css">

    #login h1 a, .login h1 a {
    background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/logo.png);
    height:150px;
    width:150px;
    background-size: 150px 150px;
    background-repeat: no-repeat;
    padding-bottom: 10px;
    }
</style>
<?php }

function wpb_login_logo_url() {
return home_url();
}
add_filter( 'login_headerurl', 'wpb_login_logo_url' );

function wpb_login_logo_url_title() {
return 'Square';
}

add_action( 'init', 'register_menus' );
function register_menus() {
	register_nav_menu('main-menu', 'Main Menu');
}


include 'includes/equipa.php';
include 'includes/projetos.php';
include 'includes/general-fields.php';
include 'includes/testemunhos.php';
include 'includes/parceiros.php';
include 'includes/helper.php';

function wpse_hide_cat_descr() { ?>

    <style type="text/css">
       .term-description-wrap {
           display: none;
       }
    </style>

<?php }

add_action( 'admin_head-term.php', 'wpse_hide_cat_descr' );
add_action( 'admin_head-edit-tags.php', 'wpse_hide_cat_descr' );

function get_the_post_thumbnail_alt($post_id) {
    return get_post_meta(get_post_thumbnail_id($post_id), '_wp_attachment_image_alt', true);
}

//AJAX
function CCAjax() {
  if($_GET['request'] == 'get_more') {
      include get_template_directory() . '/includes/more-posts.php';
  }

  exit();
}

add_action('wp_ajax_nopriv_CCAjax', 'CCAjax');
add_action('wp_ajax_CCAjax', 'CCAjax');

add_filter( 'mce_buttons_2', 'add_style_select_buttons' );
function add_style_select_buttons( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}

add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );
function my_mce_before_init_insert_formats( $init_array ) {
  $style_formats = array(
    array(
    	'title' => 'Title 2',
    	'block' => 'h2',
    	'classes' => 'tax-title',
    	'exact' => true
    ),
    array(
    	'title' => 'Highlight',
    	'block' => 'span',
    	'classes' => 'highlight',
    	'exact' => false
    ),
    array(
    	'title' => 'Red',
    	'inline' => 'span',
    	'classes' => 'red',
    	'exact' => false
    ),
  );

  $init_array['style_formats'] = json_encode( $style_formats );

  return $init_array;
}

add_action( 'init', 'cd_add_editor_styles' );
function cd_add_editor_styles() {
  remove_editor_styles();
  add_editor_style(get_template_directory_uri() . '/assets/css/main.css');
}



?>
