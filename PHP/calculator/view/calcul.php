<?php
include '../controller/controller.php';
include 'header.php';
?>

<div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1>Exercice 3 </h1>
            <table class="table table-dark table-responsive table-hover">

                <caption>table de multiplication</caption>
                <thead>
                    <tr> 
                      <th> - </th>
                      <?php
                      for($a; $a<=12; $a++){
                          ?>
                          <th>
                          <?php echo $a ?>
                          </th>
                          <?php
                      }
                      ?>
                      </tr>
                </thead>
                 <tbody>
                 <?php
                 for($b; $b<=12; $b++){
                     ?>
                     <tr>
                      <td> 
                      <?php echo $b ?>
                      </td>

                      <?php
                      for($c=0; $c<=12; $c++){
                          ?>
                          <td>
                          <?php echo $b * $c ?>
                          </td>
                          <?php 
                      }
                      ?>
                      </tr>
                      <?php
                 }
                 ?>
                </tbody>
            </table>
       </div>
     </div>
</div>


<?php
include 'footer.php';
?>