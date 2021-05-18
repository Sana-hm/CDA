<?php
include 'header.php';
?>
<link rel="stylesheet" href="../assets/css/style.css">
<div class="container">
    <p><strong> C'est une fonction qui permette de générer un lien.</strong></p>

    <?php
    function lien($lien, $text)
    {
        echo "<a href=" . $lien . ">" . $text . '</a>';
    }
    lien("https://www.reddit.com/", "Reddit Hug");
    ?>

</div>
<?php include 'footer.php' ?>