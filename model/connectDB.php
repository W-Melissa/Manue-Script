<?php
try{
  $mysqlConnection = new PDO('mysql:host=localhost;dbname=blog_manue_script;charset-utf8', 'admin_manue', 'admin_manue');
}
catch(Exception $e){
  die('Erreur : '.$e->getMessage());
}
?>