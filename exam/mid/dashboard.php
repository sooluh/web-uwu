<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
</head>

<body>
    <div class="bg-primary text-white text-center p-3 text-uppercase">
        <h1>Dashboard Admin</h1>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link active">Active</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Link</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Link</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link disabled">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container my-5">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" class="active" data-bs-target="#carousel" data-bs-slide-to="0"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="2"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/img/1.jpg" alt="Lorem ipsum" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="./assets/img/2.jpg" alt="Lorem ipsum" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="./assets/img/3.jpg" alt="Lorem ipsum" class="d-block w-100">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <div class="row mt-5">
            <div class="col-md-3">
                <h3>Menu</h3>

                <nav class="nav flex-column nav-pills me-3">
                    <a href="#" class="nav-link active">Active</a>
                    <a href="#" class="nav-link">Link</a>
                    <a href="#" class="nav-link">Link</a>
                    <a href="#" class="nav-link disabled">Disabled</a>
                </nav>
            </div>

            <div class="col-md-9 mt-3 mt-md-0">
                <h2>Biodata Admin</h2>
                <p>
                    Nama : Suluh Sulistiawan<br>
                    NIM : 211351143<br>
                    Hobi : Baca Qur'an<br>
                </p>
            </div>
        </div>
    </div>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>