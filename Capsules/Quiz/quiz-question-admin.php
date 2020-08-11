<?php session_start();
if(!isset($_SESSION['pseudo'])){
  header('Location: ../../index.php');
  exit();
}
if ($_SESSION['pseudo'] != 'admin') {
  header('Location: quiz-question.php');
  exit();
}
include "databasequiz.php";?>

<!DOCTYPE html>

<html>

  <head>

      <title> Quiz | Pause Cocoon </title>
      <!-- lien importation de style css-->
      <link rel="stylesheet" type="text/css" href="../../Ressources_css/capsules.css">
      <link rel="stylesheet" type="text/css" href="../../Ressources_css/menunavigation.css">
      <link rel="stylesheet" type="text/css" href="../../Ressources_css/quiz.css">
      <!-- lien importation de font-->
      <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext" rel="stylesheet">

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">

      <!-- lien importation de fichier js-->
      <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
      <script type="text/javascript" src="../../Ressources_js/capsules.js"> </script>

      <body>

      <div class="nav-style">
        <h2 class="logo"> Pause Cocoon </h2>
        <input id="check" type="checkbox">
        <label for="check" class="show-menutbn">
          <i class="fas fa-ellipsis-h"></i>
        </label>
        <ul class = "menu">
          <a href="../../accueilPerso.php"> <i class="fas fa-home"></i> Accueil </a>
          <a href="../../profil.php"> <i class="fas fa-user"></i> Mon profil </a>
          <a href="../../annuaire.php">  Annuaire </a>
          <a href="../../deconnexion.php"> <i class="fas fa-power-off"></i> Déconnexion </a>
          <label class="hide-menutbn" for="check">
            <i class="fas fa-times"></i>
          </label>
        </ul>
      </div>



      <div class="menu_vertical">
      <div id="titre_sidebar">
      <img src="../../images/lesfilles.jpg">

      <h2> Quiz </h2>
      </div>

      <div class="contenu_sidebar">
      <div id="titreMod_sidebar">
        <p> <i class="fas fa-angle-down"> </i> Histoire et valeurs de Pause Cocoon </p>
      </div>

      <div class="box">
         <div class="cell"> <a href="../A_l_origine.php"> <i class="fas fa-bars"> </i> A l'origine </a> </div>
        <div class="cell"> <a href="../Qui_sont_les_familles_cocoon.php"> <i class="fas fa-bars"> </i> Qui sont les familles Cocoons?</a> </div>
        <div class="cell"> <a href="../Nos_savoir_faire.php"> <i class="fas fa-bars"> </i> Nos savoir-faire </a> </div>
        <div class="cell"> <a href="../Charte_pause_cocoon.php"> <i class="fas fa-bars"> </i> Charte de Pause Cocoon </a> </div>
        <div class="cell"> <a href="../Atelier_exceptionnel.php"> <i class="fas fa-bars"> </i> Qu'est-ce qu\'un atelier exceptionnel chez Pause Cocoon </a> </div>
        <div class="cell"> <a href="../Transmettre.php"> <i class="fas fa-bars"> </i> Transmettre avec passion, joie ou sérénité </a> </div>
        <div class="cell"> <a href="../Votre_personnalite.php"> <i class="fas fa-bars"> </i> Votre personnalité et vos centres d\'intérêts </a> </div>
        <div class="cell"> <a href="../Centres_interets_enfants.php"> <i class="fas fa-bars"> </i> Les centres d'intérêts des enfants </a> </div>
        <div class="cell"> <a href="../Resume.php"> <i class="fas fa-bars"> </i> Résume </a> </div>
        <div class="cell"> <a href="../Quiz.php"> <i class="far fa-question-circle"> </i> Quiz </a> </div>


        </div>
      </div>
      </div>

      <div class="btn"> <i class="fas fa-bars"> </i> </div>
    <center>

      <div id="contenu_droite">
        <h2> Quiz </h2>
        <div class="trait"> </div>

        <?php include '../../includes/database.php';
          $req = $bd->prepare("SELECT score FROM users where pseudo = :pseudo");
          $req ->bindValue(':pseudo',$_SESSION["pseudo"]);
          $req->execute();
          $res = $req->fetch(PDO::FETCH_ASSOC);
          $score = $res['score'];

          include "databasequiz.php";?>

          <?php
          $reqtotal = $bd->prepare("SELECT * FROM questions");
          $reqtotal-> execute();
          $totalquestion = $reqtotal->rowCount();
        ?>

        <div class="tabScore">
          <h3> Score </h3>
          <p> <?php echo $score ?></p>
        </div>

        <div id="container">
          <h2> Quiz Faire Connaissance </h2>
          <ul>
            <li> <strong> Nombre de questions : <?php echo $totalquestion; ?> </strong> </li>
            <li> <strong> Type : Choix Multiples </strong> </li>
          </ul>
          <a href="quiz-question.php?n=1" class="start"> Commencer le quiz </a>
          <a href="ajouter_quiz.php" class="start"> Ajouter question </a>
          <div class="choix">
            <div class="lecon_prece">
              <a href="../Resume.php">  <b> < </b> Leçon précédente </a>
            </div>
          </div>
        </div>
      </div>

    </center>

    <div class="haut">
     <i class="fas fa-arrow-up"></i>
    </div>

  </div>
  </body>
</html>
