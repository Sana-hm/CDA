<?php
$title = 'details-page';
include 'header.php';
include '../model/config.php';
include '../model/read-details.php';
?>

<div class="container">
    <h1>Details</h1>
      <form>
            <?php 
                foreach($discs as $disc) {
            ?>  
         <div class="row ">
            <div class="col">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $disc->disc_title; ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="year" class="form-label">Year</label>
                    <input type="text" class="form-control" id="year" name="year" value="<?php echo $disc->disc_year; ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="label" class="form-label">Label</label>
                    <input type="text" class="form-control" id="label" name="label" value="<?php echo $disc->disc_label; ?>" disabled>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="artist" class="form-label">Artist</label>
                    <input type="text" class="form-control" id="artist"  name="artist" value="<?php echo $disc->artist_name; ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <input type="text" class="form-control" id="genre" name="genre" value="<?php echo $disc->disc_genre; ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="<?php echo $disc->disc_price; ?>" disabled>
                </div>
            </div>
            <p>Picture</p>
            <div class="mb-3">
                <img src="../assets/img/<?php echo $disc->disc_picture; ?>"  class="img-top img-fluid mt-1" alt="<?php echo $disc->disc_picture; ?>">
            </div>

            <div class="mt-1 mb-5">
                <a href="form-modif.php?disc_id=<?= $id ?>" class="btn btn-outline-success">Modifier</a>
                <a href="supprimer.php?disc_id=<?= $id ?>"  class="btn btn-outline-danger">Supprimer</a>
                <a href="../"  class="btn btn-outline-primary">Retour</a>
            </div>   
         </div>
        <?php } ?>
      </form>
</div>

<?php
include 'footer.php';
?>