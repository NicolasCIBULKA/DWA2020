<?php 
/*
	Script permettant l'eenregistrement des posts dans la base de donnée

*/	
	include("function.inc.php");
	include("../class/Post.class.php");
	// connexion à la BD
	$bdd = ConnectBD();
	// Verification si le post est vide ou pas
	if(empty($_POST["message"])){
		header('Location:feed.php');
	}
	// Verification si un fichier est ajouté au post
	if(empty($_POST["image"])){
		$img = NULL;
	}
	else{
		$img = $_POST["image"];
	}

	if(mime_content_type($_POST["image"] == "png"))

	// enregistrement dans la base de donnée




	// fermeture requetes

?>