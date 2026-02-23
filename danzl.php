 <?php

     echo "<h3> kasus 1 :</h3>";

    $hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
    $tanggal = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31];
    $bulan = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"];
    $tahun = [2024, 2025, 2026];


    echo "<h3>Hari:</h3>";
    foreach ($hari as $h) {
        echo $h . "<br>";
    }


    echo "<h3>Tanggal:</h3>";
    foreach ($tanggal as $t) {
        echo $t . "<br>";
    }

    echo "<h3>Bulan:</h3>";
    foreach ($bulan as $b) {
        echo $b . "<br>";
    }


   
    echo "$hari[1] - $tanggal[9] - $bulan[2]";


    //kasus 2 :
    echo "<h3>Kasus 2:</h3>";


 ?>
