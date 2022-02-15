<?php
function fac($n){
    if($n>0){
        return $n*fac($n-1);
    } else {
        return 1;
    }
}
function com($n,$r){
    return fac($n)/(fac($r)*fac($n-$r));
}
$tot = 0;
for($n=1;$n<=100;$n++){
    for($r=1;$r<=$n;$r++){
        if(com($n,$r)>1000000){
            $tot++;
        }
    }
}
echo $tot;
?>