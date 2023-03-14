<?php

/* Template Name: Sidebar temp */
 get_header(); ?>
<h1 class="page-title-custom"><?php echo get_the_title(); ?></h1>
<?php get_template_part('components/content'); ?>
<?php get_template_part('components/sidebar'); ?>
<?php get_footer(); ?>