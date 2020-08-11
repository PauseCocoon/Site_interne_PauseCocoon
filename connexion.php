<?php include 'menunavigation.php';?>

    <div class="formulairebox">
      <form method="post" action="connexion.php">
        <h1> Connexion </h1>
        <p> <i class="fas fa-user"></i>
        <input type="text" name="pseudo" placeholder="Pseuso" required></p>
        <p><i class="fas fa-lock"></i>
        <input type="password" name="mdp" placeholder="Mot de passe" required></p>
        <div class="mdp">
          <a href="mdp_oublie.php"> Mot de passe oublié ?</a>
         </div>
        <p id="btn"> <input class="btnConnexion" type="submit" name="submit" value="Se connecter"> </p>

      </form>
    </div>

<?php


  if (isset($_POST['submit'])){
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mdp= htmlspecialchars($_POST['mdp']);

    if (!empty($pseudo) && !empty($mdp)) {
      include 'includes/database.php';

      $req = $bd-> prepare("SELECT mdp from users where pseudo = :pseudo");
      $req ->bindValue(':pseudo',$pseudo);
      $req->execute();
      $res = $req->fetch(PDO::FETCH_ASSOC);
         //S'il y a une correspondance
      if($res) {
        if(password_verify($mdp,$res['mdp'])){
             //Si les mots de passe sont les mêmes
            echo '<center><p> Connexion réussie </p> </center>';
            $_SESSION['connecte'] = true;
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['mdp'] = $mdp;
            if ($_SESSION['pseudo'] == 'admin') {
              header('Location: accueilAdmin.php');
              exit();
            }
            else {
              header('Location: accueilPerso.php');
              exit();
            }

        }
        else {
          echo " <center> Votre pseudo ou mot de passe est incorrecte </center>";
        }
       }
      }
    else {
      echo "Les champs doivent être tous remplis";
    }

  }
?>

  </body>
</html>
