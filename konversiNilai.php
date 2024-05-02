<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai</title>
</head>
<body>
    <h2>Konversi Nilai Angka ke Huruf</h2>

    <form method="post">
        <label for="nilai">Masukkan nilai angka:</label>
        <input type="number" id="nilai" name="nilai" min="0" max="100" required>
        <button type="submit">Lihat Nilai</button>
    </form>

    <?php
        if (isset($_POST["nilai"])) {
            // Mendapatkan nilai angka dari formulir
            $nilai = $_POST["nilai"];

            // Konversi nilai angka ke huruf sesuai aturan
            if ($nilai >= 0 && $nilai <= 59) {
                $nilaiHuruf = "C";
            } elseif ($nilai >= 60 && $nilai <= 69) {
                $nilaiHuruf = "BC";
            } elseif ($nilai >= 70 && $nilai <= 79) {
                $nilaiHuruf = "B";
            } elseif ($nilai >= 80 && $nilai <= 89) {
                $nilaiHuruf = "AB";
            } elseif ($nilai >= 90 && $nilai <= 100) {
                $nilaiHuruf = "A";
            } else {
                $nilaiHuruf = "Nilai tidak valid";
            }

            // Menampilkan hasil konversi
            echo "<p>Nilai angka $nilai setara dengan nilai huruf : $nilaiHuruf</p>";
        }
    ?>
</body>
</html>
