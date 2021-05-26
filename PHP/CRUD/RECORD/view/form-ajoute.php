<?php
$title = 'form-ajoute';
include 'header.php';
include '../model/config.php';
include '../model/read-artist.php';
include '../controler/control-form-ajoute.php';
?>

<div class="container mt-3">
    <h1>Ajouter un vinyle</h1>

      <form action="#" method="POST" enctype="multipart/form-data">
        <div class="mt-4">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="<?= isset($_POST['title']) ? $_POST['title'] : '' ?>">
            <span class="error"><?= isset($formError['title']) ? $formError['title'] : '' ?></span>
        </div>

        <div class="mt-3">
        <label for="artist" class="form-label">Artist</label>
        <select class="form-select" id="artist" name="artist">
            <option value=""></option>
                <?php 
                foreach ($artists as $artist) {
                ?>

            <option value="<?php echo $artist->artist_id ?>" <?php if(isset($_POST['artist'])){ if($_POST['artist'] === $artist->artist_id){ echo 'selected'; }} ?>><?php echo $artist->artist_name ?></option>
                <?php } ?>
        </select>
        <span class="error"><?= isset($formError['artist']) ? $formError['artist'] : '' ?></span>
        </div>

        <div class="mt-3">
            <label for="year" class="form-label">Year</label>
            <input type="text" class="form-control" id="year" name="year" placeholder="Enter year" value="<?= isset($_POST['year']) ? $_POST['year'] : '' ?>">
            <span class="error"><?= isset($formError['year']) ? $formError['year'] : '' ?></span>
        </div>

        <div class="mt-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre" placeholder="Enter genre (Rock, Pop, Prog...)" value="<?= isset($_POST['genre']) ? $_POST['genre'] : '' ?>">
            <span class="error"><?= isset($formError['genre']) ? $formError['genre'] : '' ?></span>
        </div>

        <div class="mt-3">
            <label for="label" class="form-label">Label</label>
            <input type="text" class="form-control" id="label" name="label" placeholder="Enter label (EMl, Warner, PolyGram, Univers sale...)" value="<?= isset($_POST['label']) ? $_POST['label'] : '' ?>">
            <span class="error"><?= isset($formError['label']) ? $formError['label'] : '' ?></span>
        </div>

        <div class="mt-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="<?= isset($_POST['price']) ? $_POST['price'] : '' ?>">
            <span class="error"><?= isset($formError['price']) ? $formError['price'] : '' ?></span>
        </div>

        <div class="mt-2 mb-2">
            <p>Picture</p>
            <input type="file" value="Choisir un fichier"  name="fileToUpload" id="fileToUpload">
            <span class="error"><?= isset($fileError['fileToUpload']) ? $fileError['fileToUpload'] : '' ?></span>
        </div>

        <div class="mb-5 mt-4">
            <input type="submit" class="btn btn-outline-primary" value="Ajouter" name="validate">
            <a href="../" class="btn btn-outline-danger">Retour</a>
        </div>
    </form>

<?php
include 'footer.php';
?>