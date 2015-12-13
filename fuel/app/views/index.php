
<?php
    if (!empty($articles))
    foreach ($articles as $lArticle)
    {
?>
    <div class="row">
        <h3>
        <?php
            echo Html::anchor('/articles/article?article_id='.$lArticle['id'],
                $lArticle['name']
            );
        ?>
        </h3>
    </div>
    <div class="row">
        <div class="col-md-2"><?php echo $lArticle['user_name']; ?></div>
        <div class="col-md-8"></div>
        <div class="col-md-2"><?php echo $lArticle['date']; ?></div>
    </div>
    <div class="row">
    <?php

        $lShortSize = 150;
        if (mb_strlen($lArticle['text']) > $lShortSize)
        {

            $lPos = mb_strpos($lArticle['text'], ' ', $lShortSize);

            echo empty($lPos) ? mb_substr($lArticle['text'], 0, $lShortSize) :
                mb_substr($lArticle['text'], 0, $lPos);

            echo Html::anchor('/articles/article?article_id='.$lArticle['id'],'...'.
                DifferentFunc::translation('read_more'));
        }
        else
        {
            echo $lArticle['text'];
        }
    ?>
    </div>

<?php
    }
    echo $pagination;
?>
