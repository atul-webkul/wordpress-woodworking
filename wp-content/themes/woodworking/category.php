<?php 
get_header()
?>
<div id="page">
    <div id="page-bgtop">
	    <div id="page-bgbtm">
            <div id="content">
                <?php while(have_posts()) {
                the_post();
                ?>
                    <div class="post">
                        <h2 class="title"><a href="#"><?php the_title()?></a></h2>
                        <p class="meta">Posted by <a href="#"><?php the_author()?></a> on <?php echo get_the_date() ?>
                         &nbsp;&bull;&nbsp; <a href="#" class="comments">Comments <?php echo  get_comments_number()?></a> &nbsp;&bull;&nbsp; <a href="<?php the_permalink()?>" class="permalink">Full article</a></p>
                            <div class="entry">
                                <p><img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(),'large')[0]?> " width="143" height="143" alt="" class="alignleft border" /> </p>
                                <p><?php the_excerpt();?></p>
                            </div>
                    </div>
                 <?php
                 }
                 ?>
            </div>
            <?php get_sidebar()?>
            <div style="clear: both;">&nbsp;</div>
        </div>
    </div>
</div>
<?php
get_footer()
?>