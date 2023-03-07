<?php get_header(); ?>
<h1 class="page-title-custom"><?php echo get_the_title(); ?></h1>
<div class="page-excerpt"><?php echo get_the_excerpt(); ?></div>
<div class="page-date"><?php echo get_the_date();?></div>
<h4>Categories for this post</h4>
<div class="categories-box">
<?php
$currentPostId= get_the_id();

$terms = get_the_terms($currentPostId, 'category');

if ($terms) {
    $total_category_count = count($terms);
    echo '<div class="flex flex-wrap" data-component="blog-categories-list">';
    foreach ($terms as $index => $term) {
        $taxonomy_url = get_term_link($term->term_id);
        // Only show comma if not last item in loop
        // Commenting out this comma logic since my design doesn't need it but leaving it here for reference
        $comma = $index < $total_category_count - 1 ? '| ' : '';
        echo "<span><a class='category-link' href='{$taxonomy_url}'>{$term->name}</a> {$comma}<span>";
    }
    echo '</div>';
}
?>
</div>
<?php get_template_part('components/content'); ?>
<?php get_footer(); ?>