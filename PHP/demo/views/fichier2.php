<?php
include 'header.php';
include '../controllers/fichier02.php';
?>
<!-- Un site partenaire mets à votre disposition une liste des nouveaux utilisateurs inscrits.
Cette liste est disponible à cette adresse http://bienvu.net/misc/customers.csv.
Il s'agit d'un fichier CSV où chaque ligne représente un nouvel utilisateur. Les différents champs sont Surname, Firstname, Email, Phone, City, State, ils sont séparés par une virgule ,.
Utilisez la fonction file() pour récupérer le contenu de ce fichier.
Découpez chaque ligne en utilisant une des fonctions suivantes: explode() ou preg_split()
Affichez le résultat dans un tableau HTML (avec Bootstrap si possible) en prenant bien soin de nommer les colonnes du tableau.-->

<div class="container">
   <div class="row">
      <table class="table table-responsive table-dark table-striped mt-5">
         <thead>
            <tr>
               <th> Surname </th>
               <th> Firstname </th>
               <th> Email </th>
               <th> Phone </th>
               <th> City </th>
               <th> State </th>
            </tr>
         </thead>
         <tbody>
             <?php 
                foreach($customers as $customer){
                ?>
                <tr>
                    <?php
                        $line = explode(',', $customer);
                        foreach($line as $detail){
                        ?>
                        <td><?php echo $detail ?></td>
                        <?php
                        }
                    ?>
                </tr>
                <?php
                }
                ?>
         </tbody>
<?php
include 'footer.php';
?>