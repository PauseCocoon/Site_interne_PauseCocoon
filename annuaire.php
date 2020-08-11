<?php session_start();
if(!isset($_SESSION['pseudo'])){
  header('Location: index.php');
  exit();
}?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Annuaire | Pause Cocoon</title>

    <!-- lien de la fiche de style css -->
    <link rel="stylesheet" type="text/css" href="Ressources_css/annuaire.css">
    <link rel="stylesheet" type="text/css" href="Ressources_css/menunavigation.css">
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
        <a href="profil.php"> <i class="fas fa-user"></i> Mon profil </a>
        <a href="annuaire.php">  Annuaire </a>
        <a href="deconnexion.php"> <i class="fas fa-power-off"></i> Déconnexion </a>
        <label class="hide-menutbn" for="check">
          <i class="fas fa-times"></i>
        </label>
      </ul>
    </div>

    <center>

    <h2> Annuaire </h2>
    <div class="box">
      <div class="cell"> <a href="#" >
        <img src="images/stagevacance.png">
        <div class="trait"> </div>
        <h4> <p> Annuaire Pause Cocoon </p> </h4>
      </a>
      </div>

      <div class="cell"> <a href="#" >
        <img src="images/stagevacance.png">
        <div class="trait"> </div>
        <h4> <p> Contacts Utiles </p> </h4>
      </a>
      </div>

      </div>
    </center>
  </body>
</html>
