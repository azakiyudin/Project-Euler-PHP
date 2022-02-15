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
function pair($a,$b){
    $new = "$a". "$b";
    $new2 = "$b" . "$a";
    $i1 = (int)$new;
    $i2 = (int)$new2;
    if(!prime($i1)||!prime($i2)){
        return false;
    }
    return true;
}
$x=1;
$cek = array();
$cek[0] = 3;
for($i=1;$i<=5000;$i++){
    $p1 = 6*$i-1;
    $p2 = $p1+2;
    if(prime($p1)){
        $cek[$x] = "$p1";
        $x++; 
    }if(prime($p2)){
        $cek[$x] = "$p2";
        $x++;
    }
}
$set = array();
for($a=0;$a<count($cek);$a++){
    for($b=$a+1;$b<count($cek);$b++){
        if(pair($cek[$a],$cek[$b])){
            for($c=$b+1;$c<count($cek);$c++){
                if(!pair($cek[$a],$cek[$c]) || !pair($cek[$b],$cek[$c])){
                    continue;
                } else {
                    for($d=$c+1;$d<count($cek);$d++){
                        if(!pair($cek[$a],$cek[$d]) || !pair($cek[$b],$cek[$d]) || !pair($cek[$c],$cek[$d])){
                            continue;
                        } else {
                            for($e=$d+1;$e<count($cek);$e++){
                                if(!pair($cek[$a],$cek[$e]) || !pair($cek[$b],$cek[$e]) || !pair($cek[$c],$cek[$e]) || !pair($cek[$d],$cek[$e])){
                                    continue;
                                }
                                else{
                                    echo "new a = " . $cek[$a] . ";b = " . $cek[$b] . ";c = " . $cek[$c] . ";d = " . $cek[$d] . ";e = " . $cek[$e] . "<br>";
                                    $sum = $cek[$a] + $cek[$b] + $cek[$c] + $cek[$d] + $cek[$e];
                                    echo "sum = $sum <br>";
                                }
                            }
                        }
                    }
                }
            }
        } 
    }
}
?>