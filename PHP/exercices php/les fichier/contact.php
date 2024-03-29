<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>docoument</title>
</head>

<body class="container">
    <header class="row">
        <div class="col d-none d-sm-block">
            <img src="img/jarditou_logo.jpg" alt="logo" title="logo" height="50" width="150" />
        </div>

        <h3 class="img-fluid col d-none d-sm-block text-right pt-2 display-5">
            le qualité depuis 70 ans
        </h3>
    </header>

    <nav class="navbar navbar-expand-lg bg-light navbar-light">
        <a class="navbar-brand" href="#">Jardiyou.com</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tableau.php">Tableau</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.php">Formulaire</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ajout.php">Ajouter un produit</a>
            </ul>

            <form class="form-inline my-lg-0" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Votre promotion" />
                <button class="btn btn-outline-success" type="submit">
                    Rechercher
                </button>
            </form>
        </div>
    </nav>

    <img class="img-fluid" src="img/promotion.jpg" alt="logo" /><br />

    <form id="myform" action="http://bienvu.net/script.php " method="post" onsubmit="return validateForm(this);" name="form">
        <p>* Ces zones sont obligatoires</p>

        <fieldset>
            <legend>Vos coordonnées</legend>

            <label for="vname">Nom*</label>
            <input class="form-control" id="vname" name="vname" type="text" placeholder="Veuillez saisir votre nom" />
            <br />
            <p id="nome"></p>

            <label for="vprenome">Prénom* </label>
            <input class="form-control" type="text" id="vprenome" placeholder="Veuillez saisir votre prénom" name="vprenome" />
            <br />

            <br />
            <p id="pnom"></p>
            <label for="sexe">Sexe* :</label><br />

            <input type="radio" name="sexe" id="sexe" value="feminin" required />
            Féminin

            <input type="radio" id="sexe" name="sexe" value="masculine" />
            Masculin

            <input type="radio" id="sexe" name="sexe" value="neutre" />
            nautre
            <br />
            <br />

            <label for="date">Date de naissance* </label>
            <input class="form-control" type="date" id="date" name="date" required />
            <br />

            <label for="cp"> Code postal* </label>
            <input class="form-control" type="text" id="cp" name="cp" placeholder="" maxlength="5" />
            <br />
            <p id="codp"></p>

            <label for="adr">Adresse</label>
            <input class="form-control" type="text" id="adr" name="adr" placeholder="" />
            <br />
            <p id="aaddrres"></p>

            <label for="ville">Ville</label>
            <input class="form-control" type="text" id="ville" name="ville" placeholder="" />
            <br />
            <p id="villee"></p>

            <label for="email">Email* </label>
            <input class="form-control" type="text" id="email" name="email" placeholder="deve.loper@afpa.fr" required />
        </fieldset>

        <br />
        <fieldset>
            <legend>Votre demande</legend>

            <label for="sujet">Sujet* </label>
            <select class="form-control" id="sujet" size="1" name="sujet" aria-placeholder="Veuillez sélectionner un sujet" required>
                <option select value="">Veuillez séléctionner un sujet</option>
                <option>Mes commandes</option>
                <option>Question sur un produit</option>
                <option>Réclamation</option>
                <option>Autres</option>
            </select>
            <br />

            <label for="vq">Votre question* :</label>
            <textarea class="form-control" id="vq" required></textarea><br />
        </fieldset>

        <input type="checkbox" id="*" name="*" value="*" required />
        <label for="*">
            J'accepte le traitement informatique de ce formulaire</label>
        <br />
        <br />

        <input class="btn btn-primary btn-dark border border-primary" type="submit" name="envoyer" id="Envoyer" value="Envoyer" />
        <input class="btn btn-primary btn-dark border border-primary" type="reset" value="Annuler" name="annuler" id="Annuler" />
        <br /><br />

        <footer class="navbar navbar-expand-lg bg-dark navbar-dark rounded">
            <ul class="navbar-nav mr-auto text-white-50 mr-auto .text-black-50">
                <li><a class="nav-link" href="#">Mention légales</a></li>
                <li><a class="nav-link" href="#">Horaires</a></li>
                <li><a class="nav-link" href="#">Plane du site</a></li>
            </ul>
        </footer>
    </form>
    <script src="jarditou.js" type="text/javascript"></script>
</body>

</html>