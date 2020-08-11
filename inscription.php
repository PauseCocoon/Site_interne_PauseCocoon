<?php include 'menunavigation.php';

if (isset($_POST['submit'])){
  $pseudo = htmlspecialchars($_POST['pseudo']);
  $nom = htmlspecialchars($_POST['nom']);
  $prenom = htmlspecialchars($_POST['prenom']);
  $email = htmlspecialchars($_POST['email']);
  $mdp= htmlspecialchars($_POST['mdp']);

  if (!empty($pseudo) && !empty($nom) && !empty($prenom) && !empty($email) && !empty($mdp) && !empty($_POST['mdp2'])) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
      include 'includes/database.php';
      $reqmail = $bd->prepare('SELECT * from users where email = ?');
      $reqmail->execute([$email]);
      $mailexist = $reqmail->fetch();
      if (!$mailexist) {
        $req = $bd->prepare('SELECT pseudo from users where pseudo = :pseudo');
        $req ->bindValue(':pseudo',$pseudo);
        $req->execute();
        $res = $req->fetch();
        if(!$res){
          if ($mdp == $_POST['mdp2']){
            $options = [
              'cost' => 12,
            ];

            $hashmdp = password_hash($mdp, PASSWORD_BCRYPT, $options);

            $req = $bd-> prepare("INSERT INTO users(pseudo,nom,prenom,email,mdp,score) VALUES (:pseudo,:nom,:prenom,:email,:mdp,100)");
            $req->execute(array(
              'pseudo' => $pseudo,
              'nom' => $nom,
              'prenom' => $prenom,
              'email' => $email,
              'mdp' => $hashmdp,
            ));
            $erreur = 'Inscription réussite vous pouvez vous connecter';
          }// fin if (mdp==mdp2)
          else {
            $erreur = "Les mots de passe ne correspondent pas";
          }
        }// fin if(!$res)
        else {
          $erreur = "Ce pseudo existe déjà";
        }
      }// fin if $mailexist
      else {
        $erreur = "Adresse mail déjà utilisée";
      }

    }
    else {
      $erreur = "Adresse mail invalide";
    }
  }
  else {
    $erreur = "Les champs doivent être tous remplis";
  }

}?>

<div class="inscriptionbox">
  <h1> Inscription </h1>
  <div class="formulaireboxInscription">
    <div class="coteG">
      <form method="post">
        <p> <label> Pseudo : </label></br>
          <input type="text" name="pseudo" required></p>
          <p> <label> Nom : </label></br>
            <input type="text" name="nom" required></p>
            <p> <label> Prénom :</label></br>
              <input type="text" name="prenom" required></p>
              <p> <label> Adresse mail :</label></br>
                <input type="text" name="email" required></p>
                <p> <label> Mot de passe :</label></br>
                  <input type="password" name="mdp" required></p>
                  <p> <label> Confirmer votre mot de passe :</label></br>
                    <input type="password" name="mdp2" required></p>
                    <?php if (isset($erreur)) {
                      echo'<p><font color="red">'. $erreur. '</font> </p>';
                    }?>
                    <p id="btn"> <input class="btnIns" type="submit" name="submit" value="Je m'inscris"> </p>
                  </form>

                </div>
                <div class="coteD">
                  <img src="images/PauseCocoon_logo.png" alt="logo">
                </div>

              </div>

            </div>
          </body>
          </html>
