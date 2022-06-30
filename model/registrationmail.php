<?php
session_start();
//Connexion à la BDD
require_once "connectDB.php";

//Récupère les données du formulaire
if ( isset( $_POST['submit']) && isset($_POST['privateData']) && !empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['objMsg']) && !empty($_POST['message'])){
  $nom = htmlspecialchars($_POST['nom']);
  $email = htmlspecialchars($_POST['email']); 
  $objMsg = htmlspecialchars($_POST['objMsg']); 
  $msg = htmlspecialchars($_POST['message']);
}

//Enregistre les données dans blog_Manue_Script.messageenattente
$sqlQuery = "INSERT INTO `blog_manue_script`.`message`(statut, email, msg, nom, objet)
VALUES
(:statut, :email, :msg, :nom, :objet);";
$sqlPrepare = $mysqlConnection->prepare($sqlQuery);
$sqlPrepare->execute([
  'statut' => 'attente',
  'email'=> $email,
  'msg' => $msg,
  'nom' => $nom,
  'objet' => $objMsg
]) or die(print_r($mysqlConnection->errorInfo())) ;

$_SESSION['newsession']='succes';

header('Location: ../view/contact.php');
exit();
?>