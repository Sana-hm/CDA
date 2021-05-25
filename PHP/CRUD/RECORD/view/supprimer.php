<?php
$title = 'supprimer-page';
include 'header.php';
include '../model/config.php';
include '../model/read-details.php';
include '../controler/supprim-control.php';
?>
<div class="container">
    <?php
    foreach($discs as $disc){
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
<?php
include 'footer.php';
?>