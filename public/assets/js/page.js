"use strict";

window.page = {
    get_i18n: function(aKey) {
        if (!page.i18n)
            return aKey;
        if(!page.i18n[aKey])
            return aKey;
        return page.i18n[aKey];
    }
};

$(document).ready(function() {
    $('.set_lang').click(function() {
        var lParams = {
            button: $(this),
            data:   {lang: $(this).data('lang')},
            url:    '/ajax/general/lang'
        };

        sys_func.simpleSend(
            lParams,
            function() {location.reload();}
        );
    });
});