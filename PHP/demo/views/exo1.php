<?php include
 'header.php' 
 ?>

<div class="container">
    <p><strong>C'est un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...</p></strong>
    <?php
    for ($n = 1; $n <= 150; $n++) {
        echo $n . ' ';
        $n++;
    }
    ?>
 </div>  

<?php
include 'footer.php';
?>