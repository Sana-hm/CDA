<?php
include 'control.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
   <!-- link CSS  -->
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>

<body>
    <?php
        if ( isset($formError) && count($formError) === 0 && isset($_POST['validate'])) {
            ?>
            <div class="alert alert-success" role="alert">
                Données valides
            </div>
            <ul>
                <li><?= $nom ?></li>
                <li><?= $prenom ?></li>
                <li><?= $sexe ?></li>
                <li><?= $phone ?></li>
                <li><?= $password ?></li>
                <li><?= $adresse ?></li>
                <li><?= $mail ?></li>
            </ul>
            <?php
        } else {
    ?>
    <form class="form pt-2 pb-5 mt-5" action="#" method="POST" >
        <div class="container">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="<?= isset($_POST['nom']) ? $_POST['nom'] : '' ?>">
                <span class="error"><?= isset($formError['nom']) ? $formError['nom'] : '' ?></span>
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="<?= isset($_POST['prenom']) ? $_POST['prenom'] : '' ?>">
                <span class="error"><?= isset($formError['prenom']) ? $formError['prenom'] : '' ?></span>
            </div>
            <div>
                <span> Sexe </span>
                <div class="row px-5 my-2">
                    <div class="form-check col">
                        <input class="form-check-input" type="radio" name="sexe" id="female">
                        <label class="form-check-label" for="female">
                            Féminin
                        </label>
                    </div>
                    <div class="form-check col">
                        <input class="form-check-input" type="radio" name="sexe" id="male" >
                        <label class="form-check-label" for="male">
                            Masculin
                        </label>
                    </div>
                    
                </div>
                <span class="error"><?= isset($formError['sexe']) ? $formError['sexe'] : '' ?></span>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Téléphone</label>
                <input type="number" class="form-control" id="phone" name="phone"value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>">
                <span class="error"><?= isset($formError['phone']) ? $formError['phone'] : '' ?></span>
            </div>
            <div class="mb-3">
                <label for="adresse" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" value="<?= isset($_POST['adresse']) ? $_POST['adresse'] : '' ?>">
                <span class="error"><?= isset($formError['adresse']) ? $formError['adresse'] : '' ?></span>
            </div>
            <div class="mb-3">
                <label for="mail" class="form-label">E-mail</label>
                <input type="text" class="form-control" id="mail" aria-describedby="emailHelp" name="mail" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>">
                <span class="error"><?= isset($formError['mail']) ? $formError['mail'] : '' ?></span>
                <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>">
                <span class="error"><?= isset($formError['password']) ? $formError['password'] : '' ?></span>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="check" name="check">
                <label class="form-check-label" for="check">Check me out</label>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" name="validate" id="btn" class="mx-auto">Envoyer</button>
            </div>  
         </div>
    </form>
    <?php
        }
     ?>
       <!-- link Javascript  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>