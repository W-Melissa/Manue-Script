<?php
session_start();
session_destroy();
require_once "../model/coAdminPage.php";
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex">
       <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        
        <link rel="stylesheet" href="css/style.css" />
        <title>Administration login - Manue'Script</title>
        <meta name="Manue'Script" content="Vous voulez enchanter vos lecteurs par des articles de blog ou bien les séduire avec de belles fiches produits…"/>
    </head>
    <body class="bg-light container-fluid">
        <h2 class="m-5">Connexion</br>Administration de Manue'Script</h2>
        <form action="" method="POST" class="w-25 text-center mx-auto bg-white p-5 border">
            <div class="mb-3">
                <label for="admin_id" class="form-label">Votre identifiant administrateur :</label>
                <input type="text" class="form-control" id="admin_id" name="admin_id" required>
            </div>
            <div class="mb-5">
                <label for="admin_pwd" class="form-label">Votre mot de passe :</label>
                <input type="password" class="form-control" id="admin_pwd" name="admin_pwd" required>
            </div>
            <div class="">
                <button class="btn btn-primary" type="submit" name="submit">SE CONNECTER</button>
            </div>
            <?php if(isset($cpte) && $cpte == 0) :?>
                <p class="bg-warning bg-opacity-75 mt-5">Votre identifiant ou votre mot de passe est incorrect.</p>
            <?php endif;?>
        </form>
        <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- Bootstrap End -->
    </body>
</html>