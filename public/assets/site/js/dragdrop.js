$(document).ready(function (){
    const list_items = $('.list-item');
    const fields = $('.draggable-field');

    /* Shuffle the Answers */
    $(".source").each(function (){
        let parent = $(this)
        let divs = parent.children();
        while (divs.length) {
            parent.append(divs.splice(Math.floor(Math.random() * divs.length), 1)[0]);
        }
    });

    let draggedItem = null;

    list_items.each(function (){

        const item = $(this);

        item.on('dragstart', function (){
            draggedItem = item;
            setTimeout(function (){
                item.css({
                    'display':'none'
                });
            }, 0);
        });

        item.on('dragend', function (){
            setTimeout(function (){
                draggedItem.css({
                    'display':'block'
                });
                draggedItem = null;
            }, 0)
        });

        fields.each(function (){
            const field = $(this);

            field.on('dragover', function (e){
                e.preventDefault();
            });

            field.on('dragenter', function (e){
                e.preventDefault();
                $(this).css({
                    'backgroundColor':'#ffeeda',
                });
            });

            field.on('dragleave', function (e){
                e.preventDefault();
                $(this).css({
                    'backgroundColor':'#fffaf4',
                });
            });

            field.on('drop', function (){
                let old = $(this).find('.list-item').detach();
                $(this).closest('.form-group').find('.source').append(old);
                $(this).append(draggedItem);
                $(this).css({
                    'backgroundColor':'#ffeeda',
                });
                $(this).next('input').attr('value', draggedItem.attr('data-option'));
            });
        });
    });
});
