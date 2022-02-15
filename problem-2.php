<?php
$f1 = 0;
$f2 = 1;
$sum = 0;
$n = 0;
while ($f1<4000000){
    $n++;
    $f3 = $f1 + $f2;
    $f2 = $f1;
    $f1 = $f3;
    if($f3 %2 == 0){
        echo "fibbonaci ke- $n adalah $f3 <br>";
        echo "$sum + $f3 = " . ($sum+$f3) . "<br>";
        $sum = $sum + $f3;
    }
}
echo "jumlahnya adalah $sum";
?>