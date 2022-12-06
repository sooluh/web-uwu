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
        <h1>Data Mahasiswa</h1>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">
            Input Data Mahasiswa
        </button>

        <table border="1" class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Nomor Telepon</th>
                    <th>Status</th>
                    <th>Aksi</th>
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
                        <td>
                            <div class="custom-control-inline">
                                <a href="./edit.php?id=<?= $row['id'] ?>" class="btn btn-warning">Ubah</a>
                                <a href="./hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger" onclick="javascript:return confirm('Anda yakin hapus?')">Hapus</a>
                            </div>
                        </td>
                    </tr>
                <?php
                }

                $conn->close();
                ?>
            </tbody>
        </table>

        <a href="./login.php" class="btn btn-primary">Logout</a>
    </div>

    <div class="modal" id="add">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Input Data Mahasiswa</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form action="./insert.php" method="POST">
                    <div class="modal-body">
                        <div class="my-3">
                            <label for="nim">NIM</label>
                            <input type="number" name="nim" id="nim" class="form-control" placeholder="NIM">
                        </div>

                        <div class="my-3">
                            <label for="name">Nama</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nama">
                        </div>

                        <div class="my-3">
                            <label for="dob">Tanggal Lahir</label>
                            <input type="date" name="dob" id="dob" class="form-control" placeholder="Tanggal Lahir">
                        </div>

                        <div class="my-3">
                            <label for="phone">Nomor Telepon</label>
                            <input type="tel" name="phone" id="phone" class="form-control" placeholder="Nomor Telepon">
                        </div>

                        <div class="form-check">
                            <input type="radio" name="status" id="active" class="form-check-input" value="1" checked="checked">
                            <label for="active">Aktif</label>
                        </div>

                        <div class="form-check">
                            <input type="radio" name="status" id="inactive" class="form-check-input" value="0">
                            <label for="inactive">Non Aktif</label>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Simpan</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>