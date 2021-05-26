<?php
include 'header.php';
?>
<div class="container col-lg-4 card mt-4 shadow ">
    <form class="form pt-2 pb-5 mt-5 " action="#" method="POST" >
        <div class="mb-3">
            <div class="mb-5 text-center ">
                <h1>Login</h1>
            </div>

            <div class="mb-3 px-5">
                <label for="mail" class="form-label">Email address</label>
                <input type="email" class="form-control " id="mail" name="mail">
            </div>

            <div class="mb-3 px-5">
                <label for="pass" class="form-label">Password</label>
                <input type="password" class="form-control" id="pass" name="pass">
            </div>

            <div class="text-center mt-5">
                <button type="submit" class="btn btn-outline-dark shadow">Envoyer</button>
            </div>
            </div>
    </form>
 </div>

<?php
include 'footer.php';
?>