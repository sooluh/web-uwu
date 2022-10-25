<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
</head>

<body>
    <center>
        <form action="data.php" method="POST">
            <table>
                <tr>
                    <td colspan="3">
                        <center>
                            <h1>Input Data</h1>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama">
                    </td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nim">
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tgl">
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <center>
                            <input type="submit" value="Submit">
                        </center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>