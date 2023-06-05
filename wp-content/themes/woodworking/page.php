<?php
get_header();
?>

<div class="post">
    <h2 class="title"><a href="#"><?php echo the_title();?> </a></h2>
</div>
<div class="thumbnail">
    <?php the_post_thumbnail()?> 
</div>
<div class="entry">
<?php
the_content()		
?>
</div>

<?php
get_footer();
?>





