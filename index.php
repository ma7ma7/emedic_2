<?php 

    include "init.php";
    // the header
    include $template . "header.php";

    // the navbar
    include $template . "navbar.php";
?>
    <div class="container">
        <div class="connection">
            <h4 class="text-center">Se connecter</h4> 
            <form method="POST" action="">
                <label for="email">Email : </label>
                <input type="email" id="email" name="conn_email" placeholder="Email ou nom d'itulisateur" autocomplete="off"/></br>
                <label for="password">Mot de passe : </label>
                <input type="password" id="password" name="conn_password" placeholder="Mot de passe"  autocomplete="off"/> </br>
                <input type="submit" value="validez"/>
                <p class="text-center">Ou crée un compte ?</p>
            </form>   
        </div>
    </div>

    <div id="reception">
        
    </div>


<?php
    // The Footer
    include $template . "footer.php";
?>

   
