<?php
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$banding = array_intersect($bil1, $bil2);

$Beda = array_merge(array_diff($bil1, $bil2), array_diff($bil2, $bil1));

$banding1 = implode(',', $banding);
$beda = implode(',', $Beda);


echo "Bilangan yang ada di kedua variable:";
echo "</br>";
echo $banding1;
echo "</br>"; 
echo "Bilangan yang hanya ada di salah satu variable:";
echo "</br>";
echo $beda;

