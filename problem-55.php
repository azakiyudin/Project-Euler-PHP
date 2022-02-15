<?php
function rev($n){
    $new = "$n";
    $new2 = (int)(strrev($new));
    return $new2;
}
function palindrom($n){
    if($n == rev($n)){
        return true;
    } else{
        return false;
    }
}
$xx=0;
for($a=1;$a<=10000;$a++){
    $aa = $a;
    $p = 50;
    while($p>0){
        $x = $aa + rev($aa);
        $aa = $x;
        $p--;
        if(palindrom($x)){
            break;
        }
    }
    if($p == 0){
        $xx++;
        echo "a = $a <br>";
    }
}
echo "total = $xx";
?>