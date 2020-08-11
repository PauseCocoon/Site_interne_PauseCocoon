<?php
echo '<body>
  <div class="nav-style">
    <h2 class="logo"> Pause Cocoon </h2>
    <input id="check" type="checkbox">
    <label for="check" class="show-menutbn">
      <i class="fas fa-ellipsis-h"></i>
    </label>
    <ul class = "menu">
      <a href="../accueilPerso.php"> <i class="fas fa-home"></i> Accueil </a>
      <a href=""> <i class="fas fa-user"></i> Mon profil </a>
      <a href="../annuaire.php">  Annuaire </a>
      <a href="../deconnexion.php"> <i class="fas fa-power-off"></i> Déconnexion </a>
      <label class="hide-menutbn" for="check">
        <i class="fas fa-times"></i>
      </label>
    </ul>
  </div>

  <div class="menu_vertical">
    <div id="titre_sidebar">
      <img src="../images/atelier.jpg">
      <h2> Scratch </h2>
    </div>

    <div class="contenu_sidebar">
      <div id="titreMod_sidebar">
        <p> <i class="fas fa-angle-down"> </i> Connaissance avec Scratch </p>
      </div>

      <div class="box">
        <div class="cell"> <a href="A_propos_Scratch.php"> <i class="fas fa-bars"> </i> A propos de Scratch </a> </div>
        <div class="cell"> <a href="ProgrammerAvecScratch.php"> <i class="fas fa-bars"> </i> Programmer avec Scratch</a> </div>
        <div class="cell"> <a href="AnimerAtelierScratch.php"> <i class="fas fa-bars"> </i> Animer un nom</a> </div>

        </div>
    </div>
  </div>

  <div class="btn"> <i class="fas fa-bars"> </i> </div>

  <div id="pageaImprimer">
  <center>';
  ?>
