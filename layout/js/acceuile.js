$(document).ready(function(){

    $('#creat').click(function(){
        $('.connection').slideUp(1000);
        $('#reception').load('layout/views/dropDown.php');
    });

});