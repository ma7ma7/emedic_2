<div class="patient myform">
    <form action="includes/modele/form_model.php" method="post">
      <input type="text" name="nom" id="nom" placeholder="Votre Nom *"/></br>

      <input type="text" name="prenom" id="prenom" placeholder="Votre Prenom"/></br>

      <input type="text" name="birthday" id="birthday" placeholder="Date de naissance" onfocus="(this.type='date')"/></br>

      <select name="sexe" id="sexe" placeholder>
        <option value="" disabled selected>Votre Sexe</option>
        <option value="masculin">Masculin</option>
        <option value="Feminin">Feminin</option>
      </select></br>

      <input type="text" name="email" id="email" placeholder="Votre adresse E-mail"/></br>

      <input type="password" name="password" id="password" placeholder="Votre Mot de passe"/></br>

      <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirmer votre Mot de passe"/></br>

      <input type="hidden" name="groupID" value="3"/>

      <p>
        <input type="checkbox" name="terms" value="terms"/>
        <a href="#">J'ai Lue et j'accept les conditions ...</a>
      </p>

      <input type="submit" value="Valider"/></br>

       <i class="fa fa-times-circle close-form" aria-hidden="true"></i>
    </form>
  </div>
