<?php
// RECUPERE MSG DE LA TABLE MESSAGEATTENTE
require "connectDB.php";

$sqlQuery = $mysqlConnection->prepare("SELECT * FROM `blog_manue_script`.`message` WHERE `blog_manue_script`.`message`.`statut` = 'attente' ORDER BY `blog_manue_script`.`message`.`id_msg` DESC");
$sqlQuery->execute();

$data = array();
//Récupérer les lignes
while ( $row = $sqlQuery->fetchAll(PDO::FETCH_ASSOC))  {
    $data = $row;
}
//Afficher le tableau au format JSON
echo json_encode($data);
?>