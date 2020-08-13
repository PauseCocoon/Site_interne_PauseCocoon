<?php session_start();
if (!isset($_SESSION['pseudo'])) {
  header('Location: index.php');
  exit();
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Pause Cocoon | Formation</title>

  <!-- lien de la fiche de style css -->
  <link rel="stylesheet" type="text/css" href="Ressources_css/accueilPerso.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
  <script src="Ressources_js/accueilPerso.js" type="module" defer> </script>
</head>


<body>

  <div class="nav-style">
    <h2 class="logo"> Pause Cocoon </h2>
    <input id="check" type="checkbox">
    <label for="check" class="show-menutbn">
      <i class="fas fa-ellipsis-h"></i>
    </label>
    <ul class="menu">
      <a href="accueilPerso.php"> <i class="fas fa-home"></i> Accueil </a>
      <a href="profil.php"> <i class="fas fa-user"></i> Mon profil </a>
      <a href="annuaire.php"> Annuaire </a>
      <a href="deconnexion.php"> <i class="fas fa-power-off"></i> Déconnexion </a>
      <label class="hide-menutbn" for="check">
        <i class="fas fa-times"></i>
      </label>
    </ul>
  </div>

  <?php include 'includes/database.php';
  $req = $bd->prepare("SELECT score FROM users where pseudo = :pseudo");
  $req->bindValue(':pseudo', $_SESSION["pseudo"]);
  $req->execute();
  $res = $req->fetch(PDO::FETCH_ASSOC);
  $score = $res['score'];
  ?>


  <center>
    <div class="pseudo">
      <p> Bonjour <?php echo $_SESSION['pseudo']; ?> </p>
    </div>

    <div class="scoreBadge">
      <div class="contenuBadge">
        <h3> Mes Badges </h3>
        <div class="mesBadges">
          <img src="images/fondEcran4.png">
          <div class="badge">
            <?php
            if ($score >= 100) {
              echo ' <style>
                #b1 i{
              color: #7391A8;
            }
            </style>';
            }
            if ($score >= 200) {
              echo ' <style>
                #b2 i{
            color: #7391A8;
          }
          </style>';
            }
            if ($score >= 300) {
              echo ' <style>
                #b3 i{
          color: #7391A8;
        }
        </style>';
            }
            ?>
            <div id="b1">
              <i class="fas fa-certificate"></i>
              <p> Bienvenue </p>
            </div>
            <div id="b2">
              <i class="fas fa-certificate"></i>
              <p> Animateur ou Animatrice Cocoon </p>
            </div>
            <div id="b3">
              <i class="fas fa-certificate"></i>
              <p> Responsable d'un espace Cocoon </p>
            </div>

          </div>
        </div>
      </div>

      <div class="tabScore">
        <h3> Score </h3>
        <p> <?php echo $score ?></p>
      </div>

    </div>

    <div class="contenu_page">
      <nav-tabs class="tabs">
        <a href="#tab1" aria-selected="true"> Bienvenue</a>
        <a href="#tab2"> Ateliers Créatifs</a>
        <a href="#tab3"> Programmation</a>
        <a href="#tab4"> Anniversaires</a>
        <a href="#tab5"> Stages Vacances</a>
      </nav-tabs>

      <div id="tab1">

        <div class="tabsModules">
          <ul class="tabs-title">
            <li data-tab-target="#faireC" class="tab"> Faire Connaissance</li>
            <li data-tab-target="#quizBienvenue" class="tab"> Quiz </li>
          </ul>

          <div class="tabs-content">
            <div id="faireC" data-tab-content>
              <div class="box">
                <div class="cell"> <a href="Capsules/A_l_origine.php">
                    <img src="images/3D1.jpg">
                    <h4>
                      <p> A l'origine </p>
                    </h4>
                  </a>
                </div>

                <div class="cell"> <a href="Capsules/Qui_sont_les_familles_cocoon.php">
                    <img src="images/3D2.jpg">
                    <h4>
                      <p> Les familles Cocoons </p>
                    </h4>
                  </a>
                </div>

                <div class="cell"> <a href="Capsules/Nos_savoir_faire.php">
                    <img src="images/3D3.jpg">
                    <h4>
                      <p> Nos savoirs faire </p>
                    </h4>
                  </a>
                </div>

                <div class="cell"> <a href="Capsules/Charte_pause_cocoon.php">
                    <img src="images/3D4.jpg">
                    <h4>
                      <p> Charte Pause Cocoon</p>
                    </h4>
                  </a>
                </div>

                <div class="cell"> <a href="Capsules/Atelier_exceptionnel.php">
                    <img src="images/3D5.jpg">
                    <h4>
                      <p> Atelier exceptionnel</p>
                    </h4>
                  </a>
                </div>

                <div class="cell"> <a href="Capsules/Transmettre.php">
                    <img src="images/3D6.jpg">
                    <h4>
                      <p> Transmettre </p>
                    </h4>
                  </a>
                </div>

                <div class="cell"> <a href="Capsules/Votre_personnalite.php">
                    <img src="images/3D1.jpg">
                    <h4>
                      <p> Votre personnalité</p>
                    </h4>
                  </a>
                </div>


                <div class="cell"> <a href="Capsules/Centres_interets_enfants.php">
                    <img src="images/3D1.jpg">
                    <h4>
                      <p> Centres d'intérêts des enfants </p>
                    </h4>
                  </a>
                </div>

                <div class="cell"> <a href="Capsules/Resume.php">
                    <img src="images/3D1.jpg">
                    <h4>
                      <p> Résumé</p>
                    </h4>
                  </a>
                </div>
              </div>

              <p> Contenu faire Connaissance</p>
            </div>

            <div id="quizBienvenue" data-tab-content>
              <div class="box">
                <div class="cell"> <a href="Capsules/Quiz.php" title="Quiz">
                    <img src="images/3D1.jpg">
                    <h4>
                      <p> Quiz </p>
                    </h4>
                  </a>
                </div>

              </div>
              <p> Contenu Quiz </p>
            </div>

          </div> <!-- fin tabs-content -->
        </div> <!-- fin .tabsModules -->
      </div> <!-- fin #tab1 -->

      <div id="tab2" hidden="hidden">
        <div class="tabsModules">
          <ul class="tabs-title">
            <li data-tab-target="#creationParfum" class="tab"> Création Parfums </a></li>
            <li data-tab-target="#cuisine" class="tab"> Cuisine </a></li>
            <li data-tab-target="#couture" class="tab"> Couture </a></li>
            <li data-tab-target="#troisd" class="tab"> 3D </a></li>
          </ul>

          <div class="tabs-content">
            <div id="creationParfum" data-tab-content>
              <div class="box">
                <div class="cell"> <a href="">
                    <img src="images/Création de parfum/1Parfum.jpg">
                    <h4>
                      <p> Titre </p>
                    </h4>
                  </a>
                </div>


                <div class="cell"> <a href="">
                    <img src="images/Création de parfum/1Parfum.jpg">
                    <h4>
                      <p> Titre </p>
                    </h4>
                  </a>
                </div>

                <div class="cell"> <a href="">
                    <img src="images/Création de parfum/1Parfum.jpg">
                    <h4>
                      <p> Titre </p>
                    </h4>
                  </a>
                </div>

                <div class="cell"> <a href="">
                    <img src="images/Création de parfum/1Parfum.jpg">
                    <h4>
                      <p> Titre </p>
                    </h4>
                  </a>
                </div>

                <div class="cell"> <a href="">
                    <img src="images/Création de parfum/1Parfum.jpg">
                    <h4>
                      <p>Titre </p>
                    </h4>
                  </a>
                </div>


                <div class="cell"> <a href="">
                    <img src="images/Création de parfum/1Parfum.jpg">
                    <h4>
                      <p>Titre </p>
                    </h4>
                  </a>
                </div>
              </div>

              <p> creationParfum contenu </p>
            </div>

            <div id="cuisine" data-tab-content>
              <div class="box">
                <div class="cell"> <a href="">
                    <img src="images/Cuisine/1Cuisine.jpg">
                    <h4>
                      <p> Titre</p>
                    </h4>
                  </a>
                </div>

                <div class="cell"> <a href="">
                    <img src="images/3D1.jpg">
                    <h4>
                      <p> Titre </p>
                    </h4>
                  </a>
                </div>

                <div class="cell"> <a href="">
                    <img src="images/3D1.jpg">
                    <h4>
                      <p> Titre </p>
                    </h4>
                  </a>
                </div>

                <div class="cell"> <a href="">
                    <img src="images/3D1.jpg">
                    <h4>
                      <p> Titre</p>
                    </h4>
                  </a>
                </div>

                <div class="cell"> <a href="">
                    <img src="images/3D1.jpg">
                    <h4>
                      <p> Titre </p>
                    </h4>
                  </a>
                </div>

                <div class="cell"> <a href="">
                    <img src="images/3D1.jpg">
                    <h4>
                      <p> Titre </p>
                    </h4>
                  </a>
                </div>
              </div>

              <p> Contenu Cusine </p>
            </div>

            <div id="couture" data-tab-content>
              <div class="box">
                <div class="cell"> <a href="">
                    <img src="images/Couture1.JPG">
                    <h4>
                      <p> Titre </p>
                    </h4>
                  </a>
                </div>


                <div class="cell"> <a href="">
                    <img src="images/Couture1.jpg">
                    <h4>
                      <p> Titre </p>
                    </h4>
                  </a>
                </div>

                <div class="cell"> <a href="">
                    <img src="images/Couture1.jpg">
                    <h4>
                      <p> Titre </p>
                    </h4>
                  </a>
                </div>
              </div>
            </div>

            <div id="troisd" data-tab-content>
              <p> Contenu 3D </p>
            </div>
          </div> <!-- fin .tabs-content -->
        </div> <!-- fin .tabsModules -->
      </div> <!-- fin #tab2 -->


      <div id="tab3" hidden="hidden">
        <div class="tabsModules">
          <ul class="tabs-title">
            <li data-tab-target="#scratchjr" class="tab"> Scratch Junior </a></li>
            <li data-tab-target="#scratch" class="tab"> Scratch </a></li>
            <li data-tab-target="#cubetto" class="tab"> Cubetto </a></li>
            <li data-tab-target="#glitch" class="tab"> Glitch </a></li>
          </ul>

          <div class="tabs-content">
            <div id="scratchjr" data-tab-content>
              <div class="box">
                <div class="cell"> <a href="">
                    <img src="">
                    <div class="trait"></div>
                    <h4>
                      <p> Titre </p>
                    </h4>
                  </a>
                </div>


                <div class="cell"> <a href="">
                    <img src="">
                    <div class="trait"></div>
                    <h4>
                      <p> Titre </p>
                    </h4>
                  </a>
                </div>

                <div class="cell"> <a href="">
                    <img src="">
                    <div class="trait"></div>
                    <h4>
                      <p> Titre </p>
                    </h4>
                  </a>
                </div>

                <div class="cell"> <a href="">
                    <img src="">
                    <div class="trait"></div>
                    <h4>
                      <p> Titre </p>
                    </h4>
                  </a>
                </div>

              </div>
            </div>

            <div id="scratch" data-tab-content>
              <div class="box">
                <div class="cell"> <a href="Capsules/A_propos_Scratch.php">
                    <img src="images/Scratch1.jpg">
                    <div class="trait"></div>
                    <h4>
                      <p> A propos de Scratch </p>
                    </h4>
                  </a>
                </div>

                <div class="cell"> <a href="Capsules/ProgrammerAvecScratch.php">
                    <img src="">
                    <div class="trait"></div>
                    <h4>
                      <p> Programmer avec Scratch </p>
                    </h4>
                  </a>
                </div>

                <div class="cell"> <a href="">
                    <img src="">
                    <div class="trait"></div>
                    <h4>
                      <p> Animer un nom </p>
                    </h4>
                  </a>
                </div>

              </div>
            </div>

            <div id="cubetto" data-tab-content>
              <div class="box">
                <div class="cell"> <a href="Capsules/Cubetto/Video_intro.php">
                    <img src="images/cubetto1.jpg">
                    <div class="trait"></div>
                    <h4>
                      <p> Atelier Cubetto Thème Préhistoire </p>
                    </h4>
                  </a>
                </div>


                <div class="cell"> <a href="">
                    <img src="images/cubetto1.jpg">
                    <div class="trait"></div>
                    <h4>
                      <p> Titre </p>
                    </h4>
                  </a>
                </div>

                <div class="cell"> <a href="">
                    <img src="images/cubetto1.jpg">
                    <div class="trait"></div>
                    <h4>
                      <p> Titre </p>
                    </h4>
                  </a>
                </div>

                <div class="cell"> <a href="">
                    <img src="images/cubetto1.jpg">
                    <div class="trait"></div>
                    <h4>
                      <p> Titre </p>
                    </h4>
                  </a>
                </div>

              </div>
            </div>

            <div id="glitch" data-tab-content>
              <div class="box">
                <div class="cell"> <a href="Capsules/Glitch/tuto1/Video_intro.php">
                    <img src="images/Glitch.png">
                    <div class="trait"></div>
                    <h4>
                      <p> Tuto 1 </p>
                    </h4>
                  </a>
                </div>


                <div class="cell"> <a href="Capsules/Glitch/tuto2/Video_intro.php">
                    <img src="images/Glitch.png">
                    <div class="trait"></div>
                    <h4>
                      <p> Tuto 2 </p>
                    </h4>
                  </a>
                </div>

                <div class="cell"> <a href="Capsules/Glitch/tuto3/Video_intro.php">
                    <img src="images/Glitch.png">
                    <div class="trait"></div>
                    <h4>
                      <p> Tuto 3 </p>
                    </h4>
                  </a>
                </div>
              </div> <!-- fin .box -->
            </div> <!-- fin #glitch -->
          </div> <!-- fin .tabs-content -->
        </div> <!-- fin .tabsModules -->
      </div> <!-- fin #tab3 -->

      <div id="tab4" hidden="hidden">
        <div class="tabsModules">
          <ul class="tabs-title">
            <li data-tab-target="#orgAnniv" class="tab"> Organiser Anniversaires</li>
            <li data-tab-target="#animerAnniv" class="tab"> Animer Anniversaires </li>
          </ul>

          <div class="tabs-content">
            <div id="orgAnniv" data-tab-content>
              <div class="box">
                <div class="cell"> <a href="">
                    <img src="images/anniversaire1.jpg">
                    <div class="trait"></div>
                    <h4>
                      <p> Titre </p>
                    </h4>
                  </a>
                </div>

                <div class="cell"> <a href="">
                    <img src="images/anniversaire1.jpg">
                    <div class="trait"></div>
                    <h4>
                      <p> Titre </p>
                    </h4>
                  </a>
                </div>
              </div>
            </div>

            <div id="animerAnniv" data-tab-content>
              <div class="box">
                <div class="cell"> <a href="">
                    <img src="images/anniversaire2.png">
                    <div class="trait"></div>
                    <h4>
                      <p> Titre </p>
                    </h4>
                  </a>
                </div>
              </div>
            </div>

          </div> <!-- fin tabs-content -->
        </div> <!-- fin .tabsModules -->
      </div> <!-- fin #tab4 -->

      <div id="tab5" hidden="hidden">
        <p>Officia deserunt mollit anim id est laborum. </p>
      </div>

    </div>
  </center>


</body>

</html>