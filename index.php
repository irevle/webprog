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
    <!-- <?php
        if(isset($_COOKIE["roti"])){
            $roti = $_COOKIE["roti"];
        // echo "Isi Cookie = " .$roti;
        }
    ?> -->
    <form action="./tambah.php" method="POST">
        <p>[<a href="./tambah.php">Tambah Transaksi</a>]</p>
    </form>
    <form action="./setting.php" method="post">
        <p>[<a href="./setting.php">Setting</a>]</p>
    </form>
    <hr>
    <?php
    echo "<ul>";
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $arrayData = array();
            if(isset($_POST["tanggal"]) && isset($_POST["nominal"])) {
                $tanggal = $_POST["tanggal"];
                $nominal = $_POST["nominal"];
                $i = 0;
                foreach($tanggal as $value) {
                    $arrayData[$value] = $nominal[$i];
                    $i++;
                }
                // $array = !empty($_COOKIE['dataarray']) ? json_decode($_COOKIE['dataarray']) : $arrayData;
                // setcookie('dataarray', json_encode($array), time() + (86400 * 30));
                foreach ($arrayData as $key => $value) {
                    echo "<li>" . $key . " - Rp. " . $value . "</li>";
                }
            }
        }
        
    echo "</ul>";
    ?>
</body>
</html>