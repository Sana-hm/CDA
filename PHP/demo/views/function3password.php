<?php
include 'header.php';
?>

<div class="container">
    <p><strong> C'est une fonction qui vérifie le niveau de complexité d'un mot de passe</strong></p>

    <?php
    function complex_password($password)
    {
        if (is_string($password) && strlen($password) >= 8) {
            $resultat = count_chars($password, 1);
            $chiffre = false;
            $majuscule = false;
            $minuscule = false;
            foreach ($resultat as $s => $val) {
                if (48 <= $s && $s <= 57) {
                    $chiffre = true;
                    continue;
                }
                if (65 <= $s && $s <= 90) {
                    $majuscule = true;
                    continue;
                }
                if (97 <= $s && $s <= 122) {
                    $minuscule = true;
                    continue;
                }
            }
            if ($chiffre && $minuscule && $majuscule) {
                return true;
            }
        } else {
            return false;
        }
    }

    ?>

    <?php
    $password = 'TopSecret42';
    $test = complex_password($password);
    if ($test) {
    ?>
        <p class="text-success">The password is correct!</p>
    <?php
    } else {
    ?>
        <p class="text-danger">The password is incorrect!</p>
    <?php
    }
    ?>
</div>

  <?php include
   'footer.php' 
   ?>