<?php
include("../class/User.class.php");
include("../class/Like.class.php");
session_start();
include("function.inc.php");


$lik=explode( 'like',$_GET['postliked'] );


// + A finir de compléter
$like = createLike($lik[0]);
$islike=islike($like,$_SESSION['User']);
	$bdd = BDconnect();
	$tmpuser = $_SESSION['User'];
	if($islike=="true"){
	$req = $bdd->prepare("INSERT INTO likepost (id_post, id_user) VALUES (?,?)");
	$req->execute(array($lik[0],$tmpuser->getIdUser()));
}
	else if ($islike=="false"){
	$req = $bdd->prepare("DELETE FROM likepost wHERE id_post=? AND id_user=? ");
	$req->execute(array($lik[0],$tmpuser->getIdUser()));
}

$like2 = createLike($lik[0]);
echo $like2->getNumberLikes();

?>