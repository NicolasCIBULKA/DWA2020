<!--
Page d'accueil permettant la connexion ainsi que la création de compte
 -->

<?php include("templates/head.inc.php"); ?>

<body>
	<?php include("templates/header.inc.php"); ?>
	<div class="container-fluid">
		<div class="row">
			<article class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<h2 class="text-center slogant"> Redécouvrez comment discuter ! </h2>
				<div class="modal-dialog modal-login shadow p-3 mb-5 bg-white">
					<div class="modal-content">
						<div class="modal-header">
							<div class="avatar">
								<img src="images/avatar-2.png" alt="Avatar">
							</div>				
							<h4 class="modal-title">Connexion</h4>	
						</div>
					<div class="modal-body">
						<form method="post" action="functions/connexion.php">
							<div class="form-group">
								<input class="form-control" type="text" name="identifiant" id="identifiant" placeholder="Identifiant" required="required"/>
							</div>
							<div class="form-group">
								<input class="form-control" type="password" name="mdp" id="mdp" placeholder="Mot de passe" required="required"/>
							</div>
							<div class="form-group">
								<input class="btn btn-primary btn-lg btn-block login-btnn" type="submit" value="Se connecter">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<a href="#">Créer un compte</a>
					</div>
				</div>
			</article>
			<article class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pr-0 pt-3">
				<img  class="img-fluid" src="images/womenChatting.jpg"  alt="Discussion">
			</article>
		</div>
	</div>
	<?php include("templates/footer.inc.php"); ?>
</body>
</html>