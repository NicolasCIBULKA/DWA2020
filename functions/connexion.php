<!--
Le formulaire de connexion de index redirigera ici
On fera donc ici la connexion, et on créera une session

mettre une connexion temporaire tant qu'on a pas l'acces BD en php?
 -->
 <?php

if(isset($_POST['identifiant']) || isset($_POST['mdp'])){
	if($_POST['identifiant'] == "admin" && $_POST['mdp'] == "admin"){
		header('Location: ../feed.php');
	}
	else{
		header('Location: ../index.php');
	}
}
else{
	header('Location: ../index.php');
}

echo $_POST['identifiant'];













?>