
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex">
       <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        
        <link rel="stylesheet" href="../css/style.css" />
        <script src="../script/displayMsgAdmin.js" async></script>
        <script src="../script/controlActionMsg.js" async></script>
        <title>Administration - Manue'Script</title>
        <meta name="Manue'Script" content="Vous voulez enchanter vos lecteurs par des articles de blog ou bien les séduire avec de belles fiches produits…"/>
    </head>
    <body class="bg-light">
        <h2 class="m-5">Administration de Manue'Script</h2>
        <ul class="nav nav-tabs">
            <li class="nav-item bg-primary bg-opacity-10 border" id="attente">
                <a class="nav-link" aria-current="page">Messages en attente</a>
            </li>
            <li class="nav-item bg-primary bg-opacity-10 border" id="archive">
                <a class="nav-link">Messages archivés</a>
            </li>
        </ul>
        <div class="container-fluid">
            <table class="table table-info table-striped table-bordered">
                <thead>
                    <tr class="row">
                        <th scope="col" class="col-1 text-center">id_msg / Actions</th>
                        <th scope="col" class="col-2 d-flex align-items-center justify-content-center">Nom</th>
                        <th scope="col" class="col-2 d-flex align-items-center justify-content-center">Email</th>
                        <th scope="col" class="col-2 d-flex align-items-center justify-content-center">Objet</th>
                        <th scope="col" class="col-5 d-flex align-items-center justify-content-center">Message</th>
                    </tr>
                </thead>
                <tbody id="waitingMessage">
                
                </tbody>
            </table>
        </div>
        <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- Bootstrap End -->
    </body>
</html>