<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Terbilang</title>
</head>
<body>
    <h2>Konversi Angka ke Terbilang</h2>

    <form method="post">
        <label for="angka">Masukkan angka (1-9):</label>
        <input type="number" id="angka" name="angka" min="1" max="9" required>
        <button type="submit">Konversi</button>
    </form>

    <?php
        // Periksa apakah ada data yang dikirim melalui POST
        if (isset($_POST["angka"])) {
            // Mendapatkan angka dari formulir
            $angka = $_POST["angka"];

            // Konversi angka ke terbilang menggunakan switch
            switch ($angka) {
                case 1:
                    $terbilang = "Satu";
                    break;
                case 2:
                    $terbilang = "Dua";
                    break;
                case 3:
                    $terbilang = "Tiga";
                    break;
                case 4:
                    $terbilang = "Empat";
                    break;
                case 5:
                    $terbilang = "Lima";
                    break;
                case 6:
                    $terbilang = "Enam";
                    break;
                case 7:
                    $terbilang = "Tujuh";
                    break;
                case 8:
                    $terbilang = "Delapan";
                    break;
                case 9:
                    $terbilang = "Sembilan";
                    break;
                default:
                    $terbilang = "Angka tidak valid";
            }

            // Menampilkan hasil konversi
            echo "<p>Angka $angka dikonversi menjadi: $terbilang</p>";
        }
    ?>
</body>
</html>
