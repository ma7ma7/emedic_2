$(document).ready(function(){
    $(document).on("click", '.pro', function(event) { 
        $('.shoose_one').slideToggle();
    });

    $(document).on("click", '.selected-one', function(event){
        $('.login-nav').slideUp(1000);
        var source = "control/" + $(this).attr('data-class') + ".php";
        $('#reception').load(source);
        console.log(source)
    });
});