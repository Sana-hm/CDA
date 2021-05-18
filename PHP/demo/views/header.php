<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>accueil démo</title>

</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="">Accueil</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link active dropdown-toggle" aria-current="page" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Boucles
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/views/exo1.php">Exercice 1</a></li>
                                <li><a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/views/exo2.php">Exercice 2</a></li>
                                <li><a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/views/exo3.php">Tableau multiplication</a></li>                               
                            </ul>    
                        </div>
                    </li>
                    <div class="dropdown">
                            <a class="nav-link active dropdown-toggle" aria-current="page" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Tableaux
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/views/tableaux1.php">Exercice 1</a></li>
                                <li><a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/views/tableaux2.php">Exercice 2</a></li>
                                <li><a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/views/tableaux3.php">Exercice 3</a></li>
                            </ul>    
                        </div>
                    </li>                    
                    <div class="dropdown">
                            <a class="nav-link active dropdown-toggle" aria-current="page" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Function
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/views/function1.php">Exercice 1</a></li>
                                <li><a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/views/function2.php">Exercice 2</a></li>
                                <li><a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/views/function3password.php">Exercice 3</a></li>
                            </ul>    
                        </div>
                    </li>

                    <div class="dropdown">
                            <a class="nav-link active dropdown-toggle" aria-current="page" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Dates
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/views/date.php">Exercice 1</a></li>
                            </ul>    
                        </div>
                    </li>  

                      <div class="dropdown">
                            <a class="nav-link active dropdown-toggle" aria-current="page" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                         fichiers
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/views/fichier1.php">Exercice 1</a></li>
                                <li><a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/views/fichier2.php">Exercice 2</a></li>
                              
                            </ul>    
                        </div>
                    </li>      

                    <div class="dropdown">
                            <a class="nav-link active dropdown-toggle" aria-current="page" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                             Formulaires
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/views/">Exercice 1</a></li>
                                <li><a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/views/">Exercice 2</a></li>
                                <li><a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/views/">Exercice 3</a></li>
                            </ul>    
                        </div>
                    </li>          

                    <div class="dropdown">
                            <a class="nav-link active dropdown-toggle" aria-current="page" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            PDO
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/views/">Exercice 1</a></li>
                                <li><a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/views/">Exercice 2</a></li>
                                <li><a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/views/">Exercice 3</a></li>
                            </ul>    
                        </div>
                    </li>          


                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>
