<?php session_start();
if(!isset($_SESSION['pseudo'])){
  header('Location: accueil.php');
  exit();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pause Cocoon | Formation</title>

    <!-- lien de la fiche de style css -->
    <link rel="stylesheet" type="text/css" href="Ressources_css/menunavigation.css">
    <link rel="stylesheet" type="text/css" href="Ressources_css/profil.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">

  </head>


  <body>

    <div class="nav-style">
      <h2 class="logo"> Pause Cocoon </h2>
      <input id="check" type="checkbox">
      <label for="check" class="show-menutbn">
        <i class="fas fa-ellipsis-h"></i>
      </label>
      <ul class = "menu">
        <a href="accueilPerso.php"> <i class="fas fa-home"></i> Accueil </a>
        <a href=""> <i class="fas fa-user"></i> Mon profil </a>
        <a href="annuaire.php">  Annuaire </a>
        <a href="deconnexion.php"> <i class="fas fa-power-off"></i> Déconnexion </a>
        <label class="hide-menutbn" for="check">
          <i class="fas fa-times"></i>
        </label>
      </ul>
    </div>

    <?php include 'includes/database.php';
      $req = $bd->prepare("SELECT score, nom, prenom, mdp FROM users where pseudo = :pseudo");
      $req ->bindValue(':pseudo',$_SESSION["pseudo"]);
      $req->execute();
      $res = $req->fetch(PDO::FETCH_ASSOC);
      $score = $res['score'];
      $nom = $res['nom'];
      $prenom = $res['prenom'];
    ?>

    <center>
      <h2 class="monprofil"> Mon profil </h2>

      <div class="contenu">
        <div class="changeProfil">
          <p> Nom : <?php echo $nom; ?> </p>
          <p> Prénom : <?php echo $prenom ?></p>
          <p> Pseudo : <?php echo $_SESSION['pseudo']; ?></p>
          <div class="formChangeMdp">
            <form method="post">
              <p class="changeMdp"> Changer mon mot de passe :</p>
              <p> <label> Nouveau mot de passe : </label></br>
              <input type="password" name="newmdp" required></p>
              <p> <label> Confirmation nouveau mot de passe : </label></br>
              <input type="password" name="newmdpC" required></p>
              <p id="btnConfirmer"> <input class="btnC" type="submit" name="submit" value="Confirmer"> </p>
            </form>
          </div>
        </div>
      </div>

    </center>
  </body>
</html>


<?php
if (isset($_POST['submit'])){
  $newmdp = htmlspecialchars($_POST['newmdp']);
  $newmdpC = htmlspecialchars($_POST['newmdpC']);

  if (!empty($newmdp) && !empty($newmdpC)) {
    if ($newmdp == $newmdpC){
      $options = [
        'cost' => 12,
      ];

      $hashmdp = password_hash($newmdp, PASSWORD_BCRYPT, $options);
      include 'includes/database.php';
      $req = $bd-> prepare("UPDATE users SET mdp = :hashmdp WHERE pseudo = :pseudo");
      $req ->bindValue(':pseudo',$_SESSION["pseudo"]);
      $req ->bindValue(':hashmdp',$hashmdp);
      $req->execute();
      echo '<center> Changement réuissie vous pouvez vous connecter avec le nouveau mot de passe </center>';

    }
    else {
      echo "<center> Les mots de passes ne sont ne correspondent pas </center>";
    }
  }
}

?>
