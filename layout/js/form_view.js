$(document).ready(function(){
    // on close icon
    $(document).on('click', '.close-form', function(){
        $('#reception').load('layout/views/dropDown.php');
    });

    // On focus 
    $(document).on('focus','[placeholder]',function(){
        $(this).attr('data-text', $(this).attr('placeholder'));
        $(this).attr('placeholder', '');
        $(this).css('box-shadow','0 0 20px rgba(0, 255, 0, 1)');
    }).on('blur','[placeholder]',function(){
        $(this).attr('placeholder', $(this).attr('data-text'));
        if (!$(this).val()) {
            $(this).css('box-shadow','0 0 20px rgba(255, 0, 0, 1)');     
        }
    });


    $(document).on('submit' ,'.myform' ,function(e) {
        if ($.trim($("#sexe").val()) === "") {
            e.preventDefault();
            $('#sexe').css('box-shadow','0 0 30px rgba(255, 0, 0, 1)');
        }

        if (!$("#nom").val()) {
            e.preventDefault();
            $('[placeholder="Votre Nom *"]').css('box-shadow','0 0 30px rgba(255, 0, 0, 1)');
        }

        if (!$("#prenom").val()) {
            e.preventDefault();
            $('[placeholder="Votre Prenom"]').css('box-shadow','0 0 30px rgba(255, 0, 0, 1)');
        }

        console.log();

        if (!$("[name='email']").val()) {
            e.preventDefault();
            $('[ placeholder="Votre adresse E-mail"]').css('box-shadow','0 0 30px rgba(255, 0, 0, 1)');
        }

        if (!$("#birthday").val()) {
            e.preventDefault();
            $('[placeholder="Date de naissance"]').css('box-shadow','0 0 30px rgba(255, 0, 0, 1)');
        }


        if (!$("#confirm_password").val()) {
            e.preventDefault();
            $('[placeholder="Confirmer votre Mot de passe"]').css('box-shadow','0 0 30px rgba(255, 0, 0, 1)');
        }

        if (!$('input[type=checkbox]').prop('checked')) {
            e.preventDefault();
            alert("checked");
        }


    });

});