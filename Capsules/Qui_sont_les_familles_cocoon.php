<!DOCTYPE html>

<html>

  <head>

      <title> Familles Cocoon | Pause Cocoon </title>
      <link rel="stylesheet" type="text/css" href="../Ressources_css/capsules.css">
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"/> </script>
      <script type="text/javascript" src="../Ressources_js/capsules.js"> </script>
      <?php include'../menunavigationPerso.php';?>

    <center>
      <div id="contenu_droite">
        <p class="numlecon"> Leçon 2 sur 10 </p>
        <h2> Qui sont les familles Cocoon? </h2>
        <div class="trait"> </div>

        <div id="slider">
          <div id="slider_box">
            <img src="../images/stagevacance.png">
          </div>

          <script type="text/javascript">
          var slider_content = document.getElementById('slider_box');
            var image = ['anniversaire.png','cubetto.jpg','atelier.jpg'];
            var i = image.length;
          </script>

          <button class="prew" onclick="preImage()"> <i class="fas fa-angle-left"></i> </button>
          <button class="next" onclick="nextImage()"> <i class="fas fa-angle-right"></i> </button>

          <script type="text/javascript" src="../Ressources_js/slideshow.js"> </script>

        </div>

        <div class="listPoint">
         <h3> Point 1 </h3>
         <div class="contenu_texte">
           <div class="texte">
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
         <h3> Point 2 </h3>
         <div class="contenu_texte">
           <div class="texte">
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        <h3> Point 3 </h3>
        <h3> Point 4 </h3>
        <h3> Point 5 </h3>
        </div>

          <div class="choix">
            <div class="lecon_prece">
              <a href="A_l_origine.php">  <b> < </b> Leçon précédente </a>
            </div>

            <div class="lecon_suiv">
              <a href="Nos_savoir_faire.php"> Leçon suivante <b> > </b>  </a>
            </div>
          </div>
        </div>

      </center>
      </div>

    <div id="imprimerPage">
      <a href="#" onclick="imprimer('pageaImprimer');"> <i class="fas fa-print"></i> </a>
    </div>

    <div class="haut">
      <i class="fas fa-arrow-up"></i>
    </div>
  </div>

  </body>
</html>
