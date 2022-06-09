<?php
try{
  $mysqlConnection = new PDO('mysql:host=localhost;dbname=blog_manue_script;charset-utf8', 'root', '');
}
catch(Exception $e){
  die('Erreur : '.$e->getMessage());
}
?>