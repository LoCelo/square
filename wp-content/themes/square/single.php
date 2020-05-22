<?php get_header(); ?>

<div class="container mt-5 mb-5 pt-2 pb-2">
  <div class="row">
    <div class="col-md-12 mb-5">
        <figure class="single-thumb">
            <?php echo get_the_post_thumbnail(get_the_ID(), 'large'); ?>
        </figure>
        <?php if (!empty(get_field('author', get_the_ID()))) : ?>
          <strong><?php echo get_field('author', get_the_ID()); ?></strong>
        <?php endif; ?>
        <h2 class="tax-title"><?php echo get_the_title($post->ID); ?> </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 content single-content">
      <?php
        echo apply_filters('the_content', get_the_content(get_the_ID()));
        $relateds = get_field('related', $post->ID);
        if (!empty($relateds)) : ?>
          <p class="mt-4"><strong>You might be interested in:</strong></p>
          <ul>
        <?php
        foreach ($relateds as $key => $related) :
          $id = url_to_postid($related);
        ?>
          <li><p><a href="<?php echo $related; ?>"><?php echo get_the_title($id); ?></a></p></li>
        <?php
        endforeach;
        ?>
      </ul>
    <?php endif; ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center mb-5 mt-5">
        <h3 class="tax-title">Fan of our ecossystem and vibe? <br>
          <span class="red">Follow us</span></h3>
          <ul class="social-links">
          <?php
          $links = get_field('social_links', 753);

          foreach ($links as $key => $social) { ?>

            <li><a href="<?php echo $social['link'];?>" target="_blank" rel="noopener">
              <img src="<?php echo $social['icon']; ?>" alt="icon_social" width="45">
            </a></li>

        <?php  }
          ?>
        </ul>
      </div>
    </div>
    <?php include 'partials/newsletter.php'; ?>
</div>


<?php get_footer(); ?>
