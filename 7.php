<?php
    $name1 = "satriya alham";
    $name2 = "pandu";

   //menghitung panjang string
    $selisih1 = strlen($name1);
    $selisih2 = strlen($name2);

if ($selisih1 > $selisih2) {
    $total = $selisih1 - $selisih2;
    echo "$name1 memiliki jumlah karakter lebih banyak dari $name2 : selisihnya $total karakter";
    } elseif ($selisih2 > $selisih1) {
    $total2 = $selisih2 - $selisih1;
    echo "$name2 memiliki jumlah karakter lebih banyak dari $name1 : selisihnya $total2 karakter";
    } else {
    echo "Kedua nama memiliki jumlah karakter yang sama";
    }

?>