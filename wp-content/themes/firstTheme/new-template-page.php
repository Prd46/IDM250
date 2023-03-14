<?php

/* Template Name: Sidebar temp */
 get_header(); ?>
<h1 class="page-title-custom"><?php echo get_the_title(); ?></h1>
<div class="two-column-split">
    <div class="left-column">
        <?php get_template_part('components/content'); ?>
    </div>
    <div class="right-column">
        <?php get_template_part('components/sidebar'); ?>
    </div> 
</div>

<?php get_footer(); ?>
