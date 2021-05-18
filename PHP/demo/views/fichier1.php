<?php
include 'header.php';
?>
  <div class="container"><br>
    <h1><strong> Exercice 1 </strong></h1>
    <p>C'est un programme qui lit ce fichier et qui construit une page web contenant une liste de liens hypertextes.</p>
    <!-- Écrire un programme qui lit ce fichier et qui construit une page web contenant une liste de liens hypertextes.
   Utilisez la fonction file() qui permet de lire directement un fichier et renvoie son contenu sous forme de tableau. -->

    <?php
    $liste = file("../assets/liens.txt");

    foreach ($liste as $list) {?>

       <p><a href="<?php echo $list ?>"><?php echo $list ?></p>
     <?php }
     ?>

<?php
include 'footer.php';
?>