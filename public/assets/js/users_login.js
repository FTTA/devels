'use strict';

$(document).ready(function() {
    $('#make_login').click(function() {
        sys_func.submitAndSend(
            '#login_form',
            $(this),
            '/ajax/general/login',
            function(data) {
                if (!data) {
                    alert('error');
                    return;
                }

                if (!data.status || data.status != 'ok') {
                    alert((data.message) ? page.get_i18n(data.message) : 'error');
                    return;
                }
                location.reload();
            }
        );
    });
});
