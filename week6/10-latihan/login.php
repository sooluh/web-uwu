<!DOCTYPE html>
<html>

<head>
    <title>Form Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container p-5 my-5 bg-info">
        <h4>FORM LOGIN</h4>
        <form action="validasi.php" method="post">
            <div class="form-floating my-3">
                <input type="text" name="user" id="user" class="form-control" placeholder="Username">
                <label for="user">User</label>
            </div>

            <div class="form-floating mt-3 mb-3">
                <input type="password" name="pass" id="pwd" class="form-control" placeholder="Password">
                <label for="pwd">Password</label>
            </div>

            <button type="submit" class="btn btn-primary">
                Login
            </button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>