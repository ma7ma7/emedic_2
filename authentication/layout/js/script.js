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

    // start the avatar change 
    $(".left-side .profile-pic i").on('click',function(){
        $('.left-side div.upload-image-overlay').show()
    }); 

    $(".left-side div.upload-image-overlay .close-form").on('click',function(){
        $('.left-side div.upload-image-overlay').hide()
    }); 

    $(".left-side div.upload-image-overlay").on('click',function(){
        $(this).hide();
    }); 

    $(".left-side div.upload-image-overlay .render").on('click',function(event){
        event.stopPropagation();
    }); 

    $('#calender').on('click',function(){
       $('div.content form').show() 
     });
    $('#calender-icon').on('click',function(){
       $('div.content form').show() 
     });
});