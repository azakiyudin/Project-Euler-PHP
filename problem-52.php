<?php
function permut($a,$b){
    $in1 = str_split($a);
    $in2 = str_split($b);
    sort($in1);
    sort($in2);
    if($in1 == $in2){
        return true;
    } else {
        return false;
    }
}
$x = 0;
    for($i=1000000;$i<1666667;$i++){
        $a = 2*$i;
        $b = 3*$i;
        $c = 4*$i;
        $d = 5*$i;
        $e = 6*$i;
        if(permut($i,$a) && permut($i,$b) && permut($i,$c) && permut($i,$d) && permut($i,$e)){
            $x++;
            echo "i = $i";
        }
    }
?>