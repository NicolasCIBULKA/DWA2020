<?php

include("function.inc.php");
include("../class/User.class.php");

if(isset($_GET["iduser"])) {

	$followedIndex = 0;
	$postIndex = 0;
	$comIndex = 0;
	$bdd = BDConnect();
	$followedReq = $bdd->prepare("SELECT idFollowed FROM Follow where idFollower = ?");
	$followedReq->execute($_GET["iduser"]);
	if($followedReq->rowCount() == 0) {
		echo "<p class=\"text-center\">Vous ne suivez aucune personne</p>";
	}
	else {
		while(($followedRow = $followedReq->fetch() && ($followedIndex < 20)) {
			$postReq = $bdd->prepare("SELECT * FROM Post where idWriter = ?");
			$postReq->execute($followedRow[1]);
			while(($postRow = $postReq->fetch()) && ($postIndex < 20)) {
				$post = new Post($postRow[2],$postRow[3],false,$postRow[1]);
				displayPost($post);
				$postIndex++;

				$comReq = $bdd->prepare("SELECT * FROM Comments where idPostCommented = ?");
				$comReq->execute($postRow[0]);
				while(($comRow = $comReq->fetch()) && ($comIndex < 20)) {
					$comWriterReq = $bdd->prepare("SELECT * FROM User where idUser = ?");
					$comWriterReq->execute($comRow[1]);
					$comWriterRow = $comWriterReq->fetch();
					$comment = new Comment($comRow[3],false,$comRow[4]);
					$commentWriter = new User($comWriterRow[0],$comWriterRow[1],$comWriterRow[5]);
					displayComment($comment,$commentWriter);
					$comIndex++;
				}
			}
		$followedIndex++;
		}
	}
else {
	echo "<p class=\"text-center\">Erreur lors de l'affichage des posts ...</p>";
}
?>