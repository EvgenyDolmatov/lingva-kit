/**
 * Lingva Main Javascript File
 */
"use strict";

let $ = jQuery.noConflict();

/**
 * Lingva Object
 */
window.Lingva = {};

(function ($) {

    Lingva.$window = $(window);
    Lingva.$body = $(document.body);

    Lingva.initMediaFile = (function () {
        let uploadForm = $('#form-upload');
        let inputYoutube = $('input[name="youtube"]');
        let $button;
        let button;
        let $mediaLibrary = $('#media-library');

        function setContentByFile(file) {
            let id = file.id,
                title = file.title,
                alt = file.alt,
                path = '/uploads/' + file.path + '/' + file.filename,
                type = file.type,
                before_content = '<div class="col-4"><div class="file-wrap exists-file mt-2 mb-2" data-type="'+ type +'">',
                after_content = '</div></div>',
                content;

            switch (type) {
                case 'image':
                    content =
                        '<img class="file" src="'+ path +'" style="width: 100%" alt="'+ alt +'" data-id="'+ id +'" data-title="'+ title +'">' +
                        '<h6 class="text-center">'+ title +'</h6>';
                    break;
                case 'audio':
                    content =
                        '<div class="play-pause"></div>' +
                        '<audio class="file" src="'+ path +'" data-id="'+ id +'" data-title="'+ title +'"></audio>' +
                        '<h6 class="text-center">'+ title +'</h6>';
                    break;
                case 'video':
                    content =
                        '<video class="file" src="'+ path +'" width="100%" data-id="'+ id +'" data-title="'+ title +'"></video>' +
                        '<h6 class="text-center">'+ title +'</h6>';
                    break;
                case 'file':
                    content =
                        '<span class="file" data-id="'+ id +'" data-title="'+ title +'"></span>' +
                        '<h6 class="text-center">'+ title +'</h6>';
                    break;
            }
            return before_content + content + after_content;
        }

        function getGalleryByType(files) {
            $.each(files, function (key, file){
                let content = setContentByFile(file);
                $mediaLibrary.append(content);
            });
        }

        function getFiles($button) {

            let $file_type = $button.attr('data-type');
            let $file_var = $button.attr('data-var');
            let url = window.location.origin + '/ajax/files/' + $file_type;

            button = $('button[data-var="' + $file_var +'"]');
            $mediaLibrary.empty();

            $button.on('click', function (e) {
                e.preventDefault();

                // Получаем галерею по типу файла
                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'json',
                    success: function (res){
                        console.log(res);
                        getGalleryByType(res.files);
                    }
                });
            });
        }

        return function () {
            $button = $('.btn-attach');
            $button.on('click', getFiles($button));
        }
    })();

    Lingva.initMediaFile();
})(jQuery);

