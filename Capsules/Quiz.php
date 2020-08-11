<?php session_start();
if(!isset($_SESSION['pseudo'])){
  header('Location: ../index.php');
  exit();
}
?>

<!DOCTYPE html>

<html>

  <head>

      <title> Quiz | Pause Cocoon </title>
      <link rel="stylesheet" type="text/css" href="../Ressources_css/capsules.css">
      <link rel="stylesheet" type="text/css" href="../Ressources_css/quiz.css">
      <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
      <script type="text/javascript" src="../Ressources_js/capsules.js"> </script>

      <?php include'../menunavigationPerso.php';?>

    <center>

      <div id="contenu_droite">
        <h2> Quiz </h2>
        <div class="trait"> </div>

        <?php include '../includes/database.php';
          $req = $bd->prepare("SELECT score FROM users where pseudo = :pseudo");
          $req ->bindValue(':pseudo',$_SESSION["pseudo"]);
          $req->execute();
          $res = $req->fetch(PDO::FETCH_ASSOC);
          $score = $res['score'];

          include "Quiz/databasequiz.php";?>

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
          <a href="Quiz/quiz-question.php?n=1" class="start"> Commencer le quiz </a>
          <div class="choix">
            <div class="lecon_prece">
              <a href="Resume.php">  <b> < </b> Leçon précédente </a>
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
