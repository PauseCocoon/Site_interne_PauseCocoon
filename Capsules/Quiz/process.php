<?php
session_start();
include 'databasequiz.php';
if(!isset($_SESSION['pseudo'])){
  header('Location: ../../index.php');
  exit();
}

if (!isset($_SESSION['scorequiz'])) {
  $_SESSION['pointquiz'] = 0;
  $_SESSION['scorequiz'] = 0;
}
if (isset($_POST["valider"])) { //Si le formulaire a été soumis
  $nb = $_POST['number'];
  $choixselectionne = $_POST['choix'];
  $nextquestion = $nb + 1;


  // total questions
  $reqtotal = $bd->prepare("SELECT * FROM questions");
  $reqtotal-> execute();
  $totalquestion = $reqtotal->rowCount();

  // bonne reponse
  $req = $bd->prepare("SELECT * FROM choix where question_id = $nb AND correct = 1");
  $req-> execute();
  $res = $req->fetch(PDO::FETCH_ASSOC);
  $choixcorrect = $res['id'];

  if ($choixcorrect == $choixselectionne) {
    $_SESSION['pointquiz'] ++;
  }
  $_SESSION['scorequiz'] = $_SESSION['pointquiz']*5;
  if ($nb == $totalquestion) {
    header("Location:scores.php");
    exit();
  }
  else {
    header("Location:quiz-question.php?n=".$nextquestion);
  }
}

?>
