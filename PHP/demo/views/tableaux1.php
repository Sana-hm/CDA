<?php
include '../controllers/table1.php';
include 'header.php';
?>

<div class="container">
   <div class="row">
      <p><strong>C'est un tableau associant à chaque mois de l’année le nombre de jours du mois.</strong></p>
      <table class="table table-responsive table-dark table-striped">
         <thead>
            <tr>
               <th> Mois </th>
               <th> Nombre de jours</th>
            </tr>
         </thead>

         <tbody>
            <?php
            asort($months);
            foreach ($months as $mois => $jours) {
            ?>
               <tr>
                  <td>
                     <?php echo $mois ?>
                  </td>
                  <td>
                     <?php echo $jours ?>
                  </td>
               </tr>
            <?php
            } ?>
         </tbody>
      </table>
   </div>
</div>

<?php include 
'footer.php' 
?>