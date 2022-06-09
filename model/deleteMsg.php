<?php
//EFFACE LES MESSAGES DE LA TABLE MESSAGEATTENTE

//Connexion à la BDD
require_once "connectDB.php";
$id = $_POST['id'];

if(!empty($id)){
//efface les données dans la table messageattente
$res = $mysqlConnection->prepare("DELETE FROM `blog_manue_script`.`message` WHERE `blog_manue_script`.`message`.`id_msg` = ?");
$res->execute(array($id));
echo 'ok';
}else{
  echo 'ko';
}
//header('Location: contact.php');
exit();
?>

