<h2><?php echo DifferentFunc::translation('registration'); ?></h2>
<form id="registration_form" style="width: 25%; padding: 20px;">
    <div class="form-group">
        <label><?php echo DifferentFunc::translation('username'); ?></label>
        <input type="text" class="form_field validate form-control" name="username">
    </div>
    <div class="form-group">
        <label><?php echo DifferentFunc::translation('password'); ?></label>
        <input name="password" type="password" class="form_field validate form-control"
            id="pass" placeholder="<?php echo DifferentFunc::translation('password'); ?>">
        <input name="password2" type="password" class="form_field validate form-control"
            id="pass2" placeholder="<?php echo DifferentFunc::translation('repeat_password'); ?>">
    </div>
    <div class="form-group">
        <label><?php echo DifferentFunc::translation('email'); ?></label>
        <input  type="text" class="form_field validate form-control"
            valueType="email" name="email" placeholder="Email">
    </div>
    <button type="button" class="btn btn-default" id="make_registration">
        <?php echo DifferentFunc::translation('submit'); ?>
    </button>
</form>
