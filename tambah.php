<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project UTS!</title>
    <style>
        body {
            background-color: white;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

            a:link {
                text-decoration: none;
                color: blue;
            }

            a:visited {
                text-decoration: none;
                color: blue;
            }
        }
    </style>
</head>
<body>
    <?php if (isset($_GET["tanggal"]) && isset($_GET["nominal"])) {
        $tanggal = strtotime($_GET["tanggal"]);
        $nominal = $_GET["nominal"];
        // TODO
    } ?>


    <h1>Tambah Transaksi</h1>
    <form action="./tambah.php" method="post">
        <label for="tanggal">Tanggal</label>
        <input type="date" name="tanggal" value="tanggal">

        <br><br>

        <label for="nominal">Nominal</label>
        <input type="number" name="nominal" value="nominal">

        <br><br>

        <input type="submit" value="Simpan">

        <br><br>

        <a href="./index.php">&lt;&lt; Kembali</a>
    </form>

</body>
</html>
