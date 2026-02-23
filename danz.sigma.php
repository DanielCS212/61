<?php

$hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
$tanggal = range(1, 31);
$bulan = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"];
$tahun = [2024, 2025, 2026];


$hasilHari = "";
for ($i = 0; $i < count($hari); $i++) {
    if ($hari[$i] == "Senin") {
        $hasilHari = $hari[$i];
        break;
    }
}


$hasilTanggal = "";
foreach ($tanggal as $tgl) {
    if ($tgl == 10) {
        $hasilTanggal = $tgl;
        break;
    }
}


$hasilBulan = "";
$i = 0;
while ($i < count($bulan)) {
    if ($bulan[$i] == "Mar") {
        $hasilBulan = $bulan[$i];
        break;
    }
    $i++;
}


$hasilTahun = "";
$i = 0;
do {
    if ($tahun[$i] == 2025) {
        $hasilTahun = $tahun[$i];
        break;
    }
    $i++;
} while ($i < count($tahun));


echo "Tanggal Lengkap: $hasilHari, $hasilTanggal - $hasilBulan - $hasilTahun";
?>
