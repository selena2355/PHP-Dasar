<?php
    $t = date("H");
    echo "<br>If<br>";
    if($t < 16){
        echo "Selamat siang!";
    }

    $t = date("H");
    echo "<br> If dan Else <br>";
    if($t < 20){
        echo "Selamat siang!";
    }else {
        echo "Selamat malam!";
    }

    $t = date("H");
    echo "<br> Nested if <br>";
    if ($t < 8){
        echo "Selamat pagi!";
    }elseif ($t < 16){
        echo "Selamat sore!";
    }else {
        echo "Selamat malam!";
    }
?>