<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Perulangan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            margin: 50px auto;
            width: 80%;
            text-align: center;
        }
        .pattern {
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Pattern Bintang</h2>
        <div class="pattern">
            <?php
            // Menentukan jumlah baris pola bintang yang ingin ditampilkan
            $baris = 10;

            // Loop untuk membuat pola bintang
            for ($i = 1; $i <= $baris; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
            ?>
        </div>
    </div>
</body>
</html>
