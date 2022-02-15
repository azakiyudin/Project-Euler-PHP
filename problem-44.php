<?php
function cek($no){
    $n = (int)((1+sqrt(1+24*$no))/6);
    $pen = $n*(3*$n-1)/2;
    if($pen == $no){
        return true;
    } else {
        return false;
    }
}
$penta = array();
for($i=1;$i<8000;$i++){
    $penta[$i-1] = $i*(3*$i-1)/2;
}
$dif = 100000000;
for($a=0;$a<count($penta);$a++){
    for($b=$a+1;$b<count($penta);$b++){
        $sum = $penta[$a] + $penta[$b];
        $diff = $penta[$b] - $penta[$a];
        if(cek($sum) && cek($diff)){
            if($diff<$dif){
                $dif = $diff;
            }
        }
    }
}
echo $dif;
?>