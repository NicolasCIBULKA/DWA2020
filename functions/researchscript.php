<?php 

if(isset($_POST["iduser"])){
$bdd = BDconnect();
			$req = $bdd->prepare("SELECT * FROM Users WHERE id_user LIKE ?");
			$i = 0;
			$returnval = "";
			$req->execute(array("%".$_POST["iduser"]."%"));
			if($req->rowCount() == 0){
				$returnval+= "<p class=\"text-center\">Aucun utilisateur ne correspond à votre recherche</p>";
			}
			else{
				while(($row = $req->fetch()) && ($i < 20)){
					$user = new User($row[0], $row[1], $row[5]);
					
					if (is_null($row[6])) {
						$user->setIcon("icons/avatar-2.png");
					}
					else{
						$user->setIcon($row[6]);
					}

					$returnval+=  "<div class=\"row justify-content-center\">";
					$returnval+=  "<div class=\"col-6 col-sm-8 col-xs-12  d-flex flex-row bd-highlight mb-2\">";
					$returnval+=  "<img class=\"rounded-circle p-2 bd-highlight\" src=\"images/avatar-2.png\" width=\"80px\" height=\"80px\" alt=\"\">";
					$returnval+=  "<a href=\"\" class=\"p-2 bd-highlight\">";
					$returnval+=  "<p>".$user->getUserName()."</p>";
					$returnval+=  "<p class=\"font-italic\">@".$user->getIdUser()."</p>";
					$returnval+=  "</a>";
							
					$returnval+=  "</div>";
					$returnval+=  "</div>";
					$i++;
				}
			}
			return $returnval;
		}
		else{
			$returnval=  "<p class=\"text-center\">Erreur lors de la recherche ...</p>";
			return $returnval;
		}

		


?>