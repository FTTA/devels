'use strict';

$(document).ready(function() {
    $('#make_registration').click(function() {
        sys_func.submitAndSend(
            '#registration_form',
            $(this),
            '/ajax/general/registration',
            function(data) {
                if (!data) {
                    alert('error');
                    return;
                }

                if (!data.status || data.status != 'ok') {
                    alert((data.message) ? data.message : 'error');
                    return;
                }
                alert(page.get_i18n('successful_msg_2'))
                window.location = '/';
            }
        );
    });
});
