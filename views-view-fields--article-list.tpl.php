<!-- views-view-fields article-list.tpl.php -->
<div class="picture">

    <?php if($fields['field_list_image_fid']->content) {
        file_put_contents("E:\Inetpub\wwwroot\dingtest\debug3.txt", print_r($fields['field_list_image_fid'], TRUE), FILE_APPEND);
        print $fields['field_list_image_fid']->content;
    } else {
        print ('<img src="/sites/default/files/other_images/blogpostikon.png">');
    }; ?>


</div>
<div id="blogdata">
    <div class="subject"><?php print $fields['tid']->content; ?> </div>
    <h2><?php print $fields['title']->content; ?></h2>

<?php /**
    <div class="meta">
        <?php if ($fields['field_library_ref_nid']->content) {
 ?>
            <ul>
                <li><?php print $fields['field_library_ref_nid']->content; ?></li>
            </ul>
<?php } ?>

<?php print $fields['created']->content; ?>

<?php if ($fields['name']->content) { ?>
            <i><?php print t('by'); ?></i>
            <span class="author"><?php print $fields['name']->content; ?></span>
<?php } ?>

        <?php
        if ($fields['comment_count']->raw >= "1") {
            print "(" . $fields['comment_count']->content . ")";
        }
        ?>

    </div>
*/ ?>
    <?php
        if ($fields['field_teaser_value']->content OR $fields['body']->content) {
    ?>
            <p>
        <?php print $fields['field_teaser_value']->content; ?>
<?php print $fields['body']->content; ?>    
            <span class="more-link"><?php print $fields['view_node']->content; ?></span>
        </p>
<?php } ?>


    <?php if ($fields['edit_node']->content) {
 ?>
<?php print $fields['edit_node']->content; ?>
<?php } ?>

</div>