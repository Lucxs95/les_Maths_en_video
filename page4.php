<?php
// index.php
// session_start();
// if(empty($_SESSION['login'])){
	// header('location:index.php');
	// exit();
// }
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title> Les Maths en vidéo </title>
		<link rel="stylesheet" media="screen and (max-width:1920px) and (min-width:480px)" href=" style.css" />
		<link rel="stylesheet" media="screen and (max-width:480px)" href=" style.css" />
		<link rel="icon" type="image/png" href="images/arbre.png">
	</head>
	<header>
		<link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>

		<h1>Les MATHS en vidéo</h1>
		
		<a href="index" class="btn">Home</a>
		<a href="page2.php" class="btn">Cours</a>
		<a href="page4.php" class="btn">Petit +</a>

	</header>
	<main> 
      			
			<a id="contact"></a>
			<h5><strong>Contact</strong></h5>
				<form id="center" method="post" name="contact" enctype="text/plain" action="mailto:lucasb0695@gmail.com">
					<label for="nom" class="formulaire">Votre Nom :</label><br>
					<input type="text" name="nom" id="nom" class="case" required><br><br>
					<label for="nom" class="formulaire">Commentaire :</label><br>
					<textarea name="commentaire" id="Commentaires" class="case" required></textarea><br>
                	<input type="submit" value="Envoyer">
					<br><br>
				</form>
			
			
			</main>
	</body>
</html>