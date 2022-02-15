<?php
function prime($n){
    if ($n==2 || $n==3){
        return true;
    }
    if ($n<=1 || $n%2==0 || $n%3==0){
        return false;
    }
    for($i=5;$i**2<=$n;$i+=6){
        if($n%$i==0 || $n%($i+2)==0){
            return false;
        }
    }
    return true;
}
function trunc($n){
    $lf = $n;
    $st = "$n";
    $x=strlen($st);
    while($n>0){
        $ne = $lf % (10**$x);
        if(!prime($n)){
            return false;
        }
        if(!prime($ne)){
            return false;
        }
        $n = (int)($n/10);
        $x--;
    }
    return true;
}
$sum = 0;
for($i=11;$i<1000000;$i+=6){
    if(trunc($i)){
        echo ($i) . "<br>";
        $sum = $sum + $i;
    }
    if (trunc($i+2)){
        echo ($i+2) . "<br>";
        $sum = $sum + $i+2;
    }
}
echo $sum;
?>