<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <style>
        .container {
            width: 80%;
            box-shadow: 0 3px 20px rgba(0, 0, 0, 0.5);
            padding: 40px;
        }
    </style>
</head>

<body>
    <?php
    include './koneksi.php';

    $id = $_GET['id'];
    $query = "SELECT * FROM `tb_mahasiswa` WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    ?>

    <div class="container">
        <h2 class="alert alert-primary text-center mt-3">
            Edit Data Mahasiswa
        </h2>

        <form action="./update.php" method="POST">
            <div class="my-3">
                <label>ID:</label>
                <span><?= $row['id'] ?></span>
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
            </div>

            <div class="my-3">
                <label for="nim">NIM</label>
                <input type="number" name="nim" id="nim" class="form-control" placeholder="NIM" value="<?= $row['nim'] ?>">
            </div>

            <div class="my-3">
                <label for="name">Nama</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nama" value="<?= $row['nama'] ?>">
            </div>

            <div class="my-3">
                <label for="dob">Tanggal Lahir</label>
                <input type="date" name="dob" id="dob" class="form-control" placeholder="Tanggal Lahir" value="<?= $row['tgl_lahir'] ?>">
            </div>

            <div class="my-3">
                <label for="phone">Nomor Telepon</label>
                <input type="tel" name="phone" id="phone" class="form-control" placeholder="Nomor Telepon" value="<?= $row['no_telpon'] ?>">
            </div>

            <?php if ($row['status'] === 1) : ?>
                <div class="form-check">
                    <input type="radio" name="status" id="active" class="form-check-input" value="1" checked="checked">
                    <label for="active">Aktif</label>
                </div>

                <div class="form-check">
                    <input type="radio" name="status" id="inactive" class="form-check-input" value="0">
                    <label for="inactive">Non Aktif</label>
                </div>
            <?php else : ?>
                <div class="form-check">
                    <input type="radio" name="status" id="active" class="form-check-input" value="1">
                    <label for="active">Aktif</label>
                </div>

                <div class="form-check">
                    <input type="radio" name="status" id="inactive" class="form-check-input" value="0" checked="checked">
                    <label for="inactive">Non Aktif</label>
                </div>
            <?php endif ?>

            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="./mahasiswa.php" class="btn btn-danger">Kembali</a>
        </form>
    </div>

    <?php $conn->close() ?>
</body>

</html>