<?php

include "init.php";
include $template."header.php";
?>


<h2>Bienvenue Administrateur</h2>
<form>
    <input type="text" name="username" placeholder="username" autocomplete="off"/>
    <i class="fa fa-user icons" aria-hidden="true"></i>
    <input type="password" name="password" placeholder="******" autocomplete="off"/>
    <i class="fa fa-key icons" aria-hidden="true"></i>
    <input type="submit" value="connexion"/>
</form>

<?php
include $template."footer.php";
?>
