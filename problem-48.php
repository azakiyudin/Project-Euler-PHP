<?php
$p = 10000000000;
#x^x
$sum = 0;
for($n=1;$n<=1000;$n++){
$x = $n;
$y = $n;
while($y>1){
    $x = ($x*$n)%$p;
    $y--;
}
$sum = ($sum%$p +$x%$p);
}
echo $sum;
?>