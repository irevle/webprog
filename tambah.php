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
    <h1>Tambah Transaksi</h1>
    <form action="" method="post">
        <label for="tanggal">Tanggal</label>
        <input type="date" name="tanggal">

        <br><br>

        <label for="nominal">Nominal</label>
        <input type="number" name="nominal">

        <br><br>

        <button type="submit">Submit</button>

        <br><br>

    </form>
    <a href="./index.php">&lt;&lt; Kembali</a>
    
    <?php
    $data;
    $cookie;
    
    if (isset($_COOKIE['roti'])) {
        $cookie = json_decode($_COOKIE['roti'], true);
    }
    
    if (isset($_POST['tanggal']) && isset($_POST['nominal'])){
        $tanggal = $_POST["tanggal"];
        $nominal = $_POST["nominal"];
        $data[$tanggal] = $nominal;
        
        if (isset($_COOKIE['roti']))
        {
        foreach ($cookie as $key => $value) {
            if ($key != $tanggal){
            $data[$key] = $value;
            }
        }
        }
        setcookie('roti', json_encode($data), time()+ (86400 * 30));
    }
    ?>
</body>
</html>
