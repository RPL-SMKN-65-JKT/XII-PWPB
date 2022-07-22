<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pythagoras</title>
</head>
<body style="margin: 10%; padding: 60px 40px 60px 40px;">
<fieldset style="background: #EDDFB3; background-size: cover; background-attachment: fixed; margin: 20px; padding: 10px 40px 20px 40px;">
   <h1 style="text-align: center;">&nbsp;Phytagoras Hitung Nilai C</h1>
       <?php
    $a = $_GET['nilaiA'];
    $b = $_GET['nilaiB'];
    $c = sqrt(($a*$a)+($b*$b));
 
    echo "<b>Hasil Form</b><br>";
    echo "Nilai A :  &nbsp; ".$a."<br>";
    echo "Nilai B :  &nbsp; ".$b."<br>";
    echo "Nilai C :  &nbsp; <b>".$c."</b>";
?>
   </fieldset>
</body>
</html>
