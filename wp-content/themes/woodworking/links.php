<?php 
//Template Name : Links
get_header();
$cat=get_categories(array('taxonomy' => 'category'));
// echo "<pre>";
// print_r($cat);
$terms = get_terms( array(
    'taxonomy'   => 'news_category',
    'hide_empty' => false,
    'order_by' => 'name',
    'order' => 'ASC',
    'parent' => 0,
) );    
// echo "<pre>";
// print_r($terms);
?>

<div id="page">
			<div id="page-bgtop">
				<div id="page-bgbtm">
					<div id="content">
					<div class="categories">
                        <?php
                        foreach($cat as $catvalue){
                        ?>
  
                        <div class="post">
							<h2 class="title"><a href="<?php echo get_category_link($catvalue->term_id);?>">
                            <?php  echo $catvalue->name?></a>(<?php echo $catvalue->count?>)</h2>
						</div>

                     <?php }
                     ?>
                    </div>
					</div>
					<!-- end #content -->
                    <?php get_sidebar();?>
					<div style="clear: both;">&nbsp;</div>
				</div>
			</div>


            <h3>For News Blogs</h3>        
        	<div id="page-bgtop">
				<div id="page-bgbtm">
					<div id="content">
					<div class="categories">
                        <?php
                        foreach($terms as $termsvalue){
                            // echo $meta_image = get_wp_term_image($termsvalue->term_id);
                        ?>

                        <div class="post">
							<h2 class="title"><a href="<?php echo get_category_link($termsvalue->term_id);?>">
                            <?php  echo $termsvalue->name?></a>(<?php echo $termsvalue->count?>)</h2>
						</div>

                     <?php }
                     ?>
                    </div>
					</div>
					<!-- end #content -->
                   
					<div style="clear: both;">&nbsp;</div>
				</div>
			</div>
        </div>
<?php
get_footer();
?>