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
$list = array();
$x=0;
for($i=1009;$i<10000;$i+=2){
    if(prime($i)){
        $list[$x] = $i;
        $x++;
    }
}
for($i=0;$i<count($list);$i++){
    $a = $list[$i];
    for($j=$i+1;$j<count($list);$j++){
        $b = $list[$j];
        for($k=$j+1;$k<count($list);$k++){
            $c = $list[$k];
            if($c-$b == $b-$a && $c-$b !=0){
                if(permut($a,$b) && permut($b,$c)){
                    echo "a=$a, b=$b, c=$c <br>";
                    echo $a . $b . $c;
                }
            }
        }
    }
}
?>