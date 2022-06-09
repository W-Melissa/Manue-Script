<?php
session_start();
//Connexion à la BDD
require_once "connectDB.php";

//Récupère les données du formulaire
if ( isset( $_POST['submit'] ) ) {
  $nom = $_POST['nom'];
  $email = $_POST['email']; 
  $objMsg = $_POST['objMsg']; 
  $msg = $_POST['message'];
}

//Enregistre les données dans blog_Manue_Script.messageenattente
$sqlQueryRegistration = "INSERT INTO `blog_manue_script`.`message`(statut, email, msg, nom, objet)
VALUES
(:statut, :email, :msg, :nom, :objet);";
$sqlQueryRegistrationStatement = $mysqlConnection->prepare($sqlQueryRegistration);
$sqlQueryRegistrationStatement->execute([
  'statut' => 'attente',
  'email'=> $email,
  'msg' => $msg,
  'nom' => $nom,
  'objet' => $objMsg
]) or die(print_r($mysqlConnection->errorInfo())) ;

$_SESSION['newsession']='succes';

//$msgSuccess = '<div style="line-height:50px;
//background-color:rgba(79, 255, 55, 0.5); text-align:center;">Votre message a été envoyé avec succès !</div>';

header('Location: ../view/contact.php');
exit();
?>