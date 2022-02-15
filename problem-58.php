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
$x=2;
$c=9;
$prime = 3;
while($prime/(2*$x+1)>(1/10)){
    $x+=2;
    for($j=0;$j<3;$j++){
        $c+=$x;
        if(prime($c)){
            $prime++;
        }
    }
    $c+=$x;
}
echo $x;
?>