$(document).ready(function(){
    // on close icon
    $(document).on('click', '.close-form', function(){
        $('#reception').load('layout/views/dropDown.php');
    });

    // On focus 
    $(document).on('focus','[placeholder]',function(){
        $(this).attr('data-text', $(this).attr('placeholder'));
        $(this).attr('placeholder', '');
        $(this).css('box-shadow','0 0 20px rgba(0, 255, 0, 1)')
    }).on('blur','[placeholder]',function(){
        $(this).attr('placeholder', $(this).attr('data-text'));
        if (!$(this).val()) {
            $(this).css('box-shadow','0 0 20px rgba(255, 0, 0, 1)');   
        }
    });
});