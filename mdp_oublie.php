<?php include 'menunavigation.php';?>

  <form method="post">
    <h1> Mot de passe oublié </h1>
    <p> Entrez l’adresse email de votre compte.
      Nous vous enverrons un email.</p>

    <p><input type="text" name="email" placeholder="Adresse email" required></p>
    <p id="btn"> <input class="btnReintialiser" type="submit" name="submit" value="Réintialiser"> </p>

  </form>

<?php


  if (isset($_POST['email'])){
    include 'includes/database.php';
    ini_set("SMTP", "smtp.free.fr");
    ini_set("smpt_port", "25");
    $mdp = uniqid();
    $hashmdp = password_hash($mdp, PASSWORD_DEFAULT);

    $req = $bd-> prepare("SELECT pseudo from users where email = :email");
    $req ->bindValue(':email',$_POST['email']);
    $req->execute();
    $res = $req->fetch(PDO::FETCH_ASSOC);

    $to = $_POST['email'];
    $subject = 'Réinitialisation mot de passe';
    $message = "<html>
      <body>
      <p style='text-align: center; font-size: 18px'><b>Bonjour ".$res['pseudo']."</b>,</p><br/>
      <p style='text-align: justify'><i><b> Vous avez demandé la réinitialisation de votre mot de passe </br>
      Voici votre nouveau mot de passe : </b></i>".$mdp."</p><br/>
      </body>
      </html>";
    $headers =  'MIME-Version: 1.0' . "\r\n";
    $headers.= 'From: "PauseCocoon" <me@gmail.com>' . "\r\n";
    $headers.= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers.= 'Content-Transfer-Encoding: 8bit';
         //S'il y a une correspondance
      if(mail($to, $subject, $message, $headers)) {
        $maj = $bd->prepare("UPDATE users set mdp = :mdp where email = :email");
        $maj->bindValue(':mdp',$hashmdp);
        $maj->bindValue(':email',$_POST['email']);
        $maj->execute();
        echo "Mail envoyé";
      }
      else {
        echo "Une erreur est survenue";
      }
  }
?>

  </body>
</html>
