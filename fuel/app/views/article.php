<?php
if (empty($article)
    || empty($article['name'])
    || empty($article['user_name'])
    || empty($article['text'])
    || empty($article['date'])
    )
{
    echo 'Sorry. Empty result';
    return;
}
?>

<div class="row">
    <h3><?php echo $article['name']; ?></h3>
</div>
<div class="row">
<?php echo $article['text']; ?>
</div>
<div class="row">
    <div class="col-md-2">
        <a href="/profile/index?user_id=<?php echo $article['user_id']; ?>">
            <?php echo $article['user_name']; ?>
        </a>
    </div>
    <div class="col-md-8"></div>
    <div class="col-md-2"><?php echo $article['date']; ?></div>
</div>
<?php
if ($is_logged
    && ($current_user['id'] == $article['user_id']
        || $current_user['role_id'] == AuthModule::UR_ADMIN
        )
){
?>
<div class="row">
    <?echo Html::anchor(
        '/articles/edit?article_id='.$article['id'],
        DifferentFunc::translation('edit')
    );?>
</div>
<?php
}
?>