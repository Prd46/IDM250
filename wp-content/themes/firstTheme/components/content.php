<div class="content-blocks">
<?php if (have_posts()){
    //outputs posts if we have any
    while (have_posts()){
        the_post();
        the_content();
    } 
    
    }else {
        echo 'No posts found.';
    }
?>
</div>