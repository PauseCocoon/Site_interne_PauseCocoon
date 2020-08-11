<!DOCTYPE html>

<html>

  <head>

      <title> Programmer avec Scratch | Pause Cocoon </title>
      <link rel="stylesheet" type="text/css" href="../Ressources_css/capsules.css">
      <link rel="stylesheet" type="text/css" href="../Ressources_css/menunavigation.css">

      <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">

      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"/> </script>
      <script type="text/javascript" src="../Ressources_js/capsules.js"> </script>

      </head>

      <?php include 'capsulesScratch.php'; ?>

      <div id="contenu_droite">
        <p class="numlecon"> Leçon 2 sur 3 </p>
        <h2> Programmer avec Scratch </h2>
        <div class="trait"> </div>

        <div class="contenu_page">
          <div id="onglets">
          	<ul id="onglets-menu">
          		<li class="menu-actif">Pour commencer</li>
          		<li>Animations</li>
          		<li>Jeux</li>
          		<li>Histoires</li>
          	</ul>
          </div>


          <div id="onglets-contenu">
          	<div class="contenu-actif">
              <div class="boxvideo">
                <div class="cellvideo">
                  <a href="#" title="Prise en main">
                    <img src="../images/Scratch/cat.jpg" alt="Prise en main Scratch">
                    <p> Prise en main Scratch</p>
                  </a>
                </div>
              </div>

              <div class="videoTuto">
                <video src="../video/DebuterAvecScratch.mp4" controls="true">
                  La vidéo ne peut pas être lu
                </video>
                <i class="fas fa-times-circle"></i>
              </div>
            </div>

            <div>
              <div class="boxvideo">
                <div class="cellvideo">
                  <a href="#" title="Animer un nom">
                    <img src="../images/Scratch/AnimerNom.jpg" alt="Animer un nom">
                    <p> Animer un nom</p>
                  </a>
                </div>

              </div>

              <div class="videoTuto">
                <video src="../video/AnimerUnNom.mp4" controls="true">
                  La vidéo ne peut pas être lu
                </video>
                <i class="fas fa-times-circle"></i>
              </div>

            </div>

          	<div> Contenu Tuto Jeux
            <div class="boxvideo">
              <div class="cellvideo">
                <a href="#" title="Faire voler">
                <img src="../images/Scratch/FaireVoler.jpg" alt="Faire voler">
                <p> Faire voler </p>
                </a>
              </div>
            </div>

            <div class="videoTuto">
              <video src="../video/FaireVoler.mp4" controls="true">
                La vidéo ne peut pas être lu
              </video>
              <i class="fas fa-times-circle"></i>
            </div>
          </div>

          <div>Contenu Tuto Histoires</div>
          </div>

        <div class="choix">
          <div class="lecon_prece">
            <a href="A_propos_Scratch.php" title="A propos de Scratch">  <b> < </b> Leçon précédente </a>
          </div>

          <div class="lecon_suiv">
            <a href="AnimerAtelierScratch.php"  title="Animer un atelier Scratch"> Leçon suivante <b> > </b>  </a>
          </div>
        </div> <!---fin div choix--->
        </div> <!---fin div contenu_page--->

      </div> <!---fin div contenu_droite--->
    </div>

      <div id="imprimerPage">
        <a href="#" onclick="imprimer('pageaImprimer');"> <i class="fas fa-print"></i> </a>
      </div>

      <div class="haut">
       <i class="fas fa-arrow-up"></i>
      </div>
    </body>
</html>
