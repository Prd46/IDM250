<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<header>
    <div class="header-internal-wrapper">
    <div class="header-identity-wrapper">
    <div class="header-image">
    <img class="header-image-file" src="<?php echo get_template_directory_uri(); ?>/dist/images/kthump.png" alt="Logo">
    </div>
    <h3>Artist's Name</h3>
</div>  
<div class="header-menu-links">
<?php wp_nav_menu(['theme_location' => 'primary-menu']); 
?>
</div>
</div>
</header>
<?php
wp_body_open();
?>