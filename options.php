<?php include ("templates/head.inc.php"); ?>
<?php include ("./functions/function.inc.php"); ?>
<?php 	require_once("class/User.class.php"); ?>
	<?php session_start(); 
	if(empty($_SESSION["User"])){
		header("Location:index.php");
	}
	?>

 	<body>
    <?php include ("templates/header.inc.php"); ?>
	<?php include("templates/nav.inc.php"); ?>
	<h2 id="soustitre">Options de compte</h2>

	<div class="optionsection text-center container">
		<div>
			<h3 class="text-center">Informations générales</h3>
			<h4 class="text-center">Informations actuelles</h4>
			<p class="font-weight-bold">Identifiant d'utilisateur : <?php echo $_SESSION["User"]->getIdUser(); ?></p>
			<p class="font-weight-bold">Pseudo : <?php echo $_SESSION["User"]->getUserName(); ?> </p>
			<p class="font-weight-bold">Date de Naissance : <?php echo $_SESSION["User"]->getBirthdate(); ?></p>
			<p class="font-weight-bold">Nom : <?php echo $_SESSION["User"]->getLastName(); ?></p>
			<p class="font-weight-bold">Prenom : <?php echo $_SESSION["User"]->getFirstname(); ?></p>
			<h4 class="text-center">Changer les informations</h4>

			<form action="./functions/profiledit.php" class=" text-center optionform" method="post">
				<p>
					<label for="pseudo">Pseudo :</label>
					<input type="text" name="pseudo" id="pseudo">
				</p>
				<p>
					<label for="nom">Nom :</label>
					<input type="text" name="nom" id="nom">
				</p>
				<p>
					<label for="prenom">Prenom :</label>
					<input type="text" name="prenom" id="prenom">
				</p>
				<p>
					<label for="nom">Mot de passe :</label>
					<input type="text" name="mdp" id="mdp">
				</p>
				<p>
					<label for="ancien-mot-de-passe">Ancien mot de passe :</label>
					<input type="password" name="ancien-mdp" id="ancien-mdp">
				</p>
				<input class="btn optionbutton" type="submit" value="Changer les informations">
			</form>
	</div>
</div>
	<div class=" optionsection container">
		<h3 class="text-center">Image de profil</h3>
		<h4 class="text-center">Image de profil actuelle</h4>
			<div class="col-3 , col-sm-2 , rounded mx-auto d-block text-center">
						<img class="img-fluid  rounded-circle" id="profile_pic" src="<?php displayProfilePicture($_SESSION["User"]); ?>" alt="Profile Picture " />
			</div>

		<!-- METTRE UNE IMAGE CENTREE -->
		<h4 class="text-center">Changer votre image de profil</h4>
		<form action="./functions/profiledit.php" class="text-center" method="post" enctype="multipart/form-data">
			<div>
				<label for="image">Modifier votre image de profil :</label>
				<input type="file"  name="image" id="image">
			</div>
			<input class="btn optionbutton" type="submit" value="Changer l'image de profil">
		</form>

		<h3 class="text-center">Bannière</h3>
		<h4 class="text-center">Bannière actuelle</h4>
			<div class="col text-center">
				<img  class="img-fluid" id="banner" style="width:700px;max-height:200px; object-fit:cover" src="<?php  displayBanner($_SESSION["User"]) ?>" alt="profile banner"/>
			</div>
		

		<h4 class="text-center">Changer votre bannière</h4>
		<form action="./functions/profiledit.php" class="text-center" method="post" enctype="multipart/form-data">
			<div>
				<label for="image">Modifier votre bannière :</label>
				<input type="file" name="banniere" id="banniere">
			</div>
			<input class="btn optionbutton" type="submit" value="Changer votre bannière">
		</form>

	</div>
	<?php include ("templates/footer.inc.php");?>
	</body>

</html>