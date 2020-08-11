<?php
if (isset($_POST["creer"])) { //Si le formulaire a été soumis
  $titreLecon = $_POST["titrelecon"];
  for ($i=1; $i <= $nbpar ; $i++) {
    $parag.$i = $_POST["parag'.$i'"];
  }
  for ($i=1; $i <= $nbpar ; $i++) {
    $image.$i = $_POST["image'.$i'"];
  }
}
?>

<!DOCTYPE html>

<html>

  <head>

      <title> A l'origine | Pause Cocoon </title>
      <link rel="stylesheet" type="text/css" href="Ressources_css/capsules.css">
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"/> </script>
      <script type="text/javascript" src="Ressources_js/capsules.js"> </script>
      <?php include'menunavigationPerso.php';?>

      <div id="progress"></div>
      <h2> <?php echo $titreLecon; ?> </h2>
      </div>

      <div class="contenu_sidebar">
      <div id="titreMod_sidebar">
        <p> <i class="fas fa-angle-down"> </i> Histoire et valeurs de Pause Cocoon </p>
      </div>

      <div class="box">
        <div class="cell"> <a href=""> <i class="fas fa-bars"> </i> A l\'origine </a> </div>
        <div class="cell"> <a href="Qui_sont_les_familles_cocoon.php"> <i class="fas fa-bars"> </i> Qui sont les familles Cocoons?</a> </div>
        <div class="cell"> <a href="Nos_savoir_faire.php"> <i class="fas fa-bars"> </i> Nos savoir-faire </a> </div>
        <div class="cell"> <a href="Charte_pause_cocoon.php"> <i class="fas fa-bars"> </i> Charte de Pause Cocoon </a> </div>
        <div class="cell"> <a href="Atelier_exceptionnel.php"> <i class="fas fa-bars"> </i> Qu\'est-ce qu\'un atelier exceptionnel chez Pause Cocoon </a> </div>
        <div class="cell"> <a href="Transmettre.php"> <i class="fas fa-bars"> </i> Transmettre avec passion, joie ou sérénité </a> </div>
        <div class="cell"> <a href="Votre_personnalite.php"> <i class="fas fa-bars"> </i> Votre personnalité et vos centres d\'intérêts </a> </div>
        <div class="cell"> <a href="Centres_interets_enfants.php"> <i class="fas fa-bars"> </i> Les centres d\'intérêts des enfants </a> </div>
        <div class="cell"> <a href="Resume.php"> <i class="fas fa-bars"> </i> Résume </a> </div>
        <div class="cell"> <a href="Quiz.php"> <i class="far fa-question-circle"> </i> Quiz </a> </div>

        </div>
      </div>
      </div>

      <div class="btn"> <i class="fas fa-bars"> </i> </div>
    <center>

    <div id="contenu_droite">
      <p class="numlecon"> Leçon 1 sur 10 </p>
      <h2> <?php echo $titreLecon; ?> </h2>
      <div class="trait"> </div>

      <div class="contenu_page">
        <p> <?php echo $parag; ?></p>
        <video src="../video/Accueil.mp4" controls>
          La vidéo ne peut pas être lu
        </video>

        <img src="<?php echo $image; ?>">
        <p>  <?php echo $parag2; ?></p>
        <div class="choix">
          <div class="lecon_suiv">
            <a href="Qui_sont_les_familles_cocoon.php"> Leçon suivante  <b> > </b>  </a>
          </div>
        </div>
      </div>

    </div>

  </center>


  </body>
</html>
