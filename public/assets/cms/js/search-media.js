(function ($) {
    "use strict"

    $(document).on('keyup', 'input#search', function (){
        let searchResult = $(this).val().toLowerCase();
        let file = $('.file');

        file.parent().parent().hide();
        file.each(function (){
            let fileTitle = $(this).attr('data-title').toLowerCase();
            if (fileTitle.indexOf(searchResult) !== -1) {
                $(this).parent().parent().show();
            }
        });
    });

    $('#modal-files').mouseup(function (e){
        let modal = $(".modal-dialog");
        if (!modal.is(e.target) && modal.has(e.target).length === 0) {
            $('input#search').val('');
        }
    });

})(jQuery)
