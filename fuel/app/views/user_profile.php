
<h2><?php echo DifferentFunc::translation('user_profile'); ?></h2>
<?php
$lUserAvatar = empty($user_data['avatar']) ? '/assets/img/noavatar.png' :
    '/avatars/'.$user_data['avatar']['file_name'];
?>
<div><img src="<?php echo $lUserAvatar; ?>" width="250" heigth="250"></div>
<div class="row">
    <div class="col-md-3">
        <?php echo DifferentFunc::translation('username'); ?>
    </div>
    <div class="col-md-9"><?php echo $user_data['username']; ?></div>
</div>
<?php if (!empty($user_data['profile_fields']['first_name'])) { ?>
    <div class="row">
        <div class="col-md-3">
            <?php echo DifferentFunc::translation('first_name');?>
        </div>
        <div class="col-md-9">
        <?php echo $user_data['profile_fields']['first_name']; ?>
        </div>
    </div>
<?php } ?>

<?php if (!empty($user_data['profile_fields']['last_name'])) { ?>
    <div class="row">
        <div class="col-md-3">
            <?php echo DifferentFunc::translation('last_name'); ?></div>
        <div class="col-md-9">
        <?php echo $user_data['profile_fields']['last_name']; ?></div>
    </div>
<?php } ?>

<div class="row">
    <div class="col-md-3">
        <?php echo DifferentFunc::translation('user_email'); ?>:</div>
    <div class="col-md-9"><?php echo $user_data['email']; ?></div>
</div>
<div class="row">
    <div class="col-md-3">
        <?php echo DifferentFunc::translation('registration_date'); ?>:</div>
    <div class="col-md-9"><?php echo date('Y-m-d', $user_data['created_at']); ?></div>
</div>
<?php
if ($owner_mode) {
?>
<div class="row">
    <div class="col-md-6">
        <?php echo Html::anchor(
            '/profile/edit?user_id='.$user_data['id'],
            DifferentFunc::translation('edit_profile')
        );?>
    </div>
</div>
<?php
}
?>
