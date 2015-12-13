<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php if (!empty($title)) echo $title; ?></title>
    <?php
        if (!empty($styles))
        {
            foreach ($styles as $lValue)
            {
                echo Asset::css($lValue);
            }
        }
    ?>
    <?php
        if (!empty($scripts))
        {
            foreach ($scripts as $lValue)
            {
                echo Asset::js($lValue);
            }
        }
    ?>

</head>

<body>
    <div class="row">
        <div class="col-md-12">
        <?php
            if (!empty($header))
            {
                echo $header;
            }
        ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
        <?php
            if (!empty($left_block))
            {
                echo $left_block;
            }
        ?>
        </div>

        <div class="col-md-8">
        <?php
            if (!empty($content))
            {
                echo $content;
            }
        ?>
        </div>
        <div class="col-md-2">
        <?php
            if (!empty($right_block))
            {
                echo $right_block;
            }
        ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <?php
            if (!empty($footer))
            {
                echo $footer;
            }
        ?>
        <!-- Page rendered in {exec_time}s using {mem_usage}mb of memory. -->
        </div>
    </div>
    <script type="text/javascript">
        page.i18n = <?php echo json_encode($i18n); ?>;
    </script>
</body>
</html>