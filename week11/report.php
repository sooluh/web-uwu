<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-3">
        <h1 class="text-center">Data Mahasiswa</h1>

        <table class="table table-hover">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>NIM</td>
                    <td>Nama</td>
                    <td>Tanggal Lahir</td>
                    <td>Nomor Telepon</td>
                    <td>Status</td>
                </tr>
            </thead>
            <tbody>
                <?php
                include './koneksi.php';

                $query = "SELECT * FROM `tb_mahasiswa`";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['nim'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['tgl_lahir'] ?></td>
                        <td><?= $row['no_telpon'] ?></td>
                        <td><?= $row['status'] ?></td>
                    </tr>
                <?php
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>