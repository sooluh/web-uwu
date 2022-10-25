<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard User</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-3">
        <h3>Dashboard Admin</h3>
        <a href="login.php" class="btn btn-primary">Logout</a>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            Input Data Barang
        </button>
    </div>

    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Input Data Barang</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form action="#" method="POST">
                    <div class="modal-body">
                        <div class="mb-3 mt-3">
                            <label for="kd">Kode Barang:</label>
                            <input type="text" name="kd_brg" id="kd" class="form-control" placeholder="Input kode barang">
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="nama">Nama Barang:</label>
                            <input type="text" name="nama_brg" id="nama" class="form-control" placeholder="Input nama barang">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>