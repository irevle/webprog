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
    <p>[<a href="./tambah.php">Tambah Transaksi</a>]</p>
    <p>[<a href="./setting.php">Setting</a>]</p>
    <hr>
    <?php
        if(isset($_COOKIE['roti'])) {
            $cookie = json_decode($_COOKIE['roti'], true);
            $arah = '';
            if (isset($_COOKIE['arah'])){
                $arah = $_COOKIE['arah'];
            }
            ksort($cookie);
            if ($arah == 'descend')
                {
                    $descend = [];
                    foreach ($cookie as $key => $value)
                    {
                        $descend = [$key => $value] + $descend;
                    }
                    $cookie = $descend;
                }
            echo "<ul>";
            foreach ($cookie as $key => $value) {
                echo "<li>" . $key . " - Rp. " . $value . "</li>";
            }
            echo "</ul>";
        }
    ?>
</body>
</html>