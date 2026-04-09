<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project UTS!</title>
    <style>
        body {
            background-color: white;
            font-family: 'Courier New', Courier, monospace;

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
    <h1>Setting</h1>


    <form action="./setting.php" method="POST">
        <label>Urut Berdasarkan :</label>
        <input type="radio" id="tanggal" name="urut" value="tanggal">
        <label for="tanggal">Tanggal</label>
        <input type="radio" id="nominal" name="urut" value="nominal">
        <label for="nominal">Nominal</label>

        <br><br>

        <label>Arah :</label>
        <input type="radio" id="ascend" name="arah" value="ascend">
        <label for="ascend">Ascending</label>
        <input type="radio" id="descend" name="arah" value="descend">
        <label for="descend">Descending</label>

        <br><br>

        <input type="submit" value="Simpan">

        <br><br>

        <a href="./index.php">&lt;&lt; Kembali</a>
    </form>
</body>
</html>
