<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
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
				<div class="col-lg-offset-1 col-lg-10">
					<div class="panel-body">
						<h1>Qu'est ce que le CSS ?</h1><br><br>
						<p>Le CSS (abréviation de Cascading Style Sheets, feuille de style en cascade) est un langage informatique gérant la mise en forme des éléments du site.</p>
						
						<p>	On pourra par exemple modifier la couleur des textes que l'on utilise, changer la taille des éléments, 
							utiliser des bordures ou encore modifier le fond d'écran du site.
						</p><br>
						
						<img class="capture" src="../../../images/HTML/tuto1/capture8.png">
						<img id="fleche" src="../../../images/HTML/tuto2/fleche.png"></img>
						<img class="capture" src="../../../images/HTML/tuto2/capture.png"></img><br><br>
						
						<p>Le CSS a été créé en 1996 est connait plusieurs évolutions comme le HTML, la plupart des sites utilise la version 3 du CSS </p><br>
						
						<h2>Où est-ce que l'on écrit le code CSS ?</h2><br><br>
						
						<p>Pour cela il y a 3 méthodes :</p>
						
						<p>- On peut écrire du code css dans un fichier HTML grâce à une balise dédiée (la balise &lt;style&gt;)</p>
						<p>- On peut écrire un attribut appelé "style" dans une balise HTML puis écrire du code CSS (méthode la moins conseillé)</p>
						<p>- On peut écrire du code CSS dans un fichier qui lui est dédié (meilleur méthode)</p><br>
						
						<strong>Il faut du coup creer un fichier, mettre du code dedans puis enregrister le fichier en mettant comme extention ".css"</strong>
						
						<h2>Exemple d'utilisation</h2><br><br>
						
						<p>
							Pour mieux comprendre les principes de ce langage, nous allons voir le code HTML (image de gauche) et CSS (image de droite) de l'image que je vous ai montré en haut
							(nous utiliserons de la dernière méthode) 
						</p>
						
						<img class="capture" src="../../../images/HTML/tuto2/capture3.png"></img> &emsp;&emsp;&emsp; <img class="capture" src="../../../images/HTML/tuto2/capture2.png"></img><br><br>
						
						<p>
							On peut tout d'abord remarquer que j'ai ajouté une balise &lt;link&gt; dans l'entete &lt;head&gt;.En effet, il nous sert 
							de lien (d'où le nom link me direz vous) entre un document et une source externe, l'attribut "href" sert quand à lui à importer un fichier
							<br><br>
							<strong>
								En résumé, la syntaxe pour importer un fichier CSS est :<br>	
								&lt;link href="chemin_du_fichier_css" type="text/css"/&gt;<br><br>
							</strong>
								(	
									"rel" sert à préciser la nature de la relation entre le document HTML et le fichier externe<br>
									"stylesheet" signifie qu'il s'agit d'une relation impliquant un fichier CSS
								)
						</p><br>
						
						<p>
							<strong>
								Voici comment on ecrit du code en CSS:<br>
									nom_de_l'élément_HTML{propriété: valeur;}
							</strong><br><br>
							- le nom de l'élément HTML est tout simplement le nom d'une balise (par exemple p)<br>
							- la propriété est la chose en plus que l'on veut ajouter à l'élément html (par exemple une couleur, une bordure, une taille de police)<br>
							- Il faut indiquer la valeur pour chaque propiété que l'on ajoute (le nom de la couleur, la valeur de la taille d'une police)<br><br>
							
							<strong>
								Regardez par exemple les premières lignes de l'image de droite, vous pouvez d'abord voir que l'on a ciblé comme élement un paragraphe ("p"),
								et ensuite entre les crochets, on a agrandi la taille de police de 200% (font-size: 200%;), on a rendu le texte en italique (font-style: italic;)
								et on a changé la couleur du texte en bleu (color: blue;).
							</strong>
							
							<p>
								Bien sur on peut cibler plusieurs éléments à la fois comme à la ligne 7 de l'image de droite afin de ne pas écrire plusieurs fois
								la même chose
							</p><br>
							
							
							<p>
								Cette partie du cours est terminée, la prochaine traitera de l'utilisation des élements de bases de CSS comme par exemple les bordures 
								ou la taille de police.<br><br>
								<a href="page2.php">Cliquez ici pour passer à la page suivante</a>
							</p>
						
					</div>
				</div>
				
				<div style="margin-top: 2em;" class="panel panel-primary col-lg-2">
					<div class="panel-body">
						<ul>
							<li><a href="page1.php">Qu'est ce que le CSS ?</a></li>
							<li><a href="page2.php">Les éléments principaux du css</a></li>
							<li><a href="page3.php">Les identifiants et classes</a></li>
							<li><a href="quizz.php">Quizz</a></li>
						</ul>
						
						
					</div>
				</div>
			</div>
		</div>
	
	</body>