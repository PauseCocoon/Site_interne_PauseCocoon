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
						<h1>Autres éléments du HTML</h1>
						<br/>
						
						<h2>Les éléments div et span</h2>
						
						<p>
							L'élément &lt;div&gt; (qui signifie division du document) est un conteneur générique qui permet d'organiser le contenu sans représenter rien de particulier.
							Il peut être utilisé afin de grouper d'autres éléments pour leur appliquer un style (en utilisant les attributs class ou id) 
						</p>
						
						<h2>Les listes</h2>
						
						<p>Une liste est un élément regroupant de façon ordonnées ou non des informations</p>
						
						
						<p>l'élément &lt;ul&gt; est l'élément permettant de creer une liste non-ordonnée <p>
						
						<p>l'élément &lt;ol&gt; est l'élément permettant de creer une liste ordonnée <p>
						
						<p>Chacun des éléments de la liste sera placé à l'intérieur d'un élément &lt;li&gt;</p>
						
						<strong>cas d'une liste non-ordonnée: </strong><br/><br/>
						
						<img src="capture3.png"/><br/>
						<strong>Resultat : </strong><br/>
						<img src="capture4.png"/><br/>
						
						<strong>cas d'une liste ordonnée: </strong> <br/><br/>
						
						<img src="capture6.png"/><br/>
						<strong>Resultat : </strong><br/>
						<img src="capture5.png"/>
						
						<h2>Les tableaux</h2>
						
						<p>Il est aussi possible de creer des tableaux en html, les principales balises à retenir sont les suivants: </p><br/>
						
						<p>&lt;table&gt; : sert à déclarer un tableau</p>
						
						<p>&lt;th&gt; (h pour head, ou entête en anglais): signifiant l'entête d'une colonne d'un tableau</p>
						
						<p>&lt;tr&gt; (r pour row, ou ligne en anglais) : signifiant une ligne</p>
						
						<p>&lt;td&gt; : signifiant une case d'un tableau</p><br/>
						
						<p>Voyons un exemple: </p>
						
						<img src="capture7.png"/>
						
						<strong>Resultat : </strong><br/>
						
						<img src="capture8.png"/>
						
						<h2>Les liens</h2>
						
						<p>
							Cette partie du cours sert à comprendre comment passer d'une page à une autre, en effet lorsque vous êtes sur internet 
							et que vous allez d'un site à un autre, vous activez le systeme de lien entre site. Pour cela, on doit renseigner 
							au site auquelle on quitte le lien du site auquelle on veut aller.<br/>
							En HTML, cela fonctionne en utilisant la balise &lt;a&gt; et en rajoutant l'attribut href, qui permet de préciser le lien du site
							auquelle on veut aller.<br/>
						</p>
						
						<p>Exemple : </p>
						
						<p>&lt;a href="https://www.google.fr"&gt;Lien vers google&lt;/a&gt;</p>
						
						<strong>Donne le resultat : </strong>
						
						<p><a href="https://www.google.fr">Lien vers google</a></p><br/>
						
						<p>Ce qui sera englobé par la balise &lt;a&gt; sera considéré comme un lien, le reste non, si j'écris : <p>
						
						<p>&lt;a href="https://www.google.fr"&gt;Lien&lt;/a&gt; vers google</p>
						
						<strong>Donne le resultat : </strong>
						
						<p><a href="https://www.google.fr">Lien</a> vers google</p><br/>
						
						<p>Nous avons maintenant vu les principaux éléments du langage HTML, la prochaine page sera un quizz pour vérifier 
						si vous avez bien compris ce cours, ainsi que les précédents. Nous verrons dans la deuxième partie du tutoriel comment rendre plus harmonieux
						les éléments grâce au CSS</p>
						
						<a href="quizz.php">Page suivante</a>
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