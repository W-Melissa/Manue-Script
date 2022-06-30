<?php
session_start();
require_once "../model/connectDB.php";
if(isset($_POST['submit'])){
    if(!empty($_POST['admin_id']) AND !empty($_POST['admin_pwd'])){
        $admin_id = htmlspecialchars($_POST['admin_id']);
        $admin_pwd = htmlspecialchars($_POST['admin_pwd']);
        $sqlQuery = "SELECT * FROM `blog_manue_script`.`user` WHERE (`blog_manue_script`.`user`.`user`) = :admin_id AND (`blog_manue_script`.`user`.`password`) = md5(:admin_pwd)";
        $sqlPrepare= $mysqlConnection->prepare($sqlQuery);
        $sqlPrepare->execute([
            'admin_id' => $admin_id,
            'admin_pwd' => $admin_pwd
        ]);
        $cpte= $sqlPrepare->rowCount();
        if ($cpte !== 0){
            $_SESSION['sessionadministrator'] = "admin";
            header('Location: ../view/admin.php');
        }
    }
}
?>