<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pause Cocoon | Formation</title>
    <script src="Ressources_js/pageBuilder.js" type="module" defer> </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>

    <!-- lien de la fiche de style css -->

  </head>


  <body>
    <center>
      <form method="post" action="creerPage.php" enctype="multipart/form-data">
        <p> <label> Titre de la leçon : </label></br>
        <input type="text" name="titrelecon" required></p>
         <p> <label> Titre paragraphe : </label></br>
          <p> <input type="text" name="parag"required></p>
          <p> <label> Image :</label></br>
            <input type="file" name="image"/></p>
          <p> <label> Contenu </label> </p>
          <textarea name="contenu" id="contenu"></textarea>
    <p id="btn"> <input class="btnIns" type="submit" name="creer" value="Confirmer"> </p>

      </form>
    </center>
  </body>
</html>
