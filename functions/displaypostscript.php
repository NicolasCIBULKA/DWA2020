<?php

include("function.inc.php");
include("../class/User.class.php");
include("../class/Post.class.php");
include("../class/Like.class.php");

if(isset($_GET["iduser"])) {
	$followedIndex = 0;
	$userIndex = 0;
	$postIndex = 0;
	$comIndex = 0;
<<<<<<< HEAD
	$bdd = BDConnect();

	$userReq = $bdd->prepare("SELECT * FROM Post WHERE id_writer = ?");
	$userReq->execute(array($_GET["iduser"]));
	if($userReq->rowCount() == 0) {
		echo "<p class=\"text-center\">Vous n'avez rédigé aucun post</p>";
	}
	else {
		while(($userRow = $userReq->fetch() && ($userIndex < 20))) {
			$postLike = createPostLike($userRow[0]);
			$userPost = new Post($userRow[0],$userRow[2],$userRow[3],$postLike,$userRow[1],$userRow[4]);
			displayPost($userPost);
			$userIndex++;
		}
	}

	$followedReq = $bdd->prepare("SELECT id_followed FROM Follow where id_follower = ?");
=======
	$bdd = BDconnect();
	$followedReq = $bdd->prepare("SELECT idFollowed FROM Follow where idFollower = ?");
>>>>>>> 385f5ce7ee3ea8167161cc991c036142d421bd0f
	$followedReq->execute(array($_GET["iduser"]));
	if($followedReq->rowCount() == 0) {
		echo "<p class=\"text-center\">Vous ne suivez aucune personne</p>";
	}
	else {
		while(($followedRow = $followedReq->fetch() && ($followedIndex < 20))) {
<<<<<<< HEAD
			$postReq = $bdd->prepare("SELECT * FROM Post WHERE id_writer = ?");
			$postReq->execute(array($followedRow[1]));
=======
			$postReq = $bdd->prepare("(SELECT * FROM Post where id_writer = ?) UNION (SELECT * FROM Post where id_writer = ?) ORDER BY id_post DESC");
			$postReq->execute(array($followedRow[1],$_GET["iduser"]));
>>>>>>> 385f5ce7ee3ea8167161cc991c036142d421bd0f
			while(($postRow = $postReq->fetch()) && ($postIndex < 20)) {
				$postLike = createPostLike($postRow[0]);
				$post = new Post($postRow[0],$postRow[2],$postRow[3],$postLike,$postRow[1],$postRow[4]);
				displayPost($post);
				$postIndex++;

				/*$comReq = $bdd->prepare("SELECT * FROM Comments where idPostCommented = ?");
				$comReq->execute($postRow[0]);
				while(($comRow = $comReq->fetch()) && ($comIndex < 20)) {
					$comWriterReq = $bdd->prepare("SELECT * FROM User where idUser = ?");
					$comWriterReq->execute($comRow[1]);
					$comWriterRow = $comWriterReq->fetch();
					$comment = new Comment($comRow[3],false,$comRow[4]);
					$commentWriter = new User($comWriterRow[0],$comWriterRow[1],$comWriterRow[5]);
					displayComment($comment,$commentWriter);
					$comIndex++;
				}*/
			}
			$followedIndex++;
		}
	}
<<<<<<< HEAD
}
else {
	echo "<p class=\"text-center\">Erreur lors de l'affichage des posts ...</p>";
=======
>>>>>>> 385f5ce7ee3ea8167161cc991c036142d421bd0f
}

?>