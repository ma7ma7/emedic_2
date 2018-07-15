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
        if ($_SESSION['GroupID'] == 1) {
?>
        <div class="left-side">
            <div id="avatar">
                <img src="<?= $imgs . 'doctor-single.jpg';?>" alt="avatar"/>
                <div class="profile-pic"><i class="fa fa-camera" aria-hidden="true"></i></div>
                <h3><?=$_SESSION['Username']?></h3>
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
            <form>
                <input id="autocomplete"/>
                <input type="date" name="rdv"/>
                <select name="houre">
                    <optgroup label="Le matin">
                        <option value="09h00">09h00</option>
                        <option value="09h30">09h30</option>
                        <option value="10h00">10h00</option>
                        <option value="10h30">10h30</option>
                        <option value="11h00">11h00</option>
                        <option value="11h30">11h30</option>
                        <option value="12h00">12h00</option>
                        <option value="12h30">12h30</option>
                    </optgroup>
                    <optgroup label="L'après midi">
                        <option value="14h00">14h00</option>
                        <option value="14h30">14h30</option>
                        <option value="15h00">15h00</option>
                        <option value="15h30">15h30</option>
                        <option value="16h00">16h00</option>
                        <option value="16h30">16h30</option>
                        <option value="17h00">17h00</option>
                        <option value="17h30">17h30</option>
                        <option value="18h00">18h00</option>
                    </optgroup>
                </select>
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
    include $includes . "footer.php";
?>