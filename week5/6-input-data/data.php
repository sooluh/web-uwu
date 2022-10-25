<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
</head>

<body>
    <?php
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $tgl = $_POST['tgl'];
    ?>
    <center>
        <form action="home.php">
            <table>
                <tr>
                    <td colspan="3">
                        <center>
                            <h1>Data</h1>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                        <?php echo $nama ?>
                    </td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>
                        <?php echo $nim ?>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        <?php echo $tgl ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <center>
                            <input type="submit" value="Home">
                        </center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>