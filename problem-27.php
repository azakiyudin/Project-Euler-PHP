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
for($i=5;$i<1000;$i+=2){
    if(prime($i)){
        $list[$x] = $i;
        $x++;
    }
}
print_r($list);
function quad($a,$b){
    $n=1;
    $y = $b;
    $pr = $y;
    while(prime($y)){
        $pr = $y;
        $y = $n**2 + $a*$n + $b;
        $n++;
    }
    return $n-1;
}
$min = 0;
$n1 = 0;
$n2 = 0;
for($a=-1000;$a<=1000;$a++){
    for($b=0;$b<count($list);$b++){
        if(quad($a,$list[$b])>$min){
            $min = quad($a,$list[$b]);
            $n1 = $a;
            $n2 = $list[$b];
        }
    }
}
echo "<br>a = $n1; b = $n2; prime = $min";
$prod = $n1*$n2;
echo "<br>hasil kali = $prod";
?>