<?php session_start();
if(!isset($_SESSION['pseudo'])){
  header('Location: ../../index.php');
  exit();
}
include "databasequiz.php";?>

<?php
if (isset($_POST['submit'])) {
  $question_id = $_POST['qnumero'];
  $enonce = $_POST['qenonce'];
  $choix = array();
  $choix[1] = $_POST['propo1'];
  $choix[2] = $_POST['propo2'];
  $choix[3] = $_POST['propo3'];
  $choix[4] = $_POST['propo4'];
  $bonnerep = $_POST['correctpropo'];

  // Insertion n° de la question et l'énoncé dans la table questions
  $req = $bd->prepare("INSERT INTO questions(question_id,text) VALUES ('$question_id','$enonce')");
  $req-> execute();

  if ($req) {
    foreach ($choix as $key => $value) {
       if ($value != '') {
         if ($bonnerep == $key) {
           $correct = 1;
         }
         else {
           $correct = 0;
         }
         // Insertion des propositions et de la bonne réponse dans la table choix
         $reqchoix = $bd->prepare("INSERT INTO choix(question_id,correct,text) VALUES ('$question_id', '$correct', '$value')");
         $reqchoix->execute();
         $reussi = "Question ajoutée";
       }
    }
  }
}

$reqquestions = $bd->prepare("SELECT * FROM questions");
$reqquestions-> execute();
$res = $reqquestions->rowCount();
$newquestion_id = $res + 1;
?>

<!DOCTYPE html>

<html>

  <head>

    <title> Quiz | Pause Cocoon </title>
    <link rel="stylesheet" type="text/css" href="../../Ressources_css/menunavigation.css">
    <link rel="stylesheet" type="text/css" href="../../Ressources_css/ajouter-quiz.css">

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
      <a href="../../accueilPerso.php"> <i class="fas fa-home"></i> Accueil </a>
      <a href="../../profil.php"> <i class="fas fa-user"></i> Mon profil </a>
      <a href="../../annuaire.php">  Annuaire </a>
      <a href="../../deconnexion.php"> <i class="fas fa-power-off"></i> Déconnexion </a>
      <label class="hide-menutbn" for="check">
        <i class="fas fa-times"></i>
      </label>
    </ul>
  </div>

  <div class="ajouter_form">
    <h2> Ajouter une nouvelle question</h2>
    <form method="post">
        <p> <label> Question n° </label>
        <input type="number" name="qnumero" value="<?php echo $newquestion_id; ?> "></p>
        <p> <label> Enoncé : </label>
        <input type="text" name="qenonce"></p>
        <p> <label> Choix n°1 : </label>
        <input type="text" name="propo1"></p>
        <p> <label> Choix n°2 : </label>
        <input type="text" name="propo2"></p>
        <p> <label> Choix n°3 : </label>
        <input type="text" name="propo3"></p>
        <p> <label> Choix n°4 :</label>
        <input type="text" name="propo4"></p>
        <p> <label> Bonne réponse n° </label>
        <input type="number" name="correctpropo" min="1" max="4"></p>
        <p> <?php if (isset($reussi)) {
          echo $reussi;
        } ?> </p>
        <input type='submit' name="submit" value="Ajouter">
    </form>
  </div>
  </body>

</html>
