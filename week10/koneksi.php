<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '123456';
$db_name = 'waska_pemweb';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Koneksi gagal: $conn->conenct_error");
}
