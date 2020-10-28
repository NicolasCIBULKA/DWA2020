<?php include("templates/head.inc.php"); ?>

<body>
	<?php include("templates/header.inc.php"); ?>
	<form method="post" action="functions/connexion.php">
		<p>
			<label for="identifiant">Identifiant : </label>
			<input type="text" name="identifiant" id="identifiant"/>
		</p>
		<p>
			<label for="mdp">Mot de passe : </label>
			<input type="password" name="mdp" id="mdp"/>
		</p>
		<input type="submit" value="Se connecter">
	</form>
	<p><a href="#">Creer un compte</a></p>

	<?php include("templates/footer.inc.php"); ?>
</body>
</html>