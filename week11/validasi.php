<?php

include './koneksi.php';

$user = $_POST['user'];
$pass = $_POST['pass'];

$query = "SELECT `username`, `pass` FROM `tb_user` WHERE `username` = '$user' AND `pass` = '$pass'";
$result = mysqli_query($conn, $query) or die("Query gagal: " . mysqli_error($conn));
$row = mysqli_fetch_array($result);

$conn->close();

if ($row['username'] === $user && $row['pass'] === $pass) {
    header('Location: ./mahasiswa.php');
} else {
    header('Location: ./login.php');
}
