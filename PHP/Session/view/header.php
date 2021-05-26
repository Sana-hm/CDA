<!DOCTYPE html>
<html lang="fr">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link CSS -->
  <link href="../assets/Css/style.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Form</title>
</head>

<body class="body">
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
                <a class="nav-link" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/index.php">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/view/login.php">login</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/view/inscrip.php">Inscription</a>
            </li>
        </ul>

      <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
        
    </div>
    </div>
  </nav>
