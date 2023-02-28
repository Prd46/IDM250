<?php get_header(); ?>
<h1><?php echo get_the_title(); ?></h1>
<div><?php get_the_excerpt(); ?></div>

<h2>Categories for this post</h2>
<?php
$currentPostId= get_the_id();

$terms = get_the_terms($currentPostId, 'category');

if ($terms) {
    foreach ($terms as $term){
        echo "<span>{$term->name}</span>";
    }
}
?>

<?php get_template_part('components/content'); ?>
<?php get_footer(); ?>