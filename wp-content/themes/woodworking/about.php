<?php
//Template Name:About
get_header();
if(isset($_POST['savenews'])){
 $id=wp_insert_post(
    array(
    'post_type' => 'news',
    'post_status' => 'draft',
    'post_title' => $_POST['ntitle'],
    'post_content' => $_POST['ndes']
    )
    );
    wp_set_object_terms($id,$_POST['newscat'],'news_category');
}
?>
<div id="page-bgtop">
    <div id="page-bgbtm">
        <div id="content">
        <h4>Add Post</h4>
        <form method="post">
        <div>
        <label for="">Name</label>
        </div>
        <input type="text" name="ntitle" id="">
        <br><br>
        <div>
        <label for="">Description</label>
        </div>
        <textarea name="" id="" cols="30" rows="10" name="ndes"></textarea>
        <br><br>

<div>Select Category</div>       
<div>
    <select name="newscat" id="">
        <?php
        $terms = get_terms( array(
            'taxonomy'   => 'news_category',
            'hide_empty' => false,
            'order_by' => 'name',
            'order' => 'ASC',
            'parent' => 0,
        )); 
        foreach($terms as $catvalue) { 
        ?>
           <option value="<?php echo $catvalue->name;?>"><?php echo $catvalue->name;?></option>
            <?php
            }
            ?>
     </select>
        </div>
<br><br>
        <div>
        <button name="savenews">Save</button>
        </div>
    </form>
        </div>
         <!-- end #content -->
        <?php get_sidebar();?>
        <div style="clear: both;">&nbsp;</div>
    </div>
</div>
<?php
get_footer();
?>  