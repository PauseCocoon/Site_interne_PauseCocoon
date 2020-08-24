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
						<h1>Les éléments de base du html</h1>
						<br/>
						
						<h2>Les balises principales</h2><br/>
						
						<p>Nous allons maintenant voir plus en détail les balises nécessaires pour une page web.</p>
						
						<p>Avant de commencer, il faut savoir que meme si vous n'avez pas bien codé votre fichier en HTML, le navigateur s'efforcera d'affichera le résultat (cependant plus lentement).</p>
						
						<p>Reprenons le code que l'on a vu précédemment et analysons-le: </p><br/>
						
						<img src="../../../images/HTML/tuto1/capture.png"><br/><br/>
												
						<p>&lt;!doctype html&gt; est ce qui indique au fichier le type de langage ainsi que sa version utilisé (ici HTML 5)</p><br/>
						
						<p>&lt;html&gt; est la balise permettant de recueillir les éléments principaux &lt;head&gt; et &lt;body&gt; </p><br/>
						
						<p>&lt;head&gt; est la balise permettant de regrouper ce qu'on appelle les meta-informations (c'est tous ce qui ne sera pas visible à l'ecran), par exemple le langage reconnu ou l'ajout des fichiers extérieurs</p><br/>
						
						<p>&lt;body&gt; permet de rassembler cette fois les informations visibles telle que les titres, les paragraphes ou encore les images</p><br/>
						
						<p><strong>Parmis les informations visibles sur une page web : </strong></p><br/>
						
						<p>&lt;p&gt;(encore une fois...) est ce qui représente un paragraphe</p><br/>
						
						<p>&lt;h1&gt; permet de mettre valeur le texte comme si c'etait un titre (on peut aussi écrire h2,h3,h4,... qui auront le même effets)</p><br/>
						
						<p>&lt;title&gt; permet de donner un titre à une page web, il est à mettre entre les balises &lt;head&gt;</p><br/>
						
						<p>&lt;strong&gt; permet changer la police du texte concerné en gras, il est utilisé pour mettre en avant des informations inmportantes</p><br/><br/>
						
						<h2>Les attributs</h2><br/>
						
						<p>Les attributs sont des informations permettant de completer une balise, par exemple pour inclure une image j'écris : </p><br/>
						
						<p><strong>&lt;img src="image.jpg" title="titre de l'image"/&gt;</strong> <br/><br/>src est un attribut permettant de spécifier le nom de l'image en question et title son titre</p>
						
						<p>Il y a aussi les identifiants (id) et les classes (class) sont aussi des attributs, mais nous verrons cela plus tard lors de l'apprentissage du css</p>
						 
						<p>ou encore dans l'exemple d'en haut : &lt;meta charset="utf-8"/&gt; charset siginifiant le jeu de caractère accepté</p><br/><br/>
						
						<h2>Les commentaires</h2><br/>
						
						<p>Lorsque vous codez dans un fichier, il se peut que vous obteniez un code très long faisant plusieurs lignes ou encore 
							un code assez compliqué à comprendre. Il est donc très préférable de commenter votre code, ne serait-ce que pour 
							vous lorsque vous allez reprendre un projet datant d'il y a longtemps ou encore si une autre personne reprend votre projet, 
							histoire qu'elle puisse facilement comprendre votre travail.
						</p><br/>
						
						<p>Un commentaire s'écrit de cette façon : <strong>&lt;!-- mon commentaire --&gt;</strong><br/>
							il ne sera pas visible sur la page web et n'afflue pas les autres éléments<br/>
							Cela veut dire que l'on peut écrire les commentaire n'importe où dans le fichier sans qu'il n y ait de conséquences
						</p>
						
						
						<p>La prochaine page traitera d'autres éléments du html comme les listes, les tableaux ou encore les liens entre pages web, on expliquera aussi l'utilité des éléments div et span</p>
						
						<a href="page3.php">Page suivante</a>
					</div>
				</div>
				
				<div style="margin-top: 2em;" class="panel panel-primary col-lg-3">
					<div class="panel-body">
						<ul>
							<li><a href="page1.php">Qu'est ce que le HTML ?</a></li>
				            <li><a href="page2.php">Les éléments de base du html</a></li>
				            <li><a href="page3.php">Autres éléments du HTML</a></li>
				            <li><a href="quizz.php">Quizz sur le HTML</a></li>   		
						</ul>
						
						
					</div>
				</div>
				
			</div>
		</div>