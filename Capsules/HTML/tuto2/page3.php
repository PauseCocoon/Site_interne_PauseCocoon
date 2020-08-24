
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
						<h1>Les identifiants et classes</h1><br><br>
					
						<p>
							On a vu comment modifier les propriétés des éléments grâce au CSS, il vous vous êtes peut-être posé une question : <br>
							</strong>Est-ce possible de cibler un seul élément en particulier dans un groupe d'éléments ?</strong>
						</p>
						
						<p>
							Par exemple lorsque vous voulez modifier un groupe d'éléments mais que vous souhaitez en laisser un ou deux intacte, 
							il faudra utiliser des notions importants du HTML et du CSS: <strong>la notions d'identifiant (id) et de classe (class)</strong>
						</p>
						
						<h3>Les identifiants</h3><br><br>
						
						<p>
							id (identifiant) est un attribut permettant de rendre en quelque sorte unique un élément HTML pour un fichier CSS, c'est-à-dire
							que l'on peut renseigner au CSS non pas un nom d'élement HTML mais un nom d'identifiant, ce qui permet d'éviter par exemple
							de modifier chaque paragraphe mais plutot de modifier un paragraphe spécifique parmis un ensemble de paragraphe
						</p><br>
						
						<strong>Attention : dans un fichier CSS pour pouvoir déclarer un id il faut écrire #Nom_de_l'ID à la place du nom de l'élément HTML</strong><br>
						
						<img src="../../../images/HTML/tuto2/id.png"></img><br><br>
						
						<p>Exemple : </p>
						
						<p>Reprenons l'exemple du tableau des scores de la coupe de monde</p><br>
						
						<img class="big" src="../../../images/HTML/tuto2/capture9.png"></img><br><br>
						
						<img src="../../../images/HTML/tuto2/capture10.png"></img><br><br>
						<p>Resultat : </p>
						
						<img src="../../../images/HTML/tuto2/capture11.png"></img>
						
						
						<h3>Les classes</h3><br><br>
						
						<p>
							class (classe) est un attribut permettant de regrouper tout les éléments HTML que l'on veut afin de leur appliquer à chacun une même
							modification, cela permet d'éviter d'écrire dans le CSS le nom de chaque élément HTML mais plutot d'écrire le nom de l'attribut class
							une seule fois
						</p><br>
						
						<strong>Attention : dans un fichier CSS pour pouvoir déclarer une classe il faut écrire .Nom_de_la_classe à la place du nom de l'élément HTML</strong><br>
						
						<img src="../../../images/HTML/tuto2/class.png"></img><br><br>
						
						<p>Exemple : </p>
						
						<img class="big" src="../../../images/HTML/tuto2/capture12.png"></img><br><br>
						
						<img class="big" src="../../../images/HTML/tuto2/capture13.png"></img><br><br>
						<p>Resultat : </p>
						
						<img src="../../../images/HTML/tuto2/capture14.png"></img>
						
						
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