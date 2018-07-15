<?php
    session_start();
?>

<?php
    include "init.php";
    include $includes . "header.php";
    include $includes . "navbar.php";

?>

<?php
    // Connexion infos
    if(isset($_SESSION['Username'])){
        if ($_SESSION['GroupID'] == 1) {;
?>
        <div class="left-side">
            <div id="avatar">
                <img src="<?= $imgs . 'patient.jpg';?>" alt="avatar"/>
                <div class="profile-pic"><i class="fa fa-camera" aria-hidden="true"></i></div>
                <h3><?=$_SESSION['Username'] . " " . $_SESSION['Prenom']?></h3>
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
        <div class="content">
            <form method="post" action="<?= $_SERVER['PHP_SELF'];?>">
                <input id="autocomplete" name="autocomplete"/>
                <input type="date" name="rdv"/>
                <select name="houre">
                    <optgroup label="Le matin">
                        <option value="09:00:00">09h00</option>
                        <option value="09:30:00">09h30</option>
                        <option value="10:00:00">10h00</option>
                        <option value="10:30:00">10h30</option>
                        <option value="11:00:00">11h00</option>
                        <option value="11:30:00">11h30</option>
                        <option value="12:00:00">12h00</option>
                        <option value="12:30:00">12h30</option>
                    </optgroup>
                    <optgroup label="L'après midi">
                        <option value="14:00:00">14h00</option>
                        <option value="14:30:00">14h30</option>
                        <option value="15:00:00">15h00</option>
                        <option value="15:30:00">15h30</option>
                        <option value="16:00:00">16h00</option>
                        <option value="16:30:00">16h30</option>
                        <option value="17:00:00">17h00</option>
                        <option value="17:30:00">17h30</option>
                        <option value="18:00:00">18h00</option>
                    </optgroup>
                </select>
                <!-- <input type="text" id="myresult"/> -->
                <input type="submit" value="valider"/>
            </form>
        </div>
<?php
        }
    }else{
        header('Location : ../index.php');
    }
?>

<?php 
    // search query 
    $stm = $con->prepare("SELECT Username FROM users WHERE GroupID = 2");
    $stm->execute();

    $count = $stm->rowCount();
    $table_result = array();
    if ($count > 0) {
        while($row = $stm->fetch()){
            $table_result[] = $row['Username'];
        }
        // echo'<pre>';
        // print_r($table_result);
        // echo '</pre>';
    }
?>

<?php 
    // insert RDV on DB
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo $_POST['autocomplete'] . "</br>";
        echo $_POST['rdv'] . "</br>";
        echo $_POST['houre'] . "</br>";

        $stmt = $con->prepare("INSERT INTO `rendez-vous` VALUES(:docteur_username,:date_rdv, :time_rdv, :patient_username)");
        $stmt->execute(array(
            'docteur_username'  => $_POST['autocomplete'],
            'date_rdv'          => $_POST['rdv'],
            'time_rdv'          => $_POST['houre'],
            'patient_username'  => $_SESSION['Username'] . " " . $_SESSION['Prenom']
        ));

  
    }
?>

<?php
    include $includes . "footer.php";
?>