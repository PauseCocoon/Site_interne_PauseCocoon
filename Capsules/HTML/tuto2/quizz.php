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
		<script src="quizz.js"></script>
	</head>
  
	<body>	
		<div class="container">
			<div class="row">
				<div class="col-lg-offset-1 col-lg-11">
					<div class="panel-body">
						<h1>Quizz sur le CSS</h1>
						
						<form id="quizz">
							<!-- 1 -->
							<div id="1" class="cen">
								<label>Quelle est le meilleur moyen d'écrire du code CSS</label><br>
								
								<input type="radio" name="q1" value="r1"/>En écrivant dans un fichier à part<br>
								<input type="radio" name="q1" value="r2"/>En écrivant dans un fichier HTML en tant qu'attribut<br>
								<input type="radio" name="q1" value="r3"/>En écrivant dans un fichier HTML dans une balise spécifique<br>
								<input type="hidden" name="h1" value="r1"/>
								<br>
								
								<a class="valider btn btn-primary">suivant</a>
							</div>
							
							<!-- 2 -->
							<div id="2" class="cache cen">
								<label>Quand j'écris : p{color: red} , le mot color est :</label><br>
								
								<input type="radio" name="q2" value="r1"/>Le résultat d'une propriété<br>
								<input type="radio" name="q2" value="r2"/>Une propriété<br>
								<input type="radio" name="q2" value="r3"/>Un nom d'élément HTML<br>
								<input type="hidden" name="h2" value="r2"/>
								<br>
								
								<a class="valider btn btn-primary">suivant</a>
							</div>
							
							<!-- 3 -->
							<div id="3" class="cache cen">
								<label>Quand j'écris : p{color: red} , le mot red est :</label><br>
								
								<input type="radio" name="q2" value="r1"/>Le résultat d'une propriété<br>
								<input type="radio" name="q2" value="r2"/>Une propriété<br>
								<input type="radio" name="q2" value="r3"/>Un nom d'élément HTML<br>
								<input type="hidden" name="h3" value="r1"/>
								<br>
								
								<a class="valider btn btn-primary">suivant</a>
							</div>
							
							<!-- 4 -->
							<div id="4" class="cache cen">
								<label>Quand j'écris : p{color: red} , le mot p est :</label><br>
								
								<input type="radio" name="q2" value="r1"/>Le résultat d'une propriété<br>
								<input type="radio" name="q2" value="r2"/>Une propriété<br>
								<input type="radio" name="q2" value="r3"/>Un nom d'élément HTML<br>
								<input type="hidden" name="h3" value="r3"/>
								<br>
								
								<a class="valider btn btn-primary">suivant</a>
							</div>	
							
							
							<!-- 5 -->
							<div id="5" class="cache cen">
								<label>Si je veux modifier la couleur de fond d'une page web, quelle propiété je devrais utiliser</label><br>
								
								<input type="radio" name="q5" value="r1"/>color<br>
								<input type="radio" name="q5" value="r2"/>background-color<br>
								<input type="radio" name="q5" value="r3"/>border<br>
								<input type="hidden" name="h5" value="r2"/>
								<br>
								
								<a class="valider btn btn-primary">suivant</a>
							</div>
							
							<!-- 6 -->
							<div id="6" class="cache cen">
								<label>Si je veux modifier la taille d'une police, quelle propiété je devrais utiliser</label><br>
								
								<input type="radio" name="q5" value="r1"/>background-color<br>
								<input type="radio" name="q5" value="r2"/>border<br>
								<input type="radio" name="q5" value="r3"/>font-size<br>
								<input type="hidden" name="h5" value="r3"/>
								<br>
								
								<a class="valider btn btn-primary">suivant</a>
							</div>
							
							<!-- 7 -->
							<div id="7" class="cache cen">
								<label>Si je veux modifier la bordure d'un élement, quelle propiété je devrais utiliser</label><br>
								
								<input type="radio" name="q5" value="r1"/>font-size<br>
								<input type="radio" name="q5" value="r2"/>border<br>
								<input type="radio" name="q5" value="r3"/>color<br>
								<input type="hidden" name="h5" value="r2"/>
								<br>
								
								<a class="valider btn btn-primary">suivant</a>
							</div>
							
							<!-- 8 -->
							<div id="8" class="cache cen">
								<label>Que signifie id</label><br>
								
								<input type="radio" name="q8" value="r1"/>Un identifiant<br>
								<input type="radio" name="q8" value="r2"/>Une classe<br>
								<input type="radio" name="q8" value="r3"/>un élement HTML<br>
								<input type="hidden" name="h8" value="r1"/>
								<br>
								
								<a class="valider btn btn-primary">suivant</a>
							</div>
							
							<!-- 9 -->
							<div id="9" class="cache cen">
								<label>A quoi sert un identifiant</label><br>
								
								<input type="radio" name="q9" value="r1"/>à cibler un élément HTML pour le unique au CSS<br>
								<input type="radio" name="q9" value="r2"/>à créer un groupe d'élément HTML<br>
								<input type="radio" name="q9" value="r3"/>Nada<br>
								<input type="hidden" name="h9" value="r1"/>
								<br>
								
								<a class="valider btn btn-primary">suivant</a>
							</div>	
							
							
							<!-- 10 -->
							<div id="10" class="cache cen">
								<label>A quoi sert l'attribut class</label><br>
								
								<input type="radio" name="q10" value="r1"/>à créer un groupe d'élément HTML<br>
								<input type="radio" name="q10" value="r2"/>à cibler un élément HTML pour le unique au CSS<br>
								<input type="radio" name="q10" value="r3"/>A rien encore une fois<br>
								<input type="hidden" name="h10" value="r1"/>
								<br>
								
								<a class="valider btn btn-primary">suivant</a>
							</div>
							
							<div id="end" class="cache cen">
								<p>Quizz terminé ! Voici ton score</p>
								<p id="score"></p>
								<p id="commentaire"></p>
							</div>
						</form>
						
					</div>
				</div>
						
			
			
			
			</div>
		</div>