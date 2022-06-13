<?php
//MODIFIE STATUT MESSAGE DE ATTENTE A ARCHIVE
//Connexion à la BDD
require_once "connectDB.php";
$id = htmlspecialchars( $_POST['id']);

if(!empty($id)){
$archive = $mysqlConnection->prepare("UPDATE `blog_manue_script`.`message` SET `blog_manue_script`.`message`.`statut` = 'archive'
WHERE `blog_manue_script`.`message`.`id_msg` = ?;");
$archive->execute(array($id));
echo 'ok';
}else{
  echo 'ko';
}
//header('Location: contact.php');
exit();
?>

