<a href="<?php echo get_the_permalink(); ?>">
<div class="card-box">
<div class="card-caption">
    <h3> <?php echo get_the_title(); ?></h3>
  </div>
  <div class="card-image">
  <?php if (get_the_post_thumbnail_url()) {
      echo "<div class='w-100 mr-8'>
      <img src='" . get_the_post_thumbnail_url() . "' alt='Hero Image'>
      </div>";
  } ?>
  </div>
</div>
</a>