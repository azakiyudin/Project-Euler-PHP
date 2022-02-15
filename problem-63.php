<?php
function npow($n){
    $i=1;
    $y=0;
    while($i**$n<10**$n){
        if($i**$n>=10**($n-1)){
            $y++;
        }
        $i++;
    }
    return $y;
}
$sum = 0;
for($x=1;$x<21;$x++){
    $sum = $sum + npow($x);
    echo "x = $x; " . npow($x) . "<br>";
}
echo $sum;
?>
