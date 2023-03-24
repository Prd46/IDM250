<a href="<?php echo get_the_permalink(); ?>">
<div class="card-box">
  <?php if (get_the_post_thumbnail_url()) {
      echo "<div class='w-100 mr-8'>
      <img class='card-image' src='" . get_the_post_thumbnail_url() . "' alt='Hero Image'>
      </div>";
  } ?>
  <div class="card-caption">
    <h1 class="font-bold"> <?php echo get_the_title(); ?></h1>
  </div>
</div>
</a>