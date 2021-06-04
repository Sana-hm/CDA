
<div class="container">
    <div class="d-flex my-5">     
        <h1>Liste des disques</h1>
        <div class="ms-auto"><a href="" class="btn btn-secondary shadow">Ajouter</a></div>       
    </div>


    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xxl-4 g-4">

        <?php foreach($discs as $disc) { ?>
            
            <div class="col">   
                <div class="card">
                    <img src="../../assets/img/<?= $disc->disc_picture ?>" alt="image"></p>
                    <div class="card-body">
                        <h3 class="mb-3"><?= $disc->disc_title ?></h3>
                        <p><strong> Year : </strong> <?= $disc->disc_year ?></p>
                        <p><strong>Label : </strong> <?= $disc->disc_label ?></p>
                        <p><strong>Genre :</strong>  <?= $disc->disc_genre ?></p>
                        <p><strong>Price :</strong>  <?= $disc->disc_price ?></p>
                        <p><strong>Artist ID :</strong> <?= $disc->artist_id ?></p>
                        <p><a href="/discs/details/<?= $disc->disc_id ?>" class="btn btn-outline-dark shadow">détails</a></p>
                    </div>
                </div>      
            </div>
        <?php } ?>
    </div>
</div>

