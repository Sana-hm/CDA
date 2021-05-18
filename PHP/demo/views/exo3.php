<?php
include '../controllers/exo3Controller.php';
include 'header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Exercice 3</h1>
            <table class="table table-responsive table-dark">
                <caption>Table de multiplication</caption>
                <thead>
                    <tr>
                        <th> - </th>
                        <?php
                        for ($a; $a <= 12; $a++) {
                        ?>
                            <th><?= $a ?></th>
                        <?php
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($b = 0; $b <= 12; $b++) {
                    ?>
                        <tr>
                            <td><?= $b ?></td>
                            <?php
                            for ($c = 0; $c <= 12; $c++) {
                            ?>
                                <td><?= $b * $c ?></td>
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
