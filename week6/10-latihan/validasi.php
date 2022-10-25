<?php

$user = $_POST['user'];
$pass = $_POST['pass'];

if ($user == 'admin' && $pass == 'admin123') {
    echo 'sukses';
    header('Location: data.php');
} else {
    echo 'gagal login';
    header('Location: login.php');
}
