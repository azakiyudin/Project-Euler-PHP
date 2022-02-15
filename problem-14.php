<?php
function collatz($n){
    $sum = 1;
    while($n!=1){
        if ($n%2==0){
            $n=$n/2;
        } else {
            $n=3*$n+1;
        }
        $sum++;
    }
    return $sum;
}
$cek = 0;
$num = 0;
for($i=100000;$i<1000000;$i++){
    #$col[$i] = collatz($i); 
    if(collatz($i)>$cek){
        $cek = collatz($i);
        $num = $i;
    }
}
echo $num . "<br>";
echo $cek;
?>