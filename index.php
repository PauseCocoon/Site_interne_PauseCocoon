<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pause Cocoon | Formation</title>

    <!-- lien de la fiche de style css -->
    <link rel="stylesheet" type="text/css" href="Ressources_css/accueil.css">
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
        <a href="index.php"> Accueil </a>
        <a href="inscription.php"> Inscription </a>
        <a href="connexion.php"> Connexion</a>
        <label class="hide-menutbn" for="check">
          <i class="fas fa-times"></i>
        </label>
      </ul>
    </div>

    <div class="content">
    <center>
      <p class="presentation"> Bienvenue sur la plateforme de formation de Pause Cocoon <br>
      dédiée à l'apprentissage de l'organisation et de l'animation de nos ateliers</p>
      <div class="boutonIC">
        <div id="btnSinscrire"> <a href="inscription.php" title="S'inscrire"> S'inscrire </a></div>
        <div id="btnSeconnecter"> <a href="connexion.php" title="Se Connecter"> Se Connecter </a></div>
      </div>

    </center>
    </div>
    <!--<footer>
      <div class="contenu_footer">
          <div class="social-media">
            <a href="#"> <i class="fab fa-facebook-f"> </i></a>
            <a href="#"> <i class="fab fa-instagram"> </i></a>
            <a href="#"> <i class="fab fa-twitter"> </i></a>
          </div>
        <p> © Pause Cocoon - Site de formation </p>
    </div>
  </footer>-->
  </body>

</html>
