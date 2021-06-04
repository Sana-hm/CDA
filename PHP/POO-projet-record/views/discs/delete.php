<?php
$title = 'supprimer-page';
?>

<div class="container">
    <?php
    foreach($discs as $discs){
    ?>
    <div class="row my-5 text-center">
        <h1>Êtes-vous sûr de vouloir supprimer (<span class="text-danger"><?php echo $disc->disc_title ?></span>) ?</h1>
    </div>

     <div class="d-flex justify-content-center">
     <form action="#" method="POST">
        <input type="hidden" value="<?php echo $id ?>" name="id">
        <input type="submit" name="supprim" id="supprim" value="Supprimer" class="btn btn-danger">
        <a href="../" class="btn btn-primary">Retour</a>
     </form>
    </div>
</div>

<?php } ?>
