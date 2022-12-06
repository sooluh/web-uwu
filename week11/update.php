<?php

include './koneksi.php';

$id = $_POST['id'];
$nim = $_POST['nim'];
$name = $_POST['name'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$status = $_POST['status'];

$query =
    "UPDATE `tb_mahasiswa` SET `nim` = '$nim', `nama` = '$name', `tgl_lahir` = '$dob', " .
    "`no_telpon` = '$phone', `status` = '$status' WHERE `id` = '$id'";

if (mysqli_query($conn, $query)) {
    $conn->close();
    header('Location: ./mahasiswa.php');
} else {
    $conn->close();
    echo 'Error updating record: ' . mysqli_error($conn);
}
