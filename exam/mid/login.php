<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
</head>

<body>
    <div class="container">
        <div class="p-5 my-5 bg-primary rounded rounded-4 text-white text-center" id="header">
            <h2>UTS Pemrograman Web</h2>
            <h2>Nama : Suluh Sulistiawan</h2>
            <h2>NIM : 211351143</h2>
        </div>

        <div class="p-5 my-5 bg-info rounded rounded-4">
            <div class="row justify-content-center">
                <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                    <img class="logo" src="./assets/img/wastu.png" alt="STT Wastukancana">
                </div>

                <div class="col-md-5">
                    <form action="./validasi.php" method="POST">
                        <h4 class="text-uppercase mb-3 text-center text-md-start">
                            Form Login
                        </h4>

                        <div class="form-floating mb-3">
                            <input type="text" name="user" id="user" class="form-control" placeholder="User">
                            <label for="user">User</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            <label for="password">Password</label>
                        </div>

                        <button type="submit" class="btn btn-lg btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>