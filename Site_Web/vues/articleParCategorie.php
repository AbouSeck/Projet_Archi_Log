<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Catégorie d'article</title>
	<link rel="stylesheet" type="text/css" href="../styles/bootstrap.min.css">
	<style type="text/css">
		.jumbotron{
			text-shadow: #444 0 1px 1px;
			color: #FFF;
			height: 40vh;
			margin: auto;
			text-align: center;
		}
		h3{color: #c2c;}
	</style>
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<h1 style="font-size:100px; color: #001402 !important;">Archi Logicielle News</h1>      
		    <p style="font-size:25px;">Ne ratez jamais l'actualité !</p>
	  	</div>
	  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		    <a class="navbar-brand" href="../">Accueil</a>
		    <a class="navbar-brand" href="../categories">Catégories</a>
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
		      <a href="../auth"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Connexion</button></a>
		  </div>
		</nav><br>
		<h3>Catégorie : <?php echo $cat; ?></h3><hr>
		<?php 
		    foreach($categorieModel as $apc)
			{
				echo "<div class='card w-85'>";
				echo "<div class='card-body'>";
				echo '<strong>'.$apc['titre'].'</strong><br />';
				echo '<p>'.$apc['contenu'].'</p>';
				echo '<p>'.$apc['dateCreation'].' | Categorie : '.$apc['libelle'].'</p>';
				echo "</div>";
				echo "</div><br>";
			}
		 ?>
	</div>
</body>
</html>




