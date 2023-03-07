<?php get_header() ?>
<h1><?php echo get_the_title(); ?></h1>

<div class="text-box-404">
    <h1 class="header-text-404">404</h1>
    <h3 class="message-404">Whatever page you're looking for, it's not here.</h3>
    <a href="<?php echo get_template_directory_uri(); ?>/index.php">
    <div class="return-home-button-404">
        Head Home
    </div>
</a>
</div> 

<?php get_footer() ?>