<!DOCTYPE html>

<html>

  <head>

      <title> A l'origine | Pause Cocoon </title>
      <link rel="stylesheet" type="text/css" href="../Ressources_css/capsules.css">
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"/> </script>
      <script type="text/javascript" src="../Ressources_js/capsules.js"> </script>
      <?php include'../menunavigationPerso.php';?>

    <div id="pageaImprimer">
    <center>

    <div id="contenu_droite">
      <p class="numlecon"> Leçon 1 sur 10 </p>
      <h2> A l'origine </h2>
      <div class="trait"> </div>

      <div class="contenu_page">
        <p> Nous allons commencer par une petite présentation de Pause Cocoon <br>
            Let's play !</p>
        <video src="../video/Accueil.mp4" controls>
          La vidéo ne peut pas être lu
        </video>

        <p class="suiv"> Si la vidéo t'as donné envie d'en savoir plus clique sur la leçon suivante!</p>
        <div class="choix">
          <div class="lecon_suiv">
            <a href="Qui_sont_les_familles_cocoon.php"> Leçon suivante  <b> > </b>  </a>
          </div>
        </div>
      </div>

    </div>

  </center>
  </div>

  <div id="imprimerPage">
    <a href="#" onclick="imprimer('pageaImprimer');"> <i class="fas fa-print"></i> </a>
  </div>

  </body>
</html>
