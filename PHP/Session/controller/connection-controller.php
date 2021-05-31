<?php
$login = 'azerty';
$password = 'azerty'
$role = 'client';
$error = [];

if(isset($_POST['submit']))


if(count($error) === 0) {
    if($login === $checkLogin && $password === $checkPassword) {
        $_SESSION['login'] = $checkLogin;
        $_SESSION['role'] = $role
    }
}