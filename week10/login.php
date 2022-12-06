<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container p-5 my-5 bg-info">
        <h4>FORM LOGIN</h4>
        <form action="validasi.php" method="POST">
            <div class="form-floating my-3">
                <input type="text" name="user" id="user" class="form-control" placeholder="Username">
                <label for="user">User</label>
            </div>
            <div class="form-floating my-3">
                <input type="password" name="pass" id="pass" class="form-control" placeholder="Password">
                <label for="pass">Password</label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>

</html>