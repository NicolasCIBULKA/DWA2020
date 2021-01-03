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

	$bdd = BDConnect();

	/*$userReq = $bdd->prepare("SELECT * FROM Post WHERE id_writer = ?");
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
	}*/

	$req = $bdd->prepare("(SELECT * FROM Post WHERE id_writer = ?) UNION (SELECT id_post, id_writer, text, url_image, datePost FROM Post NATURAL JOIN LikePost WHERE id_user = ?) ORDER BY id_post DESC");
					$req->execute(array($_GET["iduser"],$_GET["iduser"]));
					if($req->rowCount() == 0) {
						echo "<p class=\"text-center\">Vous n'avez rédigé aucun post</p>";
					}
					else{
					while($row = $req->fetch()){
						$req2 = $bdd->prepare("SELECT * FROM Users WHERE id_user = ?");
						$req2->execute(array($row[1]));
						$rowuser = $req2->fetch();
						echo "<div class=\"container postelement\">";
						echo "<div class=\"row\">";
						echo "<div class=\"col\">";

						/*if($row[1] != $_GET["iduser"]){
							echo "<p class=\"font-italic\">".$_GET['iduser'])." à aimé le post suivant</p>";
						}*/
						$user = new User($rowuser[0], $rowuser[1], $rowuser[5] , $rowuser[2] , $rowuser[3] , $rowuser[4] , $rowuser[7], $rowuser[6]);
						$icon = returnpp($user);
						echo "<div>";
						echo "<a class=\"nameidpost\" href=\"profil.php?iduser=".$row[1]."\"><img class=\"rounded-circle p-2 bd-highlight\" width=\"80px\" height=\"80px\" src=\"".$icon."\" alt=\"Profil Picture\">".$rowuser[1]." - @".$row[1]."</a>";
						$date = date_create($row[4]);
						echo "<p> le ".date_format($date, 'Y-m-d \à H:i:s')."</p>";
						echo "<p>".$row[2]."</p>";
						if(!is_null($row[3])){
							echo "<img class=\"rounded mx-auto d-block\"src=\"".$row[3]."\" width=\"30%\" alt=\"post image\">";
						}
						echo "</div>";
						echo "</div>";
						echo "</div>";
						echo "</div>";
					}
				}

	$followedReq = $bdd->prepare("SELECT id_followed FROM Follow WHERE id_follower = ?");
	$followedReq->execute(array($_GET["iduser"]));
	if($followedReq->rowCount() == 0) {
		echo "<p class=\"text-center\">Vous ne suivez aucune personne</p>";
	}
	else {
		while(($followedRow = $followedReq->fetch()) && ($followedIndex < 20)) {
			$postReq = $bdd->prepare("SELECT * FROM Post WHERE id_writer = ?");
			$postReq->execute(array($followedRow[0]));
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
}
else {
	echo "<p class=\"text-center\">Erreur lors de l'affichage des posts ...</p>";
}

?>