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
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="quizz.js"></script>
	</head>
  
	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-offset-1 col-lg-11">
					<div class="panel-body">
						<h1>Quizz sur le HTML</h1>
						
						<form id="quizz">
							<!-- 1 -->
							<div id="1" class="cen">
								<label>Comment écrit-on du code HTML ?</label><br>
								
								<input type="radio" name="q1" value="r1"/>	&lt;nom de la balise&gt; contenu de la balise &lt;/nom de la balise&gt;<br>
								<input type="radio" name="q1" value="r2"/>	&lt;nom de la balise&gt; contenu de la balise &lt;nom de la balise&gt;<br>
								<input type="radio" name="q1" value="r3"/>	&lt;/nom de la balise&gt; contenu de la balise &lt;/nom de la balise&gt;<br>
								<input type="hidden" name="h1" value="r1"/>
								<br>
								
								<a class="valider btn btn-primary">suivant</a>
							</div>
							
							<!-- 2 -->
							<div id="2" class="cache cen">
								<label>Quelle est la balise racine dans le langage HTML ?</label><br>
								
								<input type="radio" name="q2" value="r1"/>body<br>
								<input type="radio" name="q2" value="r2"/>div<br>
								<input type="radio" name="q2" value="r3"/>html<br>
								<input type="hidden" name="h2" value="r3"/>
								<br>
								
								<a class="valider btn btn-primary">suivant</a>
							</div>
							
							<!-- 3 -->
							<div id="3" class="cache cen">
								<label>Quelle balise permet de creer un paragraphe ?</label><br>
								
								<input type="radio" name="q3" value="r1"/>la balise &lt;p&gt;<br>
								<input type="radio" name="q3" value="r2"/>la balise &lt;div&gt;<br>
								<input type="radio" name="q3" value="r3"/>la balise &lt;span&gt;<br>
								<input type="hidden" name="h3" value="r1"/>
								<br>
								
								<a class="valider btn btn-primary">suivant</a>
							</div>
							
							<!-- 4 -->
							<div id="4" class="cache cen">
								<label>Quelle balise permet de creer une liste ?</label><br>
								
								<input type="radio" name="q4" value="r1"/>la balise &lt;table&gt;<br>
								<input type="radio" name="q4" value="r2"/>la balise &lt;ul&gt;<br>
								<input type="radio" name="q4" value="r3"/>la balise &lt;div&gt;<br>
								<input type="hidden" name="h4" value="r2"/>
								<br>
								
								<a class="valider btn btn-primary">suivant</a>
							</div>	
							
							
							<!-- 5 -->
							<div id="5" class="cache cen">
								<label>Quelle balise permet de regrouper plein d'élements HTML?</label><br>
								
								<input type="radio" name="q5" value="r1"/>la balise &lt;p&gt;<br>
								<input type="radio" name="q5" value="r2"/>la balise &lt;div&gt;<br>
								<input type="radio" name="q5" value="r3"/>la balise &lt;span&gt;<br>
								<input type="hidden" name="h5" value="r2"/>
								<br>
								
								<a class="valider btn btn-primary">suivant</a>
							</div>
							
							<!-- 6 -->
							<div id="6" class="cache cen">
								<label>Dans quelle balise peut-on écrire du code HTML visible à l'écran ?</label><br>
								
								<input type="radio" name="q6" value="r1"/>la balise &lt;html&gt;<br>
								<input type="radio" name="q6" value="r2"/>la balise &lt;head&gt;<br>
								<input type="radio" name="q6" value="r3"/>la balise &lt;body&gt;<br>
								<input type="hidden" name="h6" value="r3"/>
								<br>
								
								<a class="valider btn btn-primary">suivant</a>
							</div>
							
							<!-- 7 -->
							<div id="7" class="cache cen">
								<label>Dans quelle balise peut-on écrire des méta-données (informations non visibles à l'écran) ?</label><br>
								
								<input type="radio" name="q7" value="r1"/>head<br>
								<input type="radio" name="q7" value="r2"/>div<br>
								<input type="radio" name="q7" value="r3"/>html<br>
								<input type="hidden" name="h7" value="r1"/>
								<br>
								
								<a class="valider btn btn-primary">suivant</a>
							</div>
							
							<!-- 8 -->
							<div id="8" class="cache cen">
								<label>Quelle balise représente l'entête d'un tableau ?</label><br>
								
								<input type="radio" name="q8" value="r1"/>&lt;td&gt;<br>
								<input type="radio" name="q8" value="r2"/>&lt;th&gt;<br>
								<input type="radio" name="q8" value="r3"/>&lt;tr&gt;<br>
								<input type="hidden" name="h8" value="r2"/>
								<br>
								
								<a class="valider btn btn-primary">suivant</a>
							</div>
							
							<!-- 9 -->
							<div id="9" class="cache cen">
								<label>Quelle balise représente une case d'un tableau ?</label><br>
								
								<input type="radio" name="q9" value="r1"/>&lt;tr&gt;<br>
								<input type="radio" name="q9" value="r2"/>&lt;th&gt;<br>
								<input type="radio" name="q9" value="r3"/>&lt;td&gt;<br>
								<input type="hidden" name="h9" value="r3"/>
								<br>
								
								<a class="valider btn btn-primary">suivant</a>
							</div>	
							
							
							<!-- 10 -->
							<div id="10" class="cache cen">
								<label>Si je veux aller sur pause cocoon, comment devrais-je déclarer le lien dans le code?</label><br>
								
								<input type="radio" name="q10" value="r1"/> &lt;a href="https://www.pause-cocoon.fr/"&gt; lien vers pause cocoon &lt;/a&gt;<br>
								<input type="radio" name="q10" value="r2"/> &lt;a href="https://www.pause-cocoon.fr/"&gt; &lt;/a&gt;lien vers pause cocoon <br>
								<input type="radio" name="q10" value="r3"/> &lt;div href="https://www.pause-cocoon.fr/"&gt; lien vers pause cocoon &lt;/div&gt;<br>
								<input type="hidden" name="h10" value="r1"/>
								<br>
								
								<a class="valider btn btn-primary">suivant</a>
							</div>
							
							<div id="end" class="cache cen">
								<p>Quizz terminé ! Voici ton score</p>
								<p id="score">Ton score est de 5/10</p>
								<p id="commentaire">Pas mal...</p>
							</div>
						</form>
						
					</div>
				</div>
						
			
			
			
			</div>
		</div>