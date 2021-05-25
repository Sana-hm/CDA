<?php
$title = 'Accueil';
include 'view/header.php';
include 'model/config.php';
include 'model/read-discs.php';
?>
<div class="container">
    <div class="d-flex my-5">  
        <h1>Liste des disques</h1>
        <div class="ms-auto">
            <a href="/view/form-ajoute.php" class="btn btn-primary">Ajouter</a>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
        <?php
            foreach ($discs as $disc) {
        ?>
        <div class="col">
            <div class="card">
                <img src="/assets/img/<?php echo $disc->disc_picture; ?>" class="card-img-top" alt="<?php echo $disc->disc_picture; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $disc->disc_title; ?></h5>
                    <p class="card-text"><strong><?php echo $disc->artist_name; ?></strong></p>
                    <p class="card-text"><strong>Label : </strong><?php echo $disc->disc_label; ?></p>
                    <p class="card-text"><strong>Year : </strong><?php echo $disc->disc_year; ?></p>
                    <p class="card-text"><strong>Genre : </strong><?php echo $disc->disc_genre; ?></p>
                    <a href="/view/details.php?disc_id=<?php echo $disc->disc_id; ?>"class="btn btn-outline-secondary">Détails</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php
include 'view/footer.php';
?>