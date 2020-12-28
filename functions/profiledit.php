<?php 
	require_once("function.inc.php");
	require_once("../class/User.class.php");
	session_start();
	if(empty($_SESSION["User"])){
		header("Location:index.php");
	}

	$bdd = BDconnect();

	if(empty($_SESSION["User"])){
		header("Location:index.php");
	}
	else{

	if(!empty($_POST["pseudo"])){
		$_SESSION["User"]->setUserName($_POST["pseudo"]);
			$requete="UPDATE users SET username = :username WHERE id_user = :id_user;";
			$req = $bdd->prepare($requete);
		$req->execute(array(':username' => $_POST["pseudo"], ':id_user' => $_SESSION["User"]->getIdUser()));
	}

	if(!empty($_POST["prenom"])){
		$_SESSION["User"]->setFirstName($_POST["prenom"]);
			$requete="UPDATE users SET firstname = :firstname WHERE id_user = :id_user;";
			$req = $bdd->prepare($requete);
		$req->execute(array(':firstname' => $_POST["prenom"], ':id_user' => $_SESSION["User"]->getIdUser()));
	}

	if(!empty($_POST["nom"])){
		$_SESSION["User"]->setLastName($_POST["nom"]);
			$requete="UPDATE users SET lastname = :lastname WHERE id_user = :id_user;";
			$req = $bdd->prepare($requete);
		$req->execute(array(':lastname' => $_POST["nom"], ':id_user' => $_SESSION["User"]->getIdUser()));
		echo $_POST["nom"];
	}

	if(!empty($_FILES['image']['name'])) {
   deleteImage($_SESSION["User"]);
   		$tailleMax = 1097152;
   		$extensionsValides = array('jpg', 'jpeg' , 'png');
   		if($_FILES['image']['size'] <= $tailleMax) {
   			$extension = strtolower(substr(strrchr($_FILES['image']['name'], '.'), 1));
      		if(in_array($extension, $extensionsValides)) {
         		$chemin = "icons/".$_SESSION["User"]->getIdUser().".".$extension;
         		$image = move_uploaded_file($_FILES['image']['tmp_name'],"../".$chemin);
         		if($image) {
         			$requete="UPDATE Users SET url_icon = :icon WHERE id_user = :id_user;";
					$req = $bdd->prepare($requete);
					$req->execute(array(':icon' => $_SESSION["User"]->getIdUser().".".$extension, ':id_user' => $_SESSION["User"]->getIdUser()));
					$_SESSION["User"]->setIcon($_SESSION["User"]->getIdUser().".".$extension);

         		} 
      		}
  		 }
	}

 header("Location:../options.php");
	
	}
 ?>