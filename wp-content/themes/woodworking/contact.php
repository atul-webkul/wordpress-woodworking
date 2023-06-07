<?php
//Template Name: Contact Us
get_header();
?>
<div id="page">
    <div id="page-bgtop">
        <div id="page-bgbtm">
            <div id="content">
                    <div class="post">
                    <h2 class="title"><a href="#"><?php the_title()?></a></h2>
                        <div class="entry">
                         Name : <?php the_field('name', 18)?><br>
                         Contact : <?php the_field('contact', 18)?><br>
                         Email : <?php the_field('email', 18)?><br>
                         Address : <?php the_field('address', 18)?><br>
                        </div>
                    </div>
            </div>
            <!-- end #content -->
            <?php get_sidebar()?>
            <div style="clear: both;">&nbsp;</div>
        </div>
    </div>
</div>
<?php
get_footer();
?>