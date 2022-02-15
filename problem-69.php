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
$prime = array(2,3);
$x=2;
for($i=5;$i*$i<1000000;$i+=6){
    if(prime($i)){
        $prime[$x]=$i;
        $x++;
    }
    if(prime($i+2)){
        $prime[$x]=$i+2;
        $x++;
    }
}
function facprim($n){
    global $prime;
    $y=0;
    $p = array();
    for($i=0;$i<count($prime);$i++){
        if(($n%$prime[$i])==0){
            $p[$y] = $prime[$i];
            $y++;
        }
    }
    return $p;
}
$big = 5.21354;
$nmax = 30030;
for($i=100000;$i<=1000000;$i++){
    if(!prime($i)){
    $pr = facprim($i);
    $prod = 1;
    for($j=0;$j<count($pr);$j++){
        $prod = $prod*$pr[$j]/($pr[$j]-1);
    }
    if($prod>$big){
        $big = $prod;
        $nmax = $i;
    }
}
}
echo $big;
echo "<br> $nmax";
?>