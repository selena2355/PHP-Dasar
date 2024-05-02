<?php
$days = array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
foreach ($days as $day) {
    echo $day . "<br>"; // Tambahkan spasi di antara setiap hari
}
echo ("<br>");
$day_num = date('w');
$day_indo = $days[$day_num];
echo "Hari ini adalah hari " . $day_indo;
?>
