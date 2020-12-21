<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Databases status</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/global.css">
</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Databases Status v1.0</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <button class="btn btn-outline-success" data-toggle="modal" data-target="#add_connexion_modal"><i class="fas fa-plus mr-2"></i>Ajouter une connexion</button>
                <li class="nav-item dropdown ml-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Langage</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Français</a>
                        <a class="dropdown-item" href="#">English</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row justify-content-center mt-5">

            <div class="card col-xl-2 col-md-3 col-xs-8 mt-2 bg-success text-light shadow offset-md-1">
                <div class="card-body">
                    <p class="database-name text-center text-uppercase"><i class="fas fa-database mr-3"></i>ActiveDatabase</p>
                    <p><b>IP:</b> <span class="server-ip ml-auto">152.0.0.1</span></p>
                    <p><b>Status:</b> <span class="database-status"><i class="fas fa-check-circle mr-2"></i>Active</span></p>
                    <div class="buttons text-right">
                        <button class="btn btn-light border-dark"><i class="fas fa-trash"></i></button>
                    </div>
                </div>
            </div>

            <div class="card col-xl-2 col-md-3 col-xs-8 mt-2 bg-light text-dark shadow offset-md-1">
                <div class="card-body">
                    <p class="database-name text-center text-uppercase"><i class="fas fa-database mr-3"></i>InconnuDatabase</p>
                    <p><b>IP:</b> <span class="server-ip ml-auto">152.0.0.1</span></p>
                    <p><b>Status:</b> <span class="database-status"><i class="fas fa-question-circle mr-2"></i>Inconnu</span></p>
                    <div class="buttons text-right">
                        <button class="btn btn-light border-dark"><i class="fas fa-wifi"></i></button>
                        <button class="btn btn-light border-dark"><i class="fas fa-trash"></i></button>
                    </div>
                </div>
            </div>

            <div class="card col-xl-2 col-md-3 col-xs-8 mt-2 bg-danger text-light shadow offset-md-1">
                <div class="card-body">
                    <p class="database-name text-center text-uppercase"><i class="fas fa-database mr-3"></i>ErreurDatabase</p>
                    <p><b>IP:</b> <span class="server-ip ml-auto">152.0.0.1</span></p>
                    <p><b>Status:</b> <span class="database-status"><i class="fas fa-exclamation-circle mr-2"></i>Erreur</span></p>
                    <div class="buttons text-right">
                        <button class="btn btn-light text-danger"><i class="fas fa-undo-alt"></i></button>
                        <button class="btn btn-light text-danger"><i class="fas fa-trash"></i></button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="add_connexion_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-database mr-3"></i>Ajouter une connexion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="db_name">Nom de la base de données</label>
                            <input type="text" class="form-control" id="db_name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Adresse IP du serveur</label>
                            <input type="text" class="form-control" id="ip_address">
                            <small>Si la base de données se trouve sur ce serveur, renseignez simplement "localhost". Sinon, rentrez l'adresse IP.</small>
                        </div>
                        <div class="form-group">
                            <label for="db_name">Nom d'utilisateur</label>
                            <input type="text" class="form-control" id="username">
                        </div>
                        <div class="form-group">
                            <label for="db_name">Mot de passe</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <small>La nouvelle connexion sera enregistrée dans un fichier en local. Tous les mots de passe sont chiffrés.</small>
                        <div class="buttons text-right">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times mr-2"></i>Annuler</button>
                            <button type="button" class="btn btn-primary"><i class="fas fa-plus mr-2"></i>Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="assets/js/global.js"></script>    
    <script src="assets/js/card_gestion.js"></script>

</body>

</html>