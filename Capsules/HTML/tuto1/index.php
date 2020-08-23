<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="../../../Ressources_css/cubetto_prehistoire.css">
    <link rel="stylesheet" type="text/css" href="../../Ressources_css/css.css">
    <link rel="stylesheet" type="text/css" href="../../../Ressources_css/menunavigation.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css"/>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <?php include'../../../menunavigationPersoScratch_Junior.php';?>
  </head>
  
  <body>
  
    
  
    <div class="container">
      <div class="row">
        <div class="col-lg-offset-1 col-lg-8">
          <div class="panel-body">
            <h1>Qu'est ce que le HTML ?</h1>
            <br/>
            <p>
              Le HTML (HyperText Markup Language) est un langage de balisage permettant de mettre en forme les éléments d'une page web (paragraphe, titre...)
              mais aussi d'inclure des médias (images, vidéos...).
              Ce langage a été créé des 1981 par Tim Berners et a eu plusieurs évolutions. La version auquelle on utilise actuellement est la version 5 (qui a été créé en 2007).
              
              <br/><br/><br/><strong>Mais qu'est ce que le balisage ?</strong><br/><br/><br/>
              
              <p>
                Le balisage fait référence à ce que contient même le ficher HTML à savoir des balises<br/>
                
                Les balises (ou tag en anglais) sont des élément HTML permettant de mettre en forme et de structurer du contenu (par exemple un paragraphe, un titre, une image...)<br/>
                
                
                Ceci est une balise : &lt;p&gt;<br/>
                Ceci est une balise : &lt;title&gt;<br/>
                
                <br/>Pour creer un élément de la page web, faut ecrire de la façon suivante : <br/><strong>&lt;nom de la balise&gt; contenu de la balise &lt;/nom de la balise&gt;</strong><br/>
                
                <p>&lt;nom de la balise&gt; est appellé balise ouvrante, c'est ce qui permet de creer le début d'un élément de la page</p>
                
                <p>&lt;/nom de la balise&gt; est appellé balise fermante, c'est ce qui permet de cloturer un élément de la page</p>
                
                <p>Par exemple : <strong>&lt;p&gt; signifie le debut d'un paragraphe et &lt;/p&gt; siginifie la fin d'un paragraphe</strong></p>
                
                <p>
                  Assez simple non ? Il existe plein de nom de balise dans le langage HTML (on ne va pas tous les voir rassurez vous...)
                  mais voulez allez apprendre par la suite les plus simples permettant de creer des pages web basiques<br/><br/><br/>
                  
                  <strong>Passons maintenant dans la partie pratique</strong><br/>
                </p>
                
                
                
                <br/><br/><strong>Ok mais comment fais ton pour afficher les resultats ?</strong><br/>
                <p>Pour cela il faut proceder de la façon suivante : </p><br/>
                
                <p>- Creez un nouveau fichier (clique droit -> nouveau fichier)</p>
                
                <p>- Mettez le code que vous voulez dans ce fichier enregistrez-le</p>
                
                <p>- Enregistrez-le et choisissez comme type (l'extention du fichier) html</p>
                
                <p>- Enfin cliquez sur ce fichier pour ouvrir un navigateur qui affichera la page web</p><br/>
                
                <img src="../../../images/HTML/tuto1/capture.png"><br/><br/>
                
                <a href="exemple.html">Cliquez ici pour voir le resultat </a><br/>
                
                
              </p>
              
              
              <p>Cette première page servant d'introduction est maintenant terminé, la prochaine page detaillera des balises que l'on peut utiliser en HTML</p>
              
              
              <br/><a href="suite.php">Aller à la page suivante</a>
            </p>
          </div>
        </div>
        
        <div style="margin-top: 2em;" class="panel panel-primary col-lg-3">
          <div class="panel-body">
            <ul>
              <li><a href="index.php">Qu'est ce que le HTML ?</a></li>
              <li><a href="suite.php">Les éléments de base du html</a></li>
              <li><a href="suite2.php">Autres éléments du HTML</a></li>
              <li><a href="quizz.php">Quizz sur le HTML</a></li>       
            </ul>
            
            
          </div>
        </div>
      </div>
    </div>
  
  </body>