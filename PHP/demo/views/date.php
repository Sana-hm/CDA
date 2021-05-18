<?php
include 'header.php';
?>
<!-- C'est un numéro de semaine de la date suivante : 14/07/2019  -->

<div class="container"><br>
  <h1><strong> Exercice 1 </strong></h1>

  <?php
  date_default_timezone_set("Europe/Paris");

  $time = strtotime("14-07-2019");
  $date = date("W", $time); ?>
  <strong>Le numéro de semaine de la date suivante 14/07/2019 : <?php echo  $date; ?> </strong>



  <!-- Combien reste-t-il de jours avant la fin de votre formation. -->
  <h1><strong> Exercice 2 </strong></h1>
  <strong>Combien reste-t-il de jours avant la fin de votre formation ? </strong>
  <?php
  $end = new DateTime();
  $start = new DateTime('10-12-2021');
  $diff = $end->diff($start);

  echo $diff->days . " jour ";
  ?>


  <!-- Comment déterminer si une année est bissextile ? -->
  <h1><strong> Exercice 3 </strong></h1>
  <?php
  $date = new DateTime();

  if ($date->format("L") == 1) {
  ?>
    <strong>Nous sommes d'une année bissextile. </strong>
  <?php
  } else {
  ?>
    <strong>Nous ne sommes pas d'une année bissextile. </strong>
  <?php
  } ?>


  <!-- Montrez que la date du 32/17/2019 est erronée. -->
  <h1 ><strong> Exercice 4 </strong></h1>

  <?php
  $Date =  DateTime::createFromFormat("d/m/Y", "32/17/2019");
  $errors = DateTime::getLastErrors();

  if ($errors["error_count"] > 0 || $errors["warning_count"] > 0) {
  ?>
    <strong>La date du 32/17/2019 est erronée!</strong>
  <?php
  } else {
  ?>
    <strong>La date du 32/17/2019 est valide!</strong>
  <?php
  }
  ?>


  <!-- Affichez l'heure courante sous cette forme : 11h25. -->
  <h1><strong> Exercice 5 </strong></h1>
  <strong> C'est l'heure courante sous cette forme : </strong>
  <?php
  $heure = new DateTime();
  echo $heure->format("H\hi");
  ?>


  <!-- Ajoutez 1 mois à la date courante. -->
  <h1><strong> Exercice 6 </strong></h1>
  <strong>On ajoute 1 mois à la date courante : </strong>
  <?php

  $date = new DateTime();
  $interval = new DateInterval("P1M");

  $date->add($interval);

  echo $date->format("d/m/Y");
  ?>


  <!-- Que s'est-il passé le 1000200000 -->

  <h1><strong> Exercice 7 </strong></h1>
  <strong> Que s'est-il passé le 1000200000 : </strong>
  <?php
  $date = new DateTime();
  $date->setTimestamp(1000200000);
  echo $date->format("d-m-Y");
  ?>
</div>

<?php include
 'footer.php'
  ?>