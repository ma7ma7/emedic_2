<?php 
    session_start();

    if (isset($_SESSION['Username'])) {
        if ($_SESSION['GroupID'] == 1) {
            header('Location: authentication/pat_auth.php');
        }else{
            header('Location: authentication/doc_auth.php');
        }
    }

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

        $stm = $con->prepare('SELECT ID,Email,Password,GroupID,Nom FROM users WHERE Email = ? AND Password = ? AND GroupID > 0');

        $stm->execute(
            array(
                $user_auth,
                $hash_pass_auth
            )
        );

        $count = $stm->rowCount();
        $row = $stm->fetch();
        $username = $row['Nom'];
        $groupID = $row['GroupID'];
        $userID = $row['ID'];

        if ($count > 0) {

            $_SESSION['Username'] = $username;
            $_SESSION['GroupID'] = $groupID;
            $_SESSION['userID'] = $userID;

            if ($_SESSION['GroupID'] == 1) {   
                header('Location: authentication/pat_auth.php');
                exit();
            } else {  
                header('Location: authentication/doc_auth.php');
                exit();
            }
        }
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