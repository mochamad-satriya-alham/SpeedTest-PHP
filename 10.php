<?php  
    $dataUsia = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];
    $jumlahDewasa = 0;
    $jumlahAnakAnak = 0;

    foreach ($dataUsia as $usia) {
        if ($usia >= 17) {
            $jumlahDewasa++;
        } else {
            $jumlahAnakAnak++;
        }
    }

    echo "List Usia: " . implode(", ", $dataUsia) . "<br>";
    echo "Jumlah Kategori Dewasa: " . $jumlahDewasa . "<br>";
    echo "Jumlah Kategori Anak-Anak: " . $jumlahAnakAnak . "<br>";
?>