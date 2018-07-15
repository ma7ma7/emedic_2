<?php
    session_start();
?>

<?php
    include "init.php";
    include $includes . "header.php";
    include $includes . "navbar.php";

?>
<?php
    if(isset($_SESSION['Username'])){
        if ($_SESSION['GroupID'] != 1) {
?>
        <div class="left-side">
            <div id="avatar">
                <img src="<?= $imgs . 'doctor-single.jpg';?>" alt="avatar"/>
                <div class="profile-pic"><i class="fa fa-camera" aria-hidden="true"></i></div>
                <h3>Dr. <?=$_SESSION['Username'] . " " . $_SESSION['Prenom']?></h3>
            </div>
            <p>Abonnements</p>
            <p>Rendez-vous</p>
            <p>Commentaires</p>
            <p>Mes publications</p>
            <div>
                Calendrier
            </div>
            <div class="upload-image-overlay">
                <div class="render">
                <i class="fa fa-times-circle close-form" aria-hidden="true"></i>
                    <h3>Ajouter une photo de profil</h3>
                    <form>
                        <input type="file" name="profile" accept="image/*"/>
                        <input type="submit" value="Changer"/>
                    </form>
                </div>
            </div>
        </div>
<?php
        }
    }else{
        header('Location : ../index.php');
    }
?>

<div class="content">
    <form method="post" action="<?= $_SERVER['PHP_SELF'];?>">
        <input type="date" id="myDate" name="myDate"/>
        <input type="submit" value="oke">
    </form>

    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $stm = $con->prepare('SELECT * FROM `rendez-vous` WHERE Docteur_Username = :doc AND Date_rdv = :date_r ORDER BY Time_rdv');
        $stm->execute(array(
            "doc" => $_SESSION['Username'] . " " . $_SESSION['Prenom'],
            "date_r" => $_POST['myDate']
        ));
    ?>
        <table id="table">
            <caption>List des rendez vous pour : <?= "<h5 style='color:#f00; display:inline-block'>".$_POST['myDate']."</h5>" ?></caption>
            <thead>
                <th>Nom Patient</th>
                <th>Date</th>
                <th>Heure</th>
            </thead>
            <tbody>
    <?php
        while($row = $stm->fetch()){
            echo "<tr>";
            echo "<td>" . $row[3] . "</td>";
            echo "<td>" . $row[1] . "</td>";
            echo "<td>" . $row[2] . "</td>";
            echo "</tr>";
        }
    }
?>
        </tbody>
     </table>
</div>

<?php
    include $includes . "footer.php";
?>