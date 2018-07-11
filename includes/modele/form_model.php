<?php
    include "connectDB.php";
    if( isset($_POST['nom']) && isset($_POST['prenom']) ){

        if (isset($_POST['email'])) {
            if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email'])){

                $hashedPass = sha1($_POST['password']);

                if($_POST['password'] === $_POST['confirm_password']){

                    // echo $_POST['nom'] . '</br>';
                    // echo $_POST['prenom']. '</br>';
                    // echo $hashedPass. '</br>';
                    // echo $_POST['email']. '</br>';
                    // echo $_POST['birthday']. '</br>';
                    // echo $_POST['sexe']. '</br>';
                    // echo $_POST['groupID'];

                    $stm = $con->prepare('INSERT INTO users(Nom,Prenom,Password, Email, DateNaissance, Sexe, GroupID) VALUES (:nom, :prenom, :pass, :email, :dateN, :sexe, :grp) ');
                    $stm->execute(array(
                        "nom" => $_POST['nom'],
                        "prenom"  => $_POST['prenom'],
                        "pass"  => $hashedPass,
                        "email" => $_POST['email'],
                        "dateN" => $_POST['birthday'],
                        "sexe"  => $_POST['sexe'],
                        "grp"  => $_POST['groupID']
                    ));

                    echo "<h2>Inscription réussie : " . $_POST['nom'] . " - Connectez-Vous - </h2>";
                    echo "<script>setTimeout(\"location.href = '../../index.php';\",1500);</script>";
                }else{
                    echo "<h2>Mot de pass incorrect</h2>";
                    echo "<script>setTimeout(\"location.href = '../../index.php';\",1500);</script>";
                }
  
             }
        }else {
            echo "<h1>Verifier les coordonnées avant de le transmettez</h1>";
            echo "<script>setTimeout(\"location.href = '../../index.php';\",1500);</script>";
        }

    }