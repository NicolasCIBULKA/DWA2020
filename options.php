<?php include ("templates/head.inc.php"); ?>
<?php 	require_once("class/User.class.php"); ?>
	<?php session_start(); ?>

 	<body>
    <?php include ("templates/header.inc.php"); ?>
	<?php include("templates/nav.inc.php"); ?>
	<h2 id="soustitre">Options de compte</h2>

	<div class=" text-center container">
			<h3 class="text-center">Informations générales</h3>
			<h4 class="text-center">Informations actuelles</h4>
			<p>Identifiant d'utilisateur : <?php echo $_SESSION["User"]->getIdUser(); ?></p>
			<p>Pseudo : <?php echo $_SESSION["User"]->getUserName(); ?> </p>
			<p>Date de Naissance : <?php echo $_SESSION["User"]->getBirthdate(); ?></p>
			<p>Nom : <?php echo $_SESSION["User"]->getLastName(); ?></p>
			<p>Prenom : <?php echo $_SESSION["User"]->getFirstname(); ?></p>
			<h4 class="text-center">Changer les informations</h4>

			<form action="./functions/profiledit.php" class="text-center" method="post">
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
				<input type="submit" value="Changer les informations">
			</form>
	</div>
	<div class="container">
		<h3 class="text-center">Image de profil</h3>
		<h4 class="text-center">Image de profil actuelle</h4>

		<!-- METTRE UNE IMAGE CENTREE -->
		<h4 class="text-center">Changer votre image de profil</h4>
		<form action="./functions/profiledit.php" class="text-center" method="post" enctype="multipart/form-data">
			<div>
				<label for="image">Modifier votre image de profil :</label>
				<input type="file" name="image" id="image">
			</div>
			<input type="submit" value="Changer l'image de profil">
		</form>
	</div>

	<?php include ("templates/footer.inc.php");?>
	</body>
</html>