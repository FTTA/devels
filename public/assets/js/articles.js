'use strict';

$(document).ready(function() {
    $('#article_add').click(function() {
        sys_func.submitAndSend(
            '#article_form',
            $(this),
            '/ajax/articles/add',
            function(data) {
                if (!data) {
                    alert('error');
                    return;
                }

                if (!data.status || data.status != 'ok') {
                    alert((data.message) ? data.message : 'error');
                    return;
                }
                alert(page.get_i18n('succesful'))
                window.location = '/';
            }
        );
    });

    $('#article_edit').click(function() {
        sys_func.submitAndSend(
            '#article_form',
            $(this),
            '/ajax/articles/edit',
            function(data) {
                if (!data) {
                    alert('error');
                    return;
                }

                if (!data.status || data.status != 'ok') {
                    alert((data.message) ? data.message : 'error');
                    return;
                }
                alert(page.get_i18n('succesful'))
                window.location = '/';
            }
        );
    });

    $('#article_delete').click(function() {
        sys_func.submitAndSend(
            '#article_form',
            $(this),
            '/ajax/articles/delete',
            function(data) {
                if (!data) {
                    alert('error');
                    return;
                }

                if (!data.status || data.status != 'ok') {
                    alert((data.message) ? data.message : 'error');
                    return;
                }
                alert(page.get_i18n('succesful'))
                window.location = '/';
            }
        );
    });
});
