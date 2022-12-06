<?php

include './koneksi.php';

$nim = (int) $_POST['nim'];
$name = $_POST['name'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$status = (int) $_POST['status'];

$query =
    "INSERT INTO `tb_mahasiswa` (`nim`, `nama`, `tgl_lahir`, `no_telpon`, `status`) " .
    "VALUES ('$nim', '$name', '$dob', '$phone', '$status')";

mysqli_query($conn, $query);
$conn->close();

header('Location: ./mahasiswa.php');
