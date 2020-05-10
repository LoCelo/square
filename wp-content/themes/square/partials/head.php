<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php
if(is_tax()):
  $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
endif;
?>

<head>
    <?php echo wp_head(); ?>
    <meta charset="<?php echo bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if( is_front_page() ): echo bloginfo( 'name' ); elseif(is_tax()): echo $term->name; else : the_title(); endif;?> - The Square</title>
    <meta name="description" content="<?php if( is_home() ) : bloginfo( 'name' ); else : the_excerpt(); endif;?>">

    <?php
      $invert = get_field('invert_logo_color', $post->ID);

      if($invert == 'yes'){
        echo '<style>.menu li.current_page_item a { color: black;}</style>';
      }

      ?>
</head>
