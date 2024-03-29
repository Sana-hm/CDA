<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
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
        <img
          src="img/jarditou_logo.jpg"
          alt="logo"
          title="logo"
          height="50"
          width="150"
        />
      </div>

      <h3 class="img-fluid col text-right d-none d-sm-block pt-2 display-5">
        Tout le jardin
      </h3>
    </header>

    <nav class="navbar navbar-expand-lg bg-light navbar-light">
      <a class="navbar-brand" href="#">Jardiyou.com</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#collapsibleNavbar"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Accueil</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="tableau.php">Tableau</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Formulaire</a>
          </li>
          <li class="nav-item">
                    <a class="nav-link" href="ajout.php">Ajouter un produit</a>
        </ul>

        <form class="form-inline my-lg-0" action="/action_page.php">
          <input
            class="form-control mr-sm-2"
            type="text"
            placeholder="Votre promotion"
          />
          <button class="btn btn-outline-success" type="submit">
            Rechercher
          </button>
        </form>
      </div>
    </nav>

    <img class="img-fluid" src="img/promotion.jpg" alt="logo" /><br />

    <div class="table-responsive-lg">
      <table class="table table-bordered">
        <thead class="thead-light">
          <tr>
            <th><h5>Photo</h5></th>
            <th><h5>ID</h5></th>
            <th><h5>Catégorie</h5></th>
            <th><h5>Libellé</h5></th>
            <th><h5>Prix</h5></th>
            <th><h5>Couleur</h5></th>
          </tr>
        </thead>

        <tbody>
          <tr class="table-warning">
            <td><img src="img/7.jpg" alt="logo" height="100" width="100" /></td>
            <td>7</td>
            <td>Barbeues</td>
            <td>Aramis</td>
            <td>110.00£</td>
            <td>brun</td>
          </tr>

          <tr>
            <td>
              <img
                src="img/8.jpg"
                alt="logo"
                title="logo"
                height="100"
                width="100"
              />
            </td>
            <td>8</td>
            <td>Barbeues</td>
            <td>Athos</td>
            <td>249.99£</td>
            <td>Noir</td>
          </tr>

          <tr class="table-warning">
            <td>
              <img
                src="img/11.jpg"
                title="logo"
                alt="logo"
                height="100"
                width="100"
              />
            </td>
            <td>11</td>
            <td>Barbeues</td>
            <td>clatronic</td>
            <td>135.90£</td>
            <td>Chrome</td>
          </tr>

          <tr>
            <td>
              <img src="img/12.jpg" alt="logo" height="100" width="100" />
            </td>
            <td>12</td>
            <td>Barbeues</td>
            <td>Camping</td>
            <td>88.00£</td>
            <td>Noir</td>
          </tr>

          <tr class="table-warning">
            <td>
              <img src="img/13.jpg" alt="logo" height="100" width="100" />
            </td>
            <td>13</td>
            <td>Brouette</td>
            <td>Green</td>
            <td>49.00£</td>
            <td>Verte</td>
          </tr>
        </tbody>
      </table>
    </div>

    <footer class="navbar navbar-expand-lg bg-dark navbar-dark rounded">
      <ul class="navbar-nav mr-auto text-white-50 mr-auto .text-black-50">
        <li><a class="nav-link" href="#">Mention légales</a></li>
        <li><a class="nav-link" href="#">Horaires</a></li>
        <li><a class="nav-link" href="#">Plan du site</a></li>
      </ul>
    </footer>
  </body>
</html>
