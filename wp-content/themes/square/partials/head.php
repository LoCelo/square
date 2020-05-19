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
        if(!empty(get_field('highlight_color', $post->ID))):
          $highlight_color = get_field('highlight_color', $post->ID);
        else:
          $highlight_color = '#F63C3B';
        endif;

        ?>

      <style media="screen">
        a:hover {
          cursor: pointer
        }

        .social-elevator {
          position: fixed;
          right: 0;
          margin-top: 35%;
          width: 45px;
          z-index: 99999999999;
        }

        .social-elevator a {
          display: flex;
          align-items: center;
          justify-content: center;
          padding: 13px 10px;
          background: #F63C3B;
          margin: 3px 0;
        }

        .social-elevator a:nth-child(1) {
          background: #2B2B2B;
        }

        .social-elevator a img {
          display: block;
          width: 100%;
          object-fit: contain;
          max-height: 18px;
        }

        .social-elevator a:hover {
          opacity: 0.88;
        }

        .hero strong {
          background: linear-gradient(to left, transparent 0%, <?php echo $highlight_color; ?> 0%);
          background-repeat: no-repeat;
          background-position: -100% 0%;
          background-size: 1px 2px;
          font-family: hero;
          transition: background-size 7s, background-position 7s ease-in .7s;
          -moz-transition: background-size .7s, background-position .7s ease-in .7s;
          -ms-transition: background-size .7s, background-position .7s ease-in .7s;
          -o-transition: background-size .7s, background-position .7s ease-in .7s;
          -webkit-transition: background-size .7s, background-position .7s ease-in .7s;
        }

        .hero strong.highlight {
          background-size: 100% 100%;
          background-position: 0% 0%;
          transition: background-size 7s, background-position 7s ease-in .7s;
          -moz-transition: background-size .7s, background-position .7s ease-in .7s;
          -ms-transition: background-size .7s, background-position .7s ease-in .7s;
          -o-transition: background-size .7s, background-position .7s ease-in .7s;
          -webkit-transition: background-size .7s, background-position .7s ease-in .7s;
        }

        .posts {
          padding: 50px 20px;
        }

        .post figure img {
          width: 100%;
          height: auto;
        }

        .post h3 {
          font-family: hero;
          font-size: 35px;
          padding-bottom: 20px;
          transition: all .4s ease;
        }

        .post a {
          display: block;
          color: #2B2B2B;
          font-family: textBold;
        }

        .post a:hover {
          text-decoration: none;
        }

        .post a:hover > h3 {
          color: #F63C3B;
        }

        .post a p {
          font-family: text !important;
        }

        .single-content a {
          color: #F63C3B;
        }

        .single-content p {
          font-size: 20px;
          line-height: 34px;
        }

        .single-content a:hover {
          color: #F63C3B;
          text-decoration: none;
        }

      </style>
      <?php
        $invert = get_field('invert_logo_color', $post->ID); ?>


      <?php  if ( is_page(774) || $invert == 'yes') {?>
          <style>
          .social-elevator a {
            background: <?php echo get_field('hero_color', $post->ID); ?> !important;
          }
          .social-elevator a:nth-child(1) {
            background: white !important;
          }
          .socail-elevator a img {
            filter: invert(1);
          }

          .socail-elevator a img {
            filter: invert(0);
          }
          <?php
          if($invert == 'yes'){ ?>
            .menu li.current_page_item a {
              color: black;
            }
          </style>
          <?php } } ?>



</head>
