<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php if (!empty($title)) echo $title; ?></title>
	<?php/*
		if (!empty($styles))
			foreach ($styles as $lValue)
			{
				echo Asset::css($lValue);
			}
	?>
    <?php
    	if (!empty($scripts))
	    	foreach ($scripts as $lValue)
			{
				echo Asset::js($lValue);
			}*/
    ?>
</head>

<body>
	<div class="container">
		sdfffffffffffffffffffdsdfsdf
		<?php echo $content; ?>
	</div>
</body>
</html>
