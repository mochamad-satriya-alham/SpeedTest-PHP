<?php
$data = [80, 90, 100, 85, 100, 66];
$cari = 100;


    $jumlah = 0;

    foreach ($data as $angka) {
        if ($angka == $cari) {
            $jumlah++;
        }
    }
echo "Jumlah angka $cari = $jumlah";
?>