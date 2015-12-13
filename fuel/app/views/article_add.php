<?php
if(empty($edit_mode)
    || empty($article)
    || empty($article['name'])
    || empty($article['text'])
    )
{
    $edit_mode = false;
}

?>
<div id="article_form">
    <div class="row">
        English
    </div>
    <div class="row">
        <div class="col-md-6">
            <input type="text" class="form-control form_field validate"
                name="article[name_en]" placeholder="Text input"
                value="<?php echo empty($edit_mode) ? '' : $article['name_en'];?>" >
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <textarea class="form-control form_field validate" name="article[text_en]"
            rows="25"><?php echo empty($edit_mode) ? '' : $article['text_en'];?></textarea>
        </div>
    </div>

    <div class="row">
            Українська
    </div>
    <div class="row">
        <div class="col-md-6">
            <input type="text" class="form-control form_field validate"
                name="article[name_ua]" placeholder="Text input"
                value="<?php echo empty($edit_mode) ? '' : $article['name_ua'];?>" >
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <textarea class="form-control form_field validate" name="article[text_ua]"
            rows="25"><?php echo empty($edit_mode) ? '' : $article['text_ua'];?></textarea>
        </div>
    </div>


<?php
    if ($edit_mode)
    {
        $lText = 'edit_article';
        $lId   = 'article_edit';
?>
    <input type="hidden" class="form_field validate"
        value="<?php echo $article['user_id']?>" name="article[user_id]">
    <input type="hidden" class="form_field validate"
        value="<?php echo $article['id']?>" name="article[article_id]">

<?php
    }
    else
    {
        $lText = 'add_article';
        $lId   = 'article_add';
    }
?>
    <input type="button" id="<?php echo $lId;?>"
        value="<?php echo DifferentFunc::translation($lText); ?>">
<?php
    if ($edit_mode)
    {
?>
    <input type="button" id="article_delete"
        value="<?php echo DifferentFunc::translation('delete_article'); ?>">
<?php
    }
?>

</div>