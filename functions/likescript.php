<?php

include("function.inc.php");
include("../class/User.class.php");

// + A finir de compléter

	$bdd = BDconnect();
	$tmpuser = $_SESSION['User'];
	$req = $bdd->prepare("INSERT INTO LikePost (idUser, idPostCommented) VALUES (?,?)");
	$req->execute(array($tmpuser->getIdUser(),);

	$bdd = BDconnect();
	$tmpuser = $_SESSION['User'];
	$req = $bdd->prepare("INSERT INTO LikePost (idUser, idPostCommented) VALUES (?,?)");
	$req->execute(array($tmpuser->getIdUser(),);


?>