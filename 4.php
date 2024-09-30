<?php

/*for ($a = 10;  $a >=1;  $a-- ) {
    echo "$a x 1 =" . ($a *1) . "<br>";
}

for($y = 10;  $y >=1;  $y--) {
    echo "$y x 2 =" . ($y *2) . "<br>";
}*/



    for ($a = 1; $a <= 2; $a++) {
        for ($b = 10; $b >= 1; $b--) {
            $h = $a * $b;
            echo "$a x $b = $h <br>";
        }
        echo "<br>";
    }


?>