<?php
include '../controllers/table3.php';
include 'header.php';
?>
<link rel="stylesheet" href="../assets/css/style.css">
<div class="container">
    <p><strong>C'est une liste des régions (par ordre alphabétique) suivie du nom des départements. </strong></p>
    <?php
        ksort($departements);

    foreach ($departements as $region => $values) {
        echo $region . ' : ';
        foreach ($values as $departement) {
            echo ' ' . $departement;
        }
    ?>
        <br>
    <?php
    }
    ?>
    <br>

    <p><strong>C'esr une liste des régions suivie du nombre de départements. </strong></p>
    <?php

    foreach ($departements as $region => $values) {
        echo $region . ' ' . '=' . ' ';

        foreach ($values as $departement) {
            $mumeroDepartement = count($values);
        }
        echo $mumeroDepartement;
    ?>
        <br>
    <?php
    }
    ?>
</div>
<?php include 
'footer.php' 
?>