<?php include
 'header.php' 
 ?>

  <div class="container">
    <p><strong>C'est un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers.</strong></p>
    <p>
        <?php
        $x = 1;
        do {
            echo $x;
        ?>
            - Je dois faire des sauvegardes régulières de mes fichiers .
    </p>
 <?php
            $x++;
        } while ($x <= 500);

 ?>
  </div>
  
<?php
include 'footer.php';
?>