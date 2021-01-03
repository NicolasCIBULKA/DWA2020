<!--
 Page affichant le fil d'actualité du site
 ie l'ensemble des posts suivis
 -->
<?php require_once("functions/function.inc.php"); ?>
<?php require_once("class/User.class.php"); ?>
<?php require_once("class/Post.class.php"); ?>
<?php require_once("class/Like.class.php"); ?>
<?php include("templates/head.inc.php"); ?>
<?php 
	session_start();
	if(empty($_SESSION["User"])){
		header("Location:index.php");
	}
 ?>

<style>
.btn-circle{
  width: 1.875rem;
  height: 1.875rem;
  text-align: center;
  padding: 0.375rem 0;
  font-size: 0.75rem;
  line-height: 1.428571429;
  border-radius: 0.938rem;
}
.btn-circle.btn-lg{
  width: 3.125rem;
  height: 3.125rem;
  padding: 0.625rem 1rem;
  font-size: 1.125rem;
  line-height: 1.33;
  border-radius: 1.563rem;
}
</style>
	<?php include ("templates/header.inc.php"); ?>
	
	<?php include("templates/nav.inc.php"); ?>
	
	<h2 id="soustitre">Fil d'actualité</h2>
	<a class="btn rounded-circle researchbutton" href="research.php"title="Rechercher un utilisateur"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-search" fill="white" xmlns="http://www.w3.org/2000/svg" > 
					  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
					  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/></svg>
</a>

<a class="btn rounded-circle messagebutton" href="createpost.php" title="Ecrire un message">
	<span class="fa fa-comment"></span>
</a>
	<div class=" container postelement">
		<div class="container">
			<div class="row">
				<p class="pseudopostelement">Pseudo -</p>
				<p class="idpostelement"> @Identifiant</p>
			</div>
			<div class="row textpostelement">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam corporis, omnis tempora nam voluptates cum qui consectetur ipsum, tempore numquam autem necessitatibus harum hic in rerum molestias atque, veniam minus.
				Recusandae at facere unde quas cum, magnam, saepe minima tempore corporis, non odit iusto, odio consequuntur! Quisquam totam, similique, doloribus nemo earum possimus pariatur, atque id eaque placeat quia dolore.</p>
			</div>
			<div class="row">
				<p>Le 23/12/2020 à 12h23:43</p>
			</div>
			<div class="row justify-content-center commentlike" >
				
				<div class="btn btn-lg likebutton orangecolor">
						<svg id="like1" width="1em" height="1em" viewBox="-0.5 -1 17 17" class="bi bi-heart-fill" fill="white" stroke="orange" xmlns="http://www.w3.org/2000/svg">
  						<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
						</svg>
					Like
				</div>

					<div class="btn btn-lg ">
					<a href="comments.php?idpost=1">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-dots" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  						<path fill-rule="evenodd" d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
					 	<path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
						</svg>
						Commentaires
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container postelement">
		<div class="container">
			<div class="row">
				<p class="pseudopostelement">Pseudo -</p>
				<p class="idpostelement"> @Identifiant</p>
			</div>
			<div class="row textpostelement">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam corporis, omnis tempora nam voluptates cum qui consectetur ipsum, tempore numquam autem necessitatibus harum hic in rerum molestias atque, veniam minus.
				Recusandae at facere unde quas cum, magnam, saepe minima tempore corporis, non odit iusto, odio consequuntur! Quisquam totam, similique, doloribus nemo earum possimus pariatur, atque id eaque placeat quia dolore.</p>
			</div>
			<div class="row">
				<p>Le 23/12/2020 à 12h23:43</p>
			</div>
			<div class="row justify-content-center commentlike" >
				
				<div class="btn btn-lg likebutton orangecolor">
						<svg id="like2" width="1em" height="1em" viewBox="-0.5 -1 17 17" class="bi bi-heart-fill" fill="white" stroke="orange" xmlns="http://www.w3.org/2000/svg">
  						<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
						</svg>
					Like
				</div> 

					<div class="btn btn-lg ">
					<a href="comments.php?idpost=1">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-dots" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  						<path fill-rule="evenodd" d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
					 	<path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
						</svg>
						Commentaires
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container postelement">
		<div class="container">
			<div class="row">
				<p class="pseudopostelement">Pseudo -</p>
				<p class="idpostelement"> @Identifiant</p>
			</div>
			<div class="row textpostelement">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam corporis, omnis tempora nam voluptates cum qui consectetur ipsum, tempore numquam autem necessitatibus harum hic in rerum molestias atque, veniam minus.
				Recusandae at facere unde quas cum, magnam, saepe minima tempore corporis, non odit iusto, odio consequuntur! Quisquam totam, similique, doloribus nemo earum possimus pariatur, atque id eaque placeat quia dolore.</p>
			</div>
			<div class="row">
				<p>Le 23/12/2020 à 12h23:43</p>
			</div>
			<div class="row justify-content-center commentlike" >
				
				<div class="btn btn-lg likebutton orangecolor">
						<svg id="like3" width="1em" height="1em" viewBox="-0.5 -1 17 17" class="bi bi-heart-fill" fill="white" stroke="orange" xmlns="http://www.w3.org/2000/svg">
  						<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
						</svg>
					Like
				</div>

					<div class="btn btn-lg ">
					<a href="#">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-dots" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  						<path fill-rule="evenodd" d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
					 	<path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
						</svg>
						Commentaires
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container postelement">
		<div class="container">
			<div class="row">
				<p class="pseudopostelement">Pseudo -</p>
				<p class="idpostelement"> @Identifiant</p>
			</div>
			<div class="row textpostelement">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam corporis, omnis tempora nam voluptates cum qui consectetur ipsum, tempore numquam autem necessitatibus harum hic in rerum molestias atque, veniam minus.
				Recusandae at facere unde quas cum, magnam, saepe minima tempore corporis, non odit iusto, odio consequuntur! Quisquam totam, similique, doloribus nemo earum possimus pariatur, atque id eaque placeat quia dolore.</p>
			</div>
			<div class="row">
				<p>Le 23/12/2020 à 12h23:43</p>
			</div>
			<div class="row justify-content-center commentlike" >
				
				<div class="btn btn-lg likebutton orangecolor">
						<svg id="like4" width="1em" height="1em" viewBox="-0.5 -1 17 17" class="bi bi-heart-fill" fill="white" stroke="orange" xmlns="http://www.w3.org/2000/svg">
  						<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
						</svg>
					Like
				</div>

					<div class="btn btn-lg ">
					<a href="#">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-dots" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  						<path fill-rule="evenodd" d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
					 	<path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
						</svg>
						Commentaires
					</a>
				</div>
			</div>
		</div>
	</div>
	<input id="iduser" name="iduser" type="hidden" value="<?php echo $_SESSION['User']->getIdUser()?>">
	<div id="postelts">

	</div>
	<script type="text/javascript" src="./scripts/postsndcomments.js"></script>
	<script type="text/javascript" src="./scripts/likeanimation.js"></script>

	<?php include ("templates/footer.inc.php"); ?>
</body>
</html>