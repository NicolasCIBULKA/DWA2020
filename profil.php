<?php 
	session_start();
	if(empty($_SESSION["User"])){
		header("Location:index.php");
	}
 ?>
<?php include("templates/head.inc.php"); ?>
<body>
<?php include("templates/header.inc.php"); ?>
<?php include("templates/nav.inc.php"); ?>
<a class="btn rounded-circle researchbutton" href="research.php"title="Rechercher un utilisateur"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-search" fill="white" xmlns="http://www.w3.org/2000/svg" > 
					  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
					  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/></svg>
</a>

<a class="btn rounded-circle messagebutton" href="createpost.php" title="Ecrire un message">
	<span class="fa fa-comment"></span>
</a>

<div class="container">

		<div class="row justify-content-center">

			

			<div class="container , border-bottom">
			<!-- Image de Banniere et photo de profile generique à modifier -->
				<div class="row" >
					
					<!--<form action="research.php" method="get">
						<div class="form-group">
							<label for="iduser">Recherche de Personnes:</label>
							<input type="text" id="iduser" name="iduser">
							<input type="submit" value="Rechercher">
						</div>
					</form>-->
				</div>
				<div class="row">
					<div class="col">
						<img  class="img-fluid" id="banner" src="./images/banner-orange.png" alt="profile banner"/>
					</div>
				</div>
				<div class="row">
					<div class="col-3 , col-sm-2 , rounded mx-auto d-block">
						<img class="img-fluid , rounded-circle" id="profile_pic" src="./images/avatar-2.png" alt="Profile Picture"/>
					</div>
				</div>

				<div class="row">
					<div class="col">
						<h2>Pseudo</h2>
						<p>@identifiant</p>
						<h3>Bio</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam corporis, omnis tempora nam voluptates cum qui consectetur ipsum, tempore numquam autem necessitatibus harum hic in rerum molestias atque, veniam minus.
						Recusandae at facere unde quas cum, magnam, saepe minima tempore corporis, non odit iusto, odio consequuntur! Quisquam totam, similique, doloribus nemo earum possimus pariatur, atque id eaque placeat quia dolore.</p>
					</div>
				</div>

			</div>

			<div class="container">

				<div class="row">
					<div class="col">
				<!-- A remplacer par les Post de l'utilisateur avec la classe Post -->
						<article>
							<h2>Post 1</h2>
							<p> Post: Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam corporis, omnis tempora nam voluptates cum qui consectetur ipsum, tempore numquam autem necessitatibus harum hic in rerum molestias atque, veniam minus.
							Recusandae at facere unde quas cum, magnam, saepe minima tempore corporis, non odit iusto, odio consequuntur! Quisquam totam, similique, doloribus nemo earum possimus pariatur, atque id eaque placeat quia dolore.</p>
						</article>

						<article>
							<h2>Post 2</h2>
							<p> Post: Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam corporis, omnis tempora nam voluptates cum qui consectetur ipsum, tempore numquam autem necessitatibus harum hic in rerum molestias atque, veniam minus.
							Recusandae at facere unde quas cum, magnam, saepe minima tempore corporis, non odit iusto, odio consequuntur! Quisquam totam, similique, doloribus nemo earum possimus pariatur, atque id eaque placeat quia dolore.</p>
						</article>

						<article>
							<h2>Post 3</h2>
							<p> Post: Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam corporis, omnis tempora nam voluptates cum qui consectetur ipsum, tempore numquam autem necessitatibus harum hic in rerum molestias atque, veniam minus.
							Recusandae at facere unde quas cum, magnam, saepe minima tempore corporis, non odit iusto, odio consequuntur! Quisquam totam, similique, doloribus nemo earum possimus pariatur, atque id eaque placeat quia dolore.</p>
						</article>
					</div>
				</div>

			</div>
	
		</div>

		<div class="container-fluid">

			<div class="row justify-content-center">

				<div class="form-inline , d-block , d-sm-none , text-center">
                	<div class="form-group">
                    	<form method="get" action="profil.php" >
    						<label for="recherche"></label>
    						<input type="search" class="form-control" id="recherche" placeholder="Recherche Blabla't">
							<button type="submit" class="btn btn-primary">OK</button>
						</form>
                	</div>
            	</div>

			</div>

		</div>

</div>

<?php include("templates/footer.inc.php"); ?>
</body>
</html>