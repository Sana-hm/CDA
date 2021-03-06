<?php
$PageTitle = 'details-page';
?>

<div class="container">
    <h1>Details</h1>
      <form> 
         <div class="row ">
            <div class="col">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= isset($disc->disc_title) ? $disc->disc_title : '' ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="year" class="form-label">Year</label>
                    <input type="text" class="form-control" id="year" name="year" value="<?= isset($disc->disc_year) ? $disc->disc_year : ''  ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="label" class="form-label">Label</label>
                    <input type="text" class="form-control" id="label" name="label" value="<?=isset($disc->disc_label) ? $disc->disc_label : ''  ?>" disabled>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="artist" class="form-label">Artist</label>
                    <input type="text" class="form-control" id="artist"  name="artist" value="<?=isset($disc->artist_name) ?  $disc->artist_name : '' ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <input type="text" class="form-control" id="genre" name="genre" value="<?=isset($disc->disc_genre) ? $disc->disc_genre : '' ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="<?=isset($disc->disc_price) ? $disc->disc_price : '' ?>" disabled>
                </div>
            </div>
            <p>Picture</p>
            <div class="mb-3">
                <img src="../../assets/img/<?=isset($disc->disc_picture) ? $disc->disc_picture : '' ?>"  class="img-top img-fluid mt-1" alt="<?=isset($disc->disc_picture) ? $disc->disc_picture : ''  ?>">
            </div>

            <div class="mt-1 mb-5">
                <a href="../update/<?= isset($disc->disc_id ) ? $disc->disc_id  : '' ?>" class="btn btn-outline-success">Modifier</a>
                <a href="../delete/<?= isset($disc->disc_id) ? $disc->disc_id : '' ?>"  class="btn btn-outline-danger">Supprimer</a>
                <a href="../index"  class="btn btn-outline-primary">Retour</a>
            </div>   
         </div>
      </form>
</div>