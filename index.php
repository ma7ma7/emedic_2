<?php 

    include "init.php";
    // the header
    include $template . "header.php";

    // the navbar
    include $template . "navbar.php";
?>

<?php 
// the authentication 
    if ($_SERVER['REQUEST_METHOD']=='POST') {

        $user_auth = $_POST['conn_email'];
        $pass_auth = $_POST['conn_password'];
        $hash_pass_auth = sha1($pass_auth);

        $stm = $con->prepare('SELECT Email,Password,GroupID FROM users WHERE Email = ? AND Password = ? AND GroupID > 0');

        $stm->execute(
            array(
                $user_auth,
                $hash_pass_auth
            )
        );

        // $count = $stm->rowCount();

        // if ($count > 0) {
        //     echo "Welcome : " . $user_auth;
        // }

        
    }
?>
    <div class="container">
        <div class="connection">
            <h4 class="text-center">Se connecter</h4> 
            <form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>">
                <label for="email">Email : </label>
                <input type="email" id="email" name="conn_email" placeholder="Email ou nom d'itulisateur" autocomplete="off"/></br>
                <label for="password">Mot de passe : </label>
                <input type="password" id="password" name="conn_password" placeholder="Mot de passe"  autocomplete="off"/> </br>
                <input type="submit" value="validez"/>
                <p class="text-center" id="creat">Ou crée un compte ?</p>
            </form>   
        </div>
    </div>

    <div class="container">
        <div id="reception">

        </div>
    </div>


<?php
    // The Footer
    include $template . "footer.php";
?>