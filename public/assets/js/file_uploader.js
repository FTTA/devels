"use strict";

page.fileUploader = function($aContainerForUploaded, $aContainerForExist, aOptions) {
    var
        self      = this,
        counter   = 0,
        unic_part = 0,
        img_format_list = ['.gif', '.png', '.jpg', '.bmp', '.jpeg'],

        marker_of_img_block  = 'foto',                  //style class of block with image, delete button and inputs
        marker_delete_button = 'delete_photo',         //style class of delete button
        marker_remove_photo  = 'sys_remove_photo',

        handler_file  = ((!aOptions.handler_file) ? '/fileuploader/upload/' : aOptions.handler_file),

        name_for_post = aOptions.name_for_post,
        input_field   = aOptions.input_field,
        limit         = aOptions.limit ? aOptions.limit : 10,  // max available number of uploaded filesб
        file_path     = aOptions.file_path,
        class_id      = 'sys_uploaded',             /*class which used to generate system classes and adding events to the elements
                                                  // class_id - input with name of uploaded file
                                                  // class_id + "_delete" class for delete button
                                                  // class_id + "_original" input with original name that had file on client*/
        delete_title = 'Удалить',
        deleteButton = '<input type="button" class="' + marker_delete_button + ' ' +
            class_id + '_delete" title="'+delete_title+'">';

    function completeHandler($element, event,  aOnComplete)
    {
        var Response      = JSON.parse(event.target.responseText),
            lName         = name_for_post + '[' +  name_for_post + unic_part + ']',
            lOriginalName = name_for_post + '[' + Response['file_name'] + ']';

        unic_part++;
        counter++;

        var imgPath     = 'assets/images/no_photo.png',
            lFileFormat = Response['file_name'].split('.');
            lFileFormat = '.'+lFileFormat[lFileFormat.length-1];
        for (var size = img_format_list.length; size--; )
        {
            if (img_format_list[size] == lFileFormat)
            {
                imgPath = Response['folder_path'] + Response['file_name'];
                break;
            }
        }

        $aContainerForUploaded.prepend(
            '<div class="' + marker_of_img_block + '">' +
                '<img src="/'+ imgPath + '"' + 'alt="" title="" width="160" height="100">' +

                '<input class="form_field '  +  class_id  +  '" type="hidden" readonly ' +
                       'value="' + Response['file_name'] + '" name="' + lName + '"/>' +
                '<input class="form_field '  +  class_id  + '_original'  + '" ' +
                       'readonly type="hidden" name="name_' + lOriginalName + '"' +
                       'value="' + $element.val() + '"/>' +
                deleteButton +
            '</div>'
        );

        aOnComplete && aOnComplete();
    }

    function buildElements(aList)
    {
        var size = aList.length,
            lResult = '';

        if (size <= 0)
            return;

        for (var n = 0; size > n; n++)
        {
            var lElement = $(aList[n]);
            lResult +=
            '<div class="' + marker_of_img_block + '" data-file-id=' +lElement.data('file-id')+'>' +
                '<img src="'+ file_path + lElement.data('file-name')+'"' +
                     'alt="" title="" width="160" height="100">' +
                '<input class="delete_photo '+marker_remove_photo+' '+ class_id + '_delete" type="button" title="Удалить">'+
            '</div>'+
            '<input id="'+ lElement.data('file-id') +'" type="hidden" name="delete_'+name_for_post+'['+ n+']" value="">';
        }

        $aContainerForUploaded.prepend(lResult);

        unic_part = counter = size;
    }

    function deleteElement($element)
    {
        // TODO: we need remove image from server too
        $element.parent().remove();
        counter--;
    }

    function clearContainer()
    {
        $aContainerForUploaded.html('');
    }

    function uploadFile($aFileElement, aOnCompleteFunc)
    {
        if (counter >= limit)
            return;

        var lFormData = new FormData();
        lFormData.append(
            'files_to_load',
            $aFileElement[0].files[0] // alert(file.name+" | "+file.size+" | "+file.type););
        );

        var ajax = new XMLHttpRequest();

        ajax.addEventListener("load", function(event) {
            completeHandler($aFileElement, event, aOnCompleteFunc)
        }, false);
        ajax.open('POST', handler_file);
        ajax.send(lFormData);
    }

    function _constructor()
    {
        //params = $.extend(params, aOptions);

        $aContainerForUploaded.on('click', '.' + class_id + '_delete', function() {
            deleteElement($(this));
        });


        $(input_field).on('change', function() {
            uploadFile($(input_field));
        });

        //self.deleteElement  = deleteElement;
        self.uploadFile     = uploadFile;
        self.clearContainer = clearContainer;

        $aContainerForUploaded.on('click', '.'+marker_remove_photo, function() {
            var lElement = $(this).parent();
            $('#' + lElement.data('file-id')).addClass('form_field').val(lElement.data('file-id'));
        });

        buildElements($aContainerForExist.find('div'));

        return self;
    }

    return _constructor();
};