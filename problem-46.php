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
$list = array(2,3);
$x=2;
for($i=5;$i<5000;$i+=2){
    if(prime($i)){
        $list[$x] = $i;
        $x++;
    }
}
$comp = array();
$x2 = 0;
for($i=9;$i<6000;$i+=2){
    if(!prime($i)){
        $comp[$x2] = $i;
        $x2++;
    }
}
for($a=0;$a<count($comp);$a++){
    $con = 0;
    $bo = 0;
    for($b=0;$b<count($list);$b++){
        for($n=0;2*$n*$n<$comp[$a];$n++){
            $compos = $comp[$a];
            $sum = $list[$b] + 2*$n*$n;
            if($compos == $sum){
                $con++;
                $bo = $list[$b];
            }
        }
    }
    if($con == 0){
        echo $comp[$a];
        echo "<br>";
    }
}
?>