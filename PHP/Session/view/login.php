<?php
include 'header.php';
?>
<div class="container col-lg-4 card mt-4 shadow ">

    <?php
    if(isset($_SESSION['login'])){
        ?>
   
    <form class="form pt-2 pb-5 mt-5 " action="#" method="POST" >
        <div class="mb-3">
            <div class="mb-5 text-center ">
                <h1>Login</h1>
            </div>

            <div class="mb-3 px-5">
                <label for="mail" class="form-label">Login</label>
                <input type="text" class="form-control " id="login" name="login">
            </div>

            <div class="mb-3 px-5">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="text-center mt-5">
                <button type="submit" name="submit" class="btn btn-outline-dark shadow">Se connecter</button>
            </div>
            </div>
    </form>
    <?php } ?>
 </div>

<?php
include 'footer.php';
?>