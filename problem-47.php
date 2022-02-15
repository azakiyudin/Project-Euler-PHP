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

function facprim($n){
    $prime = array();
    $x=0;
    for($i=2;$i<1000;$i++){
        if(prime($i)){
            $prime[$x]=$i;
            $x++;
        }
    }
    $y=0;
    for($i=0;$i<count($prime);$i++){
        if(($n%$prime[$i])==0){
            $y++;
        }
    }
    return $y;
}
for($i=80000;$i<150000;$i++){
    $b = $i+1;
    $c = $b+1;
    $d = $c+1;
    if(facprim($i) == 4 && facprim($b) == 4 && facprim($c) == 4 && facprim($d) == 4){
        echo "$i $b $c $d";
        break;
    }
}
?>