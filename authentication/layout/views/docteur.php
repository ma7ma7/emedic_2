<div class="left-side">
    <div id="avatar">
        <img src="<?= $imgs . 'doctor-single.jpg';?>" alt="avatar"/>
        <div class="profile-pic"><i class="fa fa-camera" aria-hidden="true"></i></div>
        <h3>Mr.Nom Prenom</h3>
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