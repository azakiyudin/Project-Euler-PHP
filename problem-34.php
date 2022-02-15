<?php
function fac($n){
    if($n>1){
        return $n*fac($n-1);
    } else {
        return 1;
    }
}
$tot = 0;
for($i=3;$i<=4000000;$i++){
    $t = 0;
    $num = (int) $i;
    while($num>0){
        $j = $num % 10;
        $num = (int) ($num/10);
        $t = $t + fac($j);
        if($t>10*$i){
            break;
        }
    }
    #echo "i = $i; t = $t <br>";
    if($t == $i){
        $tot = $tot + $i;
        echo $i;
        echo "<br>";
    }
}
echo $tot;
?>