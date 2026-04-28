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
            $key = [];
            $value = [];

            foreach ($cookie as $k => $v) {
                $key[] = $k;
                $value[] = $v;
            }

            $urut = isset($_COOKIE['settingUrut']) ? $_COOKIE['settingUrut'] : 'tanggal';
            $arah = isset($_COOKIE['settingArah']) ? $_COOKIE['settingArah'] : 'ascend';
            echo "<ul>";

            if($urut == 'tanggal'){
                if($arah == 'ascend'){
                    for ($i = 0; $i < count($key); $i++) {
                        for ($j = 0; $j < count($key) - 1; $j++) {
                            if ($key[$j] > $key[$j+1]) { 
                            
                                $simpanKey = $key[$j];
                                $key[$j] = $key[$j+1];// tuker key nya biar jadi yang kecil tetep di kiri
                                $key[$j+1] = $simpanKey;
                            
                                $simpanValue = $value[$j];// tuker value nya
                                $value[$j] = $value[$j+1];
                                $value[$j+1] = $simpanValue;
                            
                            }
                        }
                    }
                }
                else{ //urutin sesuai descending tanggal
                    for ($i = 0; $i < count($key); $i++) {
                        for ($j = 0; $j < count($key) - 1; $j++) {
                            if ($key[$j] < $key[$j+1]) { 
                            
                                $simpanKey = $key[$j];
                                $key[$j] = $key[$j+1];// tuker key nya biar jadi yang kecil tetep di kanan
                                $key[$j+1] = $simpanKey;
                            
                                $simpanValue = $value[$j];// tuker value nya
                                $value[$j] = $value[$j+1];
                                $value[$j+1] = $simpanValue;
                            
                            }
                        }
                    }
                }
            }

            else{ //urutin sesuai nominal
                if($arah == 'ascend'){
                    for ($i = 0; $i < count($value); $i++) {
                        for ($j = 0; $j < count($value) - 1; $j++) {
                            if ($value[$j] > $value[$j+1]) { 
                            
                                $simpanValue = $value[$j];
                                $value[$j] = $value[$j+1];// tuker value nya biar jadi yang kecil tetep di kiri
                                $value[$j+1] = $simpanValue;
                            
                                $simpanKey = $key[$j];// tuker key nya
                                $key[$j] = $key[$j+1];
                                $key[$j+1] = $simpanKey;
                            
                            }
                        }
                    }
                }
                else{ // urutin sesuai descending nominal
                    for ($i = 0; $i < count($value); $i++) {
                        for ($j = 0; $j < count($value) - 1; $j++) {
                            if ($value[$j] < $value[$j+1]) { 
                            
                                $simpanValue = $value[$j];
                                $value[$j] = $value[$j+1];// tuker value nya biar jadi yang kecil tetep di kiri
                                $value[$j+1] = $simpanValue;
                            
                                $simpanKey = $key[$j];// tuker key nya
                                $key[$j] = $key[$j+1];
                                $key[$j+1] = $simpanKey;
                            
                            }
                        }
                    }
                }
            }
            
            for ($i = 0; $i < count($key); $i++) {
                echo "<li>" . $key[$i] . " - Rp. " . $value[$i] . "</li>";
                
            }
            echo "</ul>";
        }
    ?>
</body>
</html>