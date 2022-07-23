<?php
    $a = $_GET['nilaiA'];
    $b = $_GET['nilaiB'];
    $c = sqrt(($a*$a)+($b*$b));
 
    echo "<b>Hasil Form</b><br>";
    echo "Nilai A :  &nbsp; ".$a."<br>";
    echo "Nilai B :  &nbsp; ".$b."<br>";
    echo "Nilai C :  &nbsp; <b>".$c."</b>";
?>