<?php
// ---------------------------------------
//				FONCTIONS BD
// ---------------------------------------

// Fonction de connexion à la bd
function BDconnect(){
	try{
		$bdd=new PDO('mysql:host=localhost;dbname=dwaprojet;charset=utf8','dwauser','A123456*', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		
	}
	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}

	return $bdd;
}

// Fonction de fermeture de la Requete

function RequestClose($req){
	$req->closeCursor();
}


// ---------------------------------------
//			FONCTIONS AFFICHAGE
// ---------------------------------------

// affichage post

function displayPost(Post $post){

	$user = $post->getUser();
	echo "<div id=\"postelement\" class=\"container\">";
	echo "<div class=\"container\">";
	echo "<div class=\"row\">";
	echo "<p id=\"pseudopostelement\">".$user->getUsername()." -</p>";
	echo "<p id=\"idpostelement\"> @".$user->getIdUser()."</p>";
	echo "</div>";

	echo "<div id=\"textpostelement\" class=\"row\">";
	echo "<p>".$post->getTextPost()."</p>";

	echo "</div>";
	/*echo "<div class=\"row\">";
	echo "<p>Le 23/12/2020 à 12h23:43</p>";
	echo "</div>";*/
	echo "<div class=\"row justify-content-center\" id=\"commentlike\">";
	echo "<div class=\"btn btn-lg \">";

	echo "<a href=\"\">";

	echo "<svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-heart\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">";
	echo "<path fill-rule=\"evenodd\" d=\"M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z\"/>";
	echo "</svg>";
	echo "Like";
	echo "</a>";
	echo "</div>";

	echo "<div class=\"btn btn-lg \">";
	echo "<a href=\"comments.php\">";
	echo "<svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-chat-dots\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">";
  	echo "<path fill-rule=\"evenodd\" d=\"M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z\"/>";
	echo "<path d=\"M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>";
	echo "</svg>";
	echo "Commentaires";
	echo "</a>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	
}

/*function likeProcess(Post $post) {
	// Traitement Likes

	$bdd = BDconnect();
	$tmpuser = $_SESSION['User'];
	$req = $bdd->prepare("INSERT INTO LikePost (idUser, idPostCommented) VALUES (?,?)");
	$req->execute(array($tmpuser->getIdUser(),);

	$bdd = BDconnect();
	$tmpuser = $_SESSION['User'];
	$req = $bdd->prepare("INSERT INTO LikePost (idUser, idPostCommented) VALUES (?,?)");
	$req->execute(array($tmpuser->getIdUser(),);


?>*/


