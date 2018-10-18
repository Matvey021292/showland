function Auto(str) {
    var replace = ["й", "ц", "у", "к", "е", "н", "г", "ш", "щ", "з", "х", "ъ", "ф", "ы", "в", "а", "п", "р", "о", "л", "д", "ж", "э", "я", "ч", "с", "м", "и", "т", "ь", "б", "ю"];
    var search = ["q", "w", "e", "r", "t", "y", "u", "i", "o", "p", "\\[", "\\]", "a", "s", "d", "f", "g", "h", "j", "k", "l", ";", "'", "z", "x", "c", "v", "b", "n", "m", ",", "\\."];

    for (var i = 0; i < replace.length; i++) {
        var reg = new RegExp(replace[i], 'mig');
        str = str.replace(reg, function (a) {
            return a == a.toLowerCase() ? search[i] : search[i].toUpperCase();
        })
    }
    return str;
}
$('input').keyup(function (event) {
    var elements = $('.link-color');
    var val = Auto($(this).val());
    $(elements).each(function (i) {
        $(elements[i]).parents('.row>.item-col').hide().addClass('hide-item');
        if ($(elements[i]).text().toLowerCase().includes(val.replace(/\s/g, '').toLowerCase())) {
            console.log($(elements[i]).text().toLowerCase());
            console.log(val.replace(/\s/g, '').toLowerCase());
            $(elements[i]).parents('.row>.item-col').show().removeClass('hide-item');
            $('.alert').hide().css('opacity', '0');
        } else {
            if ($('.hide-item').length == $('.row>.item-col').length) {
                $('.alert').show().css('opacity', '1');

            }

            var count = $('.items-conteiner');
            $(count).each(function(i){
                if($(count[i]).find('.hide-item').length == $(count[i]).find('.row>.item-col').length){
                    $(count[i]).css('opacity','0');
                }else{
                    $(count[i]).css('opacity','1');
                }
            })


        }
    })
});

$(document).ready(function () {
    $('.wrap-carousel').owlCarousel({
        items: 1, nav: false
    })
    $('.show-info').click(function () {

        var item = $(this).parents('.row>.item-col'),
            location = window.location.origin;
        $('.modal-title').text($(item).find('.link-color').text())
        $('iframe').attr('src', location + '/' + $(item).find('.link-color').attr('href'))

    })
    $('.btn-desc-resize').click(function () {
        $('iframe').css({
            'width': $(this).attr('data-width'),
            'min-height': $(this).attr('data-height'),

        })
    })
    $('.close').click(function () {
        $('iframe').attr('src', '');
    })
})

$(document).ready(function () {
    $('.nav-tabs-title').each(function (i) {
        $('.sidebar .nav').append('<li class="nav-item active"><a class="nav-link" href="#' + $($('.nav-tabs-title')[i]).attr('id') + '">' + $($('.nav-tabs-title')[i]).text() + '</a></li>')
    });
})
$(document).ready(function() {
    $("a.nav-link").click(function (e) {
        e.preventDefault();
        var elementClick = $(this).attr("href");
        if(elementClick){
            $('.items-conteiner').css('opacity','1');
            $('.items-conteiner').find('.hide-item').show().removeClass('hide-item');
            $('input').val('');
            $('.alert-danger').hide();
        }
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination-$($('.card-title')[0]).outerHeight()*2}, 800);


    });
});


