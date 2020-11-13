<?php include ("templates/head.inc.php"); ?>
 	<body>
    <?php include ("templates/header.inc.php"); ?>
	<?php include("templates/nav.inc.php"); ?>

	<h2 id="soustitre">Options de compte</h2>

	<div class=" text-center container">
			<h3 class="text-center">Informations générales</h3>
			<h4 class="text-center">Informations actuelles</h4>
			<p>Identifiant d'utilisateur : @efiojzeiof</p>
			<p>Pseudo : fjezfj</p>
			<p>Date de Naissance : 12/22/1221</p>
			<p>Nom : fzefze</p>
			<p>Prenom : fjioezjfize</p>
			<h4 class="text-center">Changer les informations</h4>

			<form action="" class="text-center" method="post">
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
				<input type="submit" value="Changer les informations">
			</form>
	</div>
	<div class="container">
		<h3 class="text-center">Image de profil</h3>
		<h4 class="text-center">Image de profil actuelle</h4>

		<!-- METTRE UNE IMAGE CENTREE -->
		<h4 class="text-center">Changer votre image de profil</h4>
		<form action="" class="text-center" method="post">
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