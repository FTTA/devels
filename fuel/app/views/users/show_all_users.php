<div class="row">
    <div class="col-md-2"><b><?php echo DifferentFunc::translation('username'); ?> </b></div>
    <div class="col-md-2"><b><?php echo DifferentFunc::translation('user_email'); ?> </b></div>
    <div class="col-md-2"><b><?php echo DifferentFunc::translation('role'); ?> </b></div>
    <div class="col-md-2"><b><?php echo DifferentFunc::translation('deleted'); ?> </b></div>
    <div class="col-md-2"><b><?php echo DifferentFunc::translation('blocked'); ?> </b></div>
    <div class="col-md-2"><b><?php echo DifferentFunc::translation('action'); ?> </b></div>
</div>

<?php
$lRolesNames    = AuthModule::rolesNames();
$lMarcks['yes'] = DifferentFunc::translation('yes');
$lMarcks['no']  = DifferentFunc::translation('no');

foreach ($users as $lVal) {
    $lRoleName = $lRolesNames[$lVal['profile_fields']['role_id']];
?>
<div class="row">
    <div class="col-md-2"><?php echo $lVal['username']; ?></div>
    <div class="col-md-2"><?php echo $lVal['email']; ?></div>
    <div class="col-md-2"><?php echo DifferentFunc::translation($lRoleName); ?></div>
    <div class="col-md-2"><?php echo (empty($lVal['profile_fields']['is_deleted'])) ?
        $lMarcks['no'] : $lMarcks['yes']; ?></div>
    <div class="col-md-2"><?php echo (empty($lVal['profile_fields']['is_blocked'])) ?
        $lMarcks['no'] : $lMarcks['yes']; ?></div>
    <div class="col-md-2">
        <?php echo Html::anchor(
            'profile/index?user_id='.$lVal['id'],
            DifferentFunc::translation('show')); ?>
    </div>
</div>
<?php
}
?>