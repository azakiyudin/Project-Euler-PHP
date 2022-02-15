<?php
$abundant;
$y=0;
for($n=12;$n<18123;$n++){
    $pembagi = array();
    $pembagi[0] = 1;
    $x=1;
    for($i=2; $i*$i<=$n; $i++){
        if($n%$i==0){
            $pembagi[$x] = $i;
            if($n != $i*$i){
                $pembagi[$x+1] = $n/$i;
                $x++;
            }
            $x++;
        }
    }

    if(array_sum($pembagi)>$n){
        $abundant[$y] = $n;
        $y++;
    }
    unset($pembagi);
}
$z=0;
$num = array();
for($i=0;$i<count($abundant);$i++){
    for($j=0;$j<count($abundant);$j++){
        $no = $abundant[$i] + $abundant[$j];
        if($no != $num[array_search($no,$num)]){
            $num[$z] = $no;
            $z++;
        }
    }
}
?>