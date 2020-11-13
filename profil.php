<?php include("templates/head.inc.php"); ?>
<body>
<?php include("templates/header.inc.php"); ?>
<?php include("templates/nav.inc.php"); ?>

<div class="container-fluid">

	<div class="row justify-content-center">

		<div class="col-sm-3 , col , text-center">
			<div class="container , border">
				<ul class="list-group list-group-flush">
					<li class="list-group-item"><a href = "#"> Nouveau Poste </a></li>
					<li class="list-group-item"><a href = "#"> Modifier Profil </a></li>
					<li class="list-group-item"><a href = "#"> Autre Option </a></li>
					<li class="list-group-item"><a href = "#"> Autre Option </a></li>
					<li class="list-group-item"><a href = "./functions/deconnexion.php"> Deconnexion </a></li>
				</ul>
			</div>
		</div>
		
		<div class="col-sm-6 , col-12">

			<div class="container-fluid ,border-bottom-0">
			<!-- Image de Banniere et photo de profile generique à modifier -->
				<div class="row">
					<div class="col-12">
					<img  class="img-fluid" id="banner" src="./images/banner-orange.png" alt="profile banner"/>
				</div>
				</div>
				<div class="row">
					<div class="col-sm-2 , col-3 , col-md-3, rounded mx-auto d-block">
						<img class="img-fluid , rounded-circle" id="profile_pic" src="./images/profile-picture.png" alt="Profile Picture"/>
					</div>
				</div>

				<div class="row">
					<div class="col">
						<h2>Bio</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam corporis, omnis tempora nam voluptates cum qui consectetur ipsum, tempore numquam autem necessitatibus harum hic in rerum molestias atque, veniam minus.
						Recusandae at facere unde quas cum, magnam, saepe minima tempore corporis, non odit iusto, odio consequuntur! Quisquam totam, similique, doloribus nemo earum possimus pariatur, atque id eaque placeat quia dolore.</p>
					</div>
				</div>

			</div>

			<div class="container">

				<div class="row">
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

		<div class="col-sm-3 , col-6 , text-center">
			<div class="container">
				<form method="get" action="profil.php">
  					<div class="form-group">
    					<label for="recherche"></label>
    					<input type="search" class="form-control" id="recherche" placeholder="Recherche Blabla't">
  					</div>
  					<div class="form-check , text-left">
    					<input type="checkbox" class="form-check-input" id="user">
    					<label class="form-check-label" for="user">Par Utilisateur</label>
  					</div>
  					<div class="form-check , text-left">
    					<input type="checkbox" class="form-check-input" id="tag">
    					<label class="form-check-label" for="tag">Par Tag</label>
  					</div>
  					<div class="form-check , text-left">
    					<input type="checkbox" class="form-check-input" id="word">
    					<label class="form-check-label" for="word">Par Mots</label>
  					</div>
  					<button type="submit" class="btn btn-primary">OK</button>
				</form>
			</div>
		</div>
	
	</div>

</div>

<?php include("templates/footer.inc.php"); ?>
</body>
</html>