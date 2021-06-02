
<div class="container">
    <div class="row mt-5">
        <div class="col-sm-12">
        <table class="table table-dark table-striped">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Année</th>
                <th>Lable</th>
                <th>Genre</th>
                <th>prix</th>
                <th>Id artist</th>
                <th>Action</th>
            </thead>
         <tbody>
            <?php foreach($discs as $disc) { ?>
           <tr>
                <td><?= $disc->disc_id ?></td>
                <td><?= $disc->disc_title ?></td>
                <td><?= $disc->disc_year ?></td>
                <td><?= $disc->disc_label ?></td>
                <td><?= $disc->disc_genre ?></td>
                <td><?= $disc->disc_price ?></td>
                <td><?= $disc->artist_id ?></td>
                <td><a href="/discs/discDetail/<?= $disc->disc_id ?>" class="btn btn-outline-warning">détails</a></td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
        </div>
    </div>
</div>
