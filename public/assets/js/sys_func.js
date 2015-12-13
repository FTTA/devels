"use strict";

window.sys_func = {

	setLoader: function(aElement, aIsLoading) {
        aIsLoading
            ? aElement.addClass('sys_disabled')
            : aElement.removeClass('sys_disabled');
    },
    isLoading: function(aElement) {
        return aElement.hasClass('sys_disabled');
    },
    submitAndSend: function(aForm, aButton, aUrl, aCompleteFunc) //for this funct need include file check form.ls
    {
        var self = $(aButton),
            lFormData = new FormData();

        if (this.isLoading(self))
            return;

        if (!sys_func.formGetter.formCheckProcess($(aForm), lFormData))
        {
            alert(page.get_i18n('alert_msg_1'));
            return;
        }

        sys_func.setLoader(self, true);
        $.ajax({
            url: aUrl,
            data: lFormData,
            processData: false,
            contentType: false,
            cache: false,
            type: 'POST',
            dataType: 'json',
            success: function(data)
            {
                sys_func.setLoader(self, false);
                aCompleteFunc(data);
            }
        });
    },

    simpleSend: function (aParams, aOnSuccess)
    {
        if (!aParams.button || !aParams.data || !aParams.url)
        {
            alert('invalid params');
            return;
        }

        var lButton = $(aParams.button);

        if (sys_func.isLoading(lButton))
            return;
        sys_func.setLoader(lButton, true);
        $.ajax({
            url: aParams.url,
            data: aParams.data,
            type: 'POST',
            dataType: 'json',
            success: function(data)
            {
                sys_func.setLoader(lButton, false);
                if (aOnSuccess)
                    aOnSuccess(data);
            }
        });
    }
}