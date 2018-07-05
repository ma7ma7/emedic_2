$(document).ready(function(){


    $("form").animate({
        width: '480px'
    },1000);

    $("h2").animate({
        width: '480px'
    },1000);

    $('[placeholder]').on('focus', function(){
        $(this).attr('data-text', $(this).attr("placeholder"));
        $(this).attr('placeholder', '');
        $(this).css('box-shadow','0 0 20px rgba(20, 160, 182, .7)');
    }).on('blur', function(){
        $(this).attr('placeholder', $(this).attr('data-text'));
        if (!$(this).val()) {
            $(this).css('box-shadow','0 0 20px rgba(255, 0, 0, 1)');     
        }
    });

    $("[type='submit']").on('click', function(){
        alert('seul un administrateur peut le connecter ou le déconnecter');
    })
})