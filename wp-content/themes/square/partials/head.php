<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php
if(is_tax()):
  $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
endif;
?>

<head>
    <?php wp_head(); ?>
    <meta charset="<?php echo bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if( is_front_page() ): echo bloginfo( 'name' ); elseif(is_tax()): echo $term->name; else : the_title(); endif;?> - The Square</title>
    <meta name="description" content="<?php if( is_home() ) : bloginfo( 'name' ); else : the_excerpt(); endif;?>">
      <meta property="og:locale" content="pt" />
        <meta property="og:title" content="<?php if(is_front_page() ): bloginfo( 'name' ); elseif(is_tax()): echo $term->name . ' - The Square'; else: echo get_the_title($post->ID) . ' - The Square'; endif; ?>" />
        <meta property="og:description" content="<?php echo get_the_excerpt($post->ID); ?>" />
        <meta property="og:url" content="<?php echo get_the_permalink($post->ID); ?>" />
        <meta property="og:site_name" content="The Square" />
        <?php
          if(!empty(get_the_post_thumbnail($post->ID))):
            $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
            $thumbnail = $thumbnail_src[0];
          else:
            $thumbnail = get_template_directory_uri() . '/Screenshot.png';
          endif;
         ?>
  <meta property="og:image" content="<?php  echo $thumbnail;  ?>" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="<?php if(is_front_page() ): bloginfo( 'name' ); elseif(is_tax()): echo $term->name . ' - The Square'; else: echo get_the_title($post->ID) . ' - The Square'; endif; ?>" />
        <meta name="twitter:image" content="<?php echo $thumbnail; ?>" />
        <meta name="format-detection" content="telephone=no">
    <?php
      $invert = get_field('invert_logo_color', $post->ID);

      if($invert == 'yes'){
        echo '<style>.menu li.current_page_item a { color: black;}</style>';
      }

      ?>
</head>
