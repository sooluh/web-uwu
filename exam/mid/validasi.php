<?php

$user = isset($_POST['user']) ? $_POST['user'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$data = [
    'admin' => 'admin123',
    'suluh' => 'test123',
];

if (in_array($user, array_keys($data)) && $password === $data[$user]) {
    header('Location: ./dashboard.php');
} else {
    header('Location: ./login.php');
}
