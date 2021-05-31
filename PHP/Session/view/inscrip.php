<?php
include 'header.php';
?>

 <div class="container col-lg-4 card mt-4 shadow ">
    <form class="form pt-2 pb-5 mt-5 " action="#" method="POST" >
        <div class="mb-3 px-5">
            <div class="mb-5 text-center">
                <h1>Inscription</h1>
            </div> 
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom">
        </div>

        <div class="mb-3 px-5">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom">
        </div>

        <div class="mb-3 px-5">
            <label for="mail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="mail" name="mail">
            <div id="mail" class="form-text">Nous ne partagerons jamais votre e-mail avec qui que ce soit.</div>
         </div>

        <div class="mb-3 px-5">
            <label for="pass" class="form-label">Password</label>
            <input type="password" class="form-control" id="pass" name="pass">
        </div>

        <div class="text-center mt-5">
            <button type="submit" name="submit" class="btn btn-outline-dark shadow">Envoyer</button>
        </div>
    </form>
 </div>

 <?php
include 'footer.php';
?>