<?php
$urut = isset($_COOKIE['settingUrut']) ? $_COOKIE['settingUrut'] : 'tanggal'; // cek kalo cookie belum ada pake default, kalo udah yang sudaha ada
$arah = isset($_COOKIE['settingArah']) ? $_COOKIE['settingArah'] : 'ascend';
if(isset($_POST['urut'])){ //cek ada data gak yang dikirim dari form ni
    $urut = $_POST['urut']; //$_POST['urut'] diambil dari radio button
    $arah = $_POST['arah'];
    setcookie('settingUrut', $urut); //simpan data urut yang ditampung dari $_POST['urut'] kedalem cookie 
    setcookie('settingArah', $arah);
}
?>

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
    <h1>Setting</h1>


    <form action="./setting.php" method="POST">
        <label>Urut Berdasarkan :</label>
        <input type="radio" id="tanggal" name="urut" value="tanggal" <?php echo ($urut == 'tanggal') ? 'checked' : ''?>>
        <label for="tanggal">Tanggal</label>
        <input type="radio" id="nominal" name="urut" value="nominal" <?php echo ($urut == 'nominal') ? 'checked' : ''?>>
        <label for="nominal">Nominal</label>

        <br><br>

        <label>Arah :</label>
        <input type="radio" id="ascend" name="arah" value="ascend" <?php echo ($arah == 'ascend') ? 'checked' : ''?>>
        <label for="ascend">Ascending</label>
        <input type="radio" id="descend" name="arah" value="descend" <?php echo ($arah == 'descend') ? 'checked' : ''?>> 
        <label for="descend">Descending</label>

        <br><br>

        <input type="submit" value="Simpan">

        <br><br>

        <a href="./index.php">&lt;&lt; Kembali</a>
    </form>
</body>
</html>
