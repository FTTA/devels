
<div class="row">
    <h3> <?php echo DifferentFunc::translation('access_denied'); ?> </h3>
</div>

<?php if (!empty($msg)) {?>
<div class="row">
    <h3> <?php echo DifferentFunc::translation($msg); ?> </h3>
</div>
<?php } ?>
