<?php

  $socials = get_field('social_profiles', 'option'); ?>

  <div class="social-elevator" style="right: 0px; top: 100px; background-color: transparent; line-height: 32px;">
    <?php
    foreach ($socials as $key => $social) : ?>
      <a class="a2a_button_twitter" href="<?php echo $social['link']; ?>" rel="nofollow noopener" target="_blank"><span class="a2a_svg a2a_s__default">
        <img src="<?php echo $social['logo']; ?>" alt="social-media-logo" width="35">
        </span></a>
    <?php
    endforeach;
    ?>
  </div>
</body>
<?php wp_footer(); ?>
<footer>
</footer>
