'use strict';

$(document).ready(function() {
    $('#make_logout').click(function() {
        var lFormData = new FormData();

        var lPrepared = {
            url: '/ajax/general/logout',
            data: true,
            button: $(this)
        };

        sys_func.simpleSend(lPrepared, function() {
            window.location = '/';
        });
    });
});