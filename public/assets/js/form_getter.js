"use strict";

sys_func.formGetter = {
    changeFormField: function(aList, aIsActive)
    {
        for (var i = 0, lSize = aList.length; i < lSize; i++)
            $('#' + aList[i]).toggleClass('form_field', aIsActive);
    },

    formCheckProcess: function(aForm, aFormData)
    {
        var lResult = true;
        (aForm && aForm.length
            ? aForm.find(".form_field")
            : $(".form_field")
        ).each(function() {
            if (!sys_func.formGetter.formElementCheckProcess($(this), aFormData))
                lResult = false;
        });
        return lResult;
    },

    formFieldErrorHighlight: function(aElement)
    {

        var lErrorClearFunc = function()
        {
          $(this).unbind("click").unbind("focus").css({border: ""});
        };

        aElement.css({border: "1px solid #E31E1E"}).click(lErrorClearFunc).
            focus(lErrorClearFunc);
    },

    formElementCheckProcess: function(aElement, aFormData)
    {
        function lCheckByType(aValue, aType)
        {
            var lRegExp = null;

            switch (aType)
            {
                case "price":
                    lRegExp = new RegExp("^[0-9.,]+$");
                    if (aValue <= 0)
                        return false;
                    break;
                case "number":
                    lRegExp = new RegExp("^[0-9]+$");
                    if (aValue < 0)
                        return false;
                    break;
                case "phone":
                /*
                    if (aValue === "+")
                        return true;*/
                    lRegExp = new RegExp("^[+]?[0-9]+$");
                    break;
                case "email":
                    lRegExp = new RegExp(/^[_a-zA-Zа-яёА-ЯЁ0-9-]+(\.[_a-zA-Z0-9а-яА-Я-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,3})$/);
                    break;
                case "date":
                    lRegExp = new RegExp(/^\d{2}[.]\d{2}[.]\d{4}$/);
                    break;
            }
                aValue = aValue.trim();

            return lRegExp && lRegExp.test(aValue);
        }

        var
            lResult            = true,
            lIsValidate        = aElement.hasClass("validate"),
            lIsCheck           = aElement.hasClass("check"),
            lValue             = aElement.val(),
            lLength            = lValue ? lValue.length : 0,
            lFieldName         = aElement.attr("name"),
            lType              = aElement.attr("valueType"),
            lHighlightSelector = aElement.attr('highlight'),
            lFieldType         = aElement.attr("type") || aElement.prop('tagName').toLowerCase();

        lFieldType = lFieldType.toLowerCase();

        if ((lType === 'date') && lLength)
        {
            lValue = lValue.replace(/\//g, ".");//!! datepicker bug
            aElement.val(lValue);
        }
        if (lFieldName && aFormData)
        {
            if (aFormData)
            {
                switch(lFieldType)
                {
                    case 'file':
                        if(!aElement[0].files && !aElement[0].value)
                            break;
                            aFormData.append(lFieldName, aElement[0].files[0]);
                        break;
                    case 'checkbox':
                        aFormData.append(lFieldName, aElement.prop("checked") ? "1" : "0");
                        break;
                    case 'radio':
                        if(aElement.prop('checked'))
                            aFormData.append(lFieldName, lValue);
                        break;
                    case 'text':
                        if(lLength > 0)
                            aFormData.append(lFieldName, lValue);
                        break;
                    default:
                        if(lLength > 0)
                            aFormData.append(lFieldName, lValue);
                        break;
                }
            }
        }

        if (lValue != '' && lType)
            lIsValidate = true;


        if (!lIsValidate && !lIsCheck)
            return lResult;

        var
            lValueLength = parseInt(aElement.attr("valueLength")) || 0,
            lMaxLength = parseInt(aElement.attr("maxValueLength")) || 0,
            lHighlightElement = lHighlightSelector
                ? aElement.parent().find(lHighlightSelector)
                : aElement;

        if(lIsValidate
            && aElement.val() == ''
            && aElement.prop('tagName').toLowerCase() == 'select')
        {
            sys_func.formGetter.formFieldErrorHighlight(lHighlightElement);
            return false;
        }

        if(lIsValidate
            && lFieldType === 'checkbox'
            && !aElement.prop('checked'))
        {
            sys_func.formGetter.formFieldErrorHighlight(lHighlightElement);
            return false;
        }

        if(lIsValidate
            && lFieldType === 'radio'
            && !aElement.prop('checked')
            && $(aElement[0].form).find('input[name="' + lFieldName + '"]:checked').length == 0)
        {
            sys_func.formGetter.formFieldErrorHighlight($(aElement[0].form));
            return false;
        }

        if ((lIsValidate && (lLength === 0))
            || (lMaxLength && (lLength > lMaxLength))
            || (lValueLength && lLength)
            || (lType && (lLength && !lCheckByType(lValue, lType)))
        ) {
            sys_func.formGetter.formFieldErrorHighlight(lHighlightElement);
            lResult = false;
        }
        else
            lHighlightElement.css({border: ""});

        return lResult;
    }
};
