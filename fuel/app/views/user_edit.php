<form class="form-horizontal" id="user_data">
    <div class="form-group">
        <label class="col-sm-2 control-label">
            <?php echo DifferentFunc::translation('username'); ?>
        </label>
        <div class="col-sm-4">
            <input type="text" class="form-control form_field validate" readonly="readonly"
                name="user[username]" value="<?php echo $user_data['username']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">
            <?php echo DifferentFunc::translation('first_name'); ?>
        </label>
        <div class="col-sm-4">
            <input type="text" class="form-control form_field" name="user[first_name]"
                value="<?php echo !empty($user_data['first_name']) ? $user_data['first_name'] : ''; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">
            <?php echo DifferentFunc::translation('last_name'); ?>
        </label>
        <div class="col-sm-4">
            <input type="text" class="form-control form_field" name="user[last_name]"
                value="<?php echo !empty($user_data['last_name']) ? $user_data['last_name'] : ''; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">
            <?php echo DifferentFunc::translation('email'); ?>
        </label>
        <div class="col-sm-4">
            <input type="email" class="form-control form_field validate" name="user[email]"
                placeholder="Email" value="<?php echo $user_data['email']; ?>">
        </div>
    </div>

<?php if (!empty($admin_mode)) {?>
    <div class="form-group">
        <label class="col-sm-2 control-label">
            <?php echo DifferentFunc::translation('role'); ?>
        </label>
        <div class="col-sm-4">
            <select class="form_field validate" name="user[role_id]">
            <?php
            foreach (AuthModule::rolesList() as $lKey => $lVal) {
                $lSelected = ($lVal == $user_data['role_id']) ? 'selected="selected"' : '';
                echo '<option value="'.$lVal.'"'.$lSelected.'>'.
                    DifferentFunc::translation($lKey).'</option>';
            }?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">
            <?php echo DifferentFunc::translation('block'); ?>
        </label>
        <div class="col-sm-4">
            <input type="checkbox" class="form-control form_field" name="user[is_blocked]"
            <?php echo empty($user_data['is_blocked']) ? '' : 'checked="checked"'; ?>>
        </div>
    </div>

<?php }?>

    <div class="form-group">
        <div class="col-sm-2"></div>
        <div id="photo_container"></div>
        <div id="downloaded_photo">
            <?php
            if (!empty($user_data['avatar'])) {
                echo '<div data-file-id="' . $user_data['avatar']['id'] . '" '.
                    'data-file-name="' . $user_data['avatar']['file_name'] . '"></div>';
            }
            ?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-2"></div>
        <input type="file" id="add_avatar" style="display:none;">
        <input type="button" class="btn-blue pull-left" id="add_avatar_trigger"
            value="<?php echo DifferentFunc::translation('add_avatar'); ?>">
    </div>

    <div class="form-group">
        <div class="col-sm-2"></div>
        <input class="btn btn-primary" type="button" id="edit_user"
            value="<?php echo DifferentFunc::translation('change_data'); ?>">
        <?php
        if (empty($user_data['is_deleted'])) {
        ?>
            <input class="btn btn-danger" type="button"
                value="<?php echo DifferentFunc::translation('delete_profile'); ?>"
                data-user-id="<?php echo $user_data['id']; ?>" id="user_delete">
        <?php
        }
        else {
        ?>
            <input class="btn btn-warning" type="button"
                value="<?php echo DifferentFunc::translation('restore_profile'); ?>"
                data-user-name="<?php echo $user_data['username']; ?>" id="user_restore">
        <?php
        }
        ?>


    </div>


</form>

<?php if (empty($admin_mode)) {?>
<div>
    <b><?php echo DifferentFunc::translation('change_password'); ?></b>
</div>
<form class="form-horizontal" id="password_form">
    <div class="form-group">
        <div class="col-sm-4">
            <input type="password" class="form-control form_field validate" name="password[old]"
                placeholder="<?php echo DifferentFunc::translation('password'); ?>">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-4">
            <input type="password" class="form-control form_field validate"
                id="new_password" name="password[new]"
                placeholder="<?php echo DifferentFunc::translation('new_password'); ?>">
        </div>
        <div class="col-sm-4">
            <input type="password" class="form-control form_field validate"
                id="new_password_2" name="password[new_2]"
                placeholder="<?php echo DifferentFunc::translation('repeat_new_password'); ?>">
        </div>
    </div>
    <input type="button" id="change_password" class="btn btn-warning"
        value="<?php echo DifferentFunc::translation('change_password'); ?>">
</form>
<?php }?>