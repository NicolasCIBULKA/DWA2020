 <?php
 	
 	if(isset($_SESSION['user'])) {
	
		session_destroy();
		unset($_SESSION['user']);
    	unset($_POST['identifiant']); 
    	unset($_POST['mdp']);
	}

	header('Location: ../index.php');
?>