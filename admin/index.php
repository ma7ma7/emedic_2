<?php

include "init.php";
include $template."header.php";
?>

<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $username = $_POST['user'];
        $password = $_POST['pass'];
        $hashedPass = sha1($password);
        
        $stm = $con->prepare("SELECT Username,Password FROM emedic.users WHERE Username = ? AND Password = ? AND GroupID = 1 ");
        $stm->execute(array($username, $hashedPass));
        $count = $stm->rowCount();

        echo $count;    

        // if ($count > 0) {
        //     $_SESSION['Username'] = $username;
        //     header('Location: dashboard.php');
        //     exit();
        //  }
    }
?>

<h2>Bienvenue Administrateur</h2>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    <input type="text" name="user" placeholder="username" autocomplete="off"/>
    <i class="fa fa-user icons" aria-hidden="true"></i>
    <input type="password" name="pass" placeholder="******" autocomplete="off"/>
    <i class="fa fa-key icons" aria-hidden="true"></i>
    <input type="submit" value="connexion"/>
</form>



<?php
include $template."footer.php";
?>
