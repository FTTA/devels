$(document).ready(function() {

    var add_vatar = new page.fileUploader(
        $('#photo_container'),
        $('#downloaded_photo'),
        {
            limit: ((!page.tariff || !page.tariff.photo_count) ? 1 : page.tariff.photo_count),
            input_field: '#add_avatar',
            name_for_post: 'avatar',
            file_path: '/avatars/'
        }
    );
    $('#add_avatar_trigger').click(function() {
        $("#add_avatar").trigger('click');
    });

    $('#edit_user').click(function() {
        sys_func.submitAndSend(
            '#user_data',
            $(this),
            '/ajax/users/edit',
            function(data) {
                if (!data) {
                    alert('error');
                    return;
                }

                if (!data.status || data.status != 'ok') {
                    alert((data.message) ? data.message : 'error');
                    return;
                }
                alert(page.get_i18n('successful_msg_1'));
                location.reload();
            }
        );
    });

    $('#user_delete').click(function() {
        var lParams = {
            button: $(this),
            data:   {user_id: $(this).data('user-id')},
            url:    '/ajax/users/delete'
        };

        sys_func.simpleSend(
            lParams,
            function() {location.reload();}
        );
    });

    $('#user_restore').click(function() {

        if (!confirm(page.get_i18n('confirm_msg_1')))
            return;

        var lParams = {
            button: $(this),
            data:   {user_name: $(this).data('user-name')},
            url:    '/ajax/users/restore'
        };

        sys_func.simpleSend(
            lParams,
            function() {location.reload();}
        );
    });

    $('#change_password').click(function() {
        if (!confirm(page.get_i18n('confirm_msg_2')))
            return;

        if ($('#new_password').val() != $('#new_password_2').val())
        {
            alert(page.get_i18n('passwords_mismatch'));
            return;
        }

        sys_func.submitAndSend(
            '#password_form',
            $(this),
            '/ajax/users/changepassword',
            function(data) {
                if (!data) {
                    alert('error');
                    return;
                }

                if (!data.status || data.status != 'ok') {
                    alert((data.message) ? data.message : 'error');
                    return;
                }
                alert(page.get_i18n('successful_msg_3'));
                //location.reload();
            }
        );
    });
});