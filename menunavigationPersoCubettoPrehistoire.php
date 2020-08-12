<?php
echo '
<link rel="stylesheet" type="text/css" href="../Ressources_css/menunavigation.css">
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
      <a href=""> <i class="fas fa-user"></i> Mon profil </a>
      <a href="../../annuaire.php">  Annuaire </a>
      <a href="../../deconnexion.php"> <i class="fas fa-power-off"></i> Déconnexion </a>
      <label class="hide-menutbn" for="check">
        <i class="fas fa-times"></i>
      </label>
    </ul>
</div>
<div id="pageaImprimer"> </div>';