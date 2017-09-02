
(function ($) {
    $('.mfp-bg').css({'visibility':'hidden','opacity':0});
    $('.mfp-wrap').css({'visibility':'hidden','opacity':0});

    $('a.gallery_button').on('click',  function(e){
      var this_ = this;
        e.preventDefault();
        // this_.attr('disabled', 'disabled');//выключить повторное нажатие

        var id = $(this).data('id');


         $.ajax({
            type: "POST",
            url : 'getgallery',
            data: {
                id: id
                // _frontendCSRF: tag
            },
            success: function(msg)
            {
                if(msg != 'no')
                {
                    $('#modal_gallery #title').html(msg.title);
                    $('#modal_gallery .field-item.even p:first-child').html(msg.text);
                    $('#modal_gallery .field-item.even p:last-child').html('last child syka ' + msg.text);
                    $('#modal_gallery #gallery_category').html(msg.category);
                }

            }
        })
            .done(function(msg){
                if(msg != 'no')
                {
                    // console.log(4);
                    // var result = "<div class='bg-success'>mgs.title</div>"
                    // field.html(result);
                }
            })
            .fail(function(){
                console.log('fail');
            })
            .always(function(){
                // this_.removeAttr('disabled'); //включить кнопку
            });

        $('.mfp-bg').css({'visibility':'visible','opacity':1});
        $('.mfp-wrap').css({'visibility':'visible','opacity':1});
    });
$('button[title=CloseEsc]').on('click',function () {
    $('.mfp-bg').css({'visibility':'hidden','opacity':0});
    $('.mfp-wrap').css({'visibility':'hidden','opacity':0});
});

})(jQuery);