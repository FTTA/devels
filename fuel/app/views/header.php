<div class="col-md-6">
    <div class="col-md-4">
        <?php echo Html::anchor('/',DifferentFunc::translation('main_page')); ?>
    </div>
    <?php
    if ($is_logged == true && $current_user['role_id'] != AuthModule::UR_USER) {
    ?>
        <div class="col-md-4">
            <?php echo Html::anchor('articles', DifferentFunc::translation('add_article')); ?>
        </div>
    <?php
        if ($current_user['role_id'] == AuthModule::UR_ADMIN) {
    ?>
        <div class="col-md-4">
            <?php echo Html::anchor('users/showall', DifferentFunc::translation('users_list')); ?>
        </div>
    <?php
        }
    }
    ?>
    <div class="col-md-6"></div>
</div>
<div class="col-md-2">
    <img src="/assets/img/gb.png" alt="en" class="set_lang" data-lang="en">
    <img src="/assets/img/ua.png" alt="ua" class="set_lang" data-lang="ua">
</div>

<div class="col-md-4">
    <?php
    if ($is_logged == true) {
        $lUserAvatar = empty($current_user['avatar']) ? '/assets/img/noavatar.png' :
            '/avatars/'.$current_user['avatar']['file_name'];
    ?>
    <div class="col-md-6">
        <a href="/profile/index?user_id=<?php echo $current_user['id']; ?>">
        <img src="<?php echo $lUserAvatar; ?>" width="50" heigth="50">
        <?php echo $current_user['username']; ?>
    </a>

    </div>
    <div class="col-md-6">
        <input type="button" id="make_logout"
            value="<?php echo DifferentFunc::translation('logout'); ?>">
    </div>

    <?php
    }
    else {
    ?>

    <div class="col-md-12">
        <form id="login_form" class="form-inline">
            <div class="form-group">
                <input class="form_field validate form-control"  name="username"
                    placeholder="<?php echo DifferentFunc::translation('username'); ?>">
            </div>
            <div class="form-group">
                <input type="password" class="form_field validate form-control" name="password"
                    placeholder="<?php echo DifferentFunc::translation('password'); ?>">
            </div>
            <button type="button" class="btn btn-default" id="make_login">
                <?php echo DifferentFunc::translation('sign_in'); ?>
            </button>
            <?php echo Html::anchor(
                'users/register',
                DifferentFunc::translation('registration'));?>
        </form>
    </div>
    <?php
    }
    ?>
</div>