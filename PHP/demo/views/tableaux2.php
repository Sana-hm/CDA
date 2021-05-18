<?php
include '../controllers/table2.php';
include 'header.php';
?>

<div class="container">
    <p><strong>C'est une liste qui afficher des capitales (par ordre alphabétique) suivie du nom du pays.</strong></p>

    <?php
    ksort($capitales);

    foreach ($capitales as $capitale => $pays) {
        echo "$capitale : $pays";
    ?>
        <br>
    <?php
    }
    ?>
 <br>

    <p><strong>C'est une liste des pays (par ordre alphabétique) suivie du nom de la capitale.</p></strong>
    <?php
    asort($capitales);

    foreach ($capitales as $capitale => $pays) {
        echo "$pays : $capitale";
    ?>
        <br>
    <?php
    }
    ?>
 <br>
    <p><strong>C'est un nombre de pays dans le tableau : </strong></p>
    <?php
    echo count($capitales);
    ?>
 <br>

    <p><strong>Supprimer du tableau toutes les capitales ne commençant par la lettre 'B', puis affichez le contenu du tableau.</strong></p>
    <?php
    ksort($capitales);

    foreach ($capitales as $capitale => $pays) {
        if (!preg_match("/^b/i", $capitale)) {
            unset($capitales[$capitale]);
        }
    }

    foreach ($capitales as $capitale => $pays) {
        echo "$capitale : $pays";
    ?>
 <br>
    <?php
    }
    ?>
</div>


<?php include 
'footer.php' 
?>