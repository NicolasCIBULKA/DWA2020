<?php include ("templates/head.inc.php"); ?>
 	<body>
    <?php include ("templates/header.inc.php"); ?>
	<?php include("templates/nav.inc.php"); ?>

	<h2 id="soustitre" class="text-center">Votre post !</h2>
	<div class="container">
		<div class="row justify-content-center">
			<form class=" align-items-center col-12 col-md-6 col-sm-12 col-xs-12 form-group"  action="addpost.php" method="post">
				<div>
					<label for="message" class="form-control-lg">Votre message : </label>
					<textarea class="form-control" name="message" id="message" cols="30" rows="5" aria-describedby="msg"></textarea>
					<small id="msg" class="form-text text-muted">Pas plus de 300 caractères !</small>
				</div>
				<div>
					<label for="image" >Ajouter une image :</label>
					<input type="file" name="image">
				</div>
				<input type="submit" value="Écrire un nouveau post !">
			</form>
		</div>
	</div>





	<?php include ("templates/footer.inc.php");?>
	</body>
</html>