$(document).ready(function(){

    // the avatar 
    $("#avatar").mouseenter(function(){
        $('.profile-pic').fadeIn()
    });
    $("#avatar").mouseleave(function(){
        $('.profile-pic').fadeOut();
    });

    // the search feild
    $('div.search-feild .fa-search').on('click', function(){
        $(this).css({
            'color':'#000',
            'right': '43px',
            'top': '0px',
        });
        $('div.search-feild input[type="search"]').show();
        $('div.search-feild .fa-times').show();
        $('div.search-feild input[type="search"]').css({'direction':'ltr'});
    });

    $('div.search-feild .fa-times').on('click', function(e){
        $('div.search-feild input[type="search"]').hide();
        $('div.search-feild .fa-search').css({
            'color':'#fff',
            'right': '0px',
            'top': '13px',
        });
        $(this).hide();
    });

});