<?php
function fpb($pemb,$peny){
    if($peny==0){
        return $pemb;
    } else{
        return fpb($peny,$pemb%$peny);
    }
}
function simp($a,$b){
    $x = $a/fpb($a,$b);
    $y = $b/fpb($a,$b);
    return "$x/$y";
}
function sum($a,$b,$c,$d){
    $x = $a*$d+$b*$c;
    $y = $b*$d;
    return simp($x,$y);
}
function div($a,$b,$c,$d){
    $x=$a*$d;
    $y=$b*$c;
    return simp($x,$y);
}
echo sum(1,1,2,5);
?>