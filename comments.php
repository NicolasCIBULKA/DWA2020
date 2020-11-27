<!--
 Page affichant les commentaires d'un post
 -->
<?php 
	session_start();
	if(empty($_SESSION["User"])){
		header("Location:index.php");
	}
	if(empty($_GET["idpost"])){
		header("Location:feed.php");
	}
 ?>
 <?php include("functions/function.inc.php"); ?>
<?php include ("templates/head.inc.php"); ?>
	<?php include ("templates/header.inc.php"); ?>
	
	<?php include("templates/nav.inc.php"); ?>
	
	<h2 id="soustitre">Post</h2>

	<div id="postelement" class="container">
		<div class="container">
			<div class="row">
				<p id="pseudopostelement">Pseudo -</p>
				<p id="idpostelement"> @Identifiant</p>
			</div>
			<div id="textpostelement" class="row">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam corporis, omnis tempora nam voluptates cum qui consectetur ipsum, tempore numquam autem necessitatibus harum hic in rerum molestias atque, veniam minus.
				Recusandae at facere unde quas cum, magnam, saepe minima tempore corporis, non odit iusto, odio consequuntur! Quisquam totam, similique, doloribus nemo earum possimus pariatur, atque id eaque placeat quia dolore.</p>
			</div>
			<div class="row">
				<p>Le 23/12/2020 à 12h23:43</p>
			</div>
			</div>
		</div>
	<h4 class="container" id="soustitrecommentaires">Ecrire un Commentaire</h4>
	<div id="commentelement" class="container">
		<form class="align-items-center col-12 col-md-12 col-sm-12 col-xs-12 form-group" action="functions/createcomment.php" method="post">
			<label for="message" class="form-control-lg">Votre message : </label>
			<textarea class="form-control" name="message" id="message" cols="30" rows="5" aria-describedby="msg"></textarea>
			<small id="msg" class="form-text text-muted"><span id="undertext">Pas plus de 300 caractères ! / <span id="nbcara">300</span> restants</span></small>
			<input type="hidden" name="idpost" value=<?php echo $_GET["idpost"] ?>/>
			<input type="submit" id="submit" value="Écrire un nouveau post !">
			</div>

		</form>
	</div>

	<h3 class="container" id="soustitrecommentaires">Commentaires</h3>


	<?php 
		// recuperation des commentaires associés au post affiché au dessus
		if(isset($_GET["idpost"])){
			$bdd = BDconnect();
			$reqComment = $bdd->prepare("SELECT id_comment, id_writer,id_post_commented, text, DATE_FORMAT(dateComment, '%d/%m/%Y /à %Hh%imin%ss') AS date FROM Comments WHERE id_post_commented = ?");
			$reqComment->execute(array(intval($_GET["idpost"])));
			// On teste si le post à déja des commentaires
			if($reqComment->rowCount() > 0){
				while($rowComment = $reqComment->fetch()){
					$req = $bdd->prepare("SELECT username, id_user FROM Users WHERE id_user = ?");
					$req->execute(array($rowComment[1]));
					$rowUser = $req->fetch();

					// Affichage
					echo "<div id=\"commentelement\" class=\"container\">";
					echo "<div class=\"container\">";
					echo "<div class=\"row\">";
					echo "<p id=\"pseudopostelement\">".$rowUser[0]." -</p>";
					echo "<p id=\"idpostelement\"> @".$rowUser[1]."</p>";
					echo "</div>";
					echo "<div id=\"textpostelement\" class=\"row\">";
					echo "<p>".$rowComment[3]."</p>";
					echo "</div>";
					echo "<div class=\"row\">";
					echo "<p>".$rowComment[4]."</p>";
					echo "</div>";
					echo "<div class=\"row justify-content-center\" id=\"commentlike\">";
					echo "<div class=\"btn btn-lg\">";
					echo "<a href=\"\">";
					echo "<svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-heart\" fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\>";
					echo "<path fill-rule=\"evenodd\" d=\"M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z\"/>";
					echo "</svg>";
					echo "Like";
					echo "</a>";
					echo "</div>";
					echo "</div>";
					echo "</div>";
					echo "</div>";
				}
			}
			else{
				echo "<div id=\"commentelement\" class=\"container\"><p class=\"text-center\">Pas de commentaires pour le moment ...</p></div>";
			}

		}
		else{
			echo "<p class=\"text-center\">Erreur lors de l'accès au commentaires, retournez à la page d'accueil !</p>";
		}
	?>

	<script type="text/javascript" src="scripts/postnbcara.js"></script>
	<?php include ("templates/footer.inc.php"); ?>
</body>
</html>