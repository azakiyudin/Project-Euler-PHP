<?php
function fpb($pemb,$peny){
    if($peny==0){
        return $pemb;
    } else{
        return fpb($peny,$pemb%$peny);
    }
}
$x=4103182;
for($d=9000;$d<=12000;$d++){
    $n=1;
    while($n<$d){ 
        if(fpb($n,$d) == 1){
        if((($n/$d)<(1/2)) && (($n/$d) > (1/3))){
        #echo "$n/$d <br>";
        $x++;
        }
    }
    $n++;
    }
}
echo $x;
?>