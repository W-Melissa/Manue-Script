<?php
//EFFACE LES MESSAGES DE LA TABLE MESSAGEATTENTE

//Connexion à la BDD
require_once "connectDB.php";
$id = htmlspecialchars( $_POST['id']);

if(!empty($id)){
$sqlQuery = $mysqlConnection->prepare("DELETE FROM `blog_manue_script`.`message` WHERE `blog_manue_script`.`message`.`id_msg` = ?");
$sqlQuery->execute(array($id));
echo 'ok';
}else{
  echo 'ko';
}
exit();
?>

